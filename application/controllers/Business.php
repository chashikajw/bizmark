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

	public function news_feed() {
		$this->showPage('news_feed');
	}

	public function dashboard() {
		$this->showPage('dashboard');
	}

	public function configuration() {
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
	public function shopRegistration() {
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'User name', 'required');
		$this->form_validation->set_rules('handler', 'Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('cId', 'Category ID', 'required');
		$this->form_validation->set_rules('openingTime', 'Ope', 'required');
		$this->form_validation->set_rules('closingTime', 'City', 'required');
		$this->form_validation->set_rules('ltd', 'City', 'required');
		$this->form_validation->set_rules('lotd', 'City', 'required');

		if ($this->form_validation->run() == TRUE) {

			$name = ucwords(strtolower($this->input->post('name')));
			$handler = ucwords(strtolower($this->input->post('handler')));
			$address = ucwords(strtolower($this->input->post('address')));
			$city = $this->input->post('city');
			$cId = $this->input->post('cId');
			$oTime = date("Y-m-d h:i:s", $this->input->post('opening_time'));
			$cTime = date("Y-m-d h:i:s", $this->input->post('closing_time'));
			$ltd = $this->input->post('ltd');
			$lotd = $this->input->post('lotd');

			$shopInfo = array('name' => $name, 'handler' => $handler, 'address' => $address, '	city' => $city, 'category_id' => $cId, 'opening_time' => $oTime, 'closing_time' => $cTime, 'lat' => $ltd, 'lng' => $lotd);

			$this->load->model('ClientModel');
			$result = $this->ClientModel->insertUser($userInfo);

			if ($result > 0) {
				$this->session->set_flashdata('success', 'Your shop  has been  successfully registered');
				redirect('business/profile');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database insertion');
				redirect('business/registration');
			}

		} else {
			$this->session->set_flashdata('error', 'Error in Registration');

			redirect('business/registration');

		}
	}

	public function showPage($page) {
		if (!file_exists(APPPATH . 'views/business/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('business/layouts/header');
		$this->load->view('business/layouts/sidebar');
		$this->load->view('business/' . $page, $data);
		$this->load->view('business/layouts/footer');
	}

}
