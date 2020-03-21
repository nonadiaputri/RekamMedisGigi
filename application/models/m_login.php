<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function cek_user($data) {
			$query = $this->db->get_where('staff', $data);
			return $query;
	}



	public function logout($table_name, $date){
    $this->db->insert($table_name, $date);
  }


  // public function cek_aktivitas($data){
  // 	// $ql = $this->db->select('id_staff')->from('aktivitas')->where('id_staff',$id_staff)->get();
  // 	$query = $this->db->get_where('aktivitas', $data);
  // 	return $query();
  // }

}
?>
