<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->session->keep_flashdata('success');
		// $this->session->keep_flashdata('errordb');
		// $this->session->keep_flashdata('error');

	}

	public function index() {

		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/sProfile');
		$this->load->view('layouts/footer');

	}

	public function postview(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/post');
		$this->load->view('layouts/footer');  				
	}

	
	public function dashboardView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/dashboard');
		$this->load->view('layouts/footer');
	}


	public function configurationview(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/configuration');
		$this->load->view('layouts/footer');  				
	}


	public function profileView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/sProfile');
		$this->load->view('layouts/footer');
	}

	public function inboxView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/inbox');
		$this->load->view('layouts/footer');
	}

	public function shopRegView() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/shopRegistration');
		$this->load->view('layouts/footer');
	}

	public function review() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('business/reviews');
		$this->load->view('layouts/footer');
	}


}