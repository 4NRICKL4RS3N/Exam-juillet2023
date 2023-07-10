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

    public function getApportParPlat($duree = null)
    {
        if ($duree == null) {
            $sql = "select * from apportPrixParPlat order by apport asc";
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result; 
        }else {
            $sql = "select * from apportPrixParPlat order by apport asc limit %s";
            $sql = sprintf($sql,$duree);
            $query = $this->db->query($sql);
            $result = $query->result_array();
            return $result;
        }
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

    public function checkApport($poids,$duree,$type)
    {
        $listPlat = $this->modele_regime->getPlatParType($type);
        $totale = $this->modele_regime->sumApportPlat($listPlat);
        if (count($listPlat) = $duree) {
            for ($i=0; $i < count($listPlat); $i++) { 
                if ($totale ) {
                    # code...
                }
            }
        }
    }
}

?>