<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if(! $this->session->userdata('username')) redirect('auth082/login');
		if( $this->session->userdata('usertype') != 'Manager') redirect('home');  
		$this->load->model('UsersModel');
	}
	public function index()
	{
		$data['users'] = $this->UsersModel->read();
		$this->load->view('users/user_list',$data);
		
	}
	public function add()
	{
		if($this->input->post('submit')){
			$this->UsersModel->create();
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','User succesfully added!!');
			}else{
				$this->session->set_flashdata('msg','User add failed!!');
			}
			redirect('users');
		}
		$this->load->view('users/user_form');
	}
	public function edit($id)
	{
		if($this->input->post('submit')){
			$this->UsersModel->update($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','User succesfully updated!!');
			}else{
				$this->session->set_flashdata('msg','User update failed!!');
			}
			redirect('users');
		}
		$data['user'] = $this->UsersModel->read_by($id);
		$this->load->view('users/user_form',$data);
	}
	public function delete($id)
	{
		$this->UsersModel->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','Cats succesfully deleted!!');
		}else{
			$this->session->set_flashdata('msg','Cats delete failed!!');
		}
		redirect('users');
	}

	
	public function reset($id){
        $user = $this->UsersModel->read_by($id);
        $newPassword = $user->usertype_082;
        $this->UsersModel->reset($id,$newPassword);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg','<p style="color:green;">Reset Password Successfully !</p>');
        }else{
            $this->session->set_flashdata('msg','<p style="color:red;">Reset Password Failed !</p>');
        }
        redirect('users');
    }
}
