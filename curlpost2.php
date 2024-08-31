<?php

$ch = curl_init();
$url = "https://reqres.in/api/users";

// Directly define the JSON data as a string
$jsonData = '{
    "name": "Arham Kazi",
    "age": "22"
}';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

echo $resp;

curl_close($ch);
