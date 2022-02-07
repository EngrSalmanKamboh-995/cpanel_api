<?php
	require_once (__DIR__) . './../init/init.php';
	header('Content-Type: application/json');

	$json = [];

	if(isset($_POST['username'])&&isset($_POST['password'])){
		
		if(!empty($_POST['username'])&&!empty($_POST['password'])){

			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = "SELECT * FROM `user` WHERE `username` = '%s' AND `password` = '%s'";
			$sql = sprintf($query, $db->escape($username), $db->escape(md5($password)));
			$result = $db->query($sql);
			if($result->num_rows>0){
				
				$user = $result->row;

				$_SESSION['user_id'] = $user['user_id'];
				$_SESSION['username'] = $user['username'];
				$_SESSION['is_loggedin'] = true;

				dd($_SESSION, true);

				$json = array(
					'success' => true,
					'status' => 200,
					'message' => 'Success Login',
					'redirect_url' => base_url('')
				);

			} else {
				$json = array(
					'success' => true,
					'status' => 200,
					'message' => 'User not found!'
				);	
			}

		} else {
			$json = array(
				'success' => true,
				'status' => 200,
				'message' => 'Username or password required!'
			);
		}
	} else {
		$json = array(
			'success' => true,
			'status' => 200,
			'message' => 'Invalid Request'
		);
	}






	echo json_encode($json, JSON_PRETTY_PRINT);
	exit;