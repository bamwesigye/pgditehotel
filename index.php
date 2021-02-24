<?php include 'controllers/authController.php'?>
<?php
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
			<?php
				$query = "SELECT * FROM `rooms` WHERE `available`>0";
				$query=mysqli_query($conn,$query);
				while($res=mysqli_fetch_assoc($query))
				{
					?>
					<div class="card" style="width: 18rem;">
					<div class="card-body m-3 p-3">
					   <img  src="images/<?php echo $res['imagefile']; ?>" class="rounded m-2 img-fluid " alt="<?php echo $res['Room description'];?>">
					  <h4> RoomNo:<?php echo $res['Room_no']; ?></h4>
					  <p><?php echo $res['Room description'];?></p>
					  <p> Occupants: <?php echo $res['Occupancy']."";?> max</p>
					  <p> Price:<?php echo $res['price'];?>UGX</p>
					  <form action = "booking.php">
					  <input type = "hidden" name="room_no" value="<?php echo $res['Room_no']; ?>" >
					  <input type = "submit" value="Book Now" class ="btn btn-primary">					  
					  </form>
					</div>
					</div>
									
					<?php
				}				
			?>
	</div>
	<div class = "bg-dark text-center text-lg-start">
		<?php require("footer.php"); ?>
	</div>	
	</div> 
	       
</body>
</html>