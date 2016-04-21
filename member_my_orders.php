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
		<title>Thai Spring | My Orders</title>
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
					<h2>My Orders</h2>
					<p id="member_colour">Displayed below are all of your orders that have been placed</p>
					<div id="table001">
						<?php
							mysql_select_db('thai_spring',$connection);
							$sql = "SELECT * FROM order_infomation where account_number = " . $_SESSION['login_user_id'] . "";
							$myorders = mysql_query($sql,$connection);
							echo "<table id='myorderstable'>
								<tr>
								<th>Order Number</th>
								<th>Order Date</th>
								<th>Order Time</th>
								<th>Product Code</th>
								<th>Quantity Ordered</th>
								<th>Total Price</th>
								<th>Delivery Address ID</th>
								<tr>";
								while ($record = mysql_fetch_array($myorders)) {
									echo "<tr>";
									echo "<td>" . $record['order_number'] . "</td>";
									$date_of_order = $record['date_of_order'];
									echo "<td>" . strftime("%d/%m/%Y",strtotime($date_of_order)) . "</td>";
									echo "<td>" . $record['time_of_order'] . "</td>";
									echo "<td>" . $record['product_code'] . "</td>";
									echo "<td>" . $record['quantity'] . "</td>";
									echo "<td>" . '£' . $record['total_price'] . "</td>";
									echo "<td>" . $record['delivery_address_id']  . "</td>";
									echo "</tr>";
								}
							echo "</table>"
						?>
					</div>
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