<?php

class Pendidikan_model extends CI_Model {
    
    protected $table = 'pendidikan';

    public $id;
    public $sekolah;
    public $jurusan;
    public $nama_sekolah;
    public $lokasi;
    public $thn_lulus;

    public function rules()
    {
        return [
            ['field' => 'id',
            'label' => 'id',
            'rules' => 'required'],

            ['field' => 'sekolah',
            'label' => 'sekolah',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'jurusan',
            'rules' => 'required'],

            ['field' => 'nama_sekolah',
            'label' => 'nama sekolah',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'lokasi',
            'rules' => 'required']
        ];
  
  
    }

    public function getData($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function cekDB($id)
    {
        $hasil = $this->db->get_where($this->table, ['id' => $id])->num_rows();
        if($hasil > 0){
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

        $this->id = $post['id'];
        $this->sekolah = $post['sekolah'];
        $this->jurusan = $post['jurusan'];
        $this->nama_sekolah = $post['nama_sekolah'];
        $this->lokasi = $post['lokasi'];
        $this->thn_lulus = $post['thn_lulus'];

         $this->db->insert($this->table, $this);
           
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->sekolah = $post['sekolah'];
        $this->jurusan = $post['jurusan'];
        $this->nama_sekolah = $post['nama_sekolah'];
        $this->lokasi = $post['lokasi'];
        $this->thn_lulus = $post['thn_lulus'];

        if($this->cekDB($this->id)){
            $this->db->update($this->table, $this, ['id' => $this->id]);
        return true;  
        } else {
            return false;
        }
         
           
    }
}