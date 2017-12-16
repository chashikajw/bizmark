<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load libraries
		$this->load->helper(array('form', 'url'));

		// Init session
		$user = $this->session->userdata('user_data');
		if ($user != null){
			// Set business id
			$this->businessId = $user['business_id'];
		} else {
			// Show home page (not logged in)
			redirect('/', 'refresh');
			exit();
		}

		// Set business info
		$this->businessInfo = $this->session->userdata('business_data');
	}

	// Show profile page
	public function profile() {
		$data = array();
		$this->load->model('BusinessModel');
		$data['categorylist'] = $this->BusinessModel->getCategoryList();
		$data['business_data'] = $this->BusinessModel->getBusinessInfo($this->businessId);
		$this->showPage('business_profile', $data);
	}

	public function index() {
		$this->profile();
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


	public function inbox() {
		$this->showPage('inbox');
	}


	public function registration() {
		// $this->showPage('business_registration');
		$data = array();
        $this->load->model('BusinessModel');
        $data['categorylist'] = $this->BusinessModel->getCategoryList();

		$this->load->view('business/layouts/header');
		$this->load->view('business/business_registration', $data);
		// $this->load->view('business/layouts/footer');
	}


	public function review() {
		$this->showPage('reviews');
	}

	public function postadd() {
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$info = $this->do_upload();
		$filename = $info['upload_data']['file_name'];
		$postInfo = array('title' => $title, 'content' => $description, 'image_path' => $filename);

		$this->load->model('BusinessModel');
		$result = $this->BusinessModel->insertPost($postInfo);

		if ($result > 0) {
				$this->session->set_flashdata('success', 'Your add  has been  successfully shared');
				redirect('client/newsfeed');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database insertion');
				redirect('business/news_feed');
			}
	}

	// Update business info
	public function update($id){
		$businessInfo = $this->_getUserInput();

		$this->load->model('BusinessModel');
		$result = $this->BusinessModel->update($id, $businessInfo);

		if ($result > 0) {
			$this->session->set_flashdata('success', 'Your shop  has been  successfully registered');
		} else {
			$this->session->set_flashdata('errordb', 'Error in database insertion');
		}
		redirect('business');
	}

	// Register business
	public function register() {
		$businessInfo = $this->_getUserInput();

		$this->load->model('BusinessModel');
		$result = $this->BusinessModel->insert($businessInfo);

		if ($result > 0) {
			$this->session->set_flashdata('success', 'Your shop  has been  successfully registered');
			redirect('business');
		} else {
			$this->session->set_flashdata('errordb', 'Error in database insertion');
			redirect('business/registration');
		}
	}

	// Get form data
	public function _getUserInput(){
		$this->load->library('form_validation');

		// $this->form_validation->set_rules('name', 'Name', 'required');
		// $this->form_validation->set_rules('handler', 'Name', 'required');
		// $this->form_validation->set_rules('address', 'Address', 'required');
		// $this->form_validation->set_rules('city', 'City', 'required');
		// $this->form_validation->set_rules('cId', 'Category ID', 'required');
		// $this->form_validation->set_rules('openingTime', 'Ope', 'required');
		// $this->form_validation->set_rules('closingTime', 'City', 'required');
		// $this->form_validation->set_rules('ltd', 'City', 'required');
		// $this->form_validation->set_rules('lotd', 'City', 'required');

		// if ($this->form_validation->run() == TRUE) {

			$businessName = $this->input->post('businessName');
			$handler = strtolower($this->input->post('handler'));
			$description = $this->input->post('description');
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$categoryId = $this->input->post('categoryId');
			$openningTime = date("Y-m-d h:i:s", $this->input->post('opening_time'));
			$closingTime = date("Y-m-d h:i:s", $this->input->post('closing_time'));
			$lat = $this->input->post('lat');
			$lng = $this->input->post('lng');

			$info = $this->do_upload();
			$filename = $info['upload_data']['file_name'];

			$businessInfo = array('name' => $businessName, 'handler' => $handler, 'description' => $description, 'address' => $address, '	city' => $city, 'category_id' => $categoryId, 'logo_path' => $filename, 'opening_time' => $openningTime, 'closing_time' => $closingTime, 'lat' => $lat, 'lng' => $lng);

			return $businessInfo;

		// } else {
		// 	$this->session->set_flashdata('error', 'Error in Registration');
		// 	echo 'zzz';
		// 	// redirect('business/registration');
		//
		// }
	}

	public function do_upload() {
	   $config['upload_path']   = './assets/business/';
	   $config['allowed_types'] = 'gif|jpg|png';
	   $config['max_size']      = 2000;
	   $config['max_width']     = 10240;
	   $config['max_height']    = 7680;
	   $this->load->library('upload', $config);

	   if ( ! $this->upload->do_upload('logo')) {
		  $error = array('error' => $this->upload->display_errors());
		//   var_dump($error);
		//   $this->load->view('test/upload_form', $error);
	   }

	   else {
		  $data = array('upload_data' => $this->upload->data());
		//   $this->load->view('test/upload_success', $data);
		  return $data;
	   }
	}

	public function showPage($page, $data = null) {
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
