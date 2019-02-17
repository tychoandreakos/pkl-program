<?php


class Auth extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
    }


      public function login()
    {

        $this->logged_in();

        $model = $this->auth_model;
        $username = $this->input->post('username');
        $username_exist = $model->cekusername($username);
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if($validation->run()){
            if($username_exist){
            $login = $this->auth_model->login();
            
            if($login){
                
                $logged_in_sess = array(
                 
                 'id' => $login['id'],
                 'nama' => $login['nama'],
                 'username'  => $login['username'],
                 'email' => $login['email'],
                 'level' => $login['level'],
                 'status' => $login['status'],
                 'tgl_join' => $login['tgl_join'],
                 'alamat' => $login['alamat'],
                 'avatar' => $login['avatar'],
                 'logged_in' => TRUE
             );

             $this->session->set_userdata($logged_in_sess);
             redirect('dashboard', 'refresh');

            } else {
            $this->data['errors'] = 'Username Atau Password Salah';
            $this->load->view('login', $this->data);
            }
        } else {
            $this->data['errors'] = 'Username Tidak Ada';
            $this->load->view('login', $this->data);
        } 
            } else {
                $this->load->view("login");
            }
         
    }


    public function logout()
	{
        $this->session->sess_destroy();
        redirect('auth/login', 'refresh');
	}

}