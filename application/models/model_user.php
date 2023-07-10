<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class Model_user extends CI_Model {

    public function getUserByMail($mail) {
        $this->load->database();
        $req = "select * from user where mail=%s";
        echo $req = sprintf($req,$this->db->escape($mail));
        $query = $this->db->query($req);
        if ($query) {
            $result = $query->row_array();
        }else {
            $result = null;
        }
        return $result;
    }

    public function checkAdmin($user) {
        if ($user['status'] == 1) {
            return true;
        }
        return false;
    }

    public function checkMdp($user, $mdp) {
        if (strcmp($user['mdp'], $mdp) == 0) {
            return true;
        }
        return false;
    }

}