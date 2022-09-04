<?php
    include('connection.inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit movie</title>
        <meta name="editmovie" content="width=device-width, initital-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="edit movie.php" method="post" target="main">
            <table border="0">
                <tr>
                    <td>Enter movie name: </td>
                    <td><input type="search" name="mTitle"></td>
                    <td><input type="submit" value="Search"></td>
                </tr>
            </table>
        </form>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Duration</th>
                <th>Actual Number Of Copy</th>
                <th>Available Number Of Copy</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
        <?php
            try{
                $mTitle = $_POST['mTitle'];
                $query="SELECT * FROM tblmovie WHERE Title LIKE '%$mTitle%'";
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                while($row=mysqli_fetch_array($result)){
                    extract($row);
                    echo "<tr>";
                    echo "<td>".$row['Movie_ID']."</td>";
                    echo "<td>".$row['Title']."</td>";
                    echo "<td>".$row['Duration']."</td>";
                    echo "<td>".$row['Actual_No_Of_Copy']."</td>";
                    echo "<td>".$row['Available_No_Of_Copy']."</td>";
                    echo "<td>".$row['MStatus']."</td>";
                    echo "<td><a href='edit form.php?movieNumber=".$row['Movie_ID']."' target='main'>[Edit]</a></td>"; 
                }
                echo "</table>";
            }
            catch(Exception $e){
                echo "<p>$e->getMessage()</p>";
            }
        ?>
    </body>
</html>