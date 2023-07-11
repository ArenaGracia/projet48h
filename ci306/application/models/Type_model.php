<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type_model extends CI_Model {

    public function getAllType(){
        $result = array();
        $i = 0;
        $query = $this->db->query('SELECT * FROM type');
        foreach($query->result_array() as $row){
            $result[$i] = $row;
            $i++;
        }
        return $result;
    }
}