<?php



class Register_model extends CI_Model {

    function insert_register($data){
        $this->db->insert('tb_pengguna', $data);
    }

}



?>