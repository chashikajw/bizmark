<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BusinessModel extends CI_Model {

	// Add new business
	public function insert($businessInfo) {
		try {
			$this->db->insert('business', $businessInfo);
			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// update business
	public function update($id, $businessInfo) {
		try {
			$this->db->where('id', $id);
			$ret = $this->db->update('business', $businessInfo);
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Add new post
	public function insertPost($postInfo) {
		try {
			$this->db->insert('advertisement', $postInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get business
	public function select() {
		try {
			$result = $this->db->get('business_view');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get business info
	public function getBusiness($id) {
		try {
			$this->db->where('id', $id);
			$result = $this->db->get('business_view');
			return $result->result()[0];
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get posts
	public function selectpost() {
		try {
			$this->db->order_by("id", "DESC");
			$result = $this->db->get('advertisement');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get business by category id
	public function selectcategory($categoryId) {
		try {
			$result = $this->db->get_where('business', array('category_id' => $categoryId));
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Search business
	public function search($keyword) {
		$this->db->like('name', $keyword);
		$this->db->or_like('description', $keyword);
		$query = $this->db->get('business');
		return $query->result();
	}

	// Get category list
	public function getCategoryList() {
		try {
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

}
