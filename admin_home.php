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
		<title>Thai Spring | Admin | Home</title>
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
					<h2>Select an option below</h2>
					<p>Click on the 'Customer Orders' button to view orders placed by customer.</p>
					<p>Click on the 'Customer Details' button to view customers details.</p>
					<div id="admin_home_op_1">
						<ul>
							<li><a href="admin_orders.php">Customer Orders</a></li>
							<li><a href="admin_members.php">Customer Details</a></li>
						</ul>
					</div><!-- admin_home_op_1 end -->
				</div><!-- newaddy3 end -->
				<div id="newaddy2">
					<p id="logoutadmin">For security reasons ensure you are logged out after every session by using the 'LOGOUT' button</p>
				</div><!-- newaddy2 end -->
			</div><!-- container_dashboard -->
			<div id="dashbaord_navigation_bar_bottom">
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div><!-- dashbaord_navigation_bar_bottom end -->
		</div><!-- dashboard_container end -->
	</body>
</html>