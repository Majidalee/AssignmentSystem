<?php

require_once "config.php";
$statement = "SELECT `username`,`is_seen` FROM `users`";
// $result = mysqli_query($conn, $statement);

// $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// print_r($posts);
// var_dump($posts);

// Free Result
// mysqli_free_result($result);
// print_r($result);
// Close Connection




?>

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


<body class="majid">

    <table class=" p-xl-5 table table-success  table-striped">
        <thead>
            <tr>
                <th>Username</th>
                <th>Assignment Status</th>
            </tr>

        </thead>


        <tbody>
            <?php
            $statement = "SELECT `username`,`is_seen` FROM users";
            $result = mysqli_query($conn, $statement);
            // print_r($posts);
            //var_dump($posts);

            while ($posts = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $posts['username'] ?>
                    </td>

                    <td>
                        <?php echo $posts['is_seen'] ?>

                    </td>
                </tr>
            <?php
        }
        // Free Result
        mysqli_free_result($result);
        //  }
        // Close Connection
        // mysqli_close($conn);

        ?>

    </table>
</body>