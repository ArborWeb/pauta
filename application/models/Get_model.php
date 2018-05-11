<?php

class Get_model extends CI_Model {

	public function get_notes() {
		$this->db->order_by('date','asc');
		return $this->db->get_where('notes',array('situation_id' => 6))->result();
	}

	public function get_pits() {
		$this->db->order_by('stop','asc');
		return $this->db->get('pits')->result();
	}

	public function get_campaings() {
		$this->db->order_by('stop','asc');
		return $this->db->get('campaings')->result();
	}

	public function get_priorities() {
		return $this->db->get('priorities')->result();
	}
	public function get_situations() {
		return $this->db->get('situations')->result();
	}
}
