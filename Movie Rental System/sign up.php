<?php
    include('connection.inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign up page</title>
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <nav>
            <div class="nav-header">
                <a href="login.php">You already have account?</a>
            </div>
        </nav>
        <form action="sign up.php" method="post">
            <fieldset>
                <legend>Sign up</legend>
                <table border="0">
                    <tr>
                        <td>User Name: </td>
                        <td><input type="text" name="user_name"></td>
                    </tr>
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="FName"></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="LName"></td>
                    </tr>
                    <tr>
                        <td>Middle Name: </td>
                        <td><input type="text" name="MName"></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth: </td>
                        <td><input type="date" name="dob"></td>
                    </tr>
                    <tr>
                        <td>Phone Number: </td>
                        <td><input type="tel" name="PNumber"></td>
                    </tr>
                    <tr>
                        <td>Email Address: </td>
                        <td><input type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td>Address: </td>
                        <td><textarea name="address" width="100" height="90"></textarea></td>
                    </tr>
                    <tr>
                        <td>City: </td>
                        <td>
                            <select name="city">
                                <option value="AA">Addis Ababa</option>
                                <option value="BA">Bahir Dar</option>
                                <option value="AD">Adama</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password: </td>
                        <td><input type="password" name="confPassword"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Sign up">
                            <input type="reset" value="Cancel">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <?php
            if(isset($_POST['submit'])){
                if(trim($_POST['user_name'])=="" && trim($_POST['password'])==""&& trim($_POST['confPassword'])==""){
                    echo "<script>alert('Some fields cant be empty!')</script>";
                }
                else if($_POST['password']!=$_POST['confPassword']){
                    echo "<script>alert('Password did not match!');</script>";
                }
                else{
                    $sql = "INSERT INTO tbluser(user_name,FName,LName,MName,DOB,PNumber,EMail,Address,City,UPassword) VALUES(
                        '".$_POST['user_name']."',
                        '".$_POST['FName']."',
                        '".$_POST['LName']."',
                        '".$_POST['MName']."',
                        '".$_POST['dob']."',
                        '".$_POST['PNumber']."',
                        '".$_POST['email']."',
                        '".$_POST['address']."',
                        '".$_POST['city']."',
                        '".$_POST['password']."')";
                    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
                    if($result>0){
                        echo "<script>alert('Signed up successfully!');</script>";
                        header("Location: login.php");
                    }
                    else{
                        echo "<script>alert('Couldn\'t Signed up successfully!');</script>";
                    }
                }
            }
        ?>
    </body>
</html>