<?php
class M_users extends CI_Model {
	

	function check_login($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('t_user');
		if ($query->num_rows()==1) {
			return $query->row_array();
		} else {
			return false;
		}
	}
	
}