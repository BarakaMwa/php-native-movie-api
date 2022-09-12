<?php

//$curl = curl_init("https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
/*curl_setopt($curl, CURLOPT_HTTPGET, true);
curl_setopt($curl, CURLOPT_HEADER, 'Content-Type: application/json;charset=utf-8');*/

$response = curl_exec($curl);

curl_close($curl);

var_dump($response);


