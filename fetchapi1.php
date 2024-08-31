<?php
$url = "https://jsonplaceholder.typicode.com/todos";  // Replace with your API URL

$res = file_get_contents($url);

if ($res === FALSE) {
    die("Error occurred while fetching data");
}


$res1 = json_decode($res, true);

foreach ($res1 as $data) {
    echo "Id is " . $data['id'] . " title is " . $data['title'] . " Completion status is " . ($data['completed'] ? "YES" : "No");
    echo '<br>';
}

// echo '<pre>';
// print_r($res);
// echo '</pre>';

// print($res);
