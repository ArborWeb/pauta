<?php 
class WebController extends CI_Controller{

	var $data;
	
	public function __construct(){
       parent::__construct();
       date_default_timezone_set('America/Sao_Paulo');
       $this->load->helper('garden_helper');
       $this->load->model('Get_model');
       $this->load->model('Set_model');
       $this->load->model('Del_model');
       $this->load->model('Edit_model');
       $this->load->model('Note');
       $this->load->model('Pit');
       $this->load->model('Interaction');
       $this->load->model('Campaing');
	}

	public function loadView($views){
		$this->load->view('garden/backyard/header',$this->data);
		$this->load->view('garden/backyard/menu',$this->data);
		if(is_array($views)){
			foreach ($views as $view) {
				$this->load->view($view,$this->data);
			}
		}else{
			$this->load->view($views,$this->data);
		}
		$this->load->view('garden/backyard/footer',$this->data);
	}

}