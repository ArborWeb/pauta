<?php

class Set_model extends CI_Model {

	public function set_note($note) {
		return $this->db->insert('notes',$note);
	}
}
