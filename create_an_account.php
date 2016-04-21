<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
	include('send_new_user.php');
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
		<title>Thai Spring | Create an Account</title>
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
		<div id='top_navigation_bar'>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li><a href="member_login.php">Login</a></li>
			</ul>
		</div><!-- top_navigation_bar end -->
		<div id="container_create_an_account">
			<div id="filter_5">
				<div id="create_an_account_form">
					<h2>Create an Account</h2>
					<p>Please fill in all the boxes below to create an account</p>
					<form action="" method="post">
						<p>
							<input id="create_an_account_textbox" name="first_name" type="text" placeholder="First Name" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="last_name" type="text" placeholder="Last Name"required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="date_of_birth" type="text" placeholder="Date Of Birth (YYYY-MM-DD)" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="email_address" type="text" placeholder="Email Address" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="password" type="password" placeholder="Password" required />
						</p>
						<p>
							<select id="create_an_account_textbox" name="security_question_id" required >
								<option disabled selected>Select a Security Question to Anwser</option>
								<option value="1">In what city or town did you meet your spouse/partner?</option>
								<option value="2">What was the make and model of your first car?</option>
								<option value="3">What was the name of your elementary / primary school?</option>
								<option value="4">What was your favorite place to visit as a child?</option>
								<option value="5">What was the name of your first pet?</option>
								<option value="6">What is the name of your favorite childhood friend?</option>
								<option value="7">In what city or town did your mother and father meet?</option>
								<option value="8">What was the name of the company where you had your first job?</option>
								<option value="9">What is the first name of the boy or girl that you first kissed?</option>
							</select>
						</p>
						<p>
							<input id="create_an_account_textbox" name="m_securtiy_question_anwser" type="text" placeholder="Securtiy Question Anwser" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="address_name_and_number" type="text" placeholder="Street Name and House Number" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="address_city_or_town" type="text" placeholder="City/Town" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="address_county" type="text" placeholder="County" required />
						</p>
						<p>
							<input id="create_an_account_textbox" name="address_post_code" type="text" placeholder="Post Code" required />
						</p>
						<p>
							<input class="create_an_account_submit" name="account_create" type="submit" id="submitlogin" value="Create Account" required />
						</p>
					</form>
				</div><!-- create_an_account_form end -->
			</div><!-- filter_5 end -->
		</div><!-- container_create_an_account end -->
		<div id="bottom_navigation_bar">
			<ul>
				<li><a href="site_map.html">Site Map</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="member_login.php">Login</a></li>
			</ul>
		</div><!-- bottom_navigation_bar end -->
	</body>
</html>