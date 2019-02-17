<?php


class Landing extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('post_model');
    }
    
    public function index()
        {
            $data['posts'] = $this->post_model->getPost(); 
            $data['preferences'] = $this->post_model->getPreferences();
            $this->load->view('landing/index', $data);
        }
    
   


}