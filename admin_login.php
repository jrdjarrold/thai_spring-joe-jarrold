<?php
	include('login.php'); // Includes Login Script
	if(isset($_SESSION['login_user'])){
	header("location: admin_home.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<!--
		 _____ _  _   _   ___   ___ ___ ___ ___ _  _  ___ 
		|_   _| || | /_\ |_ _| / __| _ \ _ \_ _| \| |/ __|
		  | | | __ |/ _ \ | |  \__ \  _/   /| || .` | (_ |
		  |_| |_||_/_/ \_\___| |___/_| |_|_\___|_|\_|\___|

		Copyright (C) 2015 Joseph Jarrold, joseph.jarrold@students.plymouth.ac.uk
		-->		
		<title>Thai Spring | Admin | Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Joe Jarrold" />
		<meta name= "keywords" content="Joe Jarrold" />
		<meta name= "description" content="Text" />
		<meta name= "robots" content="all" />
		<link rel="stylesheet" type="text/css" href="thai_spring_stylesheet.css" />
		<link href="href='http://fonts.googleapis.com/css?family=Open+Sans" />
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<body>
		<div id="admin_login_header">
			<p>Looking for Thai Spring bottled water?</p>
			<p>Click the link: <a href="index.html">thaispring.co.uk</a></p>
		</div><!-- admin_login_header end -->
		<div id="admin_login_box">
			<form id='admin_login' action='' method='post'>
				<input type='text' name='email_address' id='email_address' placeholder='Email Address'><br>			
				<input type='password' name='password' id='admin_password' placeholder='Password'><br>
				<input type='submit' name='submit' id='admin_login_button' value='Login'><br>
				<span id="echo_error_admin_login"><?php echo $error; ?></span>
			</form>
		</div><!-- admin_login_box end -->
	</body>
</html>