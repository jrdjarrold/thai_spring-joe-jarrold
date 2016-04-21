<?php
	ob_start();
	session_start();

	if ($_POST['delivery_create'])
	{
		//Connecting to sql db.
		$connect = mysql_connect("localhost","root","root") or die ('Cannot establish connection. '. mysql_error());
		mysql_select_db("thai_spring") or die ('Cannot select database. '. mysql_error());
		//Sending form data to sql db.
		mysql_query("INSERT INTO delivery_address (account_number,
		d_street_name_and_number, d_city_or_town, d_county, d_post_code) VALUES
		(".$_SESSION['login_user_id'].", '$_POST[d_street_name_and_number]', '$_POST[d_city_or_town]',
		'$_POST[d_county]', '$_POST[d_post_code]')") or die
		('Cannot insert into database. '. mysql_error());
		$notice = "<br /> New delivery address added.";
		header("location: address_added.php") or die ('Cannot redirect. '. mysql_error()); ; // Redirecting To Other Page
	}
?>