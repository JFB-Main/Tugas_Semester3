<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /formpost/formpost.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    INI ADALAH SECTION PAGE ADMIN
    <h1><?= $say ?></h1>
    <a href=" /formpost/logout.php">Logout</a>
</body>
</html>