<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
        $data = array('error' => '');
		$this->load->view('test/upload_form', $data);
	}

    public function success(){
        $data = array('upload_data' => array());
        $this->load->view('test/success', $data);
    }

}
