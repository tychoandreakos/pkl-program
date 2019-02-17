<?php


class Post extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('post_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['posts'] = $this->post_model->getPost();
        $this->templates('website/index', $data);

    }

    public function addPost()
    {
        $post = $this->post_model;
   
        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if($validation->run()){
            if($post->tambahPost()){
                $this->session->set_flashdata('sukses', 'Data Berhasil Ditambahkan!');
                redirect('post', 'refresh');
            } else {
                $this->session->set_flashdata('sukses', 'Failed!, Data Belum Lengkap!');
                redirect('post', 'refresh');
            }
            
        } else {
            $this->templates('website/addpost');
        }
    }

    public function update($id = null)
    {
        if(is_null($id)) show_404();

        $post = $this->post_model;

        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if($validation->run()){
            $post->updatePost();
            $this->session->set_flashdata('sukses', 'Data Berhasil Diupdate');
            redirect('post', 'refresh');
        } else {
            
            $data['users'] = $post->getById($id);
            if (!$data["users"]) show_404();
            $data['id'] = $id;
            $this->templates('website/edit', $data);
        }
    }

    public function hapus($id = null)
    {
    
        if(is_null($id)) show_404();

        if($this->post_model->deletePost($id)){
            $this->session->set_flashdata('sukses', 'Data Berhasil Dihapus');
            redirect('post', 'refresh');
        }
    }

    public function settings()
    {
        $post = $this->post_model;
        
        $validation = $this->form_validation;
        $validation->set_rules($post->rule());
        
        if($validation->run()){
            $post->preferences();
            $this->session->set_flashdata('sukses', 'Settingan Berhasil Diubah!');
            redirect('post/settings', 'refresh');
        } else {

        $data['settings'] = $post->getPreferences();
        $this->templates('website/settings', $data);

        }
    }


}