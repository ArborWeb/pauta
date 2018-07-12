<?php

class Del_model extends CI_Model {

	public function del_note($id) {
		$this->db->set('situation_id', 3);
		$this->db->where('id', $id);
		return $this->db->update('notes');
	}
	public function del_pit($id) {
		$this->db->set('situation_id', 3);
		$this->db->where('id', $id);
		return $this->db->update('pits');
	}



	public function set_del($table,$id) {
		$this->db->set('situation_id', 3);
		$this->db->where('id', $id);
		return $this->db->update($table);
	}
}
