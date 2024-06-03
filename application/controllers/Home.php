<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		if(! $this->session->userdata('username')) redirect('auth082/login');
		$data['fullname'] = $this->session->userdata('fullname');
		$data['usertype'] = $this->session->userdata('usertype');
		$data['photo'] = $this->session->userdata('photo');
		return view('home',$data);
	}
}
