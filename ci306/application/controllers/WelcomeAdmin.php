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

	

	public function listeActivite(){
		$this->load->model("Activite_models");
		$data['activite']=$this->Activite_models->getListeActivite();
		$data['tete']="Activité sportive";
		$this->load->view("pages/admin/listeActivite",$data);
	}

	public function creerCode(){
		$this->load->model("Code_models");
		$num = $this->input->post('code');
        $valeur = $this->input->post('credit');
        $this->Code_models->insert_Code($num, $valeur); 
		redirect("welcomeAdmin/listeCode");
	}

	public function creerActivite(){
		$this->load->model("Activite_models");
		$num = $this->input->post('activite');
        $this->Activite_models->insert_Activite($num, $valeur); 
		redirect("welcomeAdmin/listeActivite");
	}

	public function modifierActivite(){
		$this->load->model("Activite_models");
		$id = $this->input->post('id_activite');
		$valeur = $this->input->post('activite');
        $this->Activite_models->update_Activite($valeur, $id); 
		redirect("welcomeAdmin/listeActivite");
	}

    public function createCode()
	{
		$data['tete']="Code";
        $this->load->view('pages/admin/Create_monnaie',$data);
	}

    public function createActivite()
	{
		$data['tete']="Activité sportif";
        $this->load->view('pages/admin/create_sportif',$data);
	}

	public function toValidate(){
		$this->load->model("Code_models");
		$data['tete']="A valider";
		$data['valide']=$this->Code_models->getListeValide();
		$this->load->view("pages/admin/Avalider",$data);
	}
}
?>