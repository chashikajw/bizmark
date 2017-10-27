<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessModel extends CI_Model {

	public function insert($shopInfo) {

		try {
			$this->db->insert('business', $shopInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}

	}

	public function select(){
		try{
			$result = $this->db->get('business');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}
}
