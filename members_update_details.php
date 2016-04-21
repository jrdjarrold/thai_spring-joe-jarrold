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
		<title>Thai Spring | Members Update Details</title>
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
					<form action="" method="post">
						<p>
							<input id="create_an_account_textbox" name="first_name" type="text" placeholder="First Name" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="last_name" type="text" placeholder="Last Name"required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="date_of_birth" type="text" placeholder="Date Of Birth (YYYY-MM-DD)" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="email_address" type="text" placeholder="Email Address" required />
						</p>
						<p>
							<input class="create_an_account_submit" name="account_create" type="submit" id="submitlogin" value="Update Details" required />
						</p>
					</form>
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