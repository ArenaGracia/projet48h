<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Plat_models extends CI_Model{
        public function getListeCode(){
            $sql="SELECT*FROM Code ORDER BY id_code DESC";
            $query=$this->db->query($sql);
            $result=$query->result_array();
            return $result;
        }

        public function getListeValide(){
            $sql="SELECT*FROM PostValide p LEFT JOIN Code c ON c.id_code=p.id_Code";
            $query=$this->db->query($sql);
            $result=$query->result_array();
            return $result;
        }

        public function getCode($id_Code){
            $sql="SELECT*FROM Code WHERE id_code=%d";
            $sql=sprintf($sql,$id_Code);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }

        public function insert_Validate($id_Code,$id_user){
            $sql="INSERT INTO PostValide VALUES(%d,%d)";
            $sql=sprintf($sql,$id_Code,$id_user);

            $sql1="UPDATE Code SET etat=5 WHERE id_code=%d";
            $sql1=sprintf($sql1,$id_Code);

            $query=$this->db->query($sql);
            $query2=$this->db->query($sql1);
            
            echo $sql;
            echo $sql1;
            return $result;            
        }

        public function insert_Code($id_Code,$credit){
            $sql="INSERT INTO Code VALUES(null,%d,%d,1)";
            $sql=sprintf($sql,$credit,$id_Code);

            $query=$this->db->query($sql);
            
            echo $sql;
            echo $sql1;
            return $result;            
        }

        public function validate_code($id_Code,$id_user){
            $sql1="UPDATE Code SET etat=10 WHERE id_code=%d";
            $sql1=sprintf($sql1,$id_Code);

            $sql="INSERT INTO porte_monnaie VALUES(%d,%d)";
            $sql=sprintf($sql,$id_Code,$id_user);

            $query=$this->db->query($sql);
            $query2=$this->db->query($sql1);
            
            echo $sql;
            echo $sql1;
            return $result;            
        }
    }
?>