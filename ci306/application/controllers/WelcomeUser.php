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
		echo $user['nom'];
        $this->load->view('pages/user/accueil');
	}
}
?>