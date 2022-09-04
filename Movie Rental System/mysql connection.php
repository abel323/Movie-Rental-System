<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    try{
        $conn = mysqli_connect($host,$user,$password) or die('Unable to establish connection with the database!');
        mysqli_select_db($conn,'movie_rental') or die(mysqli_error($conn));
    }
    catch(Exception $e){
        echo "<p>".$e->getMessage()."</p>";
    }
?>