<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		if(!$this->session->userdata('id')):
			redirect('User/login');
		else:
			$this->load->model('retrive_all','ra');
			$id = $this->session->userdata('id');
			$data = $this->ra->get_all($id);
			$this->load->view('User/Dashboard/home',['deatils' => $data]);
		endif;
	}
	public function logout(){
		$this->session->unset_userdata('id');
		redirect('User/Login');
	}
	public function Shop(){
		if(!$this->session->userdata('id')):
			redirect('User/login');
		else:
			$this->load->model('retrive_all','ra');
			$id = $this->session->userdata('id');
			$data = $this->ra->get_all($id);
			$this->load->model('Addshop','as');
			$shop = $this->as->allshop();
			$this->load->view('User/Dashboard/shop',['deatils' => $data,'shop_details'=>$shop]);
		endif;
	}

	public function addshop(){
		if(!$this->session->userdata('id')):
			redirect('User/login');
		else:
				$alldata = $this->input->post();
				$this->load->model('Addshop','as');
				if($this->as->newshop($alldata)):
					$this->session->set_flashdata('Shop_added','Shop Has Been Added'); 
					redirect('Dashboard/Shop');
				else:
					$this->session->set_flashdata('Shop_added','Shop Has Not Added'); 
					redirect('Dashboard/Shop');
				endif;
		endif;
	}

	public function product(){
		if(!$this->session->userdata('id')):
			redirect('User/login');
		else:
			$this->load->model('retrive_all','ra');
			$id = $this->session->userdata('id');
			$data = $this->ra->get_all($id);
			$this->load->model('Addshop','as');
			$shop = $this->as->allshopselect();
			$this->load->model('Addproduct','ap');
			$product = $this->ap->all_products();
			$this->load->view('User/Dashboard/product',['deatils' => $data,'shop_details'=>$shop,'product_details'=>$product]);
		endif;
	}


	   public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 500;
                $this->load->library('upload', $config);
				$this->form_validation->set_rules('productname','Enter Product Name','required');
				$this->form_validation->set_rules('productquantity','Enter Product Quantity','required');
				$this->form_validation->set_rules('productretail','Enter Product Retail','required');
				$this->form_validation->set_rules('productresell','Enter Product Resell','required');
                $this->form_validation->set_error_delimiters('<div class="alert alert-primary" >', '</div>');
                if ($this->form_validation->run('product_validations') && $this->upload->do_upload('userfile'))
                {
                       	$data = $this->upload->data();
                       	$image_path = base_url("upload/".$data["raw_name"].$data["file_ext"]);
                       	$post =  $this->input->post();
                       	$post['userfile'] = $image_path;
                        $this->load->model('Addproduct','ap');
                        if($this->ap->add_products($post) == TRUE){    	
                        	$this->session->set_flashdata('Product_added','Product Has Been Added'); 
                        	redirect('dashboard/product');
                        }
                        else{
                        	$this->session->set_flashdata('Product_added','Product Not Added');
                        }
                }
                else
                {

                	    $error =  $this->upload->display_errors();
                        $this->load->model('retrive_all','ra');
						$id = $this->session->userdata('id');
						$data = $this->ra->get_all($id);
						$this->load->model('Addshop','as');
						$shop = $this->as->allshop();
						$this->load->view('User/Dashboard/product',['deatils' => $data,'shop_details'=>$shop,'error'=>$error]);
                       //$this->load->view('upload_success', $data);
                }
        }

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */