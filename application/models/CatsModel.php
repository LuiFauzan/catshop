<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatsModel extends CI_Model {
	public function create()
	{
		$data = array(
			'name_082' => $this->input->post('name_082'),
			'type_082' => $this->input->post('type_082'),
			'gender_082' => $this->input->post('gender_082'),
			'age_082' => $this->input->post('age_082'),
			'price_082' => $this->input->post('price_082'),
		);
		$this->db->insert('cats',$data);
	}
	public function read($limit,$start)
	{
		$this->db->limit($limit,$start);
		// $this->db->where('sold_082', 0);
		$query = $this->db->get('cats');
		return $query->result();
	}
	public function read_by($id)
	{
		$this->db->where('id_082',$id);
		$query = $this->db->get('cats');
		return $query->row();
	}
	public function update($id)
	{
		$data = array
		(
			'name_082' => $this->input->post('name_082'),
			'type_082' => $this->input->post('type_082'),
			'gender_082' => $this->input->post('gender_082'),
			'age_082' => $this->input->post('age_082'),
			'price_082' => $this->input->post('price_082'),
		);
		$this->db->where('id_082',$id);
		$this->db->update('cats',$data);
	}
	public function delete($id){
		$this->db->where('id_082',$id);
		$this->db->delete('cats');
	}
	public function sale($id){
		$data = array
		(
			'customer_name_082' => $this->input->post('customer_name_082'),
			'customer_address_082' => $this->input->post('customer_address_082'),
			'customer_phone_082' => $this->input->post('customer_phone_082'),
			'cat_id_082' => $id
			
		);
		$this->db->insert('catsale',$data);
		$this->db->set('sold_082','1');
		$this->db->where('id_082',$id);
		$this->db->update('cats');

	}
	public function sales()
	{
		$this->db->join('cats','cats.id_082=catsale.cat_id_082');
		$query = $this->db->get('catsale');
		return $query->result();
	}
}
