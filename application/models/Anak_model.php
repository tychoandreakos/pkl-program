<?php


class Anak_model extends CI_Model {

    protected $table = 'anak';

    public $nik_pegawai;
    public $nama_anak;
    public $tgl_lahiranak;
    public $tmp_lahiranak;
    public $pendidikananak;
    public $jk;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nama_anak',
            'label' => 'nama anak',
            'rules' => 'required'],

            // ['field' => 'tgl_lahiranak',
            // 'label' => 'tanggal lahir anak',
            // 'rules' => 'required'],

            // ['field' => 'tmp_lahiranak',
            // 'label' => 'tempat lahir',
            // 'rules' => 'required'],

            // ['field' => 'pendidikananak',
            // 'label' => 'pendidikan anak',
            // 'rules' => 'required'],

        ];
    }

    public function cekData($id)
    {
       $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getData($nik)
    {
        return $this->db->get_where($this->table, ['nik_pegawai' => $nik])->result_object();
 }

    
    public function cekNik($nik)
    {
        $hasil = $this->db->get_where($this->table, ['nik_pegawai' => $nik])->num_rows();
        if($hasil > 1){
           return true;
       } else {
           return false;
       }
    }

    public function getDataPegawai($id)
    {
        return $this->db->get_where('pegawai', ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();


        $this->nik_pegawai= $post['nik'];
        $this->nama_anak = $post['nama_anak'];
        $this->tgl_lahiranak = $post['tgl_lahiranak'];
        $this->tmp_lahiranak = $post['tmp_lahiranak'];
        $this->pendidikananak = $post['pendidikananak'];
        $this->jk = $post['jk'];
        $this->status = $post['statusanak'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nik= $post['nik'];
        $this->nama_anak = $post['nama_anak'];
        $this->tgl_lahiranak =  $post['tgl_lahiranak'];
        $this->tmp_lahiranak =  $post['tmp_lahiranak'];
        $this->pendidikananak =  $post['pendidikananak'];
        $this->jk = $post['jk'];
        $this->status =  $post['statusanak'];

        $this->db->update($this->table, $this, ['id' => $this->id]);
    }

    public function getDetailAnakById($id)
    {
    return $this->db->get_where($this->table, ['id_anak' => $id])->row();
    }

}