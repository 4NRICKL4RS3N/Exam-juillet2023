<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_user extends CI_Model {

    public function searchUser($mailUser) {
        $sql = "select * from user where mail = %s";
        $sql = sprintf($sql, $this->db->escape($mailUser));
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    public function getIdByMail($mail)
    {
        $req="select id_user from user where mail=%s";
        $req=sprintf($req,$this->db->escape($mail));
        $query = $this->db->query($req);
        $result = $query->row_array();
        return $result;
    }

    public function checkMdp($idUser, $mdp) {
        $sql = "select * from user where id_user = %s";
        $sql = sprintf($sql, $this->db->escape($idUser));
        $query = $this->db->query($sql);
        $result = $query->row_array();
        if (strcmp($result[0]['mdp'], $mdp) == 0) {
            return 1;
        }
        return 0;
    }

    
    public function getUsersById($idUser) {
        $sql = "select * from user where id_user = %s";
        $sql = sprintf($sql, $this->db->escape($idUser));
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }
    
    public function checkLogin($mail , $mdp)
    {
        $listUser = $this->getUsers();
        $result = false;
        for ($i=0; $i < count($listUser); $i++) {
            if ($listUser[$i]['mdp'] == $mdp && $listUser[$i]['mail'] == $mail)  
            {
                $result = true;
            }
        }
        return $result;
    }

    public function getUsers() {
        $sql = "select * from user";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    
    public function loadAdmin($mail , $mdp)
    {
        $listUser = $this->model_user->getUsers();
        for ($i=0; $i < count($listUser); $i++) { 
            if ($listUser[$i]['mdp'] == $mdp && $listUser[$i]['mail'] == $mail && $listUser[$i]['status'] == '1')
            {
                return true;
            }
        }
        return false;
    }

}