<?php
require_once "config.php";

print_r($_POST);
$data=$_POST['text'];


$query="SELECT * FROM `users`";
$result=mysqli_query($conn, $query);

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
    select user:
    <select>
        <option name="student" >select student name</option>
        <?php
        require_once "config.php";
        $statement="SELECT `username` FROM `users`";
        $result=mysqli_query($conn,$statement);
       if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
         echo "<option>$row[username]</option>";
      }
        }

        
        ?>
    </select>
    <br>
    <textarea name="text" id="" cols="30" rows="10">ENter assignment field</textarea><br>
    select user:<input name="submit" type="submit">
    </form>
</body>
</html>