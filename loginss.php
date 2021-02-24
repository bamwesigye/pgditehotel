<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PGDITE Hotel</title>
	<style>
.centered {
  margin: auto;
  width: 60%;
  height: 40%;
  border: 10px solid #73AD21;
  padding: 10px;
}
</style>
  </head>
  <?php
// define variables and set to empty values
$email = $msg = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST["username"]);
	$email = test_input($_POST["password"]);
	require('connection.php');
	$sql = "SELECT * FROM `visitors` WHERE `email_address` = '$username'";
	$result = mysqli_query($conn, $sql);
	echo $result;
	
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) {
			echo "id: " . $row["visitors_name"]. " - Name: " . $row["password"]. " " . $row["Phone_no"]. "<br>";
		}
	} else {
		$msg = "Invalid Login";
		echo "Invalid Login";
	}

	mysqli_close($conn);
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <body>
 		
 		<div class="container">
			<div class = "row">
			<?php require("menu.php"); ?>
			</div>
 			<div class="row p-5">
 				<div class="col-lg-3 centered">
 					<h2>My Hotel Login</h2>
 					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
 						<div class="form-group">
 							<label>Username</label>
 							<input type="text" name="username" class="form-control">
 						</div>
 						<div class="form-group">
 							<label>Password</label>
 							<input type="Password" name="password" class="form-control">
 						</div>
						<div class ="col text-center"> <button type="submit" class="btn btn-primary">Login</button> </div>
 					</form>
 				</div>
				
 			</div>
 		</div>
	<?php require("footer.php");?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>