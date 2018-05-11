<?php

class Del_model extends CI_Model {

	public function del_note($id) {
		$this->db->set('situation_id', 3);
		$this->db->where('id', $id);
		return $this->db->update('notes');
	}
}
