<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['h_pasien']=$this->m_admin->hitung_pasien();
		$data['h_dokter']=$this->m_admin->hitung_dokter();
		$data['h_perawat']=$this->m_admin->hitung_perawat();
		$data['h_tindakan']=$this->m_admin->hitung_tindakan();
		$data['sidebar']='admin/sidebar';
		$data['content']='admin/content';
		$this->load->view('admin/index',$data);
	}

	public function pasien(){
		$data['pasien']= $this->m_admin->GetDtPasien()->result();
		$data['sidebar']='admin/sidebar';
		$data['content']='admin/pasien';
		$this->load->view('admin/index',$data);
	}
	public function dokter(){
		$data['dokter']= $this->m_admin->GetDoctor()->result();
		$data['sidebar']='admin/sidebar';
		$data['content']='admin/dokter';
		$this->load->view('admin/index',$data);
	}

	public function perawat(){
		$data['perawat']= $this->m_admin->GetPerawat()->result();
		$data['sidebar']='admin/sidebar';
		$data['content']='admin/perawat';
		$this->load->view('admin/index',$data);
	}

	public function hapus_perawat($id_staff){

		$where= array('id_staff'=> $id_staff);
		$res=$this->m_admin->DeleteData('staff', $where);
		if ($res >= 1){
			$this->perawat();
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}

	public function hapus_dokter(){
		$id_staff=$this->input->post('id_staff');
		$where= array('id_staff'=> $id_staff);
		$res=$this->m_admin->DeleteData('staff', $where);
		if ($res >= 1){
			$this->dokter();
		}else {
			echo "<script>alert('data gagal dihapus');</script>";
		}
	}

	public function perStaff($id_staff){
		$data['mem']=$this->m_admin->getDataStaff($id_staff);
		//var_dump($data);
		if ($data) {
			echo json_encode($data);
		}else{
			echo json_encode(array('status'=>false));
		}

	}

	public function ubahdt_staff($id_staff){
		$data['member']=$this->m_admin->editstaff($id_staff);
    $data['sidebar']='admin/sidebar';
    $data['content']='admin/edit-member';
    $this->load->view('admin/index',$data);
	}

	public function update_member(){
		$id_staff=$_POST['id_staff'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$email=$_POST['email'];
		$job=$_POST['job'];
		$gender=$_POST['gender'];
		$alamat=$_POST['alamat'];
		$no_hp=$_POST['no_hp'];
		$no_sip=$_POST['no_sip'];

		$data_update=array(
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'username'=>$username,	
		'email'=>$email,
		'job'=>$job,
		'gender'=>$gender,
		'alamat'=>$alamat,
		'no_hp'=>$no_hp,
		'no_sip'=>$no_sip
		);
		//var_dump($id_staff);
		$where = array('id_staff'=>$id_staff);

		$vars = array('firstname','lastname', 'username', 'email', 'job','gender','alamat','no_hp','no_sip');
		$verified = TRUE;
		foreach($vars as $v) {
		   if(!isset($_POST[$v]) || empty($_POST[$v])) {
		      $verified = FALSE;
		   }
		}
		if(!$verified) {
		  echo "<script>alert('Isi seluruh field');history.go(-1);</script>";
		}else{
			$res=$this->m_admin->UpdateData('staff', $data_update, $where);
			if ($job=='Nurse') {
				$this->perawat();
			}else {
				$this->dokter();
			}
		}	
	}

	public function ReadData($id_pasien){
		$data['pasien']=$this->m_admin->DataPerPasien($id_pasien)->result();
		$data['sidebar']='admin/sidebar_psn';
		$data['content']='admin/content_pasien';
		$this->load->view('admin/index',$data);
	}

	//tdk perlu masuk class diagram cont
	public function DataMedis($id_pasien){
		$data['pasien']=$this->m_admin->DataPerPasien($id_pasien)->result();
		$data['dt_medis']=$this->m_admin->DataMedis($id_pasien)->result();
		$data['sidebar']='admin/sidebar_psn';
		$data['content']='admin/content_pasien';
		$this->load->view('admin/index',$data);
	}


}
?>