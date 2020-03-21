<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {

	public function GetDataPasien(){
		$query= "SELECT * FROM pasien";
		// id_pasien in (SELECT id_pasien FROM odontogram WHERE pencatat=$session_idmem)
		// 	AND
		$res= $this->db->query($query);
		return $res;
	}

	// public function GetDataPasien2($session_idkl, $session_idmem){
	// 	$this->db->select('*');
	// 	$this->db->where(array('id_klinik'=>$session_idkl, 'pencatat'=>$session_idmem));
	// 	$res = $this->db->get('pasien');
	// 	return $res;
	// }
	
	public function DataPerPasien($id_pasien){
		$pasien=$this->db->query("SELECT * FROM pasien where id_pasien=$id_pasien");
		return $pasien->result();
	}

	public function DataMedis($id_pasien){
		$pasien=$this->db->query("SELECT * FROM riwayat_peny where id_pasien=$id_pasien");
		return $pasien;
	}

	public function GetData($where=""){
		$pasien=$this->db->query('select * from pasien '.$where);
		return $pasien->result_array();
	}

	public function UpdateData($tabelName, $data, $where){
		$pasien=$this->db->update($tabelName, $data, $where);
		return $pasien;
	}

	// SELECT p.*, m.firstname, pt.nama
	// 		FROM perawatan p 
	// 		JOIN member m
	// 		ON p.pencatat = m.id_staff
	// 		JOIN pasien pt
	// 		ON p.id_pasien = pt.id_pasien
	// 		WHERE id_perawatan=$id_perawatan 

	public function Perawatan($id_pasien){
		$pasien=$this->db->query("SELECT p.*, m.firstname
			FROM perawatan p JOIN staff m
			ON p.pencatat = m.id_staff
			WHERE id_pasien='$id_pasien'");
		return $pasien;
	}

	public function InsertData($tabelName, $data){
		$pasien=$this->db->insert($tabelName, $data);
		return $pasien;
	}

	public function InsertPerawatan($tabelName, $id_pasien){
		$pasien=$this->db->insert($tabelName, $id_pasien);
		$id_per = $this->db->insert_id();
		return $id_per;
	}

	public function DataPerawatan($id_perawatan){
		$pasien=$this->db->query("SELECT p.*, m.firstname, pt.nama
			FROM perawatan p 
			JOIN staff m
			ON p.pencatat = m.id_staff
			JOIN pasien pt
			ON p.id_pasien = pt.id_pasien
			WHERE id_perawatan=$id_perawatan ");
		return $pasien;
	}

	public function InsertPasien($tabelName, $data){
		$this->db->insert($tabelName, $data);
		$last_id = $this->db->insert_id();
		return  $last_id;
	}

	public function DtOdontogram($id_pasien){
		$odontogram=$this->db->query("SELECT id_odontogram,id_start_odon, id_pasien, gigi, posisi, kondisi FROM odontogram where id_pasien=$id_pasien");
		if ($odontogram->row_array()>0) {
			return $odontogram->result_array();
		}
		return 0;
	}

	public function DeleteOdontogram($where){
		$this->db->where($where);
		$res = $this->db->delete('odontogram');
		return $res; 
	}

	// public function UpdateTime($where){
	// 	$this->db->set('column_header', $value); //value that used to update column  
	// 	$this->db->where('column_id', $column_id_value); //which row want to upgrade  
	// 	$this->db->update('table_name');  //table name
	// 	$query1="SELECT * FROM odontogram WHERE inserted_at > select max(time) - interval 3 minute AND id_pasien=$where";
	// 	return $res;  
	// }

	public function record_Odontogram($id_pasien){
		$query = "SELECT id_pasien, DATE_FORMAT(inserted_at, '%d-%m-%Y') as kunjungan, m.firstname , id_start_odon
		FROM odontogram o JOIN staff m
		ON o.pencatat = m.id_staff
		WHERE id_pasien=$id_pasien 
		GROUP BY DATE(inserted_at)
		order by id_pasien,inserted_at desc ";
		$record = $this->db->query($query);
		return $record->result_array();
	}

	public function get_data($id_pasien){
		$res=$this->db->query("SELECT * FROM data_medis_gigi WHERE id_pasien=$id_pasien");
		return $res->result();
	}

	public function spesific_odontogram($id_pasien, $date){
		$query = "SELECT * FROM odontogram WHERE inserted_at = '$date' AND id_pasien=$id_pasien";
    $record = $this->db->query($query);
    if ($record->num_rows() > 0) {
        return $record->result();
    }
    return false;
	}

	public function perOdn($id_start_odon){
		$query = "SELECT * FROM odontogram WHERE id_start_odon=$id_start_odon";
		$no_odn = $this->db->query($query);
		return $no_odn->result();
	}

	public function idOdn($id_pasien){
		$query = "SELECT id_start_odon FROM odontogram WHERE id_pasien=$id_pasien group by id_start_odon DESC";
		$jum = $this->db->query($query);
		return $jum->result();
	}

	public function spes_Perawatan($id_perawatan){
		$query = "SELECT p.*, m.firstname, pt.nama
			FROM perawatan p 
			JOIN staff m
			ON p.pencatat = m.id_staff
			JOIN pasien pt
			ON p.id_pasien = pt.id_pasien
			WHERE id_perawatan='$id_perawatan' ";
    $perawatan = $this->db->query($query);
    if ($perawatan->num_rows() > 0) {
        return $perawatan->result();
    }
    return false;
	}

	public function buat_baru_odon($tabelName, $data){
		$odon_new=$this->db->insert($tabelName, $data);
		$last_id = $this->db->insert_id();
		return $last_id;
	}

	public function get_spes_id($id_pasien){
		$query = "SELECT id_start_odon, id_pasien FROM start_odon WHERE id_pasien = $id_pasien order by created_at DESC limit 1";
		$res = $this->db->query($query);
		if ($res->num_rows() > 0) {
        return $res->result();
    }
    return false;
	}

	public function get_latest_odontogram($id_pasien){
		$query1 = "SELECT id_odontogram,id_start_odon, id_pasien, gigi, posisi, kondisi FROM odontogram WHERE id_pasien=$id_pasien 
		AND id_start_odon=(SELECT id_start_odon FROM start_odon 
		WHERE id_pasien=$id_pasien 
		AND created_at=(SELECT MAX(created_at) as tgl 
		FROM start_odon WHERE id_pasien=$id_pasien))";
		$res = $this->db->query($query1);
		return $res->result();
	}

	public function get_data_start_odon($id_start_odon){
		$odontogram_new = $this->db->query("SELECT * FROM start_odon WHERE id_start_odon=$id_start_odon");
		return $odontogram_new;
	}


	public function CekOdontogram($id_pasien){
		$query = "SELECT * FROM odontogram WHERE id_pasien=$id_pasien AND inserted_at < DATE_SUB(NOW(), INTERVAL 1 YEAR)";
		$odn = $this->db->query($query);
		return $odn->result();
		} 


		function get_pic($id_pasien){
			$informed_consent = $this->db->query("SELECT * FROM informed_doc WHERE id_pasien=$id_pasien AND doc_acceptance!=''");
			return $informed_consent->result();
		}

		function get_pic_refusal($id_pasien){
			$informed_consent = $this->db->query("SELECT * FROM informed_doc WHERE id_pasien=$id_pasien AND doc_refusal!=''");
			return $informed_consent->result();
		}

		public function DeleteData($tabelName,$where){
		$res=$this->db->delete($tabelName,$where);
		return $res;
	}
	 
		//save picture data to db
		function store_pic_data($data_file){
		$query = $this->db->insert('informed_doc', $data_file);
		return $query;
		}

		function get_pic_xray($id_pasien){
			// $this->db->order_by('id_file', 'ASC');
			$this->db->where("(jenis= 'xray')");
			$this->db->where("(id_pasien= '$id_pasien')");
			$persetujuan = $this->db->get('foto_doc');
			return $persetujuan->result();
		}

		function get_pic_hasil_lab($id_pasien){
			// $this->db->order_by('id_file', 'ASC');
			$this->db->where("(jenis= 'hasil_lab')");
			$this->db->where("(id_pasien= '$id_pasien')");
			$persetujuan = $this->db->get('foto_doc');
			return $persetujuan->result();
		}

		//save picture data to db
		function store_pic($data_file){
		$query = $this->db->insert('foto_doc', $data_file);
		return $query;
		}

		



}
?>
