<?php 
	header("Content-Type: application/json; charset=UTF-8");
    ini_set("allow_url_fopen", 1); // to enabling >> file_get_contents('php://input');

    $getjson = file_get_contents('php://input'); # Get JSON as a string: https://davidwalsh.name/php-json
    $json_data = json_decode($getjson); # Get as an object

	$response = array(
		"response" => false,
		"metode" => "POST",
		"data" => null
	);
	
	if( isset($json_data->var) ) {
		$post_json = $json_data->var;
		$response['response'] = true;
		$response['data']['var'] = $post_json;
	}
	
	echo json_encode($response);