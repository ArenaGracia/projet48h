<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_activite_model extends CI_Model {

    public function getAllActivite(){
        $result = array();
        $query = $this->db->query('SELECT * FROM activite where etat = 1');
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function saveActivite($nom){
        $sql = sprintf("INSERT INTO activite values(null, '%s', 1)",$nom);
        $query = $this->db->query($sql);
    }

    public function updateActivite($nom, $id)
    {
        $sql = sprintf("UPDATE activite SET nom='%s' where id_activite = '%u' ",$nom, $id);
        $query = $this->db->query($sql);
    }
    
    public function deleteActivite($id){
        $sql = sprintf("UPDATE activite SET etat = 10 where id_activite = %s",$id);
        $query = $this->db->query($sql);
    }
}
?>