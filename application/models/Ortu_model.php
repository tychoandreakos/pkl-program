<?php


class Ortu_model extends CI_model {
    
    protected $table = 'orangtua';
    public $id;
    public $nama_ayah;
    public $tgl_lahir_ayah;
    public $tmp_lahir_ayah;
    public $pend_ayah;
    public $nama_ibu;
    public $tgl_lahir_ibu;
    public $pend_ibu;

    public function rules()
    {
        return [
            ['field' => 'namaayah',
            'label' => 'nama ayah',
            'rules' => 'required'],

            ['field' => 'tgl_lahirayah',
            'label' => 'tanggal lahir ayah',
            'rules' => 'required'],

            ['field' => 'tmp_lahirayah',
            'label' => 'tempat lahir ayah',
            'rules' => 'required'],

            ['field' => 'pendidikanayah',
            'label' => 'pendidikan ayah',
            'rules' => 'required'],

            ['field' => 'namaibu',
            'label' => 'nama ibu',
            'rules' => 'required'],

            ['field' => 'tgl_lahiribu',
            'label' => 'tanggal lahir ibu',
            'rules' => 'required'],

            ['field' => 'tmp_lahiribu',
            'label' => 'tempat lahir ibu',
            'rules' => 'required'],

            ['field' => 'pendidikanibu',
            'label' => 'pendidikan ibu',
            'rules' => 'required']
        ];
    }

    public function cekID($id)
    {
        $hasil = $this->db->get_where('pegawai', ['id' => $id])->num_rows();
        if($hasil > 0){
            return true;
        } else {
            return false;
        }
    }

    public function cekData($id)
    {
       $hasil = $this->db->get_where($this->table, ['id' => $id])->num_rows();
       if($hasil == 1){
           return true;
       } else {
           return false;
       }
    }

    public function getData($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        
        $this->id = $post['id'];
        $this->nama_ayah = $post['namaayah'];
        $this->tgl_lahir_ayah = $post['tgl_lahirayah'];
        $this->tmp_lahir_ayah = $post['tmp_lahirayah'];
        $this->pend_ayah = $post['pendidikanayah'];
        $this->nama_ibu = $post['namaibu'];
        $this->tgl_lahir_ibu = $post['tgl_lahiribu'];
        $this->tmp_lahir_ibu = $post['tmp_lahiribu'];
        $this->pend_ibu = $post['pendidikanibu'];

        if($this->cekId($this->id)){
        $this->db->insert($this->table, $this);
        return true;
        }
        
    }

    public function update()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->nama_ayah = $post['namaayah'];
        $this->tgl_lahir_ayah = $post['tgl_lahirayah'];
        $this->tmp_lahir_ayah = $post['tmp_lahirayah'];
        $this->pend_ayah = $post['pendidikanayah'];
        $this->nama_ibu = $post['namaibu'];
        $this->tgl_lahir_ibu = $post['tgl_lahiribu'];
        $this->tmp_lahir_ibu = $post['tmp_lahiribu'];
        $this->pend_ibu = $post['pendidikanibu'];
        
        $this->db->update($this->table, $this, ['id' => $this->id]);
    }
}