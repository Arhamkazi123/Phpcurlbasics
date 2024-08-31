<?php


$ch = curl_init();
$url = "https://reqres.in/api/users";

$dataarray = array(
    'name' => 'Arham Kazi',
    'age' => '22'
);

$data = http_build_query($dataarray);


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

echo $resp;
