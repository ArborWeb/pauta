<?php

class Set_model extends CI_Model {

	public function set_note($note) {
		return $this->db->insert('notes',$note);
	}
	public function set_pit($pit) {
		return $this->db->insert('pits',$pit);
	}
	public function set_campaing($campaing) {
		return $this->db->insert('campaings',$campaing);
	}
	public function set_interaction($interaction) {
		return $this->db->insert('interactions',$interaction);
	}
}
