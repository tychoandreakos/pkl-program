<?php

class Pegawai extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->pegawai =& get_instance();
        $this->load->model('pegawai_model');
        $this->load->model('ortu_model');
        $this->load->model('pasutri_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['employees'] = $this->pegawai_model->getAll(); 
        $this->templates('master/pegawai/index', $data);
    }

    public function addpegawai()
    {
        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if($validation->run()){
            $pegawai->save();
            $this->session->set_flashdata('sukses', 'disimpan');
            redirect('pegawai', 'refresh');
        } else {
        $this->templates('master/pegawai/tambah');
        }
    }  

    public function edit($id = null)
    {
        if(is_null($id)) show_404();

        $pegawai = $this->pegawai_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if($validation->run()){
            if($pegawai->editData()){
            $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate');
                redirect('pegawai', 'refresh');
            }
            
        } else {
            $data['pegawai'] = $pegawai->getById($id);
            if(!$data['pegawai']) show_404();

            
            $this->templates('master/pegawai/edit', $data);
        }
    }

    public function hapus($id)
    {
        if(is_null($id)) show_404();
        
        if($this->pegawai_model->deleteData($id)){
            $this->session->set_flashdata('sukses', 'dihapus');
            redirect('pegawai', 'refresh');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus');
            redirect('pegawai', 'refresh');
        }
    }

    public function OrtuUpdate($id = null)
    {
        if(empty($id)) show_404();

    $pegawai = $this->ortu_model;
    $validation = $this->form_validation;
    $validation->set_rules($pegawai->rules());

    if($validation->run()){
        $pegawai->update();
        $this->session->set_flashdata('sukses', 'diupdate');
        redirect('pegawai', 'refresh');
    }
    }


    public function dataortu($id = null)
    {
    if(empty($id)) show_404();

    $pegawai = $this->ortu_model;
    $validation = $this->form_validation;
    $validation->set_rules($pegawai->rules());

    if($pegawai->cekData($id)){

    $data['id'] = $id;
    $data['data'] = $pegawai->getData($id);
    $this->templates('master/pegawai/datadiri/orangtua/update', $data);

    } else {
       
        if($validation->run()){
            if($pegawai->save()){          
            $this->session->set_flashdata('sukses', 'diupdate');
            redirect('pegawai', 'refresh');
        } else {
            $this->session->set_flashdata('gagal', 'diupdate, id tidak ditemukan');
            redirect('pegawai', 'refresh');
            }
        } else {
    
    $data['id'] = $id;      
    $this->templates('master/pegawai/datadiri/orangtua/orangtua', $data);
        
}

    }

          
    }

    public function datapasutri($id){
        if(is_null($id)) show_404();

        $pegawai = $this->pasutri_model;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if($pegawai->cekDB($id)){
            $data['data'] = $pegawai->getData($id);
            $this->templates('master/pegawai/datadiri/pasutri/update', $data);
        } else {

            if($validation->run()){
                if($pegawai->cekData($id)){
                    $pegawai->save();
                    $this->session->set_flashdata('sukses', 'ditambah');
                    redirect('pegawai', 'refresh');
                } else {
                $this->session->set_flashdata('gagal', 'ditambah, id tidak ditemukan');
                redirect('pegawai', 'refresh');
                }
            } else {
    
                $data['id'] = $id;      
                $this->templates('master/pegawai/datadiri/pasutri/index', $data);
            }
        }
        
    }

    public function updatePasutri($id)
    {
        if(empty($id)) show_404();

    $pegawai = $this->pasutri_model;
    $validation = $this->form_validation;
    $validation->set_rules($pegawai->rules());

    if($validation->run()){
        if($pegawai->update()){
            $this->session->set_flashdata('sukses', 'diupdate');
        redirect('pegawai', 'refresh');
        } else {
            $this->session->set_flashdata('gagal', 'diupdate');
            redirect('pegawai', 'refresh');    
        }
        
    }
    }

    public function detail($id)
    {
        if(is_null($id)) show_404();

        $pegawai = $this->pegawai_model;
        $data['pegawai'] = $pegawai->getById($id);
        $data['ortu'] = $pegawai->getByidOrtu($id);
        $data['pasutri'] = $pegawai->getByidStatus($id);
        if(!$data['pegawai']) show_404();

            
            $this->templates('master/pegawai/detail', $data);
    }

    public function cekDataOrtu($data = null)
    {
        if($data == null){
            return $data;
        } else {
            return 'Data Belum Lengkap, Mohon Dilengkap';
        }
    }

    public function lengkapidata($id)
    {
        $data['id'] = $id;
        $this->templates('master/pegawai/datadiri/index', $data);
        // redirect('pegawai/lengkapi-data', 'refresh');
    }

    public function jenisKelamin($data = null)
    {
        if($data == 0){
            return 'Laki - laki';
        } else if($data == 1){
            return 'Perempuan';
        } else {
            return 'No Valid Data';
        }
    }

    public function status($data = null)
    {
        if($data == 0){
            return 'Belum Menikah';
        } else if($data == 1){
            return 'Sudah Menikah';
        } else {
            return 'No Valid Data';
        }
    }

    public function Date($data)
    {
        $bulan = [
            'januari' => '1',
            'februari' => '2',
            'maret' => '3',
            'april' => '4',
            'mei' => '5',
            'juni' => '6',
            'juli' => '7',
            'agustus' => '8',
            'september' => '9',
            'oktober' => '10',
            'november' => '11',
            'desember' => '12'
        ];

        $pecah_str = explode(' ', $data);
        $usia = $bulan[strtolower($pecah_str[1])];
        $satu_str = [$pecah_str[0], $usia, $pecah_str[2]];
       return $date = implode('-', array_map('intval', $satu_str));
       
        
    }

    public function hitungUmur($data)
    {
       $data_tgl = $this->Date($data);
       $tgl = new DateTime($data_tgl);
       $today = new DateTime('today');
       $y = $today->diff($tgl)->y;
       $m = $today->diff($tgl)->m;
       $d = $today->diff($tgl)->d;
       return "$y Tahun, $m Bulan, $d Hari";
    }

    public function cekEmail($data)
    {
        if(!empty($data))
        {
            return $data;
        } else {
            return 'Tidak Ada Email.';
        }
    }

    public function changeGoldar($data)
    {
        if($data == 0){
            return 'A';
        } else if($data == 1){
            return 'B';
        } else if($data == 2){
            return 'AB';
        } else if($data == 3){
            return 'O';
        } else {
            return 'No Data';
        }
    }

    public function cekSuami($data)
    {
        if($data == 0)
        {
            return 'Istri';
        } else if($data == 1)
        {
            return 'Suami';
        }
    }
}