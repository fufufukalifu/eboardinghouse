<?php



class Register extends MX_Controller {



//put your code here

    public function __construct() {
        parent::__construct();
        $this->load->library('parser');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('register_model');
    }

// function untuk menampikan halam pertama saat registrasi
    public function index() {
        $data = array(
            'judul_halaman' => 'Registrasi - E-Kosan',

            'judul_header' => 'Welcome'
            );
        $data['files'] = array(
            APPPATH . 'modules/register/views/v_daftar.php',
            );
        $this->parser->parse('templating/index', $data);
    }

    public function registrasi(){
       $this->form_validation->set_message('is_unique', '*Nama Pengguna atau email sudah terpakai');
       $this->form_validation->set_message('max_length', '*Nama Pengguna maksimal 12 karakter!');
       $this->form_validation->set_message('min_length', '*Inputan minimal 6 karakter!');
       $this->form_validation->set_message('required', '*tidak boleh kosong!');
       $this->form_validation->set_message('matches', '*Kata Sandi tidak sama!');
       $this->form_validation->set_message('valid_email', '*silahkan masukan alamat email anda dengan benar');

       $this->form_validation->set_error_delimiters('', '');
       $this->form_validation->set_rules('namadepan','Nama Depan', 'required');
       $this->form_validation->set_rules('namabelakang','First Name', 'required');
       $this->form_validation->set_rules('email','Email Address',
        'required|valid_email|is_unique[tb_pengguna.email]');
       $this->form_validation->set_rules('daftar_sebagai','First Name', 'required');
       $this->form_validation->set_rules('username','First Name', 'required|is_unique[tb_pengguna.username]');
       $this->form_validation->set_rules('bank','First Name', 'required');
       $this->form_validation->set_rules('nomorRekening','First Name', 'required');
       $this->form_validation->set_rules('alamat','First Name', 'required');
       $this->form_validation->set_rules('Phone','First Name', 'required');
       $this->form_validation->set_rules('tanggal_lahir','First Name', 'required');

       $this->form_validation->set_rules('password','First Name', 'required|matches[password_confirm]');
       $this->form_validation->set_rules('password_confirm','First Name', 'required');


       if ($this->form_validation->run() == FALSE) {
        // echo validation_errors();
           $data = array(
            'namadepan' =>form_error('namadepan'),
            'namabelakang' => form_error('namabelakang'),
            'email' => form_error('email'),
            'daftar_sebagai' => form_error('daftar_sebagai'),
            'username' => form_error('username'),
            'bank' => form_error('bank'),
            'nomorRekening' => form_error('nomorRekening'),
            'alamat' => form_error('alamat'),
            'Phone' => form_error('Phone'),
            'password' => form_error('password'),
            'password_confirm' => form_error('password_confirm'),
            'tanggal_lahir' => form_error('tanggal_lahir'),

            );
           echo json_encode($data);

       } else { 
         $post = $this->input->post();
         $data_insert = array(
            'namaDepan' =>$post['namadepan'],
            'namaBelakang' =>$post['namabelakang'],
            'email' =>$post['email'],
            'daftarSebagai' =>$post['daftar_sebagai'],
            'username' =>$post['username'],
            'akunBank' =>$post['bank'],
            'noRekening' =>$post['nomorRekening'],
            'alamat' =>$post['alamat'],
            'phone' =>$post['Phone'],
            'password' =>md5($post['password'])
            );
         $this->register_model->insert_register($data_insert);
         $status = array("status"=>1);
         echo json_encode($status);

        // Then pass $data  to Modal to insert bla bla!!
     }
 }

}



?>