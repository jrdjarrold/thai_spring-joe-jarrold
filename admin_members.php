<?php 
	include('session.php');
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
		<title>Thai Spring | Admin | Members</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Joe Jarrold" />
		<meta name= "keywords" content="Joe Jarrold" />
		<meta name= "description" content="Text" />
		<meta name= "robots" content="all" />
		<link rel="stylesheet" type="text/css" href="thai_spring_stylesheet.css" />
		<link href="href='http://fonts.googleapis.com/css?family=Open+Sans" />
		<link rel="shortcut icon" href="favicon.ico" />
		<script type="text/javascript">
			function startTime() {
			    var today=new Date();
			    var h=today.getHours();
			    var m=today.getMinutes();
			    var s=today.getSeconds();
			    m = checkTime(m);
			    s = checkTime(s);
			    document.getElementById('clock').innerHTML = h+":"+m+":"+s;
			    var t = setTimeout(function(){startTime()},500);
			}
			function checkTime(i) {
			    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
			    return i;
			}
		</script>
		<script type="text/javascript">
			function GetClock(){
				var d=new Date();
				var nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
				if(nyear<1000) nyear+=1900;
				document.getElementById('date').innerHTML=""+ndate+"/"+(nmonth+1)+"/"+nyear+"";
			}
			window.onload=function(){
				GetClock();
				setInterval(GetClock,1000);
			}
		</script>
	</head>
	<body onload="startTime()">
		<div id="dashboard_container">
			<div id="dashboard_navigation_bar">
				<ul>
					<li><a href="admin_home.php">Admin Home</a></li>
					<li><a href="admin_members.php">Customer Details</a></li>
					<li><a href="admin_orders.php">Customer Orders</a></li>
				</ul>
			</div><!-- dashboard_navigation_bar end -->
			<div id="admin_info_1">
				<p>Admin Number:</p>
				<p>Admin Name:</p>
				<p>Admin Email Address:</p>
			</div><!-- admin_info_1 end -->
			<div id="admin_info_2">
				<p><?php echo $_SESSION['login_staff_number']; ?></p>
				<p><?php echo $_SESSION['login_staff_name']; echo ' '; echo $_SESSION['login_staff_name_last'] ?></p>
				<p><?php echo $_SESSION['login_staff_email_address']; ?></p>
			</div><!-- admin_info_2 end -->
			<div id="admin_info_3">
				<p>Time (GMT):</p>
				<p>Date (GMT):</p>
				<p>Contact Number:</p>
			</div><!-- admin_info_3 end -->
			<div id="admin_info_4">
				<p id="clock"></p>
				<p id="date"></p>
				<p>08987 564765</p>
			</div><!-- admin_info_4 end -->
			<div id="container_dashboard">
				<div id="newaddy1">
					<h2>Customer Account Details</h2>
					<p>Displayed below is a list of customer account details</p>
					<div id="table002">
						<?php
							mysql_select_db('thai_spring',$connection);
							$sql = "SELECT * FROM member_details";
							$myorders = mysql_query($sql,$connection);
							echo "<table id='customerorderstable'>
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
									echo "<td>" . $record['account_number'] . "</td>";
									echo "<td>" . $record['first_name'] . "</td>";
									echo "<td>" . $record['last_name'] . "</td>";
									echo "<td>" . $record['date_of_birth'] . "</td>";
									echo "<td>" . $record['email_address'] . "</td>";
									echo "<td>" . $record['billing_address_name_and_number']  . "</td>";
									echo "<td>" . $record['billing_address_city_or_town']  . "</td>";
									echo "<td>" . $record['billing_address_county']  . "</td>";
									echo "<td>" . $record['billing_address_post_code']  . "</td>";
									echo "</tr>";
								}
							echo "</table>"
						?>
					</div>
				</div>
				<div id="newaddy2">
					<h2>Customer Account Details - Delivery Addresses</h2>
					<p>Displayed below is a list of customer delivery addresses</p>
					<div id="table003">
						<?php
							mysql_select_db('thai_spring',$connection);
							$sql = "SELECT * FROM delivery_address";
							$myorders = mysql_query($sql,$connection);
							echo "<table id='customerorderstable'>
								<tr>
								<th>Delivery Address ID</th>
								<th>Customer Account Number</th>
								<th>Street Name & Number</th>
								<th>City or Town</th>
								<th>County</th>
								<th>Post Code</th>
								<tr>";
								while ($record = mysql_fetch_array($myorders)) {
									echo "<tr>";
									echo "<td>" . $record['delivery_address_id'] . "</td>";
									echo "<td>" . $record['account_number'] . "</td>";
									echo "<td>" . $record['d_street_name_and_number'] . "</td>";
									echo "<td>" . $record['d_city_or_town'] . "</td>";
									echo "<td>" . $record['d_county'] . "</td>";
									echo "<td>" . $record['d_post_code']  . "</td>";
									echo "</tr>";
								}
							echo "</table>"
						?>
					</div>
				</div>
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom">
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!-- dashbaord_navigation_bar_bottom end -->
		</div><!-- dashboard_container end -->
	</body>
</html>