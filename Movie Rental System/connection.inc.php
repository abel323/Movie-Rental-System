<?php
    $host='localhost';
    $user='root';
    $password='';

    $conn = mysqli_connect($host,$user,$password);

    if(mysqli_errno($conn)){
        echo "<script>alert('ERROR: Could not establish connection with database server!');</script>";
    }
    else{
        mysqli_select_db($conn,'movie_rental') or die(mysqli_error($conn));
    }
?>