<!DOCTYPE html>
<html>

<head>
    <title>Available Movies</title>
    <meta name="available movies" content="width=device-width, intital-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        tr:nth-child(even){
            background-color: rgb(10,50,40);
            color: white;
        }
        tr:nth-child(odd){
            background-color: white;
        }
    </style>
</head>

<body>
    <h1 align="center">Available Movies</h1>
    <table border="1">
        <thead>
            <th>Movie ID</th>
            <th>Title</th>
            <th>Actor</th>
            <th>Director</th>
            <th>Duration</th>
            <th>Date Of Production</th>
            <th>Available Number of Copy</th>
            <th>Status</th>
        </thead>
<?php
    include('connection.inc.php');

    try{
        $query = "SELECT * FROM tblmovie WHERE Available_No_Of_Copy>0";
        $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
        while($row=mysqli_fetch_array($result)){
            extract($row);
            echo "<tr>";
            echo "<td>".$row['Movie_ID']."</td>";
            echo "<td>".$row['Title']."</td>";
            echo "<td>".$row['Actor']."</td>";
            echo "<td>".$row['Director']."</td>";
            echo "<td>".$row['Duration']."</td>";
            echo "<td>".$row['DOP']."</td>";
            echo "<td>".$row['Available_No_Of_Copy']."</td>";
            echo "<td>".$row['MStatus']."</td>";
            echo "</tr>";
        }
    }
    catch(Exception $e){
        $excepitonMessage=$e->getMessage();
        echo "<p>$excepitonMessage</p>";
    }
?>
    </table>
</body>
</html>