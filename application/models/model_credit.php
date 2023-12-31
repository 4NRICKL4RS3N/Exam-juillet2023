<?php
if(! defined('BASEPATH')) exit('No direct script acces allowed');

class model_credit extends CI_Model {

    public function getAllCredit()
    {
        $this->load->database();
        $sql = "select * from credit";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getCreditById($id_credit)
    {
        $this->load->database();
        $sql = "select * from credit where id_Credit = %s";
        $sql = sprintf($sql,$this->db->escape($id_credit));
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    // public function getIdByCredit($credit)
    // {
    //     $this->load->database();
    //     $sql = "select id_Credit from credit where valeur = '%s'";
    //     $sql = sprintf($sql,$this->db->escape($credit));
    //     $query = $this->db->query($sql);
    //     $result = $query->row_array();
    //     return $result;
    // }

    public function insertGestionCredit($id_credit)
    {
        $this->load->database();
        $this->load->library('session');
        $user = $this->session->get_userdata('user');
        $sql = "insert into gestion_credit values(null,%s,%s,0)";
        $sql = sprintf($sql, $this->db->escape($user['id_User']),$this->db->escape($id_credit));
        $this->db->query($sql); 
    }

    public function validerCredit($id_GC)
    {
        $this->load->database();
        $sql = "update gestion_credit set etat = 1 where id_GC = %s";
        $sql = sprintf($sql, $this->db->escape($id_GC));
        $this->db->query($sql);
    }

    public function getAllGestionCredit()
    {
        $this->load->database();
        $sql = "select * from gestion_credit";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result; 
    }

    public function getGestionCreditById($id_GC)
    {
        $sql = "select * from gestion_credit where id_GC = %s";
        $sql = sprintf($sql, $this->db->escape($id_GC));
        $query = $this->db->query($sql);
        $result = $query->row_array();
    }

    public function insertCredit($valeur)
    {
        $sql = "insert into credit values(null,%s)";
        $sql = sprintf($sql, $this->db->escape($valeur));
        $this->db->query($sql);
    }

    public function insertCash($id_GC)
    {
        $GC = $this->model_credit->getGestionCreditById($id_GC);
        $id_User = $GC['id_User'];
        $credit = $this->model_credit->getCreditById($id_User);
        $djala = $credit['valeur']; 
        $this->load->database();
        $sql = "insert into cash values(null,%s,%s)";
        $sql = sprintf($sql, $this->db->escape($id_User),$this->db->escape($djala));
        $this->db->query($sql);
    }
}
?>