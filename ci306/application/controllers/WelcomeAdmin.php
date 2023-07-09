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
        $this->load->view('pages/admin/accueil');
	}
}
?>