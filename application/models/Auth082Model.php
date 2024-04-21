<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth082Model extends CI_Model {
    public function getuser($username){
        $this->db->where('username_082',$username);
        return $this->db->get('users')->row();
    }
    public function changepass(){
        $this->db->set('password_082',password_hash($this->input->post('newpassword'),PASSWORD_BCRYPT));
        $this->db->where('username_082',$this->session->userdata('username'));
        return $this->db->update('users');
    }
    public function changephoto($photo){
        if($this->session->userdata('photo') !== 'default.png')
            unlink('./uploads/users/'.$this->session->userdata('photo'));

        $this->db->set('photo_082',$photo);
        $this->db->where('username_082',$this->session->userdata('username'));
        return $this->db->update('users');
    }
}
