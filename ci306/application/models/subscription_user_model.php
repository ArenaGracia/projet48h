<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subscription_user_model extends CI_Model {

    public function insertUser($nom, $prenom, $email, $mdp) {
        $requette = sprintf("INSERT INTO user (id_user, nom, prenom, email, mdp) values(null, %s, %s, %s, %s)", $nom, $prenom, $email, $mdp);
        $query = $this->db->query($requette);
    }
}
?>