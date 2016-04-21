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
	$query = mysql_query("select * from member_details where password='" . md5('$_POST[password]') . "' AND email_address='$email_address'", $connection);
	$rows = mysql_num_rows($query);
	$row = mysql_fetch_assoc($query);
	if ($rows == 1) {
	$_SESSION['login_user']=$email_address; // Initializing Session
	$_SESSION['login_user_id']=$row['account_number'];
	$_SESSION['login_user_name']=$row['first_name'];
	$_SESSION['login_user_name_last']=$row['last_name'];
	//$_SESSION['login_user_id']=$rows['account_number'];
	header("location: member_home.php"); // Redirecting To Other Page
	} else {
	$error = "Email Address or Password is invalid";
	}
	mysql_close($connection); // Closing Connection
	}
	}
?>