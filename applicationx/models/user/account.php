<?php

class Account extends Koolyte_Model {

	var $data;

	function __construct() {
		parent::__construct();
		
		$this->load->database();

	}

	
	function login($username) {
		$data = array('username'=>$username, 'logged_in'=>TRUE);
		$this->session->set_userdata($data);                                   
	}
	
	function get_by_username($username) {
		$this->db->where('username', $username);
		$query = $this->db->get('account');
		//return $query->row();                                                          
		if ($query->num_rows() == 1) {
			return $query->row();
		} else {
			return FALSE;
		}
	}
	
	
	function password_check($username, $password) {
		if($user = $this->get_by_username($username)) {
			return $user->password == $password ? TRUE : FALSE;
		}
		return FALSE;                                                                             
	}
	
	
	function add_user($username, $password, $email) {
		$data = array('username'=>$username, 'password'=>$password, 'email'=>$email);
		$this->db->insert('account', $data);
		if ($this->db->affected_rows() > 0) {
			$this->login($username);
			return TRUE;
		}
		return FALSE;
	}
	
	function email_exists($email) {
		$this->db->where('email', $email);
		$query = $this->db->get('account');
		return $query->num_rows() ? TRUE : FALSE;
	}
	
	
	
	function logout() {
		if ($this->logged_in() === TRUE) {
			$this->session->sess_destroy();                                 
			return TRUE;
		}
		return FALSE;
	}
}

?>
