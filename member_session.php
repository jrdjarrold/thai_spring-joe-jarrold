<?php
	ob_start ();
	session_start();// Starting Session\\
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("localhost", "root", "root");
	// Selecting Database
	$db = mysql_select_db("thai_spring", $connection);
	// Storing Session
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysql_query("select email_address from member_details where email_address='$user_check'", $connection);
	//$row = mysql_fetch_assoc($ses_sql);
	// $login_session =$row['s_first_name'];
	if(!isset($_SESSION['login_user'])){
	//mysql_close($connection); // Closing Connection
	header('Location: member_login.php'); // Redirecting To Home Page
	//	echo "Not set";
	}
?>