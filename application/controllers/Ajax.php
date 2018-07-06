<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends WebController {

	public function set_interaction($id) {
		$data = $_POST;
		foreach ($data as $key => $value) {
			if ($key === 'date') {
				$data['date'] = json_to_db_date($value);
			}
		}
		$this->Set_model->set_interaction($data);
		$last = $this->Get_model->get_last_interaction();
		echo json_encode($last);
	}
}
