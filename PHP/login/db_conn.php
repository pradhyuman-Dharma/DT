<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "dt";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if(!$conn){
        echo "Connection failed!";
        exit();
    } else {
        // echo "Connected Successfuly<hr>";
    }
?>