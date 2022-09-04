<?php
    include('mysql connection.php');
    $title = $_POST['mTitle'];
    $category = $_POST['category'];
    $actor = $_POST['actorName'];
    $director = $_POST['director'];
    $duration = $_POST['movieDuration'];
    $DOP = $_POST['DOP'];
    $DOR = $_POST['DOR'];
    $copyNumberAct = $_POST['ANC'];
    $copyNumberAva = $_POST['AVNC'];
    $status = $_POST['mStatus'];

    try{
        $query = "INSERT INTO tblmovie(Title,Category,Actor,Director,Duration,DOP,DOR,Actual_No_Of_Copy,Available_No_Of_Copy,MStatus)
        VALUES(
        '".$title."',
        '".$category."',
        '".$actor."',
        '".$_POST['director']."',
        '".$duration."',
        '".$DOP."',
        '".$DOR."',
        $copyNumberAct,
        $copyNumberAva,
        '".$_POST['mStatus']."')";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($result>0){
            echo "<script>alert('Registration Done');</script>";
            echo "<h3>List of the datas you entered</h3>";
            echo "<p>Title: $title</p>";
            echo "<p>Category: $category</p>";
            echo "<p>Actor: $actor</p>";
            echo "<p>Director: ".$_POST['director']."</p>";
            echo "<p>Duration: $duraton</p>";
            echo "<p>Date Of Production: $DOP</p>";
            echo "<p>Date Of Registration: $DOR</p>";
            echo "<p>Actual Copy Number$copyNumberAct</p>";
            echo "<p>Available Copy Number: $copyNumAva</p>";
        }
    }
    catch(Exception $e){
        echo "<script>alert($e.getMessage());</script>";
    }
?>