<?php
session_start();
require("connection.php");
// redirect user to login page if they're not logged in
if (empty($_SESSION['id'])) {
    header('location: login.php');
	}
	
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$sdateErr = $rmerr = $edateErr= "";
$sdate = $edate = "";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	if (empty($_GET["room_no"])) {
		$rmErr = "Room Not specified";
		$_SESSION['message'] = 'Please select a room';
		$_SESSION['type'] = 'alert-danger';
		//header('location: index.php');
		} else {
		$rm_no = $_GET["room_no"];}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sdate = test_input($_POST["sdate"]);
		$edate = test_input($_POST["edate"]);
		$rm_no = test_input($_POST["rm_no"]);
		$userid = $_SESSION['id'];
		$query = "INSERT INTO bookings SET visitors_id=?, room=?, start_date=?, end_date=?";
			$stmt = $conn->prepare($query);
			$stmt->bind_param('ssss', $userid, $rm_no, $sdate, $edate);
			$result = $stmt->execute();
			if ($result) {
				$bookingid = $stmt->insert_id;
				$stmt->close();
				$query = "UPDATE `rooms` SET `available`=0 WHERE `Room_no` = '$room_no'";
				if ($conn->query($query) === TRUE) {
				  echo "Record updated successfully";
				} else {
				  echo "Error updating record: " . $conn->error;
				}
				$_SESSION['message'] = "Room has been booked";
				$_SESSION['type'] = 'alert-success';
				header('location: mybookings.php');
		}
	}
	?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>PGDITE Hotel</title>
</head>

<body>
  <div class="container">
	<div class = "row">
		<?php require("menu.php"); ?>
	</div>
    <div class = "row">
		<?php require("messages.php"); ?>
	</div>
	<div class="row justify-content-md-center mb-3 mt-5 p-5">	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<input type ="hidden" value=<?php echo $rm_no;?> name='rm_no'>
		Start Date: <input type="date" name="sdate" value="<?php echo $sdate;?>">
		<span class="error">* <?php echo $sdateErr;?></span>
		<br><br>
		End date <input type="date" name="edate" value="<?php echo $edate;?>">
		<span class="error">* <?php echo $edateErr;?></span>
		<br><br>
		<div class="text-center">
		<input type="submit" name="submit" value="Book" class = "btn btn-primary"> 
		</div>
	   
	</form>
	</div>        
    </div>
</body>
</html>