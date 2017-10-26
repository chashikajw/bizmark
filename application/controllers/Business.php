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
		$this->showPage('business_profile');
	}

	public function news_feed(){
		$this->showPage('news_feed');
	}


	public function dashboard() {
		$this->showPage('dashboard');
	}


	public function configuration(){
		$this->showPage('configuration');
	}


	public function profile() {
		$this->showPage('business_profile');
	}

	public function inbox() {
		$this->showPage('inbox');
	}

	public function registration() {
		$this->showPage('business_registration');
	}

	public function review() {
		$this->showPage('reviews');
	}


	public function showPage($page)
	{
		if ( ! file_exists(APPPATH.'views/business/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('business/layouts/header');
		$this->load->view('business/layouts/sidebar');
		$this->load->view('business/'.$page, $data);
		$this->load->view('business/layouts/footer');
	}


}
