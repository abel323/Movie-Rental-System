<?php
    include('mysql connection.php');
    $catName = $_POST['catName'];
    $query = "INSERT INTO tblcategory(Cat_Name) VALUES('$catName')";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
    if($result>0){
        echo "<script>alert('Category Added Successfully');</script>";
        $query = "SELECT * FROM tblcategory";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        echo "<table border='1'>";
        while($row=mysqli_fetch_array($result)){
            extract($row);
            echo "<tr>";
            echo "<td>".$row['Cat_ID']."</td>";
            echo "<td>".$row['Cat_Name']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "<script>alert('Failed to add category');</script>";
    }
?>
