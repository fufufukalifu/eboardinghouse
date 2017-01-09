<?php 
	/**
	* 
	*/
	class Iklankosan extends MX_Controller
	{
		function __construct(){
			$this->load->library( 'parser' );
			$this->load->model('iklankosan/iklankosan_model');
		}

		function index(){
			$data = array(
				'judul_halaman' => 'Selamat Datang Di E-Kosan');
			$data['files'] = array(
				APPPATH . 'modules/iklankosan/views/container.php',
				);
			$this->parser->parse('templating/index', $data);

		}

		function detailkosan($id){
			$kosan = $this->iklankosan_model->get_single_kosan($id)[0];

			$data = array(
				'judul_halaman' => $kosan->namaIklanKosan,
				'alamat' => $kosan->alamat,
				'harga' => $kosan->HargaKosan,
				'deskripsi' => $kosan->deskripsi,
				'penulis' => $kosan->createdBy,
				'status_internet'=>$status = ($kosan->internet=="1") ? "checked" : " "  ,
				'status_wc'=>$status = ($kosan->wc=="1") ? "checked" : " "  ,
				'status_dapur'=>$status = ($kosan->dapur=="1") ? "checked" : " "  ,
				'rules'=>$kosan->peraturan

				);
			$data['files'] = array(
				APPPATH . 'modules/iklankosan/views/detail_iklankosan.php',
				);
			$this->parser->parse('templating/index', $data);
		}

		function data(){
			$data = $this->iklankosan_model->get_iklan();
			$row = array();
			foreach ($data as $iklankosan) {
				$row[] = $iklankosan;
			}
			print json_encode($row);
		}

		function data_coba(){
			$data = $this->iklankosan_model->get_iklan_coba();
			$row = array();
			foreach ($data as $iklankosan) {
				$row[] = $iklankosan;
			}
			print json_encode($row);
		}


	}
	?>