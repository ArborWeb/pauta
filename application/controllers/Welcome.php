<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends WebController {

	public function __construct(){
       parent::__construct();
       date_default_timezone_set('America/Sao_Paulo');
	}

	public function index() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js", "js/jquery-jvectormap-1.2.2.min.js", "js/jquery-jvectormap-world-merc-en.js", "js/gdp-data.js", "js/flot/jquery.flot.min.js", "js/flot/jquery.flot.resize.min.js", "js/flot/jquery.flot.time.min.js", "js/flot/jquery.flot.threshold.js", "js/flot/jquery.flot.axislabels.js", "js/jquery.sparkline.min.js", "js/skycons.js");
		$this->data['js_write'] = "";
		# getters
		$notes                      = $this->Get_model->get_notes();
		$this->data['notes']        = array();
		//$this->data['user']         = $this->Get_model->get_user(get_cookie('logado'));
		$pits                       = $this->Get_model->get_pits();
		$this->data['pits']         = array();
		$interactions               = $this->Get_model->get_interactions();
		//dump($interactions);
		$this->data['interactions'] = array();
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
		}
		
		foreach ($interactions as $key => $value) {
			$interaction = new Interaction();
			$interaction->set_id($value->id);
			$interaction->set_title($value->title);
			$interaction->set_date($value->date);
			$interaction->set_user_id($value->user_id);
			$interaction->set_campaing_id($value->campaing_id);
			$interaction->set_campaing($value->campaing);
			array_push($this->data['interactions'], $interaction);
		}
		//dump($this->data['interactions']);
		$this->loadView('dashboard');
	}

	public function index_set_pits() {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css', 'css/libs/daterangepicker.css', 'css/libs/bootstrap-timepicker.css', 'css/libs/select2.css');
		# this page specific scripts
		$this->data['js']  = array('js/jquery.maskedinput.min.js', 'js/datepicker.js', 'js/moment.min.js', 'js/daterangepicker.js', 'js/bootstrap-timepicker.min.js', 'js/select2.min.js', 'js/hogan.js', 'js/typeahead.min.js', 'js/jquery.pwstrength.js');
		$this->data['js_write'] = "<script>$('#maskedDate').mask('99/99/9999');$('#prize').datepicker();</script>";
		$this->data['clients'] = $this->Get_model->get_clients();
		$this->data['campaings']   = $this->Get_model->get_campaings();
		$this->data['situations']   = $this->Get_model->get_situations();

		$this->loadView('garden/pit_form');
	}

	public function index_get_pit($id) {
		# this page specific styles
		$this->data['css'] = array();
		# this page specific scripts
		$this->data['js']  = array();
		$this->data['js_write'] = "";
		$value = $this->Get_model->get_pit($id);
		//dump($value);
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
		$this->data['pit'] = $pit;
		$this->data['comments'] = $this->Get_model->get_comments_where($id);

		$this->loadView('garden/pit_detail');
	}

	public function index_all_pits() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$pits                      = $this->Get_model->get_all_pits();
		$this->data['pits']        = array();
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
		}
		$this->loadView('garden/pits_list');
	}

	public function index_open_pits() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$pits                      = $this->Get_model->get_pits();
		$this->data['pits']        = array();
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
		}
		$this->loadView('garden/pits_list');
	}

	public function index_close_pits() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$pits                      = $this->Get_model->get_close_pits();
		$this->data['pits']        = array();
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
		}
		$this->loadView('garden/pits_list');
	}

	public function index_edit_pit($id) {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css', 'css/libs/daterangepicker.css', 'css/libs/bootstrap-timepicker.css', 'css/libs/select2.css');
		# this page specific scripts
		$this->data['js']  = array('js/jquery.maskedinput.min.js', 'js/datepicker.js', 'js/moment.min.js', 'js/daterangepicker.js', 'js/bootstrap-timepicker.min.js', 'js/select2.min.js', 'js/hogan.js', 'js/typeahead.min.js', 'js/jquery.pwstrength.js');
		$this->data['js_write'] = "<script>$('#maskedDate').mask('99/99/9999');$('#prize').datepicker();</script>";
		$this->data['clients'] = $this->Get_model->get_clients();
		$this->data['situations']   = $this->Get_model->get_situations();
		$value = $this->Get_model->get_pit($id);
		$pit = new pit();
		$pit->set_id($value->id);
		$pit->set_title($value->title);
		$pit->set_description($value->description);
		$pit->set_start($value->start);
		$pit->set_stop($value->stop);
		$pit->set_client_id($value->client_id);
		$pit->set_user_id($value->user_id);
		$pit->set_situation_id($value->situation_id);
		$this->data['pit'] = $pit;
		//dump($this->data);
		$this->loadView('garden/pit_edit');
	}

	public function index_set_campaing() {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css', 'css/libs/daterangepicker.css', 'css/libs/bootstrap-timepicker.css', 'css/libs/select2.css');
		# this page specific scripts
		$this->data['js']  = array('js/jquery.maskedinput.min.js', 'js/datepicker.js', 'js/moment.min.js', 'js/daterangepicker.js', 'js/bootstrap-timepicker.min.js', 'js/select2.min.js', 'js/hogan.js', 'js/typeahead.min.js', 'js/jquery.pwstrength.js');
		$this->data['js_write'] = "<script>$('#maskedDate').mask('99/99/9999');$('#prize').datepicker();</script>";
		$this->data['clients'] = $this->Get_model->get_clients();
		$this->data['campaings']   = $this->Get_model->get_campaings();
		$this->data['situations']   = $this->Get_model->get_situations();

		$this->loadView('garden/campaing_form');
	}

	public function index_open_campaings() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$campaings                      = $this->Get_model->get_campaings();
		$this->data['campaings']        = array();
		foreach ($campaings as $key => $value) {
			$pit = new Pit();
			$pit->set_id($value->id);
			$pit->set_title($value->title);
			$pit->set_description($value->description);
			$pit->set_start($value->start);
			$pit->set_stop($value->stop);
			$pit->set_client_id($value->client_id);
			$pit->set_user_id($value->user_id);
			$pit->set_situation_id($value->situation_id);
			array_push($this->data['campaings'], $pit);
		}
		$this->loadView('garden/campaings_list');
	}

	public function index_close_campaings() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$campaings                      = $this->Get_model->get_close_campaings();
		$this->data['campaings']        = array();
		foreach ($campaings as $key => $value) {
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
			array_push($this->data['campaings'], $pit);
		}
		$this->loadView('garden/campaings_list');
	}

	public function index_all_campaings() {
		# this page specific styles
		$this->data['css'] = array('css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "";
		$campaings                      = $this->Get_model->get_all_campaings();
		$this->data['campaings']        = array();
		foreach ($campaings as $key => $value) {
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
			array_push($this->data['campaings'], $pit);
		}
		$this->loadView('garden/campaings_list');
	}

	public function index_get_campaing($id) {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css','css/libs/daterangepicker.css');
		# this page specific scripts
		$this->data['js']  = array("js/datepicker.js","js/moment.min.js","js/daterangepicker.js");
		$this->data['js_write'] = "<script>$('#date').datepicker();</script>";
		$value = $this->Get_model->get_campaing($id);
		$campaing = new Campaing();
		$campaing->set_id($value->id);
		$campaing->set_title($value->title);
		$campaing->set_description($value->description);
		$campaing->set_start($value->start);
		$campaing->set_stop($value->stop);
		$campaing->set_client_id($value->client_id);
		$campaing->set_user_id($value->user_id);
		$campaing->set_situation_id($value->situation_id);
		$this->data['campaing'] = $campaing;
		$this->data['interactions'] = $this->Get_model->get_interactions_where($id);
		//dump($this->data['interactions']);

		$this->loadView('garden/campaing_detail');
	}

	public function index_edit_campaing($id) {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css', 'css/libs/daterangepicker.css', 'css/libs/bootstrap-timepicker.css', 'css/libs/select2.css');
		# this page specific scripts
		$this->data['js']  = array('js/jquery.maskedinput.min.js', 'js/datepicker.js', 'js/moment.min.js', 'js/daterangepicker.js', 'js/bootstrap-timepicker.min.js', 'js/select2.min.js', 'js/hogan.js', 'js/typeahead.min.js', 'js/jquery.pwstrength.js');
		$this->data['js_write'] = "<script>$('#maskedDate').mask('99/99/9999');$('#prize').datepicker();</script>";
		$this->data['clients'] = $this->Get_model->get_clients();
		$this->data['situations']   = $this->Get_model->get_situations();
		$value = $this->Get_model->get_campaing($id);
		$campaing = new Campaing();
		$campaing->set_id($value->id);
		$campaing->set_title($value->title);
		$campaing->set_description($value->description);
		$campaing->set_start($value->start);
		$campaing->set_stop($value->stop);
		$campaing->set_client_id($value->client_id);
		$campaing->set_user_id($value->user_id);
		$campaing->set_situation_id($value->situation_id);
		$this->data['campaing'] = $campaing;
		//dump($this->data);
		$this->loadView('garden/campaing_edit');
	}

	/*public function index_set_interaction($id) {
		# this page specific styles
		$this->data['css'] = array('css/libs/datepicker.css', 'css/libs/daterangepicker.css', 'css/libs/bootstrap-timepicker.css', 'css/libs/select2.css');
		# this page specific scripts
		$this->data['js']  = array('js/jquery.maskedinput.min.js', 'js/datepicker.js', 'js/moment.min.js', 'js/daterangepicker.js', 'js/bootstrap-timepicker.min.js', 'js/select2.min.js', 'js/hogan.js', 'js/typeahead.min.js', 'js/jquery.pwstrength.js');
		$this->data['js_write'] = "<script>$('#maskedDate').mask('99/99/9999');$('#prize').datepicker();</script>";
		$this->data['clients'] = $this->Get_model->get_clients();
		$this->data['campaings']   = $this->Get_model->get_campaings();
		$this->data['campaing']    = $this->Get_model->get_campaing($id);
		$this->data['situations']   = $this->Get_model->get_situations();
		//dump($this->data['campaing']);

		$this->loadView('garden/interaction_form');
	}*/
}
