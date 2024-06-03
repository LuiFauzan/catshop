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
		$this->initUserSession();

	}
	protected function initUserSession()
    {
        // Check if user is logged in
        if ($this->session->userdata('username')) {
            // Get user session information
            $this->userdata['fullname'] = $this->session->userdata('fullname');
            $this->userdata['usertype'] = $this->session->userdata('usertype');
            $this->userdata['photo'] = $this->session->userdata('photo');
        }
    }
	public function index()
	{
		$data['users'] = $this->UsersModel->read();
		$data += $this->userdata;
		return view('users/user_list',$data);
		
	}
	public function add()
	{
		$data = [];
		if($this->input->post('submit')){
			$this->UsersModel->create();
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> User succesfully added!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-exclamation"></i> User add failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}
			redirect('users');
		}
		$data += $this->userdata;
		return view('users/user_form',$data);
	}
	public function edit($id)
	{
		if($this->input->post('submit')){
			$this->UsersModel->update($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> User succesfully updated!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-exclamation"></i> User update failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}
			redirect('users');
		}
		$data['user'] = $this->UsersModel->read_by($id);
		$data += $this->userdata;
		return view('users/user_form',$data);
	}
	public function delete($id)
	{
		$this->UsersModel->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-check"></i> User succesfully deleted!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-exclamation"></i> User delete failed!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		}
		redirect('users');
	}

	
	public function reset($id){
        $user = $this->UsersModel->read_by($id);
        $newPassword = $user->usertype_082;
        $this->UsersModel->reset($id,$newPassword);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-check"></i> Reset password succesfully !</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-exclamation"></i> Reset password failed!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
        }
        redirect('users');
    }
}
