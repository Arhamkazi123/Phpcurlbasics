<?php
$dsn = '';
$username = '';
$password = '';
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
