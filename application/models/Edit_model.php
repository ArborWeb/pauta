<?php

class Edit_model extends CI_Model {

	public function edit_campaing($campaing) {
		$this->db->where('id', $campaing->id);
		return $this->db->update('campaings',$campaing);
	}
}
