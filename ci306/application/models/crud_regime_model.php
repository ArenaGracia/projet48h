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

    public function getRegimeAndActivite($idType, $effet) {
        $result = array();
        $query = $this->db->query("SELECT r.id_regime, r.nom, a.activite, al.nom, al.prix*re.effet prix_total, re.effet nbr_semaine FROM regime r
        JOIN type_regime tr ON r.id_regime = tr.id_regime
        JOIN type t ON t.id_type = tr.id_type
        JOIN regime_effet re ON re.id_regime = r.id_regime
        JOIN regime_activite ra ON ra.id_regime = r.id_regime
        JOIN activite a ON a.id_activite = ra.id_activite
        JOIN regime_aliment ral on ral.id_regime = r.id_regime
        JOIN aliment al on ral.id_aliment = al.id_aliment
        WHERE t.id_type = $idType
          AND (re.effet = $effet OR re.effet = (
            SELECT re2.effet
            FROM regime_effet re2
            ORDER BY ABS(re2.effet - $effet)
            LIMIT 1
        ))");
        
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    public function getAlimentFromRegime($idRegime) {

        $result = array();
        $query = $this->db->query("select a.nom, a.prix from aliment a
            join regime_aliment ra on ra.id_aliment = a.id_aliment
            join regime r on r.id_regime = ra.id_regime
            where r.id_regime = " .$idRegime);
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }
}
?>