<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_admin');
		$this->load->model('m_karyawan');
		$this->load->library('form_validation');
		//$this->load->module('templates');
	}


	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => substr(md5($this->input->post('password', TRUE)), 0, 8)
			);
		$hasil = $this->m_login->cek_user($data);
		$sess_array=array();
		if ($hasil->num_rows() == 1) {
				foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['username'] = $sess->username;
				$sess_data['job'] = $sess->job;
				$sess_data['id_staff'] = $sess->id_staff;
				$this->session->set_userdata($sess_data);
				$this->session->set_userdata('id_staff', $sess->id_staff);
				//$job = $sess_data->job;
				$job = $this->session->userdata('job');
				$id_staff = $this->session->userdata('id_staff');
			}
			if ($job =='admin') {
				$data['h_pasien']=$this->m_admin->hitung_pasien();
				$data['h_dokter']=$this->m_admin->hitung_dokter();
				$data['h_perawat']=$this->m_admin->hitung_perawat();
				$data['h_tindakan']=$this->m_admin->hitung_tindakan();
				 $data['sidebar']='admin/sidebar';
			   $data['content']='admin/content';
				 $this->load->view('admin/index',$data);
		}else if ($job=='Doctor') {
				$data['staff']=$this->m_karyawan->getDataKaryawan($id_staff);
				// var_dump($staff);
				$data['h_pasien']=$this->m_karyawan->hitung_pasien();
				$data['h_dokter']=$this->m_karyawan->hitung_dokter();
				$data['h_perawat']=$this->m_karyawan->hitung_perawat();
				$data['h_tindakan']=$this->m_karyawan->hitung_tindakan();
				 $data['sidebar']='member/dokter/sidebar';
				 $data['content']='member/dokter/dashboard';
			   $this->load->view('member/dokter/main',$data);
			
			}else{
					$data['h_pasien']=$this->m_karyawan->hitung_pasien();
					$data['h_dokter']=$this->m_karyawan->hitung_dokter();
					$data['h_perawat']=$this->m_karyawan->hitung_perawat();
					$data['h_tindakan']=$this->m_karyawan->hitung_tindakan();
				  $data['sidebar']='member/perawat/sidebar';
					$data['content']='member/perawat/dashboard';
					$this->load->view('member/perawat/main',$data); 	 
		}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	// function cek_act(){
	// 	$act = array('id_staff'=>$this->session->userdata('id_staff'));
	// 	$this->load->model('m_login');
	// 	$act = $this->m_login->cek_aktivitas($act);
	// 	if ($act->num_rows()== null) {
	// 		alert("n");
	// 	return false;
	// 	}else
	// 	alert("y");
	// 	return true;

	// }

	function logout(){
		// $temp = $this->session->userdata('id_staff');
		// $date = array(
		// 'id_staff'=>$temp,
		// 'logout_time'=>date('d-m-y h:i:s')
		// );
		// $this->m_login->logout('aktivitas',$date);
		session_destroy();
		$this->load->view('home');
 
	}
	
}
?>