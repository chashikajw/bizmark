<?php
class Client extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->data = array();
		$this->load->model('BusinessModel', 'Model');
		$this->data['categorylist'] = $this->Model->getCategoryList();
	}
	public function index() {
		// $this->showPage('home');
		$this->load->model('BusinessModel');
		$this->data['business_data'] = $this->BusinessModel->select();
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/carousel', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/browse', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	// Show signup page
	public function signup() {
		$this->showPage('signup');
	}
	// Show business profile by handler
	public function showBusinessPage($handler) {
		$this->load->model('BusinessModel');
		$this->data['business_data'] = $this->BusinessModel->getBusinessByHandler($handler);
		$this->BusinessModel->increasePageVisit($this->session->userdata('user_data')['user_id'], $this->data['business_data']->id);
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/profileView', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	public function contact() {
		$this->showPage('contact');
	}
	// Show review form
	public function showReviewForm($businessId) {
		$this->data['business_id'] = $businessId;
		$this->load->view('client/reviewForm', $this->data);
	}
	// Show complain form
	public function showComplainForm($businessId) {
		$this->data['business_id'] = $businessId;
		$this->load->view('client/complainForm', $this->data);
	}
	public function sendEmail() {
		$admin_email = "chashikajw007@gmail.com";
		$fromEmail = $this->input->post('UEmail');
		$message = $this->input->post('UMessage');
		$subject = 'Customer Inquiry';
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= 'From: chashika007@gmail.com' . "\r\n" .
		'Reply-To: chashikajw007@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$status = mail($admin_email, $subject, $message, $headers);
		if ($status) {
			$this->session->set_flashdata('success', 'Message sent successfully');
			redirect('Client/contact');
		} else {
			$this->session->set_flashdata('error', 'Try again');
			redirect('Client/contact');
		}
	}
	// Browse all business
	public function browse() {
		$this->load->model('BusinessModel');
		$this->data['business_data'] = $this->BusinessModel->select();
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/browse', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	public function categary_view($categoryId) {
		$this->load->model('BusinessModel');
		$this->data['business_data'] = $this->BusinessModel->selectcategory($categoryId);
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/browse', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	// Search business
	public function search_keyword() {
		$this->load->model('BusinessModel');
		$keyword = $this->input->get('search');
		$this->data['business_data'] = $this->BusinessModel->search($keyword);
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/browse', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	public function search_map_categary() {
		$this->load->model('BusinessModel');
		$categary = $this->input->post('UCategory');
		$this->data['business_data'] = $this->BusinessModel->selectcategory($categary);
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/map', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	public function mapView() {
		$this->load->model('BusinessModel');
		$this->data['business_data'] = $this->BusinessModel->select();
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/map', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	public function newsfeed() {
		$this->load->model('BusinessModel');
		$this->data['post_data'] = $this->BusinessModel->selectpost();
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/newsfeed', $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	// Show requested view
	public function showPage($page) {
		if (!file_exists(APPPATH . 'views/client/' . $page . '.php')) {
			// Whoops, we don't have a page for that!
			show_404();
		}
		$this->data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('client/layouts/header', $this->data);
		$this->load->view('client/layouts/sidebar', $this->data);
		$this->load->view('client/' . $page, $this->data);
		$this->load->view('client/layouts/footer', $this->data);
	}
	// Login
	public function loginUser() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('', 'refresh');
		} else {
			$this->load->model('ClientModel');
			$result = $this->ClientModel->loginUser();
			if ($result != false) {
				$userInfo = $this->ClientModel->getUserInfo($result->id);
				// var_dump($userInfo);
				$userData = array(
					'user_id' => $userInfo->id,
					'username' => $userInfo->username,
					'name' => $userInfo->name,
					'email' => $userInfo->email,
					'loggedin' => TRUE,
					'business_id' => $userInfo->business_id,
					'user_info' => $userInfo, // All user info
				);
				$this->session->set_userdata('user_data', $userData);
				// print_r($_SESSION);
				redirect('', 'refresh');
			} else {
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				redirect('', 'refresh');
			}
		}
	}
	// Logout
	public function logoutUser() {
		$this->session->unset_userdata('user_data');
		redirect('', 'refresh');
	}
	// Registration
	public function registerUser() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('UserName', 'User name', 'required|is_unique[user.username]');
		$this->form_validation->set_rules('UFirstName', 'First Name', 'required');
		$this->form_validation->set_rules('ULastName', 'Last name', 'required');
		$this->form_validation->set_rules('UEmail', 'Email', 'trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('years', 'Date of birth', 'required'); //correct
		$this->form_validation->set_rules('UAdress', 'User Address', 'required');
		$this->form_validation->set_rules('UCity', 'City', 'required');
		$this->form_validation->set_rules('UPostalcode', 'Postal code', 'required');
		$this->form_validation->set_rules('UCountry', 'Country', 'required');
		$this->form_validation->set_rules('UPhoneNo', 'Phone No', 'required|numeric');
		$this->form_validation->set_rules('UPassword', 'Password', 'required');
		$this->form_validation->set_rules('UConfirmPassword', 'Confirm Password', 'required|matches[UPassword]');
		$this->form_validation->set_message('is_unique', 'That Username Already Exists.');
		if ($this->form_validation->run() == TRUE) {
			$username = ucwords(strtolower($this->input->post('UserName')));
			$firstname = ucwords(strtolower($this->input->post('UFirstName')));
			$lastname = ucwords(strtolower($this->input->post('ULastName')));
			$email = $this->input->post('UEmail');
			$dob = '1994-12-06'; //$this->input->post('years').$this->input->post('months').$this->input->post('days');  //correct
			$adress = ucwords(strtolower($this->input->post('UAdress')));
			$city = $this->input->post('UCity');
			$postalcode = $this->input->post('UPostalcode');
			$country = $this->input->post('UCountry');
			$phoneNo = $this->input->post('UPhoneNo');
			$password = $this->input->post('UPassword');
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$userInfo = array('username' => $username, 'password' => $password, 'first_name' => $firstname, 'last_name' => $lastname, 'email' => $email, 'address' => $adress, 'city' => $city, 'password' => $password, 'phone' => $phoneNo, 'gender' => $postalcode, 'dob' => $dob);
			$this->load->model('ClientModel');
			$result = $this->ClientModel->insertUser($userInfo);
			if ($result > 0) {
				$this->session->set_flashdata('success', 'You have registered successfully');
				redirect('', 'refresh');
			} else {
				$this->session->set_flashdata('errordb', 'Error in database insertion');
				redirect('Client/signup');
			}
		} else {
			$this->session->set_flashdata('error', 'Error in Registration');
			redirect('Client/signup');
		}
	}
}