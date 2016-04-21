<?php 
	include('member_session.php');
	include('add_delivery_address_process.php');
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
		<title>Thai Spring | Add Delivery Address</title>
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
			<div id="newaddress_top">
				<p>Fill in the form below to add a new delivery address to your account</p>
				<p>Once a new delivery address has been added, you may place an order to be delivered to the new address</p>
			</div>
			<div id="newaddress_mid">
				<div id="newaddress">
					<form action="" method="post">
						<p>
							<input id="add_delivery_textbox" name="d_street_name_and_number" type="text" placeholder="Street Name and Number" required />
						</p>
						<p>
							<input id="add_delivery_textbox" name="d_city_or_town" type="text" placeholder="City or Town"required />
						</p>
						<p>
							<input id="add_delivery_textbox" name="d_county" type="text" placeholder="County" required />
						</p>
						<p>
							<input id="add_delivery_textbox" name="d_post_code" type="text" placeholder="Post Ccde" required />
						</p>
						<p>
							<input class="create_an_account_submit" name="delivery_create" type="submit" id="submitlogin" value="Add delivery address" required />
						</p>
					</form>
				</div>
				<p></p>
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>