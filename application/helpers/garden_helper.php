<?php

if ( ! function_exists('dump')) {
	function dump($data,$die=false) {
		echo "<pre>";
		print_r($data);
		if ($die == false) {
			echo "</pre>";
			die;
		} else {
			echo "</pre>";
		}
		
	}
}

if ( ! function_exists('autoriza')) {
	function autoriza() {
		$usuarioLogado = get_cookie('logado');
		if (!$usuarioLogado) {
			redirect ('/');
		}
		return $usuarioLogado;
	}
}


if ( ! function_exists('json_to_db_date')) {
	function json_to_db_date($data) {
		$date = date('Y-m-d',strtotime(str_replace('/', '-', $data)));
		return $date;
	}
}

if ( ! function_exists('set_enters')) {
	function set_enters($data) {
		$data = str_replace('\n', '<br>', $data);
		return $data;
	}
}

if ( ! function_exists('limit_text')) {
	function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
}


if (! function_exists('url_to_id')) {
	function url_to_id($url) {
		$id = explode("-", $url);
		return end($id);
	}
}

if ( ! function_exists('get_uri')) {
	function get_uri($uri = '') {
		return "{$uri}";
	}
}

if (! function_exists('page_is')) {
	function page_is($class_name = '') {
		$CI =& get_instance();
		return $CI->router->fetch_class() === $class_name;
	}
}

if (! function_exists('round_up')) {
	function round_up($number, $precision = 2) {
	    $fig = (int) str_pad('1', $precision, '0');
	    return (ceil($number * $fig) / $fig);
	}
}

if (! function_exists('br_date')) {
	function br_date($date) {
		return date("g:i, d/m/Y", strtotime($date));
	}
}

if (! function_exists('pit_date')) {
	function pit_date($date) {
		return date("d/m/Y", strtotime($date));
	}
}

if (! function_exists('pit_days')) {
	function pit_days($date) {
		$today = date('d-m-Y');
		$date = date('d-m-Y',strtotime($date));
		$days = (strtotime($date) - strtotime($today))/86400;
		return $days;
	}
}

if (! function_exists('interactions_days')) {
	function interactions_days($date) {
		$today = date('d-m-Y');
		$date = date('d-m-Y',strtotime(str_replace('/', '-', $date)));
		$days = (strtotime($date) - strtotime($today))/86400;
		return $days;
	}
}

if (! function_exists('get_situation_box')) {
	function get_situation_box($date) {
		$date = date('Y-m-d',strtotime(str_replace("/", "-", $date)));
		$today = date('Y-m-d');
		switch ($date) {
			case $date > $today:
				return 'label-success';
				break;
			case $date == $today:
				return 'label-warning';
				break;
			case $date < $today:
				return 'label-danger';
				break;
		}
	}
}

if (! function_exists('set_week_day')) {
	function set_week_day($day) {
		switch ($day) {
			case 0:
				return 'Domingo';
				break;
			case 1:
				return 'Segunda';
				break;
			case 2:
				return 'Terça';
				break;
			case 3:
				return 'Quarta';
				break;
			case 4:
				return 'Quinta';
				break;
			case 5:
				return 'Sexta';
				break;
			case 6:
				return 'Sábado';
				break;
		}
	}
}

if (! function_exists('set_posts')) {
	function set_posts($data) {
		
		dump($data);
	}
}

