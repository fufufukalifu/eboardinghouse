<?php 
	/**
	* 
	*/
	class Halamanutama extends MX_Controller
	{
		function __construct(){
			$this->load->library( 'parser' );
		}

		function index(){
			$data = array(
				'judul_halaman' => 'Login - Selamat Datang Di E-Kosan');
			$data['files'] = array(
				APPPATH . 'modules/Halamanutama/views/v-container-Halamanutama.php',
				); 


			$this->parser->parse('templating/index', $data);

		}

	}
	?>