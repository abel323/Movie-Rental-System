<?php
    include ('mysql connection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register new movie</title>
        <meta name="register movie" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="textbox style.css">
        <link rel="stylesheet" type="text/css" href="button-style.css">
        <script type="text/javascript">
            function confirmRequest(){
                confirm('Are you sure you want to process regstration?')
            }
        </script>
    </head>
    <body>
        <h1 align="center">Add New Movie</h1>
        <fieldset>
            <legend>Registration Form</legend>
            <form action="process movie registration.php" method="post" target="main" onsubmit="confirmRequest()">
                <table border="0">
                    <tr>
                        <td>Movie Title: </td>
                        <td><input type="text" name="mTitle" length="100" maxlength="100" placeholder="Enter movie title" required></td>
                    </tr>
                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category">
                                <?php
                                    $query="SELECT * FROM tblCategory";
                                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    while($row=mysqli_fetch_array($result)){
                                        extract($row);
                                        echo "<option value='".$row['Cat_ID']."'>";
                                        echo $row['Cat_Name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Actor Name: </td>
                        <td><input type="text" name="actorName" placeholder="Enter Actor Name" required></td>
                    </tr>
                    <tr>
                        <td>Directed By: </td>
                        <td><input type="text" name="director" placeholder="Directed by" required></td>
                    </tr>
                    <tr>
                        <td>Movie Duration: </td>
                        <td><input type="time" name="movieDuration" placeholder="Enter duration"></td>
                    </tr>
                    <tr>
                        <td>Date Of Production: </td>
                        <td><input type="date" name="DOP"></td>
                    </tr>
                    <tr>
                        <td>Date Of Registration: </td>
                        <td><input type="date" name="DOR"></td>
                    </tr>
                    <tr>
                        <td>Actual Number Of Copy: </td>
                        <td><input type="number" name="ANC"></td>
                    </tr>
                    <tr>
                        <td>Available Number Of Copy: </td>
                        <td><input type="number" name="AVNC"></td>
                    </tr>
                    <tr>
                        <td>Movie Status: </td>
                        <td>
                            <select name="mStatus">
                                <option value="Available">Available</option>
                                <option value="Not Avialable">Not Available</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Process registration" onsubmit="confirmRequest()">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>