<?php 
	/**
	* 
	*/
	class Login extends MX_Controller
	{
		function __construct(){
			$this->load->library( 'parser' );
			$this->load->model( 'login_model' );

		}

		function index(){
			$data = array(
				'judul_halaman' => 'Login - Selamat Datang Di E-Kosan');
			$data['files'] = array(
				APPPATH . 'modules/templating/views/title-page.php',

				APPPATH . 'modules/login/views/v-container-login.php',
				);

			$this->parser->parse('templating/index', $data);

		}

		function trylogin(){
			if ($this->input->post()) {
				$post = $this->input->post();
				$data_login = array("username"=>$post['username'],
					"password"=>$post['password'],
					);

			// $data_login = array("username"=>'fufufukalifu',
			// 	"password"=>'2936248362ad21b3f9ed407363de7533',
			// 	);

				$hasil_validasi = $this->login_model->cek_pengguna($data_login);

				if($hasil_validasi){
					echo json_encode($data = array("status"=>1));
				}else{
					echo json_encode($data = array("status"=>0));
				}
			}
		}
	}
	?>