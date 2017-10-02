<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{

	public function insertUser($userInfo){

		try {
            $this->db->insert('user', $userInfo);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }

	}



}
