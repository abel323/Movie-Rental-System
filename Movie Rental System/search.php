<?php
    include('connection.inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Search Result</title>
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <h1 align="center">Search Result</h1>
        <table border="1">
            <thead>
                <td>ID</td>
                <td>Title</td>
                <td>Category</td>
                <td>Actor</td>
                <td>Director</td>
                <td>Duration</td>
                <td>Date of production</td>
                <td>Date of registration</td>
                <td>Actual number of copy</td>
                <td>Available number of copy</td>
                <td>Status</td>
            </thead>
            <?php
                $title = $_GET['mName'];
                $sql = "SELECT * FROM tblmovie WHERE Title LIKE '%$title%'";
                $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                while($row=mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['Movie_ID'] ."</td>";
                    echo "<td>" . $row['Title'] ."</td>";
                    echo "<td>".$row['Category'] ."</td>";
                    echo "<td>".$row['Actor']."</td>";
                    echo "<td>".$row['Director']."</td>";
                    echo "<td>".$row['Duration'] ."</td>";
                    echo "<td>".$row['DOP']."</td>";
                    echo "<td>".$row['DOR']."</td>";
                    echo "<td>".$row['Actual_No_Of_Copy']."</td>";
                    echo "<td>".$row['Available_No_Of_Copy']."</td>";
                    echo "<td>".$row['MStatus']."</td>";
                    //echo "<td>".$row['DOP']."</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>