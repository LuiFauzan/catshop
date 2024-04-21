<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		if(! $this->session->userdata('username')) redirect('auth082/login');

		$this->load->model('CatsModel');
		$this->load->model('CategoriesModel');
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = site_url('cats/index');
		$config['total_rows'] = $this->db->count_all('cats');
		$config['per_page'] = 5;

		$this->pagination->initialize($config);

		$limit = $config['per_page'];
		$start = $this->uri->segment(3)?$this->uri->segment(3):0;

		$data['i'] = $start+1;
		$data['cats'] = $this->CatsModel->read($limit,$start);
		$this->load->view('cats/cat_list',$data);
		
	}
	public function add()
	{
		if($this->input->post('submit')){
			$this->CatsModel->create();
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','Cats succesfully added!!');
			}else{
				$this->session->set_flashdata('msg','Cats add failed!!');
			}
			redirect('cats');
		}
		$data['category'] = $this->CategoriesModel->read();
		$this->load->view('cats/cat_form',$data);
	}
	public function edit($id)
	{
		if($this->input->post('submit')){
			$this->CatsModel->update($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','Cats succesfully updated!!');
			}else{
				$this->session->set_flashdata('msg','Cats update failed!!');
			}
			redirect('cats');
		}
		$data['cat'] = $this->CatsModel->read_by($id);
		$data['category'] = $this->CategoriesModel->read();
		$this->load->view('cats/cat_form',$data);
	}
	public function delete($id)
	{
		$this->CatsModel->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','Cats succesfully deleted!!');
		}else{
			$this->session->set_flashdata('msg','Cats delete failed!!');
		}
		redirect('cats');
	}
	public function sale($id){
		if($this->input->post('submit')){
			$this->CatsModel->sale($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','Cats succesfully sold!!');
			}else{
				$this->session->set_flashdata('msg','Cats sale failed!!');
			}
			redirect('cats');
		}
		$data['cat'] = $this->CatsModel->read_by($id);
		$this->load->view('cats/cat_sale',$data);
	}
	public function sales(){
		if( $this->session->userdata('usertype') != 'Manager') redirect('home');
		$data['sales'] = $this->CatsModel->sales();
		$this->load->view('cats/sale_list',$data);
	}
}
