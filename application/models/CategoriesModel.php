<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategoriesModel extends CI_Model {
	public function create()
	{
		$data = array(
			'category_name_082' => $this->input->post('category_name_082'),
			'description_082' => $this->input->post('description_082')
		);
		$this->db->insert('categories',$data);
	}
	public function read()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('category_id_082',$id);
		$query = $this->db->get('categories');
		return $query->row();
	}
	public function update($id)
	{
		$data = array
		(
			'category_name_082' => $this->input->post('category_name_082'),
			'description_082' => $this->input->post('description_082')
		);
		$this->db->where('category_id_082',$id);
		$this->db->update('categories',$data);
	}
	public function delete($id){
		$this->db->where('category_id_082',$id);
		$this->db->delete('categories');
	}
}
