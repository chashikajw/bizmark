<?php

   class Upload extends CI_Controller {

      public function __construct() {
         parent::__construct();
         $this->load->helper(array('form', 'url'));
      }

      public function index() {
         $this->load->view('test/upload_form', array('error' => ' ' ));
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
            $this->load->view('test/upload_form', $error);
         }

         else {
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('test/upload_success', $data);
         }
      }
   }
?>
