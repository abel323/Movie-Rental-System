<?php
    include('mysql connection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Register new customer</title>
        <meta charset="UTF-8">
        <meta name="new customer" content="width=device-width, initital-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <h1 align="center">Register new customer</h1>
        <fieldset>
            <legend>Register New Customer</legend>
            <form action="process customer registration.php" method="post" target="main">
                <table border="0">
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="fname" length="30" maxlength="30" required> </td> 
                    </tr>
                    <tr>
                        <td>Middle Name: </td>
                        <td><input type="text" name="mname" length="30" maxlength="30" required></td> 
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="lname" length="30" maxlength="30"></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth: </td>
                        <td><input type="date" name="DOB" required></td>
                    </tr>
                    <tr>
                        <td>Date Of Registration: </td>
                        <td><input type="date" name="DOR" required></td>
                    </tr>
                    <tr>
                        <td>Customer Type: </td>
                        <td>
                            <select name="custType">
                                <?php
                                    $query="SELECT * FROM tblcusttype";
                                    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                                    while($row=mysqli_fetch_array($result)){
                                        extract($row);
                                        echo "<option value=".$row['Type_ID'].">";
                                        echo $row['Type_Name'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number: </td>
                        <td><input type="text" name="pNumber" maxlength="15" required></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td>
                            <textarea name="address" rows="10" cols="50">Enter your address</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Clear">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>