<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth082 extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        
        $this->load->model('Auth082Model');        
	}
    public function login(){
        if($this->input->post('login') && $this->validation('login')){
            $login = $this->Auth082Model->getuser($this->input->post('username'));
            if($login != NULL){
                if(password_verify($this->input->post('password'),$login->password_082)){
                    $data = array(
                        'username' => $login->username_082,
                        'usertype' => $login->usertype_082,
                        'fullname' => $login->fullname_082,
                        'photo' => $login->photo_082
                    );
                    $this->session->set_userdata($data);
                    redirect('home');
                }
            }
            
            $this->session->set_flashdata('msg','<p style="color:red;">Invalid username or password!!</p>');
        }
            $this->load->view('auth082/form_login_082');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth082/login');
    }
    public function changepass(){
        if(! $this->session->userdata('username')) redirect('auth082/login');
        if($this->input->post('change') && $this->validation('change')){
            $change = $this->Auth082Model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'),$change->password_082)){
                if($this->Auth082Model->changepass())
                $this->session->set_flashdata('msg','<p style="color:green;">Password succesfully change!!</p>');
                else
                $this->session->set_flashdata('msg','<p style="color:red;">Change password failed!!</p>');
            }else{
                $this->session->set_flashdata('msg','<p style="color:red;">Wrong old password!!</p>');
            }
        }
        $this->load->view('auth082/form_pass_082');
    }
    public function changephoto(){
        if(! $this->session->userdata('username')) redirect('auth082/login');
        $data['error'] = '';
        if($this->input->post('upload')){
            if($this->upload()){
                $this->Auth082Model->changephoto($this->upload->data('file_name'));
                $this->session->set_userdata('photo',$this->upload->data('file_name'));
                $this->session->set_flashdata('msg','<p style="color:green;">Photo succesfully changed!!</p>');
            }else $data['error'] = $this->upload->display_errors();
        } 
        $this->load->view('auth082/form_photo_082',$data);
    }
    public function upload(){
        $config['upload_path'] = './uploads/users/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']     = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        return $this->upload->do_upload('photo');
    }
    public function validation($type){
        $this->load->library('form_validation');
        if($type == 'login'){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
        }else{
            $this->form_validation->set_rules('oldpassword','Old Password','required');
            $this->form_validation->set_rules('newpassword','New Password','required');
        }     
        if($this->form_validation->run()){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>