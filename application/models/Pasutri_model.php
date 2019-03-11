<?php

class Pasutri_model extends CI_Model 
{
    protected $table = 'pasutri';
    
    public $id_pasutri;
    public $nik_pegawai;
    public $nama_pasutri;
    public $tgl_lahir_pasutri;
    public $tmp_lahir_pasutri;
    public $pendidikan_pasutri;
    public $status_pasutri;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'tanggal lahir',
            'rules' => 'required'],

            ['field' => 'tmp_lahir',
            'label' => 'tempat lahir',
            'rules' => 'required'],

            ['field' => 'pendidikan',
            'label' => 'pendidikan',
            'rules' => 'required']
        ];
    }

    public function getData($id)
    {
        return $this->db->get_where($this->table, ['id_pasutri' => $id])->row();
    }

    public function getDataPegawai($id)
    {
        return $this->db->get_where('pegawai', ['id' => $id])->row();
    }

    public function cekDb($id)
    {
        $hasil = $this->db->get_where($this->table, ['id_pasutri' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function cekData($id)
    {
        $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
        if($hasil > 0){
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        $post = $this->input->post();

        $this->id_pasutri = $post['id'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_pasutri = $post['nama'];
        $this->tgl_lahir_pasutri = $post['tgl_lahir'];
        $this->tmp_lahir_pasutri = $post['tmp_lahir'];
        $this->pendidikan_pasutri = $post['pendidikan'];
        $this->status_pasutri = $post['status'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id_pasutri = $post['id'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_pasutri = $post['nama'];
        $this->tgl_lahir_pasutri = $post['tgl_lahir'];
        $this->tmp_lahir_pasutri = $post['tmp_lahir'];
        $this->pendidikan_pasutri = $post['pendidikan'];
        $this->status_pasutri = $post['status'];

        if($this->cekData($this->id_pasutri)){
            $this->db->update($this->table, $this, ['id_pasutri' => $this->id_pasutri]);
            return true;
        } else {
            return false;
        }
        
    }
}