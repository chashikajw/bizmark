<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->session->keep_flashdata('success');
		// $this->session->keep_flashdata('errordb');
		// $this->session->keep_flashdata('error');

	}

	public function index()
	{

		$this->load->view('home');
	}

	public function registerUser(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('username','User name','required|is_unique[user.username]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[user.email]');
		//$this->form_validation->set_rules('password','Password','required');
		//$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');




		if($this->form_validation->run()==TRUE){

				$name = ucwords(strtolower($this->input->post('name')));
		    $username = ucwords(strtolower($this->input->post('username')));
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $hashedPassword=password_hash($password, PASSWORD_DEFAULT);

            $userInfo = array('name'=>$name,'username' => $username,'email'=>$email,'password'=>$hashedPassword,);

            $this->load->model('User');
            $result = $this->User->insertUser($userInfo);
						$this->session->set_flashdata('success', 'You have registered successfully');
            if($result>0){
            	$this->session->set_flashdata('success', 'You have registered successfully');
            }else{
            	$this->session->set_flashdata('errordb', 'Error in database insertion');
            }

            redirect('','refresh');
		}else{
			$this->session->set_flashdata('error', 'Error in fuck registration');


			redirect('','refresh');

		}



	}
}
