<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {
	public function create()
	{
		$password = $this->input->post('usertype_082');
		$password_hash = password_hash($password,PASSWORD_DEFAULT);
		$data = array(
			'username_082' => $this->input->post('username_082'),
			'password_082' => $password_hash,
			'usertype_082' => $this->input->post('usertype_082'),
			'fullname_082' => $this->input->post('fullname_082'),
		);
		$this->db->insert('users',$data);
	}
	public function read()
	{
		$query = $this->db->get('users');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('userid_082',$id);
		$query = $this->db->get('users');
		return $query->row();
	}
	public function update($id)
	{
		$password = $this->input->post('password_082');
		if (!empty($password)) {
			$hashed_password = password_hash($password, PASSWORD_DEFAULT);
			$data = array(
				'username_082' => $this->input->post('username_082'),
				'password_082' => $hashed_password, 
				'usertype_082' => $this->input->post('usertype_082'),
				'fullname_082' => $this->input->post('fullname_082'),
			);
		} else {
			$data = array(
				'username_082' => $this->input->post('username_082'),
				'usertype_082' => $this->input->post('usertype_082'),
				'fullname_082' => $this->input->post('fullname_082'),
			);
		}
	
		$this->db->where('userid_082', $id);
		$this->db->update('users', $data);
	}
	public function delete($id){
		$this->db->where('userid_082',$id);
		$this->db->delete('users');
	}
	public function reset($id,$newPassword){
		$data = array(
            'password_082' => password_hash($newPassword,PASSWORD_DEFAULT)
        );
        $this->db->where('userid_082',$id);
        $this->db->update('users',$data);

	}
	
}
