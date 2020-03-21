<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dokter extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('m_pasien');
		$this->load->model('m_karyawan');
		$this->load->library('form_validation');
		$this->load->library('unit_test');
	}
	
	public function index(){
		$session_idstaff = $this->session->userdata('id_staff');
		$data['staff']=$this->m_karyawan->getDataKaryawan($session_idstaff);
		$data['h_pasien']=$this->m_karyawan->hitung_pasien();
		$data['h_dokter']=$this->m_karyawan->hitung_dokter();
		$data['h_perawat']=$this->m_karyawan->hitung_perawat();
		$data['h_tindakan']=$this->m_karyawan->hitung_tindakan();
		$data['sidebar']='member/dokter/sidebar';
		$data['content']='member/dokter/dashboard';
		$this->load->view('member/dokter/main',$data);
	}

	public function addSip(){
		$no_sip = $this->input->post('no_sip');
		$session_idstaff = $this->session->userdata('id_staff');
		$res = $this->m_karyawan->tambahData($session_idstaff, $no_sip);
		if ($res) {
			echo json_encode(array('status' => true));
		}else{
		echo json_encode(array('status'=>false));
	}
	}

	public function listPasien(){
		// $session_idkl = $this->session->userdata('id_klinik');
		// $session_idmem = $this->session->userdata('id_staff');
		$data['pasien']= $this->m_pasien->GetDataPasien();
		$data['sidebar']='member/dokter/sidebar';
		$data['content']='member/dokter/list';
		$this->load->view('member/dokter/main',$data);
	}

	public function ReadData($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$this->db->get('pasien',$data, $id_pasien);
		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/content_psn';
		$this->load->view('member/dokter/main',$data);
	}

	public function DataMedis($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['dt_medis']=$this->m_pasien->DataMedis($id_pasien)->result();
		$this->db->get('pasien',$data, $id_pasien);

		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/riwayat_peny';
		$this->load->view('member/dokter/main',$data);
	}

	function edit_data($id_pasien){
		$psn=$this->m_pasien->GetData("where id_pasien = '$id_pasien'");
		$data= array(
		'id_pasien'=>$psn[0]['id_pasien'],
		'nama'=> $psn[0]['nama'],
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
		$tempat_lahir=$_POST['tempat_lahir'];
		$tgl_lahir=$_POST['tgl_lahir'];
		$nik=$_POST['nik'];
		$jk=$_POST['jk'];
		$suku=$_POST['suku'];
		$pekerjaan=$_POST['pekerjaan'];
		$alamat=$_POST['alamat'];
		$alamat_kantor= $_POST['alamat_kantor'];
		$tlp=$_POST['tlp'];
	
		$data_update=array(
		'id_pasien'=>$id_pasien,
		'nama'=>$nama,
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
		$where = array('id_pasien'=>$id_pasien);
		// $vars = array('nama','tempat_lahir', 'tgl_lahir', 'nik', 'jk','suku','alamat','alamat_kantor','tlp');
			$verified = TRUE;
		foreach($data_update as $v) {
		   if($v=='') {
		      $verified = FALSE;
		   }
		}
		if(!$verified) {
		  echo "<script>alert('Isi seluruh field');history.go(-1);</script>";
		}else{
			$res=$this->m_pasien->UpdateData('pasien', $data_update, $where);
		redirect('c_dokter/ReadData/'.$id_pasien);
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
		$where = array('id_dtmds'=>$id_dtmds);
		$res=$this->m_pasien->UpdateData('riwayat_peny', $data_update, $where);
		if ($res >= 1){
			$this->DataMedis($id_pasien);
			
		}else {
			echo "<script>alert('data gagal diubah');</script>";
		}	
	}

	public function DataProfil(){
		$session_idmem = $this->session->userdata('id_staff');
		$data['karyawan']=$this->m_karyawan->getDataKaryawan($session_idmem);
		$data['sidebar']='member/dokter/sidebar';
		$data['content']='member/dokter/pr';
		$this->load->view('member/dokter/main',$data);
	}

	public function updateProfil(){
		$id_staff=$_POST['id_staff'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$no_sip=$_POST['no_sip'];
		$alamat=$_POST['alamat'];
		$no_hp=$_POST['no_hp'];
	
		$data_update=array(
		'id_staff'=>$id_staff,	
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'email'=>$email,
		'username'=>$username,
		'no_sip'=>$no_sip,
		'alamat'=>$alamat,
		'no_hp'=>$no_hp
		);
		$vars = array('id_staff', 'firstname','lastname', 'email', 'username', 'no_sip','alamat','no_hp');
		//var_dump($vars);
		$verified = TRUE;
		foreach($vars as $v) {
		   if(!isset($_POST[$v]) || empty($_POST[$v])) {
		      $verified = FALSE;
		   }
		}
		if(!$verified) {
		  echo "<script>alert('Isi seluruh field');history.go(-1);</script>";
		}else{
		$this->session->set_userdata('username', $username);
		$where = array('id_staff'=>$id_staff);
		$res=$this->m_karyawan->UpdateData('staff', $data_update, $where);
		redirect('c_dokter/DataProfil');
		}
	}

	public function get_data_odon($id_pasien){
		$data['data']=$this->m_pasien->get_data($id_pasien);
		if ($data) {
			echo json_encode($data);
		}else{
			echo json_encode(array('status'=>false));
		}
	}

	public function Insert_data_odon(){
		$id_pasien=$_POST['id_pasien'];
		$occlusi=$_POST['occlusi'];
		$torus_palatinus=$_POST['torus_palatinus'];
		$torus_mandibularis=$_POST['torus_mandibularis'];
		$palatum=$_POST['palatum'];
		$diastema=$_POST['diastema'];
		$gigi_anomali=$_POST['gigi_anomali'];
		$lainnya=$_POST['lainnya'];
		$ket1=$_POST['ket1'];
		$ket2=$_POST['ket2'];
		$decay=$_POST['decay'];
		$missing=$_POST['missing'];
		$fill=$_POST['fill'];

		$data_insert=array(
		'id_pasien'=>$id_pasien,	
		'occlusi'=>$occlusi,
		'torus_palatinus'=>$torus_palatinus,
		'torus_mandibularis'=>$torus_mandibularis,
		'palatum'=>$palatum,
		'diastema'=>$diastema,
		'gigi_anomali'=>$gigi_anomali,
		'lainnya'=>$lainnya,
		'ket1'=>$ket1,
		'ket2'=>$ket2,
		'decay'=>$decay,
		'missing'=>$missing,
		'fill'=>$fill
		);
		$res=$this->m_pasien->InsertData('data_medis_gigi', $data_insert);
		if ($res) {
			echo json_encode(array('status'=>true));
		}else
		echo json_encode(array('status'=>false));
		}

	public function update_data_odon(){
		$id_dtodon=$_POST['id_dtodon'];
		$id_pasien=$_POST['id_pasien'];
		$occlusi=$_POST['occlusi'];
		$torus_palatinus=$_POST['torus_palatinus'];
		$torus_mandibularis=$_POST['torus_mandibularis'];
		$palatum=$_POST['palatum'];
		$diastema=$_POST['diastema'];
		$gigi_anomali=$_POST['gigi_anomali'];
		$lainnya=$_POST['lainnya'];
		$ket1=$_POST['ket1'];
		$ket2=$_POST['ket2'];
		$decay=$_POST['decay'];
		$missing=$_POST['missing'];
		$fill=$_POST['fill'];
		
		$data_update=array(
		'occlusi'=>$occlusi,
		'torus_palatinus'=>$torus_palatinus,
		'torus_mandibularis'=>$torus_mandibularis,
		'palatum'=>$palatum,
		'diastema'=>$diastema,
		'gigi_anomali'=>$gigi_anomali,
		'lainnya'=>$lainnya,
		'ket1'=>$ket1,
		'ket2'=>$ket2,
		'decay'=>$decay,
		'missing'=>$missing,
		'fill'=>$fill
		);
		$where = array('id_dtodon'=>$id_dtodon );
		$res=$this->m_pasien->UpdateData('data_medis_gigi', $data_update, $where);
		if ($res) {
			echo json_encode(array('status'=>true));
		}else
		echo json_encode(array('status'=>false));
	}

	public function odontogram($id_pasien){
			$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
			$data['sidebar']='member/dokter/sidebar_psn';
			$data['content']='member/dokter/odontogram';
			$this->load->view('member/dokter/main',$data);
	}

	public function odt($id_pasien){
		  $data['odn']=$this->m_pasien->CekOdontogram($id_pasien);
		  $data['morethan1year'] = count($data['odn']);		
		  $vary = $data['morethan1year'];	
			$data['id_st']=$this->m_pasien->get_spes_id($id_pasien);
			$data['latest']=$this->m_pasien->get_latest_odontogram($id_pasien);
			$data['record']=$this->m_pasien->record_Odontogram($id_pasien);
			$data['data']=$this->m_pasien->get_data($id_pasien);
			$data['hitung'] = count($data['data']);
			$data['jum'] = $this->m_pasien->idOdn($id_pasien);
			$data['tot_idOdn'] = count($data['jum']);
			$data['no_odn'] = $this->m_pasien->perOdn($id_pasien);
			$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
			// if ($data['morethan1year'] != 0) {
			// 	echo "<script>alert('Pasien tidak melakukan kunjungan lebih dari satu tahun. Harap buat odontogram baru dengan klik Buat Odontogtam Baru');</script>";
			// }
			$data['sidebar']='member/dokter/sidebar_psn';
			$data['content']='member/dokter/odontogram';
			$this->load->view('member/dokter/main',$data);
			echo json_encode($data);
			exit;
	}

	public function loadPerOdn(){
		$id_start_odon = $_POST['id_start_odon'];
		$data['perOdn'] = $this->m_pasien->perOdn($id_start_odon);
		echo json_encode($data);
	}

	public function spesific_odontogram(){
		$id_pasien=$_POST['id_pasien'];
		$tgl=$_POST['tgl'];
		$date = date('Y-m-d', strtotime($tgl) );
		$data['record']=$this->m_pasien->spesific_odontogram($id_pasien, $date);
		// if ($data) {
		echo json_encode($data);
	// 	}else{
	// 		echo json_encode(array('status'=>false));
	// 	}
	}

	public function insert_odontogram(){
		$id_pasien=$_POST['id_pasien'];
		$id_start_odon=$_POST['id_start_odon'];
		$gigi=$_POST['gigi'];
		$posisi=$_POST['posisi'];
		$kondisi=$_POST['kondisi'];
		$pencatat=$_POST['pencatat'];
		$data_odon=array(
		'id_pasien'=>$id_pasien,
		'id_start_odon'=>$id_start_odon,
		'gigi'=>$gigi,
		'posisi'=>$posisi,
		'kondisi'=>$kondisi,
		'inserted_at' => date("Y-m-d"),
		'pencatat'=>$pencatat
		);
		$res=$this->m_pasien->InsertData('odontogram', $data_odon);
		if ($res) {
			echo json_encode(array('status' => true));
		}else
		echo json_encode(array('status'=>false));
	}

	public function delete_odontogram(){
		$gigi=$_POST['gigi'];
		$posisi=$_POST['posisi'];
		$kondisi=$_POST['kondisi'];
		$where = array('gigi'=>$gigi, 'posisi'=>$posisi, 'kondisi'=>$kondisi);
		$res = $this->m_pasien->DeleteOdontogram($where);
		if ($res) {
			echo json_encode(array('status' => true));
		}else{
		echo json_encode(array('status'=>false));
	}
	}

	public function buat_baru($id_pasien){
		$data_insert = array('id_pasien'=>$id_pasien,
												'created_at'=>date('Y-m-d'));
		$res = $this->m_pasien->buat_baru_odon('start_odon',$data_insert);
		// if ($res >= 1) {
			$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
			$data['sidebar']='member/dokter/sidebar_psn';
			$data['baru']=$this->m_pasien->get_data_start_odon($res)->result();
			$data['content']='member/dokter/odontogram_baru';
			$this->load->view('member/dokter/main',$data);
		// }	
	}

	// function updateTime_odon(){
	// 	$id_pasien=$_POST['id_pasien'];
	// 	$where = array ('updated_at'=>date('Y-m-d H:i:s'));
	// 	$res = $this->m_pasien->UpdateTime($where);
	// 	if ($res) {
	// 		echo json_encode(array('status' => true));
	// 	}else
	// 	echo json_encode(array('status'=>false));
	// }

	public function add_keluhan(){
		$id_pasien=$_POST['id_pasien'];
		$keluhan=$_POST['keluhan'];
		$data_add= array(
			'id_pasien' => $id_pasien,
			'tgl' => date("Y-m-d"),
			'keluhan' => $keluhan
		);
		$res=$this->m_pasien->InsertPerawatan('perawatan',$data_add);
		if ($res) {
			echo json_encode([
				'status' => true,
				'insert_id' => $res
				]);
		}else
		echo json_encode(array('status'=>false));
	}

	function insert_perawatan(){
		$id_perawatan=$_POST['id_perawatan'];
		$id_pasien=$_POST['id_pasien'];
		$temuan_masalah=$_POST['temuan_masalah'];
		$gigi=$_POST['gigi'];
		$diagnosa=$_POST['diagnosa'];
		$kode_icd=$_POST['kode_icd'];
		$kode_icd1=$_POST['kode_icd1'];
		$kode_icd2=$_POST['kode_icd2'];
		$perawatan=$_POST['perawatan'];
		$pencatat=$_POST['pencatat'];
		$data_insert=array(
		'temuan_masalah'=>$temuan_masalah,
		'gigi'=>$gigi,
		'diagnosa'=>$diagnosa,
		'kode_icd'=>$kode_icd,
		'kode_icd1'=>$kode_icd1,
		'kode_icd2'=>$kode_icd2,
		'perawatan'=>$perawatan,
		'pencatat'=>$pencatat
		);
		$where = array('id_pasien'=>$id_pasien, 'id_perawatan'=>$id_perawatan, 'tgl' => date("Y-m-d"), );
		
		$res=$this->m_pasien->UpdateData('perawatan', $data_insert, $where);
		if ($res) {
			echo json_encode(array('status'=>true));
		}else{
			echo json_encode(array('status'=>false));
		}
		}

	public function DataPerawatan($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['perawatan']=$this->m_pasien->Perawatan($id_pasien)->result();
			$data['sidebar']='member/dokter/sidebar_psn';
			$data['content']='member/dokter/perawatan';
			$this->load->view('member/dokter/main',$data);
	}

	public function spesific_perawatan($id_per){
		$data['perawatan']=$this->m_pasien->spes_Perawatan($id_per);
		if ($data) {
			echo json_encode($data);
		}else{
			echo json_encode(array('status'=>false));
		}
	}

	public function ubahdt_perawatan($id_perawatan, $id_pasien){
		$data['perawatan']=$this->m_pasien->spes_Perawatan($id_perawatan);
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
    $data['sidebar']='member/dokter/sidebar_psn';
    $data['content']='member/dokter/edit_perawatan';
    $this->load->view('member/dokter/main',$data);
	} 

	public function update_perawatan(){
		$id_perawatan=$_POST['id_perawatan'];
		$id_pasien=$_POST['id_pasien'];
		$keluhan=$_POST['keluhan'];
		$temuan_masalah=$_POST['temuan_masalah'];
		$tgl=$_POST['tgl'];
		$gigi=$_POST['gigi'];
		$diagnosa=$_POST['diagnosa'];
		$kode_icdn=$_POST['kode_icdn'];
		$kode_icd1n=$_POST['kode_icd1n'];
		$kode_icd2n=$_POST['kode_icd2n'];
		$perawatan=$_POST['perawatan'];
		$pencatat=$_POST['pencatat'];
	
		$data_update=array(
		'id_pasien'=>$id_pasien,
		'keluhan'=>$keluhan,
		'temuan_masalah'=>$temuan_masalah,	
		'tgl'=>$tgl,
		'gigi'=>$gigi,
		'diagnosa'=>$diagnosa,
		'kode_icd'=>$kode_icdn,
		'kode_icd1'=>$kode_icd1n,
		'kode_icd2'=>$kode_icd2n,
		'perawatan'=>$perawatan
		);
		$where = array('id_perawatan'=>$id_perawatan);
				$vars = array('temuan_masalah', 'gigi','diagnosa', 'kode_icd', 'kode_icd1', 'kode_icd','perawatan','pencatat');
		//var_dump($vars);
		$verified = TRUE;
		foreach($vars as $v) {
		   if(!isset($_POST[$v]) || empty($_POST[$v])) {
		      $verified = FALSE;
		   }
		}
		if(!$verified) {
		  echo "<script>alert('Isi seluruh field');history.go(-1);</script>";
		}else{
		$res=$this->m_pasien->UpdateData('perawatan', $data_update, $where);
		$this->DataPerawatan($id_pasien);
		}	
	}

	public function doc_informed($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['informed_consent'] = $this->m_pasien->get_pic($id_pasien);
		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/informed_consent';
		$this->load->view('member/dokter/main',$data);
	}

	public function doc_refusal($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['informed_consent'] = $this->m_pasien->get_pic_refusal($id_pasien);
		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/informed_refusal';
		$this->load->view('member/dokter/main',$data);
	}

	public function doc_xray($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['xray'] = $this->m_pasien->get_pic_xray($id_pasien);
		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/xray';
		$this->load->view('member/dokter/main',$data);
	}

	public function doc_hasil_lab($id_pasien){
		$data['pasien']=$this->m_pasien->DataPerPasien($id_pasien);
		$data['lab'] = $this->m_pasien->get_pic_hasil_lab($id_pasien);
		$data['sidebar']='member/dokter/sidebar_psn';
		$data['content']='member/dokter/hasil_lab';
		$this->load->view('member/dokter/main',$data);
	}

	public function upload_informed(){
		$id_pasien=$_POST['id_pasien'];
		$config['upload_path']          = APPPATH. '../assets/upload_files/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] 						= '2048';
    $config['max_width'] 					  = '1920';
    $config['max_height'] 					= '1280';
		$this->load->library('upload', $config);
		$img1=false;
		$img2=false;
		if ($this->upload->do_upload('doc_informed')) {
			$img1 = true;
			$fileData = $this->upload->data();
	 		$data['doc_informed'] = $fileData['file_name'];
		}
		if ($this->upload->do_upload('doc_acceptance')) {
			$img2 = true;
			if ($img1) {
				$fileData2 = $this->upload->data();
		    $data['doc_acceptance'] = $fileData2['file_name'];
		    $data_upload=array(
		  	'id_pasien'=>$_POST['id_pasien'],
		  	'doc_inform'=>$fileData['file_name'],
		  	'doc_acceptance'=>$fileData2['file_name'],
		  	'insert_at'=>date("Y-m-d")
		  	 );
		  	$result = $this->m_pasien->store_pic_data($data_upload);
		  	echo "<script>alert('data berhasil ditambahkan');</script>";
		  	$this->doc_refusal($id_pasien);
			}else{
				echo "<script>alert('file tidak boleh kosong');</script>";
				$this->doc_informed($id_pasien);	
			}
		}else{
		echo "<script>alert('file tidak boleh kosong');</script>";
		$this->doc_informed($id_pasien);
	}
	}	

		public function upload_xray(){
		$id_pasien=$_POST['id_pasien'];
		$jenis=$_POST['jenis'];
		$config['upload_path']          = APPPATH. '../assets/foto_medis/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] 						= '5000';
    $config['max_width'] 					  = '5000';
    $config['max_height'] 					= '5000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			 echo "<script>alert('ukuran file minimal 2MB. Panjang dan lebar foto minimal 5000 x 5000 pixel');</script>";
			 $this->doc_xray($id_pasien);
			}else{
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
			$data_file=array(
				'id_pasien'=>$id_pasien,
				'jenis'=>$jenis,
				'insert_at' => date("Y-m-d"),
				'nama_foto'=> $upload_data['file_name']
			);
			$res = $this->m_pasien->store_pic($data_file);
			if ($res == 1) {
					$this->doc_xray($id_pasien);
			}
	}
}

		public function upload_lab(){
		$id_pasien=$_POST['id_pasien'];
		$jenis=$_POST['jenis'];
		$config['upload_path']          = APPPATH. '../assets/foto_medis/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] 						= '5000';
    $config['max_width'] 					  = '5000';
    $config['max_height'] 					= '5000';
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
			 echo "<script>alert('ukuran file minimal 2MB. Panjang dan lebar foto minimal 5000 x 5000 pixel');</script>";
			 $this->doc_hasil_lab($id_pasien);
			}else{
			$upload_data = $this->upload->data();
			$data['file'] = $upload_data['file_name'];
			$data_file=array(
				'id_pasien'=>$id_pasien,
				'jenis'=>$jenis,
				'insert_at' => date("Y-m-d"),
				'nama_foto'=> $upload_data['file_name']
			);
			$res = $this->m_pasien->store_pic($data_file);
			if ($res == 1) {
					$this->doc_hasil_lab($id_pasien);
			}else {
				echo "<script>alert('data gagal diinputkan');</script>";
			}
	}
}

public function upload_refusal(){
		$id_pasien=$_POST['id_pasien'];
		$config['upload_path']          = APPPATH. '../assets/upload_files/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size'] 						= '5000';
    $config['max_width'] 					  = '5000';
    $config['max_height'] 					= '5000';
		$this->load->library('upload', $config);
		$img1=false;
		$img2=false;
		if ($this->upload->do_upload('doc_informed')) {
			$img1 = true;
			$fileData = $this->upload->data();
	 		$data['doc_informed'] = $fileData['file_name'];
		}
		if ($this->upload->do_upload('doc_refusal')) {
			$img2 = true;
			if ($img1) {
				$fileData2 = $this->upload->data();
		    $data['doc_refusal'] = $fileData2['file_name'];
		    $data_upload=array(
		  	'id_pasien'=>$_POST['id_pasien'],
		  	'doc_inform'=>$fileData['file_name'],
		  	'doc_refusal'=>$fileData2['file_name'],
		  	'insert_at'=>date("Y-m-d")
		  	 );
		  	$result = $this->m_pasien->store_pic_data($data_upload);
		  	echo "<script>alert('data berhasil ditambahkan');</script>";
		  	$this->doc_refusal($id_pasien);
			}else{
				echo "<script>alert('file tidak boleh kosong');</script>";
				$this->doc_refusal($id_pasien);	
			}
		}else{
		echo "<script>alert('file tidak boleh kosong');</script>";
		$this->doc_refusal($id_pasien);
	}	
	}

	public function hapus_doc_inform($id_doc,$id_pasien){
		$where= array('id_doc'=> $id_doc);
		$res=$this->m_pasien->DeleteData('informed_doc', $where);
		if ($res >= 1){
			$this->doc_informed($id_pasien);
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}

	public function hapus_doc_refusal($id_doc,$id_pasien){
		$where= array('id_doc'=> $id_doc);
		$res=$this->m_pasien->DeleteData('informed_doc', $where);
		if ($res >= 1){
			$this->doc_refusal($id_pasien);
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}

	public function hapus_xray($id_foto, $id_pasien){
		$where= array('id_foto'=> $id_foto);
		$res=$this->m_pasien->DeleteData('foto_doc', $where);
		if ($res >= 1){
			$this->doc_xray($id_pasien);
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}

	public function hapus_hasil_lab($id_foto, $id_pasien){
		$where= array('id_foto'=> $id_foto);
		$res=$this->m_pasien->DeleteData('foto_doc', $where);
		if ($res >= 1){
			$this->doc_hasil_lab($id_pasien);
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}


}
?>