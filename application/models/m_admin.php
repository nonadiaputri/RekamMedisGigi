<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function GetDtPasien(){
		$pasien = $this->db->query('SELECT * FROM pasien');
		return $pasien;
	}

	public function GetDoctor(){
		$dokter=$this->db->query("SELECT *,CONCAT(firstname, ' ', lastname) as fullname FROM staff where job='Doctor'");
		return $dokter;
	}

	public function GetPerawat(){
		$perawat=$this->db->query("SELECT *,CONCAT(firstname, ' ', lastname) as fullname FROM staff where job='Nurse'");
		return $perawat;
	}

	public function DeleteData($tabelName,$where){
		$res=$this->db->delete($tabelName,$where);
		return $res;
	}

	public function editstaff($id_staff){
		$staff=$this->db->query("SELECT * FROM staff WHERE id_staff='$id_staff'");
		return $staff->result();
	}

	public function UpdateData($tabelName, $data, $where){
		$res=$this->db->update($tabelName, $data, $where);
		return $res;
	}

	public function getDataStaff($id_staff){
		$mem=$this->db->query("SELECT * FROM staff where id_staff='$id_staff'");
		if ($mem->num_rows() > 0) {
        return $mem->result();
    }
    return false;
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

	// 	public function DataPerPasien($id_pasien){
	// 	$pasien=$this->db->query("SELECT * FROM pasien where id_pasien=$id_pasien");
	// 	return $pasien;
	// }

	// 	public function DataMedis($id_pasien){
	// 	$pasien=$this->db->query("SELECT * FROM data_medis where id_pasien=$id_pasien");
	// 	return $pasien;
	// }



}
?>
