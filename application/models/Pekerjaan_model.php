<?php

class Pekerjaan_model extends CI_Model 
{

    protected $table = 'pekerjaan';
    
    public $nik_pegawai;
    public $nama_perusahaan;
    public $lokasi_perusahaan;
    public $jabatan;
    public $periode;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama_perusahaan',
            'rules' => 'required'],
            
            ['field' => 'lokasi',
            'label' => 'lokasi',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'jabatan',
            'rules' => 'required'],

            ['field' => 'periode_awal',
            'label' => 'periode',
            'rules' => 'required'],

            ['field' => 'periode_akhir',
            'label' => 'periode',
            'rules' => 'required'],
        ];
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

    public function cekData($id)
    {
       $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getDataPegawai($id)
    {
        $validasi = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
        if($validasi > 0){
            return $this->db->get_where('pegawai', ['id' => $id])->row();
        } else {
            return false;
        }
    }

    public function getData($nik)
    {
        return $this->db->get_where($this->table, ['nik_pegawai' => $nik])->result_object();
    }

    public function cekIdPekerjaan($id)
    {
        $hasil = $this->db->get_where($this->table, ['id_pekerjaan' => $id])->num_rows();
        if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getDetailPekerjaanById($id)
    {
    return $this->db->get_where($this->table, ['id_pekerjaan' => $id])->row();
    }


    public function save()
    {
        $post = $this->input->post();

        $this->nik_pegawai = $post['nik'];
        $this->nama_perusahaan = $post['nama'];
        $this->lokasi_perusahaan = $post['lokasi'];
        $this->jabatan = $post['jabatan'];
        $this->periode = $post['periode_awal'] ." - ". $post['periode_akhir'];

        $this->db->insert($this->table, $this);
    }

    public function update()
    {
        $post = $this->input->post();

        $id = $post['id'];
        $this->nik_pegawai = $post['nik'];
        $this->nama_perusahaan = $post['nama'];
        $this->lokasi_perusahaan = $post['lokasi'];
        $this->jabatan = $post['jabatan'];
        $this->periode = $post['periode_awal'] ." - ". $post['periode_akhir'];


        $this->db->update($this->table, $this, ['id_pekerjaan' => $id]);
    }

    public function delete($id)
    {

        $this->db->delete($this->table, ['id_pekerjaan' => $id]);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }

    }

}