<?php 
	include('member_session.php');
	if ($_POST['check_out'])
{
	$_SESSION['total_price'] = "";
	$_SESSION['subtotal_price'] = "";
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
		<title>Thai Spring | Order Placed</title>
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
					<li><a href="member_contact.php">Comtact</a></li>
				</ul>
			</div><!-- dashboard_navigation_bar end -->
			<div id="container_dashboard">
				<div id="newaddy">
					<div id="order_placed_message">
						<p>Your order has been placed.</p>
						<p>Click <a href="member_my_orders.php">here</a> to view orders</p>
						<p>Click <a href="member_home.php">here</a> to return to your Account Homepage</p>
					</div><!-- order_placed_message end -->
				</div>
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>