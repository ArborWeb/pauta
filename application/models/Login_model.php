<?php

class Login_model extends CI_Model {

	public function autenticarUser($usuario, $senha) {
		$this->db->where('user', $usuario);
		$this->db->where('password', $senha);
		$user = $this->db->get('users')->row_array();
		return $user;
	}
}