<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
    public function index()
    {
      $data = array(
        'tittle' => 'Admin',
        'isi' => 'back-end/v_admin'
    );  
    $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

}

/* End of file Controllername.php */
