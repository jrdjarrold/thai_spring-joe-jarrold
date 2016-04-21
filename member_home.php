<?php 
	include('member_session.php');
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
		<title>Thai Spring | Members Homepage</title>
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
		<div id="dashboard_container">
			<div id="dashboard_navigation_bar_customers">
				<ul>
					<li><a href="member_home.php">Members Home</a></li>
					<li><a href="member_place_order.php">Place An Order</a></li>
					<li><a href="member_my_orders.php">My Orders</a></li>
					<li><a href="member_my_details.php">My Details</a></li>
					<li><a href="member_contact.php">Contact</a></li>
				</ul>
			</div><!-- dashboard_navigation_bar end -->
			<div id="container_dashboard">
				<div id="newaddy">
					<h2>Hello <?php echo $_SESSION['login_user_name']; echo ' '; echo $_SESSION['login_user_name_last']; ?></h2>
					<div id="dashboard_home">
						<p>Select one of the options below.</p>
						<p>If you have any issues or want to contact us about anything please use the 'contact us' button.</p>
						<p>To return to Thai Spring's main website click <a href="index.html">here</a>.</p>
						<p>For security reasons ensure you are logged out after every session by using the 'LOGOUT' button.</p>
					</div>
				</div>
				<div id="newaddy">
					<div id="member_home_op_1">
						<ul>
							<li><a href="member_place_order.php">Place An Order</a></li>
							<li><a href="member_my_orders.php">My Orders</a></li>
							<li><a href="member_my_details.php">Change Account Details</a></li>
							<li><a href="member_contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>