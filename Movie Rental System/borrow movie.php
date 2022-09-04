<?php
    include('connection.inc.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Borrow Movie</title>
        <meta charset="UTF-8">
        <meta name="borrowmovie" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <h1 align="center">Rent Movie</h1>
        <fieldset>
            <legend>Borrow Movie Form</legend>
            <form action="process borrow.php" method="post">
                <table border="0">
                    <tr>
                        <td>Movie: </td>
                        <td>
                            <select name="movID">
                                <?php
                                    $sql = "SELECT Movie_ID,Title FROM tblmovie WHERE Available_No_Of_Copy>0";
                                    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                                    while($row=mysqli_fetch_array($result)){
                                        extract($row);
                                        echo "<option value='".$Movie_ID."'>";
                                        echo $Title;
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Customer ID</td>
                        <td><input type="number" name="custID"></td>
                    </tr>
                    <tr>
                        <td>Date Of Borrow</td>
                        <td><input type="date" name="DOB"></td>
                    </tr>
                    <tr>
                        <td>Expected Return Date</td>
                        <td><input type="date" name="ERD"></td>
                    </tr>
                    <tr>
                        <td>Borrow Status</td>
                        <td>
                            <select name="bStatus">
                                <option value="Not Returned">Not Returned</option>
                                <option value="Returned">Returned</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Rent Price</td>
                        <td><input type="number" name="price"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Cancel"
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>
