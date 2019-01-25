<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Retrive_all extends CI_Model {

	public function get_all($id){
			$q = $this->db->where(['id'=> $id])->get('user');
			return $q->result();
	}

}

/* End of file retrive_all.php */
/* Location: ./application/models/retrive_all.php */