<?php
include('member_session.php');

// sql to delete a record
$test101 = "SET FOREIGN_KEY_CHECKS = 0"; "DELETE FROM `thai_spring`.`delivery_address` WHERE `delivery_address`.`delivery_address_id` = 20";

;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>