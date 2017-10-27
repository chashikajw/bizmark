<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessModel extends CI_Model {

	public function insertBusiness($businessInfo) {

		try {
			$this->db->insert('business', $businessInfo);

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

	public function search($keyword){s
		try{
			$this->db->like('item_name',$keyword);
    		$query  =   $this->db->get('business');
    		return $query->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	

	public function getCategoryList(){
		try{
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}
}
