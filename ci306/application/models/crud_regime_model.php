<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_regime_model extends CI_Model {

    public function getAllRegime(){
        $result = array();
        $query = $this->db->query('SELECT * FROM regime where etat = 1');
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
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
    
    public function deleteRegime($id){
        $sql = sprintf("UPDATE regime SET etat = 10 where id_regime = %s",$id);
        $query = $this->db->query($sql);
    }
}
?>