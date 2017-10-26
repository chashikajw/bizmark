<?php
class Client extends CI_Controller {

    public function index(){
        $this->showPage('home');
    }

    public function signup(){
        $this->showPage('signup');
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
}
