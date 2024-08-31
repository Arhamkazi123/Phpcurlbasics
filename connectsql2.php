<?php
$dsn = 'mysql:host=sql12.freemysqlhosting.net;dbname=sql12727670';
$username = 'sql12727670';
$password = 'YMBfNkbLlT';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully<br>";
    $stmt = $pdo->prepare("SELECT * FROM users");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($result);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
