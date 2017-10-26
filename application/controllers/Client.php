<?php
class Client extends CI_Controller {

        public function index()
        {
            $page = "home";
            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('client/layouts/client_header', $data);
            $this->load->view('client/pages/'.$page, $data);
            $this->load->view('client/layouts/client_footer', $data);
        }
}
