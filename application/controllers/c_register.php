<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
		$this->load->library('form_validation');
	}

	function index(){
		$this->load->view('home');
	}

	function do_insert(){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$job=$_POST['job'];
		$alamat=$_POST['alamat'];
		$no_hp=$_POST['no_hp'];
		$passwordx = md5($password);
		$data_insert=array(
		'firstname'=>$firstname,
		'lastname'=>$lastname,
		'username'=>$username,
		'password'=>$passwordx,
		'email'=>$email,
		'gender'=>$gender,
		'job'=>$job,
		'alamat'=>$alamat,
		'no_hp'=>$no_hp
		);
		$vars = array('firstname','lastname', 'username', 'password', 'email','gender','job');
		$verified = TRUE;
		foreach($vars as $v) {
		   if(!isset($_POST[$v]) || empty($_POST[$v])) {
		      $verified = FALSE;
		   }
		}
		if(!$verified) {
		  echo "<script>alert('Isi seluruh field');history.go(-1);</script>";
		}else{
			$res=$this->m_register->InsertData('staff',$data_insert);
			$this->index();
			echo "<script>alert('Register berhasil');history.go(-1);</script>";
		}	
		// 
		// if ($res >= 1){
		// 	
		// }else {
		// 	echo "data gagal diinsert";
		// }	
	}


}
?>
