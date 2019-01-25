<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addshop extends CI_Model {

	public function newshop($array){
		if($this->db->insert('shop',$array)){
			return true;
		}
		else{
			return false;
		}

	}
	public function allshop(){
		$id = $this->session->userdata('id');
		$q = $this->db->where(['user_id'=>$id])->limit(10)->get('shop');
		if($q->num_rows()):
			return $q->result();
		else:
			return 0;
		endif;
	}
	public function allshopselect(){
		$id = $this->session->userdata('id');
		$q = $this->db->where(['user_id'=>$id])->get('shop');
		if($q->num_rows()):
			return $q->result();
		else:
			return 0;
		endif;
	}

}

/* End of file addshop.php */
/* Location: ./application/models/addshop.php */