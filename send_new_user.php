<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();
if (isset($_POST['account_create']))
{
	//Connecting to sql db.
	$connect = mysql_connect("localhost","root","root") or die ('Cannot establish connection. '. mysql_error());
	mysql_select_db("thai_spring") or die ('Cannot select database. '. mysql_error());
	//Sending form data to sql db.
	mysql_query("INSERT INTO member_details (first_name, last_name, date_of_birth, email_address, password, securtiy_question_id, m_securtiy_question_anwser, billing_address_name_and_number, billing_address_city_or_town, billing_address_county, billing_address_post_code)
	VALUES ('$_POST[first_name]', '$_POST[last_name]', '$_POST[date_of_birth]', '$_POST[email_address]', '" . md5('$_POST[password]') . "', '$_POST[security_question_id]', '$_POST[m_securtiy_question_anwser]', '$_POST[address_name_and_number]', '$_POST[address_city_or_town]', '$_POST[address_county]', '$_POST[address_post_code]')") or die ('Cannot insert into database. '. mysql_error());

	header("location: member_new_account_made.html") or die ('Cannot redirect. '. mysql_error()); // Redirecting To Other Page
}
?>