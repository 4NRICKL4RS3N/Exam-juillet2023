<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_login extends CI_Model {

    public function searchUser($mailUser) {
        $sql = "select * from user where mail = %s";
        $sql = sprintf($sql, $this->db->escape($mailUser));
        $query = $this->db->query($sql);
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

    public function getUsers() {
        $sql = "select * from user";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
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
        // var_dump($mail);
        // var_dump($mdp);
        $listUser = $this->model_login->getUsers();
        // var_dump($listUser);
        $result = false;
        for ($i=0; $i < count($listUser); $i++) {
            // var_dump($listUser[$i]);
            if ($listUser[$i]['mdp'] == $mdp && $listUser[$i]['mail'] == $mail)  
            {
                $result = true;
            }
        }
        return $result;
    }

    public function loadAdmin($mail , $mdp)
    {
        $listUser = $this->model_login->getUsers();
        for ($i=0; $i < count($listUser); $i++) { 
            if ($listUser[$i]['mdp'] == $mdp && $listUser[$i]['mail'] == $mail && $listUser[$i]['status'] == '1')
            {
                return true;
            }
        }
        return false;
    }

}