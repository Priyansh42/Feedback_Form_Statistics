<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "feedback_form";
    $connect = mysqli_connect($servername,$username,$password,$database);

    if(!$connect)
    {
        die("Error connecting to MySQL".mysqli_error($connect));
    }
?>