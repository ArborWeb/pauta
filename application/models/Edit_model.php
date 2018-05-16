<?php

class Edit_model extends CI_Model {

	public function edit_campaing($campaing) {
		$this->db->where('id', $campaing->id);
		return $this->db->update('campaings',$campaing);
	}
	public function edit_pit($pit) {
		$this->db->where('id', $pit->id);
		return $this->db->update('pits',$pit);
	}
}
