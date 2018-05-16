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
}
