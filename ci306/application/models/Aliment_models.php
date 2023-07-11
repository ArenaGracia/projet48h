<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aliment_models extends CI_Model {
    public function getAllAliment(){
        $sql="SELECT*FROM aliment WHERE etat=1";
        $query = $this->db->query($sql);
        $result=$this->db->result_array();
        return $result;
    }

    public function insertAliment($nom, $prix, $etat){
        $sql="INSERT INTO aliment values(null,'%s', %s, 1)";
        $sql = sprintf($sql,$nom, $prix);
        $query = $this->db->query($sql);
    }

    public function deleteAliment($id){
        $sql ="UPDATE aliment SET etat = 10 where id_aliment = %s";
        $sql = sprintf($sql,$id);
        $query = $this->db->query($sql);
    }
}
?>