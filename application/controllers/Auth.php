<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('auth_login');
        
    }
    
    public function index()
    {
        $this->form_validation->set_rules('email', 'E-mail', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('password', 'Pasword', 'required', array('required'=> '%s Wajib Diisi!!'));

        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->auth_login->login($email, $password);
        } 
        
        $data = array(
            'tittle' => 'Login',
        );  
        $this->load->view('v_login', $data, FALSE);
    }

    public function logout() {
        $this->auth_login->logout();
    }

}

/* End of file Auth.php */