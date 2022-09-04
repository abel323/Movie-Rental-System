<?php
    include('mysql connection.php');
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['DOB'];
    $dor = $_POST['DOR'];
    $custType = $_POST['custType'];
    $phone = $_POST['pNumber'];
    $address = $_POST['address'];


    try{
        $query="INSERT INTO tblcustomer(FName,MName,LName,DOB,DOR,Cust_Type,Phone,Address)
        VALUES(
        '".$fname."',
        '".$mname."',
        '".$lname."',
        '".$dob."',
        '".$dor."',
        ".$custType.",
        '".$phone."',
        '".$address."')";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($result>0){
            echo "<script>alert('Registration Done!');</script>";
        }
        else{
            echo "<script>alert('Could not process registeration!');</script>";
        }
    }
    catch(Exception $e){
        $errorMessage = $e->getMessage();
        echo "<p>".$errorMessage."</p>";
    }
?>