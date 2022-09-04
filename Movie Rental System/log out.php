<!DOCTYPE html>
<html>
<head>
	<title>Log out</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="button-style.css">
</head>
<body>
	<?php
		require_once('login auth.php');
		if(isset($_SESSION['user_name']) && isset($_SESSION['password'])){
			session_destroy();
			header("Location: login.php");
		}
	?>
</body>
</html>