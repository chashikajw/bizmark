<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class businessModel extends CI_Model {

	public function insertt($shopInfo) {

		try {
			$this->db->insert('shop', $shopInfo);

			$ret = $this->db->insert_id() + 0;
			return $ret;
		} catch (Exception $err) {
			return $err->getMessage();
		}

	}

}
