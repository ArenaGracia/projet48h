<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_models extends CI_Model {

    public function getAllProfil(){
        $result = array();
        $query = $this->db->query('SELECT * FROM profil_user');
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function getProfilByUser($id_user){
        $sql = 'SELECT * FROM profil_user where id_user = '.$id_user;
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    public function saveRegime($nom){
        $sql = sprintf("INSERT INTO regime values(null,'%s', 1)",$nom);
        $query = $this->db->query($sql);
    }

    public function updateName($id,$new)
    {
        $sql = sprintf("UPDATE regime SET nom='%s' where id_regime = %s ",$new,$id);
        $query = $this->db->query($sql);
    }

   
}