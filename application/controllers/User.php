<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login()
	{	
		if($this->session->userdata('id')){
			redirect('dashboard/index');
		}
		else{
		$this->load->view('Auth/login/index');
		}
	}

	public function Authication(){
		
		$config = array(
	        array(
	                'field' => 'username',
	                'label' => 'Enter Username',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'userpassword',
	                'label' => 'Enter Password',
	                'rules' => 'required',
	                ),
	        
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<div class="btn btn-danger" style="background-color:#007bff;border:0px solid">', '</div>');
		if (!$this->form_validation->run()) {
			$this->load->view('Auth/login/index');
		} else {

			$username = $this->input->post('username');
			$pass = $this->input->post('userpassword');
			$this->load->model('Autho');
			if($this->Autho->confrimation($username,$pass) == FALSE){
				$this->session->set_flashdata('Login_Failed','Invalid Username Or Password'); 
				redirect('User/login');
			}
			else{
				
				$data = $this->Autho->confrimation($username,$pass);
				$this->session->set_userdata('id', $data);
				redirect('dashboard/index');
			}
		}


		
	}
	public function Register(){
		$this->load->view('Auth/Register/index');
	}
	public function Registration(){
		
		$config = array(
	        array(
	                'field' => 'username',
	                'label' => 'Enter Username',
	                'rules' => 'required|is_unique[user.username]'
	        ),
	        array(
	                'field' => 'userpassword',
	                'label' => 'Enter Password',
	                'rules' => 'required',
	                ),
	        array(
	                'field' => 'goodname',
	                'label' => 'Enter Good Name',
	                'rules' => 'required',
	                ),
	        array(
	                'field' => 'useremail',
	                'label' => 'Enter Email',
	                'rules' => 'required|is_unique[user.useremail]',
	                ),
	        array(
	                'field' => 'usercell',
	                'label' => 'Enter Cell Number',
	                'rules' => 'required|max_length[11]',
	                ),
	        array(
	                'field' => 'useradd',
	                'label' => 'Enter Address ',
	                'rules' => 'required|max_length[200]',
	                ),
	        array(
	                'field' => 'Cites',
	                'label' => 'Select City',
	                'rules' => 'required',
	                ),
	        
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<div class="btn btn-danger" style="background-color:#007bff;border:0px solid">', '</div>');
		if (!$this->form_validation->run()) {
			$this->load->view('Auth/Register/index');
		} else {

			$post = $this->input->post();
			$this->load->model('Autho');
			if($d = $this->Autho->signup($post)){
				$this->session->set_flashdata('user_msg','User Has Been Register But Not Activated. You Can Login Through UserName and Password'); 
				$this->session->set_flashdata('user_class','alert-success'); 
				redirect('User/login');
			}
			else{
				$this->session->set_flashdata('user_msg','User Not Register'); 
				$this->session->set_flashdata('user_class','alert-danger'); 
				redirect('User/Register');
			}
			
		}
	}

}

/* End of file maincontroller.php */
/* Location: ./application/controllers/maincontroller.php */ ?>