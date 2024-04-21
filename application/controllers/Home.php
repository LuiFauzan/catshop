<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		if(! $this->session->userdata('username')) redirect('auth082/login');
		$this->load->view('home');
	}
}
