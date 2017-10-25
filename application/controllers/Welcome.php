<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->session->keep_flashdata('success');
		// $this->session->keep_flashdata('errordb');
		// $this->session->keep_flashdata('error');

	}

	public function index() {

		$this->load->view('home');
	}

	public function dashboardView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('dashboard');
		$this->load->view('layouts/footer');
	}

	public function pView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('sProfile');
		$this->load->view('layouts/footer');
	}

	public function inboxView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('inbox');
		$this->load->view('layouts/footer');
	}

	public function shopRegView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('shopRegistration');
		$this->load->view('layouts/footer');
	}

	public function review() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('reviews');
		$this->load->view('layouts/footer');
	}

	public function mapController() {
		$this->load->view('mapview');
	}

	public function registerUser() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'User name', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == TRUE) {

			$name = ucwords(strtolower($this->input->post('name')));
			$username = ucwords(strtolower($this->input->post('username')));
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			$userInfo = array('name' => $name, 'username' => $username, 'email' => $email, 'password' => $password);

			$this->load->model('User');
			$result = $this->User->insertUser($userInfo);

			if ($result > 0) {
				$this->session->set_flashdata('success', 'You have registered successfully');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database insertion');
			}

			redirect('', 'refresh');
		} else {
			$this->session->set_flashdata('error', 'Error in Registration');

			redirect('', 'refresh');

		}

	}

	public function loginUser() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			redirect('', 'refresh');
		} else {
			$this->load->model('User');
			$result = $this->User->loginUser();

			if ($result != false) {
				$user_data = array(
					'user_id' => $result->user_id,
					'name' => $result->name,
					'username' => $result->username,
					'email' => $result->email,
					'loggedin' => TRUE,

				);
				$this->session->set_userdata($user_data);
				print_r($_SESSION);
				redirect('Welcome/mapController');

			} else {
				$this->session->set_flashdata('errmsg', 'Invalid Username or Password');
				redirect('Welcome/loginUser');

			}

		}
	}

	public function logoutUser() {
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('loggedin');
		redirect('Welcome/loginUser');
	}

}
