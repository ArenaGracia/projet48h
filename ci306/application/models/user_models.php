<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_models extends CI_Model {

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
}
?>