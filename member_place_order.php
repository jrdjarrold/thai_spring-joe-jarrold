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
		<title>Thai Spring | Place An Order</title>
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
					<div id="place_an_oder_top">
						<h2>Place an Order</h2>
						<div id="member_colour">
							<p>Select the product you want, the quantity and your delivery address to view the total price of the order.</p>
							<p>To complete the order click on 'place order'.</p>
							<p>To reset the form click the 'reset' button at the bottom.</p>
							<p>To select a new delivery address, navigate to <a href="member_my_details.php">'My Details'</a> and add the new address there.</p>
						</div>
					</div><!-- place_an_oder_top end -->
				</div>
				<div id="newaddy">
					<form method="post" action="member_my_order_process.php">
						<p>
							<?php  
								$connect = mysql_connect("localhost","root","root") or die ('Cannot establish connection. '. mysql_error());
								mysql_select_db("thai_spring") or die ('Cannot select database. '. mysql_error());
								$query1 = mysql_query("select * from product_infomation" . mysql_error());   
							?>
							<select id="place_an_order_textbox" name="product" required>
								<option value="" disabled selected>Select a Product</option>
								<?php	
									while($row = mysql_fetch_assoc($query1)){
										echo "<option value='".$row['product_code']."'>".$row['product_description']."</option>	";
									}
								?>
							</select>
						</p>
						<p>
							<input id="place_an_order_textbox" name="quantity" type="number" min="1" placeholder="Enter Quantity" required/>
						</p>
						<p>
							<?php  
								$connect = mysql_connect("localhost","root","root") or die ('Cannot establish connection. '. mysql_error());
								mysql_select_db("thai_spring") or die ('Cannot select database. '. mysql_error());
								$query = mysql_query("select * from delivery_address where
								account_number=".$_SESSION['login_user_id']. mysql_error());   
							?>
							<select id="place_an_order_textbox" name="delivery_address" required>
								<option value="" disabled selected>Select Delivery Address</option>
								<?php	
									while($row = mysql_fetch_assoc($query)){
										echo "<option value='".$row['delivery_address_id']."'>".$row['d_street_name_and_number']."</option>	";
									}
								?>		
							</select>
						</p>
						<p>
							<input class="place_an_order_submit" name="place_order" type="submit" id="submitlogin" value="Add to Order"/>
						</p>
					</form>
				</div><!-- newaddy end -->
				<div id="newaddy">
					<p>Sub-Total: <?php echo "£" .$_SESSION['subtotal_price']; ?></p>
					<p>Delivery: £10</p>
					<p>Total: <?php echo "£" .$_SESSION['total_price']; ?> </p>
					<?php
						if (isset($_SESSION['total_price']))
						echo "<p><form method='post' action='order_placed.php'><input class='place_an_order_submit' name='check_out' type='submit' id='submitlogin' value='Check Out'/></form></p>"
					?>
				</div><!-- newaddy end -->
			</div><!-- container_dashboard end -->
			<div id="dashbaord_navigation_bar_bottom_customers">
				<ul>
					<li><a href="member_logout.php">Logout</a></li>
				</ul>
			</div><!-- bottom_navigation_bar end -->
		</div><!-- dashboard_container end -->
	</body>
</html>

