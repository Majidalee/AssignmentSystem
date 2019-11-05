


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
        <select name="student">
            <option default> select student name</option>
            <?php
        require_once "config.php";
        $statement="SELECT `username` FROM `users`";
        $result=mysqli_query($conn,$statement);
       if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
         echo "<option value='$row[username]'>$row[username]</option>";
      }
        }

        
        ?>
        </select>

        <br>

















        <br>
        <textarea name="text" id="" cols="30" rows="10">ENter assignment field</textarea><br>
        select user:<input name="submit" type="submit">








    </form>
</body>

</html>








<?php
require_once "config.php";
session_start();
// print_r($_POST);
$data=$_POST['text'];
$student=$_POST['student'];
// print_r($_SERVER['username']);

$query="UPDATE `users` SET `assignment` = '$data' WHERE `users`.`username` = '$student';";
$result=mysqli_query($conn, $query);
// UPDATE `users` SET `assignment` = 'do that.?' WHERE `users`.`id` = 2;
?>