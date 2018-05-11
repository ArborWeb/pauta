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
}
