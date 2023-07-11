<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('subscription_user_model');
    }
    
    public function insertUser() {
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');

        $this->subscription_user_model->insertUser($nom, $prenom, $email, $mdp);
    }
}
