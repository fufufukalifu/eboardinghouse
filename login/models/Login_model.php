<?php 
class Login_model extends MX_Controller{


	function cek_pengguna($data){
		$this->db->select('*');
		$this->db->from('tb_pengguna');
		$this->db->where('password', md5($data['password']));
		$where = '(username="'.$data['username'].'" or email = "'.$data['username'].'")';
       $this->db->where($where);

		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }

}
?>