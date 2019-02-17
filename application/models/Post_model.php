<?php

class Post_model extends CI_Model {

    private $table = 'post';

    public $id;
    public $title;
    public $author;
    public $date;
    public $isi;
    public $avatar = 'index.jpg';

    public function rules()
    {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules'=> 'required'],

            ['field' => 'isi',
            'label' => 'isi',
            'rules'=> 'required'],
        ];
    }

    public function rule()
    {
        return [
            ['field' => 'telp1',
            'label' => 'telp1',
            'rules' => 'required'],

            ['field' => 'telp2',
            'label' => 'telp2',
            'rules' => 'required'],

            ['field' => 'email1',
            'label' => 'email1',
            'rules' => 'required'],

            ['field' => 'email2',
            'label' => 'Email2',
            'rules' => 'required'],

            ['field' => 'twitter',
            'label' => 'twitter',
            'rules' => 'required'],

            ['field' => 'facebook',
            'label' => 'facebook',
            'rules' => 'required'],

            ['field' => 'instagram',
            'label' => 'instagram',
            'rules' => 'required'],

            ['field' => 'display',
            'label' => 'display',
            'rules' => 'required'],

            ['field' => 'desc',
            'label' => 'desc',
            'rules' => 'required']
        ];
    }

    private function bulanIndo($tanggal)
    {
        $bulan = [
            1=> 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

    private function tanggal()
    {
       $tz_object = new DateTimeZone('Asia/Jakarta');
        //date_default_timezone_set('Brazil/East');
    
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $this->bulanIndo($datetime->format('Y\-m\-d'));
    }

    public function getPost()
    {
        return $this->db->get($this->table)->result();
    }

    private function gambar()
    {
        $target_dir = 'upload/post/';
        $ext_ok = ['png','jpg','jpeg','gif'];
        $nama = $_FILES['avatar']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['avatar']['size'];
        $file_tmp = $_FILES['avatar']['tmp_name'];
        $namaBaru = uniqid() . '.' . $ekstensi;

        if(in_array($ekstensi, $ext_ok)){
            if($ukuran < 5044070){
                move_uploaded_file($file_tmp, $target_dir . $namaBaru);

                return $namaBaru;
     
        
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function tambahPost()
    {
        $post = $this->input->post();
        
        $this->id = uniqid();
        $this->title = $post['judul'];
        $this->author = $post['author'];
        $this->date = $this->tanggal();
        $this->isi = $post['isi'];

        if($this->avatar = $this->gambar()){
            $this->db->insert($this->table, $this);
            return true;
        }
              
    }

    public function getById($id)
    {  
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function updatePost()
    {
        $post = $this->input->post();

        $this->id = $post['id'];
        $this->title = $post['judul'];
        $this->isi = $post['isi'];
        $this->author = $post['author'];
        $this->date = $post['date'];
        
        if($_FILES['avatar']['error'] == 4){
           $this->avatar = $post['oldImage'];
           $this->db->update($this->table, $this, ['id' => $post['id']]);
        } else if($_FILES['avatar']['error'] == 0) {
            $this->hapusGambar($post['oldImage']);
            if($this->avatar = $this->gambar()){
                $this->db->update($this->table, $this, ['id' => $post['id']]);
                return true;
            }
        }
      
    }

    public function hapusGambar($gambar)
    {  
            $file = 'upload/post/' . $gambar;
            if(file_exists($file)){
                unlink($file);
        }
    }

    public function deletePost($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function getPreferences()
    {
        return $this->db->get_where('preferences', ['id' => '1'])->row();
    }

    public function preferences()
    {
        $post = $this->input->post();

        $telp1 = $post['telp1'];
        $telp2 = $post['telp2'];
        $email1 = $post['email1'];
        $email2 = $post['email2'];
        $twitter = $post['twitter'];
        $facebook = $post['facebook'];
        $instagram = $post['instagram'];
        $display = $post['display'];
        $desc = $post['desc'];

        $data = array(
            'telp1' => $telp1,
            'telp2' => $telp2,
            'email1' => $email1,
            'email2' => $email2,
            'twitter' => $twitter,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'display' => $display,
            'desc' => $desc
         );

        $this->db->update('preferences', $data, ['id' => '1']);

    }

}