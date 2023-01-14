<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_admin');
    //proteksi halaman
    $this->load->library('auth_login');
    $this->auth_login->proteksi_halaman();
    
  }
  
    public function index()
    {
      $data = array(
        'tittle' => 'Admin',
        'isi' => 'back-end/v_admin'
    );  
    $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function setting()
    {
      $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('nama_panggilan', 'Nama Panggilan', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('email', 'E-Mail', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('no_hp', 'No Handphone', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required'=> '%s Wajib Diisi!!'));

      $this->form_validation->set_rules('password', 'Password', 'required', array('required'=> '%s Wajib Diisi!!'));

      
      if ($this->form_validation->run() == FALSE) {
        //jika tidak lolos validasi form
        $data = array(
          'tittle' => 'Setting',
          'isi' => 'back-end/v_setting',
          'biodata' => $this->m_admin->Detail(),
          'error_upload' => $this->upload->display_errors(),
      );  
      $this->load->view('back-end/layout/v_template', $data, FALSE);
      
      } else {
        //jika lolos validasi form
        $config['upload_path']    = './gambar/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $this->upload->initialize($config);
        $field_name = "foto";
        if (!$this->upload->do_upload($field_name)){
            //update tanpa ganti foto
            $data = array(
                'id' => '1',
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nama_panggilan' => $this->input->post('nama_panggilan'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'password' => $this->input->post('password')
            );
            $this->m_admin->UpdateSetting($data);
            $this->session->set_flashdata('pesan', 'Setting Berhasil Di Update');
            redirect('admin/setting');
        } else {
          //update dengan ganti foto
          $upload_data = array('uploads' => $this->upload->data());
          $config['image_library'] = 'gd2';
          $config['source_image'] = './gambar/' . $upload_data['uploads']['file_name'];
          $this->load->library('image_lib', $config);
            $data = array(
              'id' => '1',
              'nama_lengkap' => $this->input->post('nama_lengkap'),
              'nama_panggilan' => $this->input->post('nama_panggilan'),
              'tempat_lahir' => $this->input->post('tempat_lahir'),
              'tgl_lahir' => $this->input->post('tgl_lahir'),
              'email' => $this->input->post('email'),
              'no_hp' => $this->input->post('no_hp'),
              'alamat' => $this->input->post('alamat'),
              'password' => $this->input->post('password'),
              'foto' => $upload_data['uploads']['file_name'],
            );
            $this->m_admin->UpdateSetting($data);
            $this->session->set_flashdata('pesan', 'Setting Berhasil Di Update');
            redirect('admin/setting');
        }

      }
      
    }

}

/* End of file Controllername.php */