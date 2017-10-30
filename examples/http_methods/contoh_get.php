<?php 
	header("Content-Type: application/json; charset=UTF-8");

	$get = "";
	
	$response = array(
		"response" => false,
		"metode" => "GET",
		"data" => null
	);
	
	if( isset($_GET['var']) ) {
		$get = $_GET['var'];
		$response['response'] = true;
		$response['data']['var'] = $get;
	}
	
	echo json_encode($response);