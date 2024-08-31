<?php


$ch = curl_init();
$url = "https://reqres.in/api/users/2";

$dataarray = array(
    'name' => 'Arham Kazi',
    'age' => '22'
);

$data = http_build_query($dataarray);


curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// IF WANT TO SENT HEADER ALONG
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: kenkwbbebc'));

$resp = curl_exec($ch);

echo $resp;
