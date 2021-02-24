<?php
session_start();
include('connection.php');
$userid = $_SESSION['id'];
$bkid = $_POST["bkid"];
$bkid = $_POST["amt_paid"];
$query = "UPDATE `bookings` SET `is_checkedin`=2, amt_paid = '$amt_paid' WHERE `booking_id`= '$bkid'";
if ($conn->query($query) === TRUE) {
	$_SESSION['message'] = "Checked Out Successfully";
	$_SESSION['type'] = 'alert-success';
	header('location: index.php');
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>