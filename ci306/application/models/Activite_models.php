<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Activite_models extends CI_Model{
        public function getListeActivite(){
            $sql="SELECT*FROM activite WHERE etat=1";
            $query=$this->db->query($sql);
            $result=$query->result_array();
            return $result;
        }

        public function getActivite($id_Activite){
            $sql="SELECT*FROM activite WHERE id_activite=%d";
            $sql=sprintf($sql,$id_Activite);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }

        public function insert_Activite($valeur){
            $sql="INSERT INTO activite VALUES(null,%s,1)";
            $sql=sprintf($sql,$this->db->escape($valeur)); 
            $query=$this->db->query($sql);
        }

        public function update_Activite($valeur,$id){
            $sql="UPDATE activite SET activite=%s WHERE id_activite=%d";
            $sql=sprintf($sql,$this->db->escape($valeur),$id); 
            $query=$this->db->query($sql);
        }

        public function delete_Activite($id){
            $sql="UPDATE activite SET etat=5 WHERE id_activite=%d";
            $sql=sprintf($sql,$id); 
            $query=$this->db->query($sql);
        }
    }
?>