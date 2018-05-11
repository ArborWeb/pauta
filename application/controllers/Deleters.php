<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deleters extends WebController {

	public function del_note($id) {
		$this->Del_model->del_note($id);
		redirect('welcome');
	}
}
