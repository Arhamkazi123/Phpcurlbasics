<?php

$dsn = '';
$username = '';
$password = '';

$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Connected successfully<br>";
$stmt = $pdo->prepare("delete from users where id='6';");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
print_r($result);
