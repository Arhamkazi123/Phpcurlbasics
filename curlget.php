<?php


$ch = curl_init();
$url = "https://reqres.in/api/users/2";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$res = curl_exec($ch);

echo $res;

// decode if u want
