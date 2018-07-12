<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Closer extends WebController {

	public function set_ok($table,$id) {
		$table = $table;
		$this->Close_model->set_ok($table,$id);
		redirect('welcome');
	}





}
