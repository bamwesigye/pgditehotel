<?php
session_start();
include('connection.php');
$userid = $_SESSION['id'];
$bkid = $_POST["bkid"];
$query = "UPDATE `bookings` SET `is_checkedin`=1 WHERE `booking_id`= '$bkid'";
if ($conn->query($query) === TRUE) {
	$_SESSION['message'] = "Checked In Successfully";
	$_SESSION['type'] = 'alert-success';
	header('location: index.php');
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>