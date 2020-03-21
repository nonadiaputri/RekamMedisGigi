<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function UpdateData($tabelName, $data, $where){
		$pasien=$this->db->update($tabelName, $data, $where);
		return $pasien;
	}

	public function getDataKaryawan($id_staff){
		$kar = $this->db->query("SELECT * FROM staff WHERE id_staff=$id_staff");
		return $kar->result();
	}

	public function tambahData($id_staff, $no_sip){
		$add = $this->db->query("UPDATE staff
			SET no_sip = '$no_sip'
			WHERE id_staff=$id_staff");
		return $add;
	}

	public function hitung_pasien(){
			$hitung_psn = $this->db->query("SELECT * FROM pasien");
			return $hitung_psn->num_rows();
		}

		public function hitung_dokter(){
			$hitung_dok = $this->db->query("SELECT * FROM staff WHERE job='Doctor'");
			return $hitung_dok->num_rows();
		}

		public function hitung_perawat(){
			$hitung_per = $this->db->query("SELECT * FROM staff WHERE job='Nurse'");
			return $hitung_per->num_rows();
		}

		public function hitung_tindakan(){
			$hitung_tin = $this->db->query("SELECT * FROM perawatan");
			return $hitung_tin->num_rows();
		}


}
?>