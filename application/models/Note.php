<?php
 
class Note extends CI_Model {

	public $id;
	public $description;
	public $date;
	public $situation_id;
	//setters
	public function set_id($id) {
		$this->id = $id;
	}
	public function set_description($description) {
		$this->description = $description;
	}
	public function set_date($date) {
		$this->date = $date;
	}
	public function set_situation_id($situation_id) {
		$this->situation_id = $situation_id;
	}
	//getters
	public function id() {
		$this->id;
	}
	public function description() {
		$this->description;
	}
	public function date() {
		$this->date;
	}
	public function situation_id() {
		$this->situation_id;
	}
}