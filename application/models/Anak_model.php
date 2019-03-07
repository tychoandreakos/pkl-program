<?php


class Anak_model extends CI_Model {

    protected $table = 'anak';

    public $nik;
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

    public function save()
    {
        $post = $this->input->post();

        $this->nik= $post['id'];
        $this->nama_anak = serialize($post['nama_anak']);
        $this->tgl_lahiranak = serialize($post['tgl_lahiranak']);
        $this->tmp_lahiranak = serialize($post['tmp_lahiranak']);
        $this->pendidikananak = serialize($post['pendidikananak']);
        $this->jk = serialize($post['jk']);
        $this->status = serialize($post['statusanak']);

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

    public function getData($id)
    {
      return $this->db->get_where($this->table, ['nik' => $id])->row();
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

}