<?php

	session_start();
	

	require_once dirname(__FILE__).'/../helpers/functions.php';
	require_once dirname(__FILE__).'/config.php';
	require_once dirname(__FILE__).'/../library/database.php';


	$db = new Database(INIT_DRIVER, INIT_HOST, INIT_USER, INIT_PASS, INIT_DATABASE);