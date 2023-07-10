<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_aliment_model extends CI_Model {

    public function getAllAliment(){
        $result = array();
        $query = $this->db->query('SELECT * FROM aliment where etat = 1');
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function saveAliment($nom, $prix, $photo, $etat){
        $sql = sprintf("INSERT INTO aliment values(null,'%s', %s, '%s', 1)",$nom, $prix, $photo);
        $query = $this->db->query($sql);
    }

    public function updateAliment($nom, $prix, $photo, $id)
    {
        $sql = sprintf("UPDATE aliment SET nom='%s', prix = %s, photo = '%s' where id_regime = '%u' ",$nom, $prix, $photo, $id);
        $query = $this->db->query($sql);
    }
    
    public function deleteAliment($id){
        $sql = sprintf("UPDATE regime SET etat = 10 where id_regime = %s",$id);
        $query = $this->db->query($sql);
    }
}
?>