<?php 
	include('member_session.php');
	
error_reporting(E_ALL);
ini_set('display_errors', '1');

	$sel_record = $_POST[sel_record];

	//SQL Select Statment
	$sql = "SELECT * FROM member_details WHERE account_number = '$sel_record'";

		//execute SQL query and get result
		$result = mysql_query($sql) or die (mysql_error());
		if (!$result) {
			print "<h1>Somthing went wrong</h1>";
		} else {
			//loop through record and get values
			while ($record = mysql_fetch_array($result)) {
				$id = $record['account_number']
				$f_name = $record['first_name']
				$l_name = $record['last_name']
			}
		} //end while loop

	$pageTitle = "Edit Details";
	print <<<HERE
	<h2>Edit Personal Details</h2>
	<p>Modify the details you would like to change and press the "Update Details" button to save changes</p>

	<form id="member_detils_form" method="post" action"update.php>
	<input type="hidden" name="id" value="id">
		<p>
			<input id="create_an_account_textbox" name="first_name" type="text" placeholder="First Name" value="$f_name" required />
		</p>
		<p>
			<input id="create_an_account_textbox" name="last_name" type="text" placeholder="Last Name" value="$l_name" required />
		</p>
		<p>
			<input class="create_an_account_submit" name="account_create" type="submit" id="submit_changes_member" value="Update Details" required />
		</p>
	</form>

HERE;
}

?>