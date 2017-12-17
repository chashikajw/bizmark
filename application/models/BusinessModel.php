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
	public function insertPost($postInfo){
		try {
			$this->db->insert('posts', $postInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get business
	public function select(){
		try{
			$result = $this->db->get('business_view');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get business info
	public function getBusiness($id){
		try{
			$this->db->where('id', $id);
			$result = $this->db->get('business_view');
			return $result->result()[0];
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get posts
	public function selectpost(){
		try{
			$this->db->order_by("id", "DESC");
			$result = $this->db->get('posts');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}


	// Get business by category id
	public function selectcategory($categoryId){
		try {
			$result = $this->db->get_where('business', array('category_id' => $categoryId));
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Search business
	public function search($keyword){
		$this->db->like('name',$keyword);
		$this->db->or_like('description',$keyword);
		$query = $this->db->get('business');
		return $query->result();
	}

	// Get category list
	public function getCategoryList(){
		try{
			$result = $this->db->get('category');
			return $result->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get Business Report All months
	public function getBusinessReportAll($id){
		try{
			$query = $this->db->query('CALL getBusinessReportAll(?)', array($id));
			$result = $query->result();

			// free result
			mysqli_next_result( $this->db->conn_id );
			$query->free_result();

			return $result;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get reviews
	public function getReviews($businessId){
		try{
			$this->db->where('business_id', $businessId);
			$query = $this->db->get('review_view');
			return $query->result();
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get Top Users (Most reviewd)
	public function getTopUsers($id){
		try{
			$query = $this->db->query('CALL getTopUsers(?)', array($id));
			$result = $query->result();

			// free result
			mysqli_next_result( $this->db->conn_id );
			$query->free_result();

			return $result;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}

	// Get Subscribers
	public function getSubscribers($id){
		try{
			$query = $this->db->query('CALL getSubscribers(?)', array($id));
			$result = $query->result();

			// free result
			mysqli_next_result( $this->db->conn_id );
			$query->free_result();

			return $result;
		} catch (Exception $err) {
			return $err->getMessage();
		}
	}



	// next result
	function next_result(){
		if (is_object($this->conn_id)){
			return mysqli_next_result($this->conn_id);
		}
	}

}
