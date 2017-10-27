<?php
class Client extends CI_Controller {

    public function index(){
        // $this->showPage('home');
        $data = array();
        $this->load->view('client/layouts/header', $data);
        $this->load->view('client/layouts/carousel', $data);
        $this->load->view('client/layouts/sidebar', $data);
        $this->load->view('client/browse', $data);
        $this->load->view('client/layouts/footer', $data);
    }

    public function signup(){
        $this->showPage('signup');
    }

    public function browse(){
        $data = array();
        $this->load->view('client/layouts/header', $data);
        $this->load->view('client/layouts/sidebar', $data);
        $this->load->view('client/browse', $data);
        $this->load->view('client/layouts/footer', $data);
    }

     public function mapView(){
        $this->showPage('map');
    }

    public function newsfeed(){
        $this->showPage('newsfeed');
    }


    public function showPage($page)
    {
        if ( ! file_exists(APPPATH.'views/client/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('client/layouts/header', $data);
        $this->load->view('client/'.$page, $data);
        $this->load->view('client/layouts/footer', $data);
    }

    public function registerUser() {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('UserName', 'User name', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('UFirstName', 'First Name', 'required');
        $this->form_validation->set_rules('ULastName', 'Last name', 'required');
        $this->form_validation->set_rules('UEmail', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('years', 'Date of birth', 'required');//correct
        $this->form_validation->set_rules('UAdress', 'User Address', 'required');
        $this->form_validation->set_rules('UCity', 'City', 'required');
        $this->form_validation->set_rules('UPostalcode', 'Postal code', 'required');
        $this->form_validation->set_rules('UCountry', 'Country', 'required');
        $this->form_validation->set_rules('UPhoneNo', 'Phone No', 'required');
        $this->form_validation->set_rules('UPassword', 'Password', 'required');
        $this->form_validation->set_rules('UConfirmPassword', 'Confirm Password', 'required|matches[UPassword]');

        $this->form_validation->set_message('is_unique', 'That Username Already Exists.');

        if ($this->form_validation->run() == TRUE) {

            $username = ucwords(strtolower($this->input->post('UserName')));
            $firstname = ucwords(strtolower($this->input->post('UFirstName')));
            $lastname = ucwords(strtolower($this->input->post('ULastName')));
            $email = $this->input->post('UEmail');
            $dob = '1994-12-06';//$this->input->post('years').$this->input->post('months').$this->input->post('days');  //correct
            $adress = ucwords(strtolower($this->input->post('UAdress')));
            $city = $this->input->post('UCity');
            $postalcode = $this->input->post('UPostalcode');
            $country = $this->input->post('UCountry');
            $phoneNo = $this->input->post('UPhoneNo');
            $password = $this->input->post('password');
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


            $userInfo = array('username' =>  $username, 'password' =>  $password, 'first_name' =>  $firstname, 'last_name' =>  $lastname , 'email' => $email, 'address' =>  $adress ,'city' =>  $city, 'phone' => $phoneNo,'gender' =>  $postalcode, 'dob' =>  $dob);

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
                $user_data = array(
                    'user_id' => $result->id,
                    'username' => $result->username,
                    'email' => $result->email,
                    'loggedin' => TRUE,

                );
                $this->session->set_userdata('userdata',$user_data);
                // print_r($_SESSION);
                redirect('', 'refresh');

            } else {
                $this->session->set_flashdata('error', 'Invalid Username or Password');
                redirect('', 'refresh');

            }

        }
    }

    public function logoutUser(){
        $this->session->unset_userdata('userdata');
        redirect('', 'refresh');
    }
}
