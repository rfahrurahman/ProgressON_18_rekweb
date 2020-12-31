<?php

$url = "https://developers.zomato.com/api/v2.1/restaurant?res_id=18962560&apikey=849d8360846e72f6e210e1dad475fbfa";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$responseJson = curl_exec($ch);
curl_close($ch);

$json = json_decode($responseJson, true);


$location2 = $json['location']['address'];
// print_r($location2);
// echo $location2;
