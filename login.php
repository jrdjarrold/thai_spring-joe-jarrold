<?php
	ob_start();
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
	if (empty($_POST['email_address']) || empty($_POST['password'])) {
	$error = "Please Enter an Email Address and Password";
	}
	else
	{
	// Define $email_address and $password
	$email_address=$_POST['email_address'];
	$password=$_POST['password'];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "root");
	// To protect MySQL injection for Security purpose
	$email_address = stripslashes($email_address);
	$password = stripslashes($password);
	$email_address = mysql_real_escape_string($email_address);
	$password = mysql_real_escape_string($password);
	// Selecting Database
	$db = mysql_select_db("thai_spring", $connection);
	// SQL query to fetch information of registerd users and finds user match.
	$query = mysql_query("select * from staff_details where s_password='$password' AND s_email_address='$email_address'", $connection);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {
	$row = mysql_fetch_assoc($query);
	$_SESSION['login_user']=$email_address; // Initializing Session
	$_SESSION['login_staff_number']=$row['staff_number'];
	$_SESSION['login_staff_name']=$row['s_first_name'];
	$_SESSION['login_staff_name_last']=$row['s_last_name'];
	$_SESSION['login_staff_email_address']=$row['s_email_address'];
	header("location: admin_home.php"); // Redirecting To Other Page
	} else {
	$error = "Email Address or Password is invalid";
	}
	mysql_close($connection); // Closing Connection
	}
	}
?>