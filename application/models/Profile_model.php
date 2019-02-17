<?php


class Profile_model extends CI_Model {

    private $table = 'auth';
    public $id;
    public $avatar = 'index.jpg';
    public $nama;
    public $username;
    public $password;
    public $level;
    public $email;
    public $alamat;
    public $tgl_join;
    public $status = '1';

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required' 
            ], 
            [
                'field' => 'username',
                'label' => 'username',
                'rules' => 'required'  
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'  
            ],
            [
                'field' => 'level',
                'label' => 'level',
                'rules' => 'required'  
            ],
            [
                'field' => 'email',
                'label' => 'email',
                'rules' => 'required'  
            ],
            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'  
            ]
        ];
    }

    private function hashPassword($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    private function dateNow()
    {
        
        $tz_object = new DateTimeZone('Asia/Jakarta ');
        //date_default_timezone_set('Brazil/East');
    
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $this->tgl_indo($datetime->format('Y\-m\-d'));


    }

    private function tgl_indo($tanggal)
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

    private function level($level)
    {
        if($level == 0){
            return 'Admin';
        } else if($level == 1){
            return 'Operator';
        }

        return false;
    }

    public function addUser()
    {
        $post = $this->input->post();

        $this->id = uniqid();
        $this->nama = $post['nama'];
        $this->username = $post['username'];
        $this->password = $this->hashPassword($post['password']);
        $this->level = $this->level($post['level']);
        $this->status;
        $this->email = $post['email'];
        $this->tgl_join = $this->dateNow();
        $this->alamat = $post['alamat'];
        $this->avatar;

        $this->db->insert($this->table, $this);
    }

    public function cekUsername($username)
    {

        if($username)
        {
            $sql = 'SELECT * FROM auth WHERE username = ?';
            $query = $this->db->query($sql, array($username));
			$result = $query->num_rows();
			return ($result == 1) ? true : false;
        }

        return false;

    }

    public function getByUsername($username)
    {
        $sql = "SELECT * FROM auth WHERE username = '$username'";
        $result = $this->db->query($sql);
        return $result->row_array();
    }

    public function status($status)
    {
        if($status == 1){
            return 'Active';
        } elseif($status == 0){
            return 'Non Active';
        }
    }

    public function update()
    {

        $post = $this->input->post();
        
        $nama = $post['nama'];
        $username = $post['username'];
        $email = $post['email'];
        $alamat = $post['alamat'];
        $this->db->where('username', $username);
        if($this->uploadImg()){
        $update = $this->db->update('auth', ['nama' => $nama ,'email' => $email, 'alamat' => $alamat]);
        return ($update == true) ? true : false;
        }
    }


    private function uploadImg()
    {   
        $nama = $_FILES['avatar']['name'];
        $ektensi = ['png','jpg','jpeg'];
        $x = explode('.', $nama);
        $ext = strtolower(end($x)); 
        $ukuran = $_FILES['avatar']['size'];
        $file_tmp = $_FILES['avatar']['tmp_name'];
        $namaBaru = uniqid() . '.' . $ext;


        if(isset($_FILES)){
        if(in_array($ext, $ektensi)){
            if($ukuran <= 2044070){
                move_uploaded_file($file_tmp, 'upload/avatar/' . $namaBaru);
                $this->db->update('auth', ['avatar' => $namaBaru]);
                return true;
            } else {
                return false;
            }

            return false;
        } 

      return true;
    }
        
    }


}