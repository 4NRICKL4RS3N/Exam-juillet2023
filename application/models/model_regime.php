<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class model_regime extends CI_Model 
{
    public function getAllPlat()
    {
        $sql = "select * from plat";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getApportParPlat()
    {
       
        $sql = "select * from apportPrixParPlat order by apport asc";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getPlatParType($type)
    {
        $listPlat = $this->modele_regime->getApportParPlat();
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
    //     $listPlat = $this->modele_regime->getPlatParType($type);
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
        $sql = "select * from sport";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }

    public function suggestionPlat($type,$poids)
    {
        $regime = array();
        $listPlat = $this->modele_regime->getPlatParType($type);
        $listSport = $this->modele_regime->getApportSport();
        $somme = 0;
        for ($i=0; $i < count($listPlat); $i++) { 
            if ($somme < $poids) {
                $somme = $somme + $listPlat[$i]['apport'];
                $regime[] = $listPlat[$i];
            }else{
                return $regime;
            }
            for ($i=0; $i < count($listSport); $i++) { 
                if ($somme < $poids) {
                    $somme = $somme + $listSport[$i]['apport'];
                    $regime[] = $listSport[$i];
                }else{
                    return $regime;
                }
            }
        }
    } 

}

?>