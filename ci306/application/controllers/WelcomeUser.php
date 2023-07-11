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

	public function ajouterCode()
	{
		$user=$this->session->userdata('user');
		$this->load->model("Code_models");
		$this->load->model("User_models");

		$valeur = $this->input->post('code');

		$data['code']=$this->Code_models->getListeCode();
		$data['result']=$this->Code_models->insert_Validate($valeur,$user['id_user']);
		$data['monnaie']=$this->User_models->getMonnaie($user['id_user']);
		$this->load->view("pages/user/listeCode",$data);
	}

	public function listeCode(){
		$this->load->model("Code_models");
		$this->load->model("User_models");
		$user=$this->session->userdata('user');
		$data['code']=$this->Code_models->getListeCode();
		$data['monnaie']=$this->User_models->getMonnaie($user['id_user']);
		$this->load->view("pages/user/listeCode",$data);
	}

}
?>