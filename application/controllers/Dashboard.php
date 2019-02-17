<?php


class Dashboard extends Admin_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('profile_model');
        $this->load->model('pegawai_model');
        $this->load->model('barang_model');
        $this->load->model('pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
    $data['barang']  = $this->barang_model->count();
    $data['pegawai'] = $this->pegawai_model->count();
    $data['pelanggan'] = $this->pelanggan_model->count();
    $this->templates('dashboard', $data);
    }

    public function profile($username = null)
    {
        if(!isset($username)) redirect('dashboard', 'refresh');
       
        $profile = $this->profile_model;

        if(in_array($username, $profile->getByUsername($username))){
            $data['user'] = $profile->getByUsername($username);

            $status = $profile->getByUsername($username)['status'];
            $data['status'] = $this->profile_model->status($status);
            $this->templates('user/profile' , $data);
            
        } else {
            redirect('dashboard', 'refresh');
        }
     
    }

   
    public function tambah()
    {
        $profile = $this->profile_model;
        // $profile->addUser()

        $username = $this->session->userdata('username');
        $validation = $this->form_validation;
        $validation->set_rules($profile->rules());
        $username_exist = $profile->cekusername($username);
        
 
        if($validation->run()){
            if($username_exist){
                $this->profile_model->addUser();
                $this->session->set_flashdata('pesan', 'Data Berhasil Ditambah');
                
                $this->templates('user/tambah');
            } else {
                $data['error'] = 'Username Sudah Ada!';
               
                $this->templates('user/tambah');
            }
        } else {
        
       
        $this->templates('user/tambah');

        }

        
    }

    public function edit($username = null)
    {
        if(!isset($username)) redirect('dashboard', 'refresh');

        $profile = $this->profile_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($profile->rules());

        
        $this->templates('user/edit');
    }

    public function upload()
    {
        $update = $this->profile_model->update();
        $username = $this->input->post('username');
        if($update){
            $this->session->set_flashdata('pesan', 'Profile Berhasil Diperbaharui');
            redirect('dashboard/profile/'. $username , 'refresh');
        } 

    }

 

}