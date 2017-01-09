<?php 



/**

* 

*/

class Iklankosan_model extends CI_Model

{

	#Start Function Untuk sidebar bank soal#
	public function get_iklan(){
		$this->db->select('*');
		$this->db->from('tb_iklankosan');
		$query = $this->db->get();
		return $query->result();
	}
	#END Function untuk sidebar bank soal#


	#Start Function Untuk sidebar bank soal#
	public function get_iklan_coba(){
		$tipe = $this->input->post('tipe');


		if(($this->input->post('internet'))) {
			$this->db->where('internet',$this->input->post('internet'));
		}

		if(($this->input->post('wc'))) {
			$this->db->where('wc',$this->input->post('wc'));
		}
		if(($this->input->post('dapur'))) {
			$this->db->where('dapur',$this->input->post('dapur'));
		}
		$this->db->where('tipe',$tipe);
		$this->db->select('*');
		$this->db->from('tb_iklankosan');
		$query = $this->db->get();
		return $query->result();
	}
	#END Function untuk sidebar bank soal#


	public function get_single_kosan($id){
		$this->db->where('id',$id);
		$this->db->select('*');
		$this->db->from('tb_iklankosan');
		$query = $this->db->get();
		return $query->result();
	}
}



?>