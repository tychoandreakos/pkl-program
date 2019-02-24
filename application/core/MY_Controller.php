<?php


class MY_Controller extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
        }
    }
    



    class Admin_Controller extends MY_Controller {
    

        
        public function __construct()
        {
            parent::__construct();

            
            if(empty($this->session->userdata('logged_in'))) {
                $session_data = array('logged_in' => FALSE);
                $this->session->set_userdata($session_data);
            } 
        }

        public function logged_in()
        {
            $session_data = $this->session->userdata();
            if($session_data['logged_in']){
                redirect('dashboard', 'refresh');
            }
        }

        public function not_logged_in()
	{
		$session_data = $this->session->userdata();
		if($session_data['logged_in'] == FALSE) {
			redirect('auth/login', 'refresh');
		}
	}


        public function templates($page = null, $data = [])
        {
            $this->load->view('templates/header', $data);

            $this->load->model('profile_model');
            $username = $this->session->userdata('username');
            $profile = $this->profile_model;
            $data['user'] = $profile->getByUsername($username);
            
            $this->load->view('templates/left-panel', $data);
            $this->load->view('templates/right-panel', $data);

            $this->load->view($page, $data);
            $this->load->view('templates/footer', $data);
        }


    }

    
