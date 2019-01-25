<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autho extends CI_Model {

	public function confrimation($user,$password){
		$q = $this->db->where(['username' => $user , 'userpassword' => $password])->get('user');
		if($q->num_rows()):
			return $q->row()->id;
		else:
			return false;
		endif;
	}


	public function signup($array){
		if($this->db->insert('user',$array)){
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

}

/* End of file Autho.php */
/* Location: ./application/models/Autho.php */