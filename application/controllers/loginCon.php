<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCon extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function index() {
		$this->template->load('static','login');
	}

	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('m_user'); // load model_user
		$hasil = $this->m_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				// $sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				$this->template->load('admin/static','admin/dashboard');
			}
			elseif ($this->session->userdata('level')=='dokter') {
			$this->template->load('member/static','member/weel_mem');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	function logout(){
		session_destroy();
		redirect('login');
 
	}
	
}
}
