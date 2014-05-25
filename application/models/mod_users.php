<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_users extends CI_Model {
	
	private $users = 'users';
	
	function getUserDetails($data = NULL, $id = NULL){
		if(!is_null($id)) {
			$this->db->where('user_id', $id);
		}
		else{
			$this->db->where($data);
		}
		
		$query = $this->db->get($this->users);
		
		if($query->num_rows() > 0){
			if(!is_null($id)) {
				return $query->row();
			}
			else{
				return $query->result();
			}
		}
		else{
			return FALSE;
		}
	}
}