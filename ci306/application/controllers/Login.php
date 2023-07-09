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
        $this->load->model('Admin_models');
        $data['admin']=$this->Admin_models->getOneAdmin();
		$this->load->view('pages/loginAdmin',$data);
	}

    public function verify_user()
	{
        $this->load->model('Login_models');
        $this->load->helper('email_helper');
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
        $result=$this->Login_models->verify_Login($email,$pwd);

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
        $this->load->model('Admin_models');
        $this->load->helper('email_helper');
		$email=$this->input->post('email');
		$pwd=$this->input->post('pwd');
        $result=$this->Admin_models->verify_Login($email,$pwd);

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