<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	public function InsertData($tableName, $where){
		$res=$this->db->insert($tableName, $where);
		return $res;
	}
}