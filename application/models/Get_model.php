<?php

class Get_model extends CI_Model {

	public function get_notes() {
		$this->db->order_by('date','asc');
		return $this->db->get_where('notes',array('situation_id' => 6))->result();
	}

	public function get_pits() {
		$this->db->select('pits.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('pits');
		$this->db->where('pits.situation_id',6);
		$this->db->or_where('pits.situation_id',5);
		$this->db->or_where('pits.situation_id',4);
		$this->db->join('situations', 'situations.id = pits.situation_id');
		$this->db->join('clients', 'clients.id = pits.client_id');
		$this->db->join('users', 'users.id = pits.user_id');
		$this->db->order_by('stop','asc');
		return $this->db->get()->result();
	}

	public function get_close_pits() {
		$this->db->select('pits.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('pits');
		$this->db->where('pits.situation_id',3);
		$this->db->or_where('pits.situation_id',2);
		$this->db->or_where('pits.situation_id',1);
		$this->db->join('situations', 'situations.id = pits.situation_id');
		$this->db->join('clients', 'clients.id = pits.client_id');
		$this->db->join('users', 'users.id = pits.user_id');
		$this->db->order_by('stop','asc');
		return $this->db->get()->result();
	}

	public function get_all_pits() {
		$this->db->select('pits.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('pits');
		$this->db->join('situations', 'situations.id = pits.situation_id');
		$this->db->join('clients', 'clients.id = pits.client_id');
		$this->db->join('users', 'users.id = pits.user_id');
		$this->db->order_by('stop','asc');
		return $this->db->get()->result();
	}

	public function get_pit($id) {
		//$this->db->select('pits.*, clients.name as client_id, situations.title as situation_id, users.name as user_id, campaings.title as campaing_id');
		$this->db->select('pits.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('pits');
		$this->db->join('situations', 'situations.id = pits.situation_id');
		$this->db->join('clients', 'clients.id = pits.client_id');
		$this->db->join('users', 'users.id = pits.user_id');
		//$this->db->join('campaings', 'campaings.id = pits.campaing_id');
		$this->db->where('pits.id',$id);
		return $this->db->get()->row();
	}

	public function get_campaings() {
		$this->db->select('campaings.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('campaings');
		$this->db->where('campaings.situation_id',6);
		$this->db->or_where('campaings.situation_id',5);
		$this->db->or_where('campaings.situation_id',4);
		$this->db->join('situations', 'situations.id = campaings.situation_id');
		$this->db->join('clients', 'clients.id = campaings.client_id');
		$this->db->join('users', 'users.id = campaings.user_id');
		$this->db->order_by('stop','asc');
		return $this->db->get()->result();
	}

	public function get_priorities() {
		return $this->db->get('priorities')->result();
	}

	public function get_clients() {
		$this->db->order_by('name','asc');
		return $this->db->get('clients')->result();
	}

	public function get_situations() {
		$this->db->order_by('title','asc');
		return $this->db->get('situations')->result();
	}

	public function get_campaing($id) {
		$this->db->select('campaings.*, clients.name as client_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('campaings');
		$this->db->join('situations', 'situations.id = campaings.situation_id');
		$this->db->join('clients', 'clients.id = campaings.client_id');
		$this->db->join('users', 'users.id = campaings.user_id');
		$this->db->where('campaings.id',$id);
		return $this->db->get()->row();
	}

	public function get_last_interaction() {
		$this->db->order_by('id','desc');
		return $this->db->get('interactions')->row();
	}

	public function get_last_comment() {
		$this->db->order_by('id','desc');
		return $this->db->get('comments')->row();
	}

	public function get_interactions_where($id) {
		$this->db->where('campaing_id', $id);
		$this->db->where('situation_id',6);
		$this->db->or_where('situation_id',5);
		$this->db->or_where('situation_id',4);
		$this->db->order_by('id','desc');
		return $this->db->get('interactions')->result();
	}

	public function get_interactions() {
		$this->db->select('interactions.*, campaings.title as campaing, campaings.id as campaing_id, situations.title as situation_id, users.name as user_id');
		$this->db->from('interactions');
		$this->db->join('situations', 'situations.id = interactions.situation_id');
		$this->db->join('campaings', 'campaings.id = interactions.campaing_id');
		$this->db->join('users', 'users.id = interactions.user_id');
		$this->db->where('interactions.situation_id',6);
		$this->db->or_where('interactions.situation_id',5);
		$this->db->or_where('interactions.situation_id',4);
		$this->db->order_by('date','asc');
		return $this->db->get()->result();
	}

	public function get_comments_where($id) {
		$this->db->where('pit_id', $id);
		$this->db->where('situation_id',6);
		$this->db->or_where('situation_id',5);
		$this->db->or_where('situation_id',4);
		$this->db->order_by('id','desc');
		return $this->db->get('comments')->result();
	}

	public function get_user($data) {
		return $this->db->get_where('users', array('user' => $data))->row();
	}
}
