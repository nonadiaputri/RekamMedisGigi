<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_perawat extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_pasien');
		$this->load->library('form_validation');
	}
	
	public function index()
	{
		//$data['pasien']= $this->m_pasien->GetDataPasien();
		$data['sidebar']='member/perawat/sidebar';
		$data['content']='member/perawat/dashboard';
		$this->load->view('member/perawat/main',$data);
	}

	public function listPasien(){
		$data['pasien']= $this->m_pasien->GetDataPasien();
		$data['sidebar']='member/perawat/sidebar';
		$data['content']='member/perawat/content';
		$this->load->view('member/perawat/main',$data);
	}

	public function ReadData($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien)->result();
		$this->db->get('patient',$data, $id_pasien);
		$data['sidebar']='member/perawat/sidebar_psn';
		$data['content']='member/perawat/content_psn';
		$this->load->view('member/perawat/main',$data);
	}

	public function DataMedis($id_pasien){
		$data['pasien']=$this->m_pasien->DataMedis($id_pasien)->result();
		$this->db->get('patient',$data, $id_pasien);
		$data['sidebar']='member/perawat/sidebar_psn';
		$data['content']='member/perawat/datamedis';
		$this->load->view('member/perawat/main',$data);
	}

	function edit_data($id_pasien){
		$psn=$this->m_pasien->GetData("where id_pasien = '$id_pasien'");
		$data= array(
		'id_pasien'=>$psn[0]['id_pasien'],
		'nama'=> $psn[0]['nama'],
		'nomor_pasien'=> $psn[0]['nomor_pasien'],
		'tempat_lahir'=> $psn[0]['tempat_lahir'],
		'tgl_lahir'=> $psn[0]['tgl_lahir'],
		'nik'=> $psn[0]['nik'],
		'jk'=> $psn[0]['jk'],
		'suku'=>$psn[0]['suku'],
		'pekerjaan'=> $psn[0]['pekerjaan'],
		'alamat'=> $psn[0]['alamat'],
		'alamat_kantor'=> $psn[0]['alamat_kantor'],
		'tlp'=> $psn[0]['tlp']
		);
		$data['psn'] = $this->m_pasien->GetData();
		// $this->template->load('admin/static', 'admin/form_edit',$data);
	}

	function do_update(){
		$id_pasien=$_POST['id_pasien'];
		$nama=$_POST['nama'];
		$nomor_pasien=$_POST['nomor_pasien'];
		$tempat_lahir=$_POST['tempat_lahir'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$nik=$_POST['nik'];
		$jk=$_POST['jk'];
		$suku=$_POST['pekerjaan'];
		$alamat=$_POST['alamat'];
		$alamat_kantor= $_POST['alamat_kantor'];
		$tlp=$_POST['tlp'];
	
		$data_update=array(
		'id_pasien'=>$id_pasien,
		'nama'=>$nama,
		'nomor_pasien'=>$nomor_pasien,
		'tempat_lahir'=>$tempat_lahir,
		'tgl_lahir'=>$tgl_lahir,
		'nik'=>$nik,
		'jk'=>$jk,
		'suku'=>$suku,
		'alamat'=>$alamat,
		'alamat_kantor'=>$alamat_kantor,
		'tlp'=>$tlp
		);
		//var_dump($data_update);
		$where = array('id_pasien'=>$id_pasien);
		$res=$this->m_pasien->UpdateData('patient', $data_update, $where);
		//var_dump($res);
		if ($res >= 1){
			$this->session->set_flashdata('pesan','update data sukses');
			$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien)->result();
			$this->db->get('patient',$data, $id_pasien);
			$data['sidebar']='member/perawat/sidebar_psn';
			$data['content']='member/perawat/content_psn';
			$this->load->view('member/perawat/main',$data);
			
		}else {
			echo "data gagal diinsert";
		}	
	}

	function update_dtmds(){
		$id_dtmds=$_POST['id_dtmds'];
		$id_pasien=$_POST['id_pasien'];
		$tekanan_darah=$_POST['tekanan_darah'];
		$jantung=$_POST['jantung'];
		$diabetes=$_POST['diabetes'];
		$gol_darah=$_POST['gol_darah'];
		$hemofilia=$_POST['hemofilia'];
		$hepatitis=$_POST['hepatitis'];
		$gastring=$_POST['gastring'];
		$alergi_obat=$_POST['alergi_obat'];
		$alergi_mknan= $_POST['alergi_mknan'];
		$penyakit_lain=$_POST['penyakit_lain'];
	
		$data_update=array(
		'id_dtmds'=>$id_dtmds,	
		'id_pasien'=>$id_pasien,
		'tekanan_darah'=>$tekanan_darah,
		'jantung'=>$jantung,
		'diabetes'=>$diabetes,
		'gol_darah'=>$gol_darah,
		'hemofilia'=>$hemofilia,
		'hepatitis'=>$hepatitis,
		'gastring'=>$gastring,
		'alergi_obat'=>$alergi_obat,
		'alergi_mknan'=>$alergi_mknan,
		'penyakit_lain'=>$penyakit_lain
		);
		//var_dump($data_update);
		$where = array('id_dtmds'=>$id_dtmds);
		$res=$this->m_pasien->UpdateData('data_medis', $data_update, $where);
		//var_dump($res);
		if ($res >= 1){
			$this->session->set_flashdata('pesan','update data sukses');
			$data['pasien']=$this->m_pasien->DataMedis($id_dtmds)->result();
			$this->db->get('data_medis',$data, $id_dtmds);
			$data['sidebar']='member/perawat/sidebar_psn';
			$data['content']='member/perawat/datamedis';
			$this->load->view('member/perawat/main',$data);
			
		}else {
			echo "data gagal diinsert";
		}	
	}

	public function DataPerawatan($id_pasien){
		$data['pasien']=$this->m_pasien->Perawatan($id_pasien)->result();
		//$this->db->get('perawatan',$data, $id_pasien);
		$data['sidebar']='member/perawat/sidebar_psn';
		$data['content']='member/perawat/perawatan';
		$this->load->view('member/perawat/main',$data);
	}

	public function DataProfil(){
		// $data['profil']=$this->m_login->GetProfil($this->session->userdata('id'))->result();
		// $this->db->get('member',$data, $id);
		$data['sidebar']='member/perawat/sidebar';
		$data['content']='member/perawat/pr';
		$this->load->view('member/perawat/main',$data);

	}

	function do_insert(){
		$id_pasien=$_POST['id_pasien'];
		$tgl=$_POST['tgl'];
		$gigi=$_POST['gigi'];
		$diagnosa=$_POST['diagnosa'];
		$kode_icd=$_POST['kode_icd'];
		$perawatan=$_POST['perawatan'];
		$pencatat=$_POST['pencatat'];
		
		$data_insert=array(
		'id_pasien'=>$id_pasien,
		'tgl'=>$tgl,
		'gigi'=>$gigi,
		'diagnosa'=>$diagnosa,
		'kode_icd'=>$kode_icd,
		'perawatan'=>$perawatan,
		'pencatat'=>$pencatat
		);
		var_dump($data_insert);
		$res=$this->m_pasien->InsertData('perawatan', $data_insert);
		if ($res >= 1){
			$this->session->set_flashdata('pesan','tambah data sukses');
			$data['pasien']=$this->m_pasien->Perawatan($id_pasien)->result();
			$this->db->get('perawatan',$data, $id_pasien);
			$data['sidebar']='member/perawat/sidebar_psn';
			$data['content']='member/perawat/perawatan';
			$this->load->view('member/perawat/main',$data);
			
		}else {
			echo "data gagal diinsert";
		}	
	}

	public function TambahPasien(){
		$data['sidebar']='member/perawat/sidebar';
		$data['content']='member/perawat/tambah_pasien';
		$this->load->view('member/perawat/main',$data);

	}

	function insert_pasien(){
		$nama=$_POST['nama'];
		$nomor_pasien=$_POST['nomor_pasien'];
		$tempat_lahir=$_POST['tempat_lahir'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$nik=$_POST['nik'];
		$jk=$_POST['jk'];
		$suku=$_POST['suku'];
		$pekerjaan=$_POST['pekerjaan'];
		$alamat=$_POST['alamat'];
		$alamat_kantor=$_POST['alamat_kantor'];
		$tlp=$_POST['tlp'];
		
		$data_pasien=array(
		'nama'=>$nama,
		'nomor_pasien'=>$nomor_pasien,
		'tempat_lahir'=>$tempat_lahir,
		'tgl_lahir'=>$tgl_lahir,
		'nik'=>$nik,
		'jk'=>$jk,
		'suku'=>$suku,
		'pekerjaan'=>$pekerjaan,
		'alamat'=>$alamat,
		'alamat_kantor'=>$alamat_kantor,
		'tlp'=>$tlp
		);
		//$res=$this->m_pasien->TambahPasien($data_pasien, $data_medis);
		$res=$this->m_pasien->InsertPasien('patient', $data_pasien);
		if ($res) {
			echo json_encode(array(['status' => true],['insert_id'=> $res]));
		}else
		echo json_encode(array('status'=>false));
	}

	function insert_dtmds(){
		//$last_id = $this->db->insert_id();
		//$data['last_id'] =$this->m_pasien->db->select_max("id_pasien")->get('patient');

		$tekanan_darah=$_POST['tekanan_darah'];
		$jantung=$_POST['jantung'];
		$diabetes=$_POST['diabetes'];
		$gol_darah=$_POST['gol_darah'];
		$hemofilia=$_POST['hemofilia'];
		$hepatitis=$_POST['hepatitis'];
		$gastring=$_POST['gastring'];
		$alergi_obat=$_POST['alergi_obat'];
		$alergi_mknan=$_POST['alergi_mknan'];
		$penyakit_lain=$_POST['penyakit_lain'];
		
		$data_medis=array(
		'tekanan_darah'=>$tekanan_darah,
		'jantung'=>$jantung,
		'diabetes'=>$diabetes,
		'gol_darah'=>$gol_darah,
		'hemofilia'=>$hemofilia,
		'hepatitis'=>$hepatitis,
		'gastring'=>$gastring,
		'alergi_obat'=>$alergi_obat,
		'alergi_mknan'=>$alergi_mknan,
		'penyakit_lain'=>$penyakit_lain
		);
		$res=$this->m_pasien->InsertData('data_medis', $data_medis);
		if ($res) {
			echo json_encode(array('status' => true));
		}else
		echo json_encode(array('status'=>false));
	
	}

	public function update_perawatan(){
		$id_perawatan=$_POST['id_perawatan'];
		$tgl=$_POST['tgl'];
		$gigi=$_POST['gigi'];
		$diagnosa=$_POST['diagnosa'];
		$kode_icd=$_POST['kode_icd'];
		$perawatan=$_POST['perawatan'];
		$pencatat=$_POST['pencatat'];
		$id_pasien=$_POST['id_pasien'];
	
		$data_medis=array(
		'id_perawatan'=>$id_perawatan,	
		'tgl'=>$tgl,
		'gigi'=>$gigi,
		'diagnosa'=>$diagnosa,
		'kode_icd'=>$kode_icd,
		'perawatan'=>$perawatan,
		'pencatat'=>$pencatat,
		'id_pasien'=>$id_pasien
		);
		$where = array('id_perawatan'=>$id_perawatan);
		$res=$this->m_pasien->UpdateData('perawatan', $data_update, $where);
		//var_dump($res);
		if ($res >= 1){
			$this->session->set_flashdata('pesan','update data sukses');
			$data['pasien']=$this->m_pasien->Perawatan($id_pasien)->result();
			$this->db->get('perawatan',$data, $id_pasien);
			$data['sidebar']='member/perawat/sidebar_psn';
			$data['content']='member/perawat/perawatan';
			$this->load->view('member/perawat/main',$data);
			
		}else {
			echo "data gagal diinsert";
		}	

		
	}

	public function updateProfil(){
		$id=$_POST['id'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$fullname=$_POST['fullname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
	
		$data_update=array(
		'id'=>$id,	
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'fullname'=>$fullname,
		'email'=>$email,
		'username'=>$username
		);
		$this->session->set_userdata('firstname', $firstname);
		$this->session->set_userdata('lastname', $lastname);
		$this->session->set_userdata('fullname', $fullname);
		$this->session->set_userdata('email', $email);
		$this->session->set_userdata('username', $username);
		//var_dump($data_update);
		$where = array('id'=>$id);
		$res=$this->m_pasien->UpdateData('member', $data_update, $where);
		//var_dump($res);
		if ($res >= 1){
			$this->session->set_flashdata('pesan','update data sukses');
			redirect('c_perawat/DataProfil');
			
		}else {
			echo "data gagal diinsert";
		}	
	}

	public function odontogram($id_pasien){
		// $data['sidebar']='member/dokter/sidebar';
		// $data['content']='member/dokter/dashboard';
		// $this->load->view('member/dokter/main',$data);
		$data['pasien']=$this->m_pasien->DtOdontogram($id_pasien)->result();
		$this->db->get('odontogram', $data, $id_pasien);
		$data['sidebar']='member/perawat/sidebar_psn';
		$data['content']='member/perawat/odon';
		$this->load->view('member/perawat/main',$data);
	}

	public function ubahdt_perawatan($id_perawatan){
		$data['pasien']=$this->m_pasien->DataPerawatan($id_perawatan)->result();
		$this->db->get('perawatan',$data, $id_perawatan);
		$data['sidebar']='member/perawat/sidebar_psn';
		$data['content']='member/perawat/edit_perawatan';
		$this->load->view('member/perawat/main',$data);

	}





}
?>
