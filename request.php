<?php

function requestFeed($id) {
	$service_url = 'http://localhost:8080/EcodifAPI/api/feed/' . $id;
	$curl = curl_init($service_url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl,CURLOPT_HTTPHEADER,array('token: 09bb21d5b4b1e765325d5eefd513172f'));

	$curl_response = curl_exec($curl);
	if ($curl_response === false) {
	    $info = curl_getinfo($curl);
	    curl_close($curl);
	    die('error occured during curl exec. Additioanl info: ' . var_export($info));
	}
	curl_close($curl);
	$decoded = json_decode($curl_response);
	if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
	    die('error occured: ' . $decoded->response->errormessage);
	}

	return $decoded;
}

function ozonio() {
	$feed = requestFeed(25);
	$value = $feed->data[0]->currentValue->value;
	if($value < 0.06)
		return 'Good';
	elseif ($value < 0.076)
		return 'Moderate';
	elseif ($value < 0.096)
		return 'Unhealthy for Sensitive Groups';
	elseif ($value < 0.116)
		return 'Unhealthy';
	else
		return 'Very Unhealthy';
}


function no2() {
	$feed = requestFeed(26);
	$value = $feed->data[0]->currentValue->value;
	$value = 2;
	if($value < 0.054)
		return 'Good';
	elseif ($value < 0.101)
		return 'Moderate';
	elseif ($value < 0.361)
		return 'Unhealthy for Sensitive Groups';
	elseif ($value < 0.65)
		return 'Unhealthy';
	elseif($value < 1.25)
		return 'Very Unhealthy';
	else
		return 'Hazardous';

}

function so2() {
	$feed = requestFeed(27);
	$value = $feed->data[0]->currentValue->value;
	$value = 0.01;
	if($value < 36)
		return 'Good';
	elseif ($value < 76)
		return 'Moderate';
	elseif ($value < 186)
		return 'Unhealthy for Sensitive Groups';
	else
		return 'Unhealthy';
}

function requestLocal() {
	return  'teste';
}

?>