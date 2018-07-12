<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$loged = get_cookie('logado');
		if (!$loged) {
			$this->load->view('login');
		} else {
			redirect ('welcome');
		}
	}

	public function autenticar() {
		$this->load->model('login_model');
		$usuario     = $this->input->post('user');
		$senha       = $this->input->post('password');
		$user        = $this->login_model->autenticarUser($usuario, $senha);
		$sessionData = array(
							'usuario_logado' => $user	
						);
		if ($user) {
			delete_cookie('logado');
			set_cookie('logado',$user['user'],36000);
			redirect ('welcome');
		} else {
			redirect ('/');
		}
	}

	public function logout() {
		delete_cookie('logado');
		redirect ('/');
	}
}