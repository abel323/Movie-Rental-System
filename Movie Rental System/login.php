<!DOCTYPE html>
<html>
    <head>
        <title>Login window</title>
        <meta name="viewport", content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="button-style.css">
        <style type="text/css">
            form{
                background-color: lightgrey;
                font-family:Arial, Helvetica, sans-serif;
                font-size: 20px;
                width: 20%;
                margin-top: 200px;
                margin-left: 40%;
            }
            input[type="submit"]{
                border-radius: 0%;
                background-color:bisque;
                color: black;
                width: 100px;
            }
            form td{
                align-content: center;
            }
        </style>
    </head>
    <body>
        <nav>
            <div class="link header">
                <a href="sign up.php">You dont have account, dont worry you can register here</a>
            </div>
        </nav>
        <form action="login auth.php" method="post">
            <table border="0">
                <tr>
                    <td>User Name: </td>
                    <td><input type="text" name="user_name"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Log In">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>