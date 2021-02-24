<?php
session_start();
require("connection.php");
// redirect user to login page if they're not logged in
//if (empty($_SESSION['id'])) {
//    header('location: login.php');}
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
	<div class="row justify-content-md-center">	
			<table class="table table-hover mt-5">
			<thead class="thead-dark">
			  <tr>
				<th>Room ID</th>
				<th>Room Description</th>
				<th>Start Date</th>
				<th>End Date </th>
				<th>Days</th>
				<th>Price</th>
				<th>Amount</th>
				<th>Action</th>
			  </tr>
			</thead>
			<tbody>
			  <?php
				$userid = $_SESSION['id'];
				$query = "SELECT `bookings`.*, `rooms`.* FROM `bookings` LEFT JOIN `rooms` ON `bookings`.`room` = `rooms`.`Room_no` WHERE `visitors_id`='$userid' order by start_date ";
				$query=mysqli_query($conn,$query);
				while($res=mysqli_fetch_assoc($query))
				{				
					?>	
				<tr>
				<td><?php echo $res['Room_no']; ?></td>
				<td><?php echo $res['Room description']; ?></td>
				<td><?php echo $sdate=$res['start_date']; ?></td>
				<td><?php echo $edate=$res['end_date']; ?></td>
				<?php
					$date1 = new DateTime($sdate);
					$date2 = new DateTime($edate);
					$days  = $date2->diff($date1)->format('%a');  
					//return $interval->format($differenceFormat);
				?>
				<td><?php echo $days; ?></td>
				<td><?php echo $res['price']; ?></td>
				<td><?php echo $res['price'] * $days; ?></td>
				<?php
				switch($res['is_checkedin']){
					case 0:
					?>
					<td>
						<form action ='checkin.php' method='post'>
						<input type ="hidden" name="bkid" value="<?php echo $res['booking_id'];?>">
						<input type='submit' class = 'btn btn-primary' value='Check In'>
						</form>
					</td>
					<?php
					break;
					case 1:
					?>
					<td>
						<form action ='checkout.php' method='post'>
						<input type ="hidden" name="bkid" value="<?php echo $res['booking_id'];?>">
						<input type ="hidden" name="amt_paid" value="<?php echo $res['price'] * $days;?>">
						<input type='submit' class = 'btn btn-primary' value='Check Out'>
						</form>
					</td>
					<?php
					break;
					case 2:
					echo"<td>Stay Completed</td>";
					break;
				}
				?>				
				</tr>
				<?php } ?>
			</tbody>
		  </table>
					
	</div>        
    </div>
</body>
</html>