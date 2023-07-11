<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class profilUser extends CI_Controller {
    // public function index()
	// {
	// 	$this->load->view('pages/user/profil');
	// }

    // public function admin()
	// {
    //     $this->load->model('profil_user');
    //     $data['admin']=$this->profil_user->getProfilByUser();
	// 	$this->load->view('pages/loginAdmin',$data);
	// }


	public function __construct() {
        parent::__construct();
        $this->load->model('User_models');
        $this->load->model('Profil_user_model');
    }

    public function getProfilByUser($id_user){
        $data['profil'] = $this->User_models->getUserById($id_user);
        $this->load->view('pages/user/profil', $data);
    }

	public function getProfil($id_user){
        $data['user'] = $this->Profil_user_model->getProfilByUser($id_user);
        $this->load->view('pages/user/profil', $data);
    }	
}