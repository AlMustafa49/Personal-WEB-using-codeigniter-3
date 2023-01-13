<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'tittle' => 'Home',
            'isi' => 'front-end/v_home'
        );  
        $this->load->view('front-end/layout/v_template', $data, FALSE);
    }

}

/* End of file Controllername.php */