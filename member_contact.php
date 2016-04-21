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
		<title>Thai Spring | Members Contact</title>
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
					<h2>Contact Us</h2>
					<p>If you have any questions, queries or inquiries please fill in the form below and we will get back to you as soon as possible.</p>
				</div>
				<div id="newaddy">
					<form id="contact_form_members" name="contactform" method="post" action="send_form_email.php">
						<p><input id="contact_other" type="text" name="name" placeholder="Name" required></p>
						<p><input id="contact_other" type="text" name="email_address" placeholder="Email Address" required></p>
						<p><input id="contact_other" type="text" name="account_number" placeholder="Account Number" required></p>
						<p><textarea id="comment_contact" type="text" name="Comment" placeholder="Comment" required></textarea></p>
						<p><input type="submit" value="Submit" id="submitlogin">
					</form>
				</div><!-- newaddy end -->
				
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>