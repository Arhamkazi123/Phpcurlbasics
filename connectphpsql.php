<?php

$host = "sql12.freemysqlhosting.net";  // e.g., sql123.freemysqlhosting.net
$username = "sql12727670";  // e.g., sqluser
$password = "YMBfNkbLlT";  // Your password
$database = "sql12727670";  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h1>Successful connection!</h1>";
echo "<br>";

$sql = "SELECT * FROM users";  // Replace 'users' with your table name

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    foreach ($result as $data) {
        echo $data['id'] . "<br>";
        echo $data['name'] . "<br>";
        echo $data['email'] . "<br>";
        echo $data['age'] . "<br>";
    }
} else {
    echo "No records found";
}




$conn->close();
