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

    // public function platParDuree($duree = null,$type)
    // {
    //     $listPlat = $this->model_regime->getPlatParType($type);
    //     $list = array();
    //     if ($duree != null) {
    //         for ($i=0; $i < $duree; $i++) { 
    //             $list[] = $listPlat[$i];
    //         }
    //         return $list;
    //     }else {
    //         for ($i=0; $i < count($listPlat); $i++) { 
    //             $list[] = $listPlat[$i];
    //         }
    //         return $list;
    //     }
    // }

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
        $listPlat = $this->model_regime->getPlatParType($type);
        $listSport = $this->model_regime->getSportParType($type);
        if ($poids < 0) {
            $poids = $poids*(-1);
        }
        $total = 0;
        $i = 0;
        while ($total < $poids) {
            
            $i++;
        }
        
    }

}

?>