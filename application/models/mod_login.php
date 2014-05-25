<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_login extends CI_Model {
	
	private $users = 'users';
	
	function validate($data){
		$this->db->where($data);
		
		$query = $this->db->get($this->users);
		
		return ($query->num_rows() > 0) ? TRUE : FALSE;
	}
	
	function getUserDetails($username){
		$this->db->where('username', $username);
		
		$query = $this->db->get($this->users);
		
		return ($query->num_rows() > 0) ? $query->row() : FALSE;
	}
}