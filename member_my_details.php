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
		<title>Thai Spring | My Details</title>
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
					<h2>My Details</h2>
					<p id="member_colour">Your account details are displayed below</p>
					<p id="member_colour">To change account details click here</p>
					<div id="table001">
						
						<?php
							mysql_select_db('thai_spring',$connection);
							$sql = "SELECT * FROM member_details where account_number = " . $_SESSION['login_user_id'] . "";
							$myorders = mysql_query($sql,$connection);

							echo "<table id='myorderstable'>
								<tr>
									<th>Account Number</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Date of Birth</th>
									<th>Email Address</th>
									<th>Billing Address Name & Number</th>
									<th>Billing Address City or Town</th>
									<th>Billing Address County</th>
									<th>Billing Address Post Code</th>
								<tr>";

								while ($record = mysql_fetch_array($myorders)) {
									echo "<tr>";
									echo "<td>" . $id=$record['account_number'] . "</td>";
									echo "<td>" . $record['first_name'] . "</td>";
									echo "<td>" . $record['last_name'] . "</td>";
									$date_of_birth = $record['date_of_birth'];
									echo "<td>" . strftime("%d/%m/%Y",strtotime($date_of_birth)) . "</td>";
									echo "<td>" . $record['email_address'] . "</td>";
									echo "<td>" . $record['billing_address_name_and_number']  . "</td>";
									echo "<td>" . $record['billing_address_city_or_town']  . "</td>";
									echo "<td>" . $record['billing_address_county']  . "</td>";
									echo "<td>" . $record['billing_address_post_code']  . "</td>";
									// echo "<td>
									// 		<form method='post' action='member_update_my_details.php'>
									// 			<input type='hidden' name='sel_record' value='$id'>
									// 			<input type='submit' name='update' value='edit'>
									// 		</form>
									// 	</td>";
									echo "</tr>";
									
								}
							echo "</table>"

						?>
						
					</div>
				</div>
				<div id="newaddy">
					<h2>My Delivery Addresses</h2>
					<p id="member_colour">Your existing delivery addresses are displaye below</p>
					<p id="member_colour">To add a new Delivery Address to your account <a href="add_delivery_address.php">click here</a></p>
					<div id="table004">
						<?php
							mysql_select_db('thai_spring',$connection);
							$sql = "SELECT * FROM delivery_address where account_number = " . $_SESSION['login_user_id'] . "";
							$myorders = mysql_query($sql,$connection);
							echo "<table id='myorderstable'>
								<tr>
									<th>Delivery Address Number</th>
									<th>Street Name & Number</th>
									<th>City or Town</th>
									<th>County</th>
									<th>Post Code</th>
								<tr>";
								while ($record = mysql_fetch_array($myorders)) {
									echo "<tr>";
									echo "<td>" . $record['delivery_address_id'] . "</td>";
									echo "<td>" . $record['d_street_name_and_number'] . "</td>";
									echo "<td>" . $record['d_city_or_town'] . "</td>";
									echo "<td>" . $record['d_county'] . "</td>";
									echo "<td>" . $record['d_post_code']  . "</td>";
									// echo "<td> Delete </td>";
									echo "</tr>";
								}
							echo "</table>"
						?>
					</div>
				</div>
<!-- 				<div id="newaddy">
					<h2>Reset Password</h2>
					<p id="member_colour">comming soon</p>
				</div> -->
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>