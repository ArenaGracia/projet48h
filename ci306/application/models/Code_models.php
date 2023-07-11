<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Code_models extends CI_Model{
        public function getListeCode(){
            $sql="SELECT*FROM code ORDER BY id_code DESC";
            $query=$this->db->query($sql);
            $result=$query->result_array();
            return $result;
        }

        public function getListeValide(){
            $sql="SELECT p.id_code,c.code,p.id_user,u.nom,c.prix FROM post_valide p 
                    LEFT JOIN code c ON c.id_code=p.id_code
                    JOIN user u on u.id_user=p.id_user WHERE c.etat=5";
            $query=$this->db->query($sql);
            $result=$query->result_array();
            return $result;
        }

        public function getCode($code){
            $sql="SELECT*FROM code WHERE code='%s'";
            $sql=sprintf($sql,$code);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }

        public function getById($id_code){
            $sql="SELECT*FROM code WHERE id_code=%d";
            $sql=sprintf($sql,$id_code);
            $query=$this->db->query($sql);
            $result=$query->row_array();
            return $result;
        }

        public function insert_Validate($valeur,$id_user){
            $code=$this->Code_models->getCode(valeur);
            $result='';
            if (code==5 || code==1) {
                $result="Demande envoyée";
                $sql="INSERT INTO post_valide VALUES(%d,%d)";
                $sql=sprintf($sql,$code['id_code'],$id_user);

                $sql1="UPDATE code SET etat=5 WHERE id_code=%d";
                $sql1=sprintf($sql1,$id_code);

                $query=$this->db->query($sql);
                $query2=$this->db->query($sql1);
            }
            if (code==10) {
                $result="Ce code n'est plus disponible";
            }
            return $result;            
        }

        public function insert_Code($id_code,$credit){
            $sql="INSERT INTO code VALUES(null,%d,%d,1)";
            $sql=sprintf($sql,$credit,$id_code);

            $query=$this->db->query($sql);
            
            echo $sql;
            echo $sql1;            
        }

        public function validate_code($id_code,$id_user){
            $sql1="UPDATE code SET etat=10 WHERE id_code=%d";
            $sql1=sprintf($sql1,$id_code);
            $code=$this->Code_models->getById($id_code);

            $sql="INSERT INTO porte_monnaie VALUES(%d,%d)";
            $sql=sprintf($sql,$id_user,$code['prix']);

            $query=$this->db->query($sql);
            $query2=$this->db->query($sql1);
            
            echo $sql;
            echo $sql1;           
        }
    }
?>