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
		$this->load->library('pagination');
		$config['base_url'] = site_url('cats/index');
		$config['total_rows'] = $this->db->count_all('cats');
		$config['per_page'] = 5;
		$config['attributes'] = array('class' => 'page-link');
		$this->pagination->initialize($config);
		$data['pagina'] = $this->pagination->create_links();
		$limit = $config['per_page'];
		$start = $this->uri->segment(3)?$this->uri->segment(3):0;

		$data['i'] = $start+1;
		$data['cats'] = $this->CatsModel->read($limit,$start);
        $data += $this->userdata;
		return view('cats/cat_list',$data);
		
	}
	public function add()
	{
		if($this->input->post('submit')){
			$this->CatsModel->create();
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> Cat succesfully added!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-exclamation"></i> Cat add failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}
			redirect('cats');
		}
		$data['category'] = $this->CategoriesModel->read();
		$data += $this->userdata;
		return view('cats/cat_form',$data);
	}
	public function edit($id)
	{
		if($this->input->post('submit')){
			$this->CatsModel->update($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> Cat succesfully updated!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-exclamation"></i> Cat updated failed</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}
			redirect('cats');
		}
		$data['cat'] = $this->CatsModel->read_by($id);
		$data['category'] = $this->CategoriesModel->read();
		$data += $this->userdata;
		return view('cats/cat_form',$data);
	}
	public function delete($id)
	{
		$this->CatsModel->delete($id);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-check"></i> Cat succesfully deleted!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		}else{
			$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong><i class="fa-solid fa-circle-exclamation"></i> Cat deleted failed!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		}
		redirect('cats');
	}
	
	public function sale($id){
		if($this->input->post('submit')){
			$this->CatsModel->sale($id);
			if($this->db->affected_rows() > 0){
				$this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> Cat succesfully sold!!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}else{
				$this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-exclamation"></i> Cat sale failed!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
			}
			redirect('cats');
		}
		
		$data['cat'] = $this->CatsModel->read_by($id);
		$data += $this->userdata;
		return view('cats/cat_sale',$data);
	}
	public function sales(){
		if( $this->session->userdata('usertype') != 'Manager') redirect('home');
		$data['sales'] = $this->CatsModel->sales();
		$data += $this->userdata;
		return view('cats/sale_list',$data);
	}
	public function changephoto($id){
        $data['error']='';
        if($this->input->post('upload')){
            if($this->upload()){    //jika sukses upload
                $this->CatsModel->changephoto($this->upload->data('file_name'), $id);    //ubah data foto di database
                $this->session->set_flashdata('msg', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa-solid fa-circle-check"></i> Cat photo succesfully changed</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            } else $data['error'] = $this->upload->display_errors();    //jika gagal upload
        }
        $data['cat'] = $this->CatsModel->read_by($id);
		$data += $this->userdata;
		return view('cats/form_photocat', $data);
    }

    private function upload(){
        $config['upload_path'] = './uploads/cats/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }
}
