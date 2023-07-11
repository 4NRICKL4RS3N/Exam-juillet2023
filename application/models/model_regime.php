<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class model_regime extends CI_Model 
{
    public function getAllPlat()
    {
        $this->load->database();
        $sql = "select * from plat";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getConstitutionRegime($idRegime)
    {
        $this->load->database();
        $result = array();
        // $sql = "select * from constitution_regime where id_regime = ".$idRegime;
        $sql = "select cr.id_regime,p.plat from constitution_regime cr right join plat p on p.id_plat = cr.id_plat where cr.id_regime=".$idRegime;
        $query = $this->db->query($sql);
        $result[] = $query->result_array();
        $sql = "select cr.id_regime,s.nom,s.quantite from constitution_regime cr right join sport s on s.id_s = cr.id_s where cr.id_regime=".$idRegime;
        $query = $this->db->query($sql);
        $result[] = $query->result_array();
        return $result;
    }

    public function getApportParPlat()
    {
        $this->load->database();
        $sql = "select * from apportPrixParPlat order by apport asc";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getPlatParType($type)
    {
        $listPlat = $this->model_regime->getApportParPlat();
        $list = array();
        if ($type == "gain") {
            for ($i=0; $i < count($listPlat); $i++) { 
                if ($listPlat[$i]['apport'] > 0) {
                    $list[] = $listPlat[$i];
                }
            }
            return $list;     
        }
        elseif ($type == "perte") {
            for ($i=0; $i < count($listPlat); $i++) { 
                if ($listPlat[$i]['apport'] < 0) {
                    $list[] = $listPlat[$i];
                }
            } 
            return $list;
        }
    }

    public function sumApportPlat($list)
    {
        $somme = 0;
        foreach ($list as $lists) {
            if ($lists['apport'] < 0) {
                $somme = $somme + ($lists['apport']*(-1));
            }else {
                $somme = $somme + $lists['apport'];
            }
        }
        return $somme;
    }

    public function getApportSport() 
    {
        $this->load->database();
        $sql = "select * from sport";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function getSportParType($type) {
        $listeSport = $this->model_regime->getApportSport();
        $list = array();
        if ($type == "gain") {
            for ($i=0; $i < count($listeSport); $i++) { 
                if ($listeSport[$i]['apport'] > 0) {
                    $list[] = $listeSport[$i];
                }
            }
        }
        if ($type == "perte") {
            for ($i=0; $i < count($listeSport); $i++) { 
                if ($listeSport[$i]['apport'] < 0) {
                    $list[] = $listeSport[$i];
                }
            }
        }
        return $list;
    }

    public function suggestionPlat($type,$poids)
    {
        $regime = array();
        $regime[0] = array();
        $regime[1] = array();

        $listPlat = $this->model_regime->getPlatParType($type);
        // var_dump($listPlat);
        $listSport = $this->model_regime->getSportParType($type);
        // var_dump($listSport);
        if ($poids < 0) {
            $poids = $poids*(-1);
        }
        echo $poids;
        $total = 0;
        $i = 0;
        while ($total < $poids) {
            $platApport = $listPlat[$i%count($listPlat)]['apport'];
            if ($listPlat[$i%count($listPlat)]['apport'] < 0) {
                $platApport = $listPlat[$i%count($listPlat)]['apport']*(-1);
            }
            $sportApport = $listSport[$i%count($listSport)]['apport'];
            if ($listSport[$i%count($listSport)]['apport'] < 0) {
                $sportApport = $listSport[$i%count($listSport)]['apport']*(-1);
            }
            $total = $total + $platApport + $sportApport;
            $regime[0][] = $listPlat[$i%count($listPlat)];
            $regime[1][] = $listSport[$i%count($listSport)];
            // echo "iP=".$i%count($listPlat)."<br>";
            // echo "iS=".$i%count($listSport)."<br>";
            $i++;
        }
        return $regime;
    }

    public function getRegimeNextIncrement() {
        $this->load->database();
        $sql = "select AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA = 'regime' and TABLE_NAME = 'regime'";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result['AUTO_INCREMENT'];
    }

    public function insertRegime($lisRegime, $user) {
        $this->load->database();
        $increment = $this->model_regime->getRegimeNextIncrement();
        $sql1 = "insert into regime values(%s, %s, curdate(), date_add(curdate(), interval %s day))";
        $sql1 = sprintf($sql1, $increment, $user['id_User'], count($lisRegime[0]));
        $this->db->query($sql1);
        
        for ($i=0; $i < count($lisRegime[0]); $i++) { 
            $sql2 = "insert into constitution_regime values (null, %s, %s, %s)";
            $sql2 = sprintf($sql2, $increment, $lisRegime[0][$i]['id_plat'], 'null');
            $this->db->query($sql2);
            $sql2 = "insert into constitution_regime values (null, %s, %s, %s)";
            $sql2 = sprintf($sql2, $increment, 'null', $lisRegime[1][$i]['id_S']);
            $this->db->query($sql2);
        }
        return $increment;
    }

}

?>