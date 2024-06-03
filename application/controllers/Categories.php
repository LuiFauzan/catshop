<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if(! $this->session->userdata('username')) redirect('auth082/login');

		$this->load->model('CategoriesModel');
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
		$data['categories'] = $this->CategoriesModel->read();
		$data += $this->userdata;
		return view('categories/category_list',$data);
	}
	public function add()
	{
		if($this->input->post('submit')){
			$this->CategoriesModel->create();
			redirect('categories');
		}
		$data['categories'] = $this->CategoriesModel->read();
		$data += $this->userdata;
		return view('categories/category_form',$data);
	}
	public function edit($id)
	{
		if($this->input->post('submit')){
			$this->CategoriesModel->update($id);
			redirect('categories');
		}
		$data['category'] = $this->CategoriesModel->read_by($id);
		$this->load->view('categories/category_form',$data);
	}
	public function delete($id)
	{
		$this->CategoriesModel->delete($id);
		redirect('categories');
	}
}
