<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_models extends CI_Model {

    public function insertUser($nom, $prenom, $email, $mdp) {
        $sql="INSERT INTO user (id_user, nom, prenom, email, mdp) values(null, '%s', '%s', '%s', '%s')";
        $requette = sprintf($sql, $nom, $prenom, $email, $mdp);
        $query = $this->db->query($requette);
    }

    public function verify_Login($email,$mdp){
        $sql="SELECT*FROM user WHERE email=%s AND mdp=%s";
        $sql=sprintf($sql,$this->db->escape($email),$this->db->escape($mdp));
        $query=$this->db->query($sql);
        $result=$query->row_array();
        echo $sql;
        return $result;
    }

    public function getMonnaie($id){
        $sql="SELECT SUM(argent) from porte_monnaie WHERE id_user=%d";
        $sql=sprintf($sql,$id);
        $query=$this->db->query($sql);
        $result=$query->row_array();
    }

    public function getUserById($id_user){
        $sql = "SELECT * FROM user where id_user = ".$id_user;
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    public function getUser($id_user){
        $sql = "SELECT * FROM user ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
}
?>