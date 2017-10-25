<?php
class Client extends CI_Controller {

        public function view($page = 'home')
        {
            // if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            // {
            //     // Whoops, we don't have a page for that!
            //     show_404();
            // }

            $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('client/layouts/client_header', $data);
            $this->load->view('client/pages/'.$page, $data);
            $this->load->view('client/layouts/client_footer', $data);
        }
}
