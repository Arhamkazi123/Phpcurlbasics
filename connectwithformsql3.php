<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">


        <input type="text" name="pid" placeholder="add id">
        <input type="text" name="name" placeholder="add name">
        <input type="text" name="email" placeholder="add email">
        <input type="text" name="age" placeholder="add age">
        <button type="submit">Submit</button>
    </form>
</body>

</html>


<?php

if (isset($_POST['name'])) {

    try {
        $dsn = '';
        $username = '';
        $password = '';

        $id = $_POST['pid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected successfully<br>";
        $stmt = $pdo->prepare("insert into users values($id,'$name','$email',$age)");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<pre>";
        print_r($result);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>
