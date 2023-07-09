<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('pages/login');
	}	

	public function inscription()
	{
		$this->load->view('pages/inscription');
	}	

	public function admin()
	{
        $this->load->model('admin_models');
        $data['admin']=$this->admin_models->getOneAdmin();
		$this->load->view('pages/loginAdmin',$data);
	}

    public function insertUser() {
        $this->load->model('user_models');
        $this->load->helper('email_helper');
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $mdp = $this->input->post('pwd');
        $this->user_models->insertUser($nom, $prenom, $email, $mdp);   
        redirect("login/index");    
    }

    public function verify_user()
	{
        $this->load->model('user_models');
        $this->load->helper('email_helper');
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
        $result=$this->user_models->verify_Login($email,$pwd);

        if(valid_email($email) && $result!=null){
            $this->session->set_userdata('user', $result);
            echo $this->session->userdata('user');
            redirect("welcomeUser/index");
        }
        else{
            redirect("login/index");
        }
	}
    
    public function verify_admin(){
        $this->load->model('admin_models');
        $this->load->helper('email_helper');
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
        $result=$this->admin_models->verify_Login($email,$pwd);

        if(valid_email($email) && $result!=null){
            $this->session->set_userdata('admin', $result);
            echo $this->session->userdata('admin');
            redirect("welcomeAdmin/index");
        }
        else{
            redirect("login/index");
        }       
    }

    public function deconnectAdmin()
    {
        $this->session->unset_userdata('admin');
        redirect("login/index");
    }

    public function deconnectUser()
    {
        $this->session->unset_userdata('user');
        redirect("login/index");
    }
		
}
?>