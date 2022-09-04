<?php
    include('connection.inc.php');
   // $mID = $_GET['movieNumber'];
  //  $movieNumber = (int)$mID;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit movie information</title>
        <meta charset="UTF-8">
        <meta name="edit" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <h1 align="center">Edit Movie Information Form</h1>
        <fieldset>
            <legend>Edit Moive Form</legend>
            <form action="edit form.php" method="get" target="main">
                <table border="0">
                    <tr>
                        <td>Title: </td>
                        <td><input type="text" name="mTitle"></td>
                    </tr>
                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <?php 
                                    try{
                                        $query="SELECT * FROM tblcategory ORDER BY Cat_Name";
                                        $result = mysqli_query($conn,$query) or die(mysqli_error($db));
                                        while($row=mysqli_fetch_array($result)){
                                            echo "<option value='".$row['Cat_ID']."'>";
                                            echo $row['Cat_Name'];
                                            echo "</option>";
                                        }
                                    }
                                    catch(Exception $e){
                                        echo "<p>$e->getMessage();</p>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Actor: </td>
                        <td><input type="text" name="actor"></td>
                    </tr>
                    <tr>
                        <td>Director: </td>
                        <td><input type="text" name="director"></td>
                    </tr>
                    <tr>
                        <td>Actual Number Of Copy: </td>
                        <td><input type="number" name="ACN"></td>
                    </tr>
                    <tr>
                        <td>Available Number Of Copy: </td>
                        <td><input type="number" name="AVNC"></td>
                    </tr>
                    <tr>
                        <td>Status: </td>
                        <td>
                            <select name="status">
                                <option value="Available">Available</option>
                                <option value="Not Available">Not Available</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Cancel">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>