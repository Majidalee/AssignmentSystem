<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .majid {
            background-color: #B2D3AE;
        }
    </style>
</head>

<body class=" majid container text-align-center">

    <h1 class="text-center">Teacher view</h1>
    <form action="#" method="post"><br>
        select user
        <br>
        <select name="student" class="form-control">
            <option default> select student name</option>
            <?php
            require_once "config.php";
            $statement = "SELECT `username` FROM `users`";
            $result = mysqli_query($conn, $statement);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='$row[username]'>$row[username]</option>";
                }
            }
            ?>
        </select>

        <br>
        <br>
        <textarea rows="10" name="text" class="md-textarea form-control" id="">ENter assignment field</textarea><br>
        <input name="submit" class="btn btn-success btn-lg btn-block" type="submit">
        <a href="userstatus.php" class="btn btn-danger btn-lg btn-block" role="button">user status</a>
        <!-- <button class="btn btn-danger  btn-lg btn-block" ><a class="btn" href="userstats.php">User Stats</a></button> -->
    </form>
</body>

</html>








<?php
require_once "config.php";
session_start();
// print_r($_POST);
$data = $_POST['text'];
$student = $_POST['student'];
// print_r($_SERVER['username']);

// $query="UPDATE `users` SET `assignment` = '$data' WHERE `users`.`username` = '$student';";
$query = "UPDATE `users` SET `assignment`=concat(assignment,'$data') WHERE `users`.`username` = '$student'";
$result = mysqli_query($conn, $query);

// UPDATE `users` SET `assign ment` =   'do that.?' WHERE `users`.`id` = 2;
?>