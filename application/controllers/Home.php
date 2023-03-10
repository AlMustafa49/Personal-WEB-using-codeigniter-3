<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_blog');
        $this->load->model('m_medsos');
        $this->load->model('m_pendidikan');
        $this->load->model('m_pengalaman');
        $this->load->model('m_skill');
        
    }
    

    public function index()
    {
        $data = array(
            'tittle' => 'Profile',
            'isi' => 'front-end/v_home',
            'biodata' => $this->m_admin->detail(),
            'pendidikan' => $this->m_pendidikan->AllData(),
            'skill' => $this->m_skill->AllData(),
            'pengalaman' => $this->m_pengalaman->AllData(),
            'medsos' => $this->m_medsos->AllData(),
        );  
        $this->load->view('front-end/layout/v_template', $data, FALSE);
    }

    public function blog()
    {
        $data = array(
            'tittle' => 'blog',
            'isi' => 'front-end/v_blog',
            'blog' => $this->m_blog->AllData(),
        );  
        $this->load->view('front-end/layout/v_template', $data, FALSE);
    }

    public function detail_blog($slug)
    {
        $data = array(
            'tittle' => 'blog',
            'isi' => 'front-end/v_detail_blog',
            'blog' => $this->m_blog->Detail_Blog($slug),
        );  
        $this->load->view('front-end/layout/v_template', $data, FALSE);
    }

}

/* End of file Controllername.php */