<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class WelcomeUser extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$v=$this->session->has_userdata('user');
		if($v==false){
			redirect("login/index");
		}
    }

    public function index()
	{	
		$user=$this->session->userdata('user');
        $this->load->view('pages/user/accueil');
	}

	public function listeCode(){
		$this->load->model("Code_models");
		$data['code']=$this->Code_models->getListeCode();
		$data['tete']="Code";
		$this->load->view("pages/user/listeCode",$data);
	}

	public function monnaie(){
		$this->load->model("User_models");
		$this->load->model("Type_model");
		$user->$this->session->userdate('user');
		$data['monnaie']=$this->User_models->getMonnaie();
		$result['type'] = $this->Type_model->getAllType();
	}
}
?>