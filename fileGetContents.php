<?php
$payload = json_encode([
    "query" => "Wars"
]);

$query = "Wars";

$options = [
    "http" =>[
        "method" => "GET",
        "header" => "Content-type: application/json: charset=UTF-8",
        "content" => $payload
    ]
];

$context =  stream_context_create($options);

//$response  = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
$response  = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=d0f5f2e135336200362af8a1a73acb17");
//$response  = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=d0f5f2e135336200362af8a1a73acb17&page=2&query=".$query);

$json=str_replace('},

]',"}

]",$response);
$data = json_decode($json, TRUE);

//var_dump($response);

print_r($data["results"][0]);

//$response = json_encode($response);
//var_dump(json_decode($response));