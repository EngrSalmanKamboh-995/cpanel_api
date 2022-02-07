<?php

	/*
	* ----------------------------------------------
	* [SERVER CONFIG]
	* ----------------------------------------------
	*/
	define('SERVER', ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST']));

	/*
	* ----------------------------------------------
	* [ROOT CONFIG]
	* ----------------------------------------------
	*/
	define('ROOT', (str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME'])));

	/*
	* ----------------------------------------------
	* [Base URL]
	* ----------------------------------------------
	*/
	define('BASE_URL', rtrim((SERVER . ROOT), '/').'/');

	function dd($args = array(), $exit=false){
		echo "<pre>";
		print_r($args);
		echo "</pre>";
		if($exit) exit;
	}

	function base_url($url=''){
		return BASE_URL . ((!empty($url))? '/' . $url:'');
	}