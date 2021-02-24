<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
 				<div class = "row>">
				<h3>About PGDITE Hotel</h3>
				<p>Pgdite Hotel is ideally located in the heart of Kampala city and welcomes travellers 
				with a relaxed ambience and a dazzling array of upscale amenities. 
				Just 45 minutes' drive from Entebbe International Airport, 
				we are within reach of the Central Business District. 
				Take in a magnificent view of the city from our spacious and comfortable guest rooms and suites,
				homely decorated with comfort in mind. Take in sweeping views of the 
				Kampala skyline from the comfort of our vibrant, high-style hotel 
				surrounded by 9 acres of well-manicured gardens. Stay fit at our state-of-the-art Fitness Center,
				complete with a gymnasium, outdoor pool and newly renovated massage rooms. 
				The hotel is an ideal destination for every occasion in our vast event space options 
				and multiple restaurants for family get-aways or business stays. Also available is
				a fully equipped business centre with high-speed internet access, fax copying and other secretarial services.</p>
				</div>
				<div>
				<figure>
				<img src ="images/HOTEL.png" alt ='PGDITE HOTEL' class = ' img-fluid align-center'>
				<figcaption>Front View</figcaption>
				</figure>
				<figure>
				<img src ="images/HOTEL2.png" alt ='PGDITE HOTEL' class = ' img-fluid align-center'>
				<figcaption>Swiiming Pool</figcaption>
				</figure>
				<figure>
				<img src ="images/HOTEL3.png" alt ='PGDITE HOTEL' class = ' img-fluid align-center'>
				<figcaption>Fitness Centre</figcaption>
				</figure>
				<hr class =m-5>
				<h2 class = "text-center">Addtional Services</h2>
				</div>
				<div class = "row justify-content-md-center">		
					<div class = "row text-center">
						<div class="card m-5" style="width: 18rem;">
						  <img class=" img-fluid card-img-top" src="images/airport.png" alt="Airport PickUP">
						  <div class="card-body">
							<h5 class="card-title">Airport Pickup</h5>
							<p class="card-text">First class Ariport PickUp from Entebbe Airport</p>
						  </div>
						</div>
					
						<div class="card m-5" style="width: 18rem;">
						  <img class="card-img-top" src="images/fitness.png" alt="Airport PickUP">
						  <div class="card-body">
							<h5 class="card-title">Fitness Center</h5>
							<p class="card-text">First class fitness Center to keep you in top shape</p>
						  </div>
						</div>

						<div class="card m-5" style="width: 18rem;">
						  <img class="card-img-top" src="images/restuarant.png" alt="Airport PickUP">
						  <div class="card-body">
							<h5 class="card-title">Restaurant</h5>
							<p class="card-text">World class Dining with dishes from allover the world to
							simulate your Tastebuds like never before</p>
						  </div>
						</div>
					</div>
				</div>			
			</div>
			<div class = "bg-dark text-center text-lg-start">
				<?php require("footer.php"); ?>
			</div>
		</div>
		
		
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>