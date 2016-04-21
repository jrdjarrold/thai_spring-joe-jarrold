<?php
ob_start();
session_start();
if ($_POST['place_order'])
{
	$procode = $_POST['product'];
	$proquantity = $_POST['quantity'];
	$delivery = 10;
	//Connecting to sql db.
	$connect = mysql_connect("localhost","root","root") or die ('Cannot establish connection. '. mysql_error());
	mysql_select_db("thai_spring") or die ('Cannot select database. '. mysql_error());
	//Sending form data to sql db.
	$query2 = mysql_query("select * from product_infomation where
	product_code = '$procode'" . mysql_error());   
	$row = mysql_fetch_assoc($query2);
	$_SESSION['subtotal_price'] = $row['product_price'] * $proquantity;
	$_SESSION['total_price'] = $_SESSION['subtotal_price'] + $delivery;
	//echo $_SESSION['total_price'];
	$total_price = $_SESSION['total_price'];
	$date = date("Y-m-d");
	$time = date("H:i:s");
	mysql_query("INSERT INTO order_infomation ( date_of_order, time_of_order, account_number, 
	product_code, quantity, total_price, delivery_address_id) VALUES
	('$date', '$time', ".$_SESSION['login_user_id'].", '$procode', '$_POST[quantity]', '$total_price',
	'$_POST[delivery_address]')") or die
	('Cannot insert into database. '. mysql_error());
	header("location: member_place_order.php") or die ('Cannot redirect. '. mysql_error()); ; // Redirecting To Other Page
}
?>