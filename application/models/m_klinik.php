<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_klinik extends CI_Model {

	public function GetDataKlinik($session_id){
		$klinik=$this->db->query("SELECT * FROM klinik where id_perawat='$session_id'");
		return $klinik;
	}

	// public function GetKlinik(){
	// 	$klinik=$this->db->query("SELECT * FROM klinik where ")
	// }

}
?>
