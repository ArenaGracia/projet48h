<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_regime extends CI_Controller {

    public function insertRegime() {
        $this->load->model('Crud_regime_model');
        $nom = $this->input->post('nom');
        $this->crud_regime_model->saveRegime($nom);   
        redirect("");    
    }

    public function update() {
        $id = $this->input->post('id_regime');
        $nom = $this->input->post('nom');
        $this->crud_regime_model->updateName($id, $nom);
        redirect();
    }

    public function delete() {
        $code = $this->input->get('code');
        $this->crud_regime_model->deleteRegime($code);
        redirect(site_url(''));
    }

    public function selectAll() {
        $compte = $this->crud_regime_model->getAllRegime();
    }

    public function getRegimeActivite() {
        $this->load->model('Crud_regime_model');
        $type = $this->input->get('type');
        $effet = $this->input->get('effet');
        
        $code['proposition'] = $this->Crud_regime_model->getRegimeAndActivite($type, $effet);
        $this->load->view('pages/user/proposition',$code);
    }
}