<?php
 
class Pit extends CI_Model {

	public $id;
	public $title;
	public $description;
	public $client_id;
	public $campaing_id;
	public $start;
	public $stop;
	public $user_id;
	public $situation_id;
	//setters
	public function set_id($id) {
		$this->id = $id;
	}
	public function set_title($title) {
		$this->title = $title;
	}
	public function set_description($description) {
		$this->description = $description;
	}
	public function set_client_id($client_id) {
		$this->client_id = $client_id;
	}
	public function set_campaing_id($campaing_id) {
		$this->campaing_id = $campaing_id;
	}
	public function set_start($start) {
		$this->start = $start;
	}
	public function set_stop($stop) {
		$this->stop = $stop;
	}
	public function set_user_id($user_id) {
		$this->user_id = $user_id;
	}
	public function set_situation_id($situation_id) {
		$this->situation_id = $situation_id;
	}
	//getters
	public function id() {
		$this->id;
	}
	public function title() {
		$this->title;
	}
	public function description() {
		$this->description;
	}
	public function client_id() {
		$this->client_id;
	}
	public function campaing_id() {
		$this->campaing_id;
	}
	public function start() {
		$this->start;
	}
	public function stop() {
		$this->stop;
	}
	public function user_id() {
		$this->user_id;
	}
	public function situation_id() {
		$this->situation_id;
	}
}