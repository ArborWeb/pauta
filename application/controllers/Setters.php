<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setters extends WebController {

	public function set_note() {
		$note = new Note();
		$note->set_description($_POST['note']);
		$note->set_date(date('Y-m-d H:i:s'));
		$note->set_situation_id(6);
		$this->Set_model->set_note($note);
		redirect('welcome');
	}
	
	public function set_pit() {
		$pit = new Pit();
		$pit->set_title($_POST['title']);
		$pit->set_description($_POST['description']);
		$pit->set_client_id($_POST['client']);
		$pit->set_campaing_id($_POST['campaing']);
		$pit->set_start($_POST['start']);
		$pit->set_stop($_POST['prize']);
		$pit->set_user_id(1);
		$pit->set_situation_id($_POST['situation']);
		$this->Set_model->set_pit($pit);
		redirect('welcome');
	}
	
	public function set_campaing() {
		$campaing = new Campaing();
		$campaing->set_title($_POST['title']);
		$campaing->set_description($_POST['description']);
		$campaing->set_start($_POST['start']);
		$campaing->set_stop($_POST['prize']);
		$campaing->set_client_id($_POST['client']);
		$campaing->set_user_id(1);
		$campaing->set_situation_id($_POST['situation']);
		$this->Set_model->set_campaing($campaing);

		set_posts($_POST);

		redirect('welcome');
	}

	public function set_interaction($id) {
		
		echo json_encode($_POST);

	}
}
