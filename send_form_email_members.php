<?php $name = $_POST['name'];
$email = $_POST['email_address'];
$message = $_POST['comment'];
$formcontent="From: $name \n Message: $comment";
$recipient = "joseph.jarrold@students.plymouth.ac.uk";
$subject = "Contact Form";
$mailheader = "Inquiry From: $email_address \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("location: message_sent.html") or die ('Cannot redirect. '. mysql_error()); ; // Redirecting To Other Page
?>