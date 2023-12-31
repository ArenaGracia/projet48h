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

	public function listeActivite(){
		$this->load->model("Activite_models");
		$data['activite']=$this->Activite_models->getListeActivite();
		$data['tete']="Activité sportive";
		$this->load->view("pages/admin/listeActivite",$data);
	}

	public function listeAliment(){
		$this->load->model("Aliment_models");
		$data['aliment']=$this->Aliment_models->getAllAliment();
		$data['tete']="Aliments";
		$this->load->view("pages/admin/listeAliment",$data);
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
        $this->Activite_models->insert_Activite($num); 
		redirect("welcomeAdmin/listeActivite");
	}

	public function updateActivite($id=''){
		$this->load->model("Activite_models");
		$data['tete']="Modifier Sport";
        $data['sport']=$this->Activite_models->getActivite($id); 
		$this->load->view("pages/admin/modif_sportif",$data);
	}

	public function deleteActivite($id=''){
		$this->load->model("Activite_models");
        $this->Activite_models->delete_Activite($id); 
		redirect("welcomeAdmin/listeActivite");
	}

	public function modifierActivite($valeur=''){
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

	public function valider(){
		$this->load->model("Code_models");
		$id_code = $this->input->post('id_code');
		$id_user = $this->input->post('id_user');
		$this->Code_models->validate_code($id_code,$id_user);
		redirect('welcomeAdmin/toValidate');
	}
}
?>