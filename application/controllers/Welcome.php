<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends WebController {

	public function index() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css', 'css/libs/jquery-jvectormap-1.2.2.css', 'css/libs/weather-icons.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js", "js/jquery-jvectormap-1.2.2.min.js", "js/jquery-jvectormap-world-merc-en.js", "js/gdp-data.js", "js/flot/jquery.flot.min.js", "js/flot/jquery.flot.resize.min.js", "js/flot/jquery.flot.time.min.js", "js/flot/jquery.flot.threshold.js", "js/flot/jquery.flot.axislabels.js", "js/jquery.sparkline.min.js", "js/skycons.js");
		# getters
		$notes                     = $this->Get_model->get_notes();
		$this->data['notes']       = array();
		$pits                      = $this->Get_model->get_pits();
		$this->data['pits']        = array();
		$campaings                 = $this->Get_model->get_campaings();
		$this->data['campaings']   = array();
		$situations = $this->Get_model->get_situations();
		$priorities = $this->Get_model->get_priorities();
		# objects setters
		foreach ($notes as $key => $value) {
			$note = new Note();
			$note->set_id($value->id);
			$note->set_description($value->description);
			$note->set_date($value->date);
			array_push($this->data['notes'], $note);
		}
		foreach ($pits as $key => $value) {
			$pit = new Pit();
			$pit->set_id($value->id);
			$pit->set_title($value->title);
			$pit->set_description($value->description);
			$pit->set_client_id($value->client_id);
			$pit->set_campaing_id($value->campaing_id);
			$pit->set_start($value->start);
			$pit->set_stop($value->stop);
			$pit->set_user_id($value->user_id);
			$pit->set_situation_id($value->situation_id);
			array_push($this->data['pits'], $pit);
		}/*
		foreach ($campaings as $key => $value) {
			$campaing = new Campaing();
			$campaing->set_id($value->id);
		}*/
		$this->loadView('dashboard');
	}
}
