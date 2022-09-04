<?php
    include('connection.inc.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add New Category</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="button-style.css">
    </head>
    <body>
        <fieldset>
            <legend>Add New Category</legend>
            <form action="process add category.php" method="post" target="_blank">
                <table border="0">
                    <tr>
                        <td>Category Name: </td>
                        <td><input type="text" name="catName" placeholder="Category Name">
                    </tr>
                    <tr>
                        <td colsapn="2">
                            <input type="submit" value="Submit">
                            <input type="reset" value="Cancel">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>