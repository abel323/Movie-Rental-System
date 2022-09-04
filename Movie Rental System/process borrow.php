<?php
    include('mysql connection.php');

    $movieID = $_POST['movID'];//integer
    $custID = $_POST['custID'];//integer
    $DOB = $_POST['DOB'];//date
    $ERD = $_POST['ERD'];//date
    $bStatus = $_POST['bStatus'];//string
    $price = $_POST['price'];//decimal

    try{
        $query = "INSERT INTO tblBorrow(Movie_ID,Cust_ID,Date_Of_Borrow,Expected_Return_Date,BStatus,Price)
        VALUES(
        $movieID,
        $custID,
        '".$DOB."',
        '".$ERD."',
        '".$bStatus."',
        $price)";
        //Process query
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($result>0){
            echo "<script>alert('Rent processed');</script>";
            $query = "UPDATE tblmovie SET Available_No_Of_Copy=Available_No_Of_Copy-1 WHERE Movie_ID=$movieID";
            $result=mysqli_query($conn,$query) or die(mysqli_error($conn)); 
            if($result>0){
                echo "<script>alert('Movie table updated!');</script>";
            }
        }
        else{
            echo "<script>alert('Could not process rent!');</script>";
        }
    }
    catch(Exception $e){
        echo "<p>".$e->getMessage()."</p>";
    }
?>