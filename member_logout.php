<?php
session_start();
session_destroy(); // Destroying All Sessions
header("Location: member_login.php"); // Redirecting To Home Page
?>