<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_login {

    protected $ci;
    
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }
    
    public function proteksi_halaman()
    {
        if ($this->ci->session->userdata('email') == "") {
            $this->ci->session->set_flashdata('pesan', 'Anda belum login, Silahkan login terlebih dahulu!!');
            redirect('auth');
        }
    }

    public function login($email, $password) {
        $cek = $this->ci->m_auth->login($email, $password);
        if ($cek) {
            $email = $cek->email;
            //buat session
            $this->ci->session->set_userdata('email', $email);
            redirect('admin');
        } else {
            $this->ci->session->set_flashdata('pesan', 'Password atau Email salah!!');
            redirect('auth');
        }
    }

    public function logout() {
        $this->ci->session->unset_userdata('email');
        $this->ci->session->set_flashdata('pesan', 'Anda telah berhasil Logout');
        redirect('auth');
    }

}

/* End of file Auth.php */