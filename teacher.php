<?php
require_once "config.php";
session_start();
print_r($_POST);
$data=$_POST['text'];
// print_r($_SERVER['username']);

$query="UPDATE `users` SET `assignment` = '$data' WHERE `users`.`username` = 'Majid';";
$result=mysqli_query($conn, $query);
// UPDATE `users` SET `assignment` = 'do that.?' WHERE `users`.`id` = 2;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post"><br>
    select user
    <br>
    <textarea name="text" id="" cols="30" rows="10">ENter assignment field</textarea><br>
    select user:<input name="submit" type="submit">
    </form>
</body>
</html>