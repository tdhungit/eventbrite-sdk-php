<?php

function CreateAuthorizeUrl($client_key)
{
	$authorize_url = 'www.eventbrite.com/oauth/authorize?response_type=code&client_id=' . $client_key;

	return $authorize_url;
}

function Handshake($code, $client_secret, $app_key)
{
	$post_args = array('code'=>$code,
		               'client_secret'=>$client_secret,
		               'client_id'=>$app_key,
		               'grant_type'=>'authorization_code');
	$data = http_build_query($post_args);

	var_dump($data);

    $options = array(
        'http'=>array(
            'method'=>'POST',
            'header'=>"Content-type: application/x-www-form-urlencoded",
            'content'=>$data,
            'ignore_errors'=>true
        )
    ); 

    $url = 'https://www.eventbrite.com/oauth/token';

    $context  = stream_context_create($options);

    $result = file_get_contents($url, false, $context);

    /* this is where we will handle errors. Eventbrite errors are a part of the response payload and are returned as an associative array. */
    return json_decode($result, true);

}
