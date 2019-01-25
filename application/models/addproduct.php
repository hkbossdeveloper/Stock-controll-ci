<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addproduct extends CI_Model {

	public function add_products($array)
	{
		if($this->db->insert('product',$array)){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	

	public function all_products()
	{
		$id = $this->session->userdata('id');
		$q = $this->db->where(['user_id'=>$id])->limit(10)->get('product');
		if($q->num_rows()):
			return $q->result();
		else:
			return 0;
		endif;
	}


	public function home_products()
	{
		$id = $this->session->userdata('id');
		$q = $this->db->where(['user_id'=>$id])->get('product');
		if($q->num_rows()):
			return $q->result();
		else:
			return 0;
		endif;
	}

}

/* End of file addproduct.php */
/* Location: ./application/models/addproduct.php */