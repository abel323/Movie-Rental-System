<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8"/>
</head>
<body>
    <?php
        include("connection.inc.php");
        session_start();
        $_SESSION['user_name'] = $_POST['user_name'];
        $_SESSION['password'] = $_POST['password'];
        $sql="SELECT user_name, UPassword FROM tbluser WHERE user_name='".$_POST['user_name']."'"." AND UPassword='".$_POST['password']."'";
        $user = '';
        $password = '';

        $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

        while($row = mysqli_fetch_array($result)){
            extract($row);
            $user = $user_name;
            $password = $UPassword;
        }
        if($_SESSION['user_name']==$user && $_SESSION['password']==$password){
            echo "<script>alert('Logged in successfully!');</sctipt>";
            header("Location: index.html");
        }
        else{
            echo "<script>alert('un authorized user!');</script>";
            session_destroy();
            require_once('login.php');
        }
    ?>
</body>
</html>