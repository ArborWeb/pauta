<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editters extends WebController {

	public function edit_campaing() {
		$campaing = new Campaing();
		$campaing->set_id($_POST['id']);
		$campaing->set_title($_POST['title']);
		$campaing->set_description($_POST['description']);
		$campaing->set_start($_POST['start']);
		$campaing->set_stop($_POST['prize']);
		$campaing->set_client_id($_POST['client']);
		$campaing->set_user_id(1);
		$campaing->set_situation_id($_POST['situation']);
		$this->Edit_model->Edit_campaing($campaing);
		redirect('welcome/index_get_campaing/'.$campaing->id);
	}

	public function edit_pit() {
		$pit = new pit();
		$pit->set_id($_POST['id']);
		$pit->set_title($_POST['title']);
		$pit->set_description($_POST['description']);
		$pit->set_start($_POST['start']);
		$pit->set_stop($_POST['prize']);
		$pit->set_client_id($_POST['client']);
		$pit->set_user_id(1);
		$pit->set_situation_id($_POST['situation']);
		$this->Edit_model->Edit_pit($pit);
		redirect('');
	}
}
