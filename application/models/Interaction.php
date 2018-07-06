<?php
 
class Interaction extends CI_Model {

	public $id;
	public $title;
	public $date;
	public $user_id;
	//setters
	public function set_id($id) {
		$this->id = $id;
	}
	public function set_title($title) {
		$this->title = $title;
	}
	public function set_date($date) {
		$date = date('d-m-Y',strtotime($date));
		$date = str_replace('-', '/', $date);
		$this->date = $date;
	}
	public function set_user_id($user_id) {
		$this->user_id = $user_id;
	}
	//getters
	public function id() {
		$this->id;
	}
	public function title() {
		$this->title;
	}
	public function date() {
		$this->date;
	}
	public function user_id() {
		$this->user_id;
	}
}