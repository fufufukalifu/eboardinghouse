<?php 
	/**
	* 
	*/
	class Login extends MX_Controller
	{
		function __construct(){
			$this->load->library( 'parser' );
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

	}
	?>