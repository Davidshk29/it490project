<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://api-nba-v1.p.rapidapi.com/seasons/');
$request->setRequestMethod('GET');
$request->setHeaders(array(
	'x-rapidapi-host' => 'api-nba-v1.p.rapidapi.com',
	'x-rapidapi-key' => '4abf56bb39mshec28731419efeaap164872jsn23aacab2df15'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
