<?php
	require_once (__DIR__) . './../init/init.php';
	header('Content-Type: application/json');

	$json = [];

	require_once (__DIR__) . './../admin/connections.php';
	$connections = new Connections();


	

