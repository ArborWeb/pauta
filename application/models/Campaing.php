<?php
 
class Campaing extends CI_Model {

	public $id;
	public $title;
	public $description;
	public $start;
	public $stop;
	public $client_id;
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
	public function set_start($start) {
		$start = str_replace('/', '-', $start);
		$start = date('Y-m-d',strtotime($start));
		$this->start = $start;
	}
	public function set_stop($stop) {
		$stop = str_replace('/', '-', $stop);
		$stop = date('Y-m-d',strtotime($stop));
		$this->stop = $stop;
	}
	public function set_client_id($client_id) {
		$this->client_id = $client_id;
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
	public function start() {
		$this->start;
	}
	public function stop() {
		$this->stop;
	}
	public function client_id() {
		$this->client_id;
	}
	public function user_id() {
		$this->user_id;
	}
	public function situation_id() {
		$this->situation_id;
	}
}