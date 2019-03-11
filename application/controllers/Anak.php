<?php

class Anak extends Admin_Controller 
{

    public function __construct()
    {
        parent::__construct();
        $this->not_logged_in();
        $this->load->model('anak_model');
        $this->load->library('form_validation');
    }

    public function store($id)
    {
         if(empty($id)) show_404();

         if($this->anak_model->getDataPegawai($id)) {

            $anak = $this->anak_model;
            $validation = $this->form_validation;
            $validation->set_rules($anak->rules());
            $nik = $this->anak_model->getDataPegawai($id)->nik;
   
            if($anak->cekNik($nik)){
               $data['data'] = $anak->getData($nik);
               $this->templates('master/pegawai/datadiri/anak/view_anak', $data);
           } else {
   
            if($validation->run()){
                if($anak->cekData($id)){
                    $anak->save();
                    $this->session->set_flashdata('sukses', 'ditambah');
                    redirect('pegawai', 'refresh');
                } else {
                $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
                redirect('pegawai', 'refresh');
                }
                
            } else {
   
                   $data['id'] = $id;
                   $data['nik'] = $nik;
                   $this->templates('master/pegawai/datadiri/anak/index', $data);          
   
                }
              
            }
   

         } else {
             redirect('pegawai', 'refresh');
         }


    }

    public function edit($id)
    {
        if(empty($id)) show_404();

        $anak = $this->anak_model;

        if($anak->cekIdAnak($id)){
            $data['anak'] = $anak->getDetailAnakById($id);
            $this->templates('master/pegawai/datadiri/anak/data_anak/update', $data);
        } else {
            redirect('pegawai', 'refresh');
        }
       
    }

    public function update($id)
    {
        if(empty($id)) show_404();

        $anak = $this->anak_model;
        $validation = $this->form_validation;
        $validation->set_rules($anak->rules());
    
        if($validation->run()){
            $anak->update();
            $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
        
        }
    }
    
    public function detail($id)
    {
        if(empty($id)) show_404();

        $anak = $this->anak_model;

        $data['anak'] = $anak->getDetailAnakById($id);

        $this->templates('master/pegawai/datadiri/anak/data_anak/detail', $data);
    }

}