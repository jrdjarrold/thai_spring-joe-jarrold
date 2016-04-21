<?php
	include('member_login_check.php'); // Includes Login Script
	if(isset($_SESSION['login_user'])){
	header("location: member_home.php");
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
		<title>Thai Spring | Homepage</title>
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
		<div id='top_navigation_bar'>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="member_login.php">Login</a></li>
			</ul>
		</div><!-- top_navigation_bar end -->
		<div id="container_customer_login">
			<div id="filter_4">
				<div id="both_boxs">
					<div id="existing_customers_login_box">
						<p id="existing_customers_header">Existing Customers</p>
						<form id="member_login" action="" method="post">
							<input type="text" name="email address" placeholder="Email Address"><br>
							<input type="password" name="password" placeholder="Password"><br>
							<input type='submit' name='submit' id='member_login_button' value='Login'><br>
							<span id ="echo_error_member_login"><?php echo $error; ?></span>
						</form>
					</div><!-- existing_customers_login_box end -->
					<div id="new_customers_login_box">
						<p id="new_customers_header">New Customers</p>
						<form action="create_an_account.php">
							<input type="submit" value="Create an Account">
						</form>
					</div><!-- new_customers_login_box end -->
				</div><!-- both_boxs end -->
			</div><!-- filter_4 end -->
		</div><!-- container_dashboard end -->
		<div id="bottom_navigation_bar">
			<ul>
				<li><a href="site_map.html">Site Map</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="member_login.php">Login</a></li>
			</ul>
		</div><!-- bottom_navigation_bar end -->
	</body>
</html>