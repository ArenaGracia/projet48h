<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class WelcomeAdmin extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$v=$this->session->has_userdata('admin');
		if($v==false){
			redirect("login/index");
		}
    }

    public function index()
	{
		$data['tete']="Aliment";
        $this->load->view('pages/admin/accueil',$data);
	}

	public function listeCode(){
		$this->load->model("Code_models");
		$data['code']=$this->Code_models->getListeCode();
		$data['tete']="Code";
		$this->load->view("pages/admin/listeCode",$data);
	}

	public function creerCode(){
		$this->load->model("Code_models");
		$num = $this->input->post('code');
        $valeur = $this->input->post('credit');
        $this->Code_models->insert_Code($num, $valeur); 
		redirect("welcomeAdmin/listeCode");
	}

    public function createCode()
	{
		$data['tete']="Code";
        $this->load->view('pages/admin/Create_monnaie',$data);
	}

	public function toValidate(){
		$this->load->model("Code_models");
		$data['tete']="A valider";
		$data['valide']=$this->Code_models->getListeValide();
		$this->load->view("pages/admin/Avalider",$data);
	}
}
?>