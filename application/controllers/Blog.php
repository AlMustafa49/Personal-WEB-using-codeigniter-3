<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_blog');
    }
    

    public function index()
    {
        $data = array(
            'tittle' => 'Blog',
            'blog' => $this->m_blog->AllData(),
            'isi' => 'back-end/blog/v_index'
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
    }

    public function add()
    {
        $this->form_validation->set_rules('judul', 'Judul Artikel', 'required', array('required'=> '%s Wajib Diisi!!'));

        $this->form_validation->set_rules('isi_blog', 'Isi Blog/Isi Artikel', 'required', array('required'=> '%s Wajib Diisi!!'));

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
            'tittle' => 'Add Blog',
            'isi' => 'back-end/blog/v_add',
            // 'error_upload' => $this->upload->display_errors(),
        );  
        $this->load->view('back-end/layout/v_template', $data, FALSE);
        } else {
            $config['upload_path']    = './gambar/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg';
            $config['max_size']       = 2048;
            $this->upload->initialize($config);
            $field_name = "gambar";
            if (!$this->upload->do_upload($field_name)){
                //jika gagal upload
                $data = array(
                    'tittle' => 'Add Blog',
                    'isi' => 'back-end/blog/v_add',
                    'error_upload' => $this->upload->display_errors(),
                );  
                $this->load->view('back-end/layout/v_template', $data, FALSE);
            } else {
                //jika berhasil upload
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './gambar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul' => $this->input->post('judul'),
                    'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
                    'isi_blog' => $this->input->post('isi_blog'),
                    'gambar' => $upload_data['uploads']['file_name'],
                  );
                  $this->m_blog->add($data);
                  $this->session->set_flashdata('pesan', 'Blog Berhasil Di Posting!');
                  redirect('blog');
            }
        }
        
        

        
    }

}

/* End of file Blog.php */