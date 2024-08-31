<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        <input type="text" name="username" placeholder="enter ur name">

        <button name="btn" value="set">Set cookie</button>
        <button name="btn" value="display">display cookie</button>
        <button name="btn" value="delete">delete cookie</button>

    </form>

</body>

</html>


<?php

if (isset($_POST['btn'])) {
    if ($_POST['btn'] == 'set') {
        $val = $_POST['username'];
        setcookie("user", $val);
    }
    if ($_POST['btn'] == 'display') {

        if (isset($_COOKIE["user"])) {

            echo $_COOKIE["user"];
        } else {
            echo "no cookie found";
        }
    }
    if ($_POST['btn'] == 'delete') {

        setcookie("user", "", -1);
    }
}

?>