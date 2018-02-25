<?php 
	header("Content-Type: application/json; charset=UTF-8");

	$post = "";
	
	$response = array(
		"response" => false,
		"metode" => "POST",
		"data" => null
	);
	
	if( isset($_POST['var']) ) {
		$post = $_POST['var'];
		$response['response'] = true;
		$response['data']['var'] = $post;
	}
	
	echo json_encode($response);