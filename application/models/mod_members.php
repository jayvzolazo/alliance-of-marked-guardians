<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mod_members extends CI_Model {
	private $members = 'members';
	
	function get($id = NULL){
		if(!is_null($id)){
			$this->db->where('member_id', $id);
		}
		$this->db->from($this->members);
		
		$query = $this->db->get();
		
		if(!is_null($id)) return $query->row();
		
		return $query->result();
	}
}