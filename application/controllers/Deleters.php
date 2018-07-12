<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deleters extends WebController {

	public function set_del($table,$id) {
		$table = $table;
		$this->Del_model->set_del($table,$id);
		redirect('welcome');
	}





	public function del_note($id) {
		$this->Del_model->del_note($id);
		redirect('welcome');
	}

	public function del_pit($id) {
		$this->Del_model->del_pit($id);
		redirect('welcome/index_open_pits');
	}

}
