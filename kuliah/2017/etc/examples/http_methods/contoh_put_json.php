<?php 
	header("Content-Type: application/json; charset=UTF-8");
    ini_set("allow_url_fopen", 1); // to enabling >> file_get_contents('php://input');

    $getjson = file_get_contents('php://input'); # Get JSON as a string: https://davidwalsh.name/php-json
    $json_data = json_decode($getjson); # Get as an object

    $dummy_data = array(
        array("id" => 1, "nama" => "ardihikaru"),
        array("id" => 2, "nama" => "hikaru")
    );

	$response = array(
		"response" => false,
		"metode" => "PUT",
		"data" => null
	);
	
	if( isset($json_data->id) AND isset($json_data->nama) ) {

	    // cek dengan data di database (?)
	    if( (int) $json_data->id == $dummy_data[0]['id'] ){ //data valid
            // begin updating data
            $response['response'] = true;
            $response['data']['nama_sebelum_diganti'] = $dummy_data[0]['nama'];
            $response['data']['nama_setelah_diganti'] = $json_data->nama;
        }
	}
	
	echo json_encode($response);