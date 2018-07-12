<?php

class Close_model extends CI_Model {

	public function set_ok($table,$id) {
		$this->db->set('situation_id', 1);
		$this->db->where('id', $id);
		return $this->db->update($table);
	}
}
