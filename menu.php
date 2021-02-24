<div class="col-sm-12">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
	<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="/hotel"><img src="images/logo.png"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php">View Available Rooms</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="about.php">About PGDITE Hotel</a>
  </li>
  <?php if (isset($_SESSION['id'])){ ?>
    
	<li class="nav-item">
    <a class="nav-link" href="mybookings.php">my Bookings</a>
	</li>
	<li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
	</li>
  <?php } else { ?>
	<li class="nav-item">
    <a class="nav-link" href="login.php">Login</a>
	</li>	
  <?php } ?>
 
</ul>

  </nav>
</div>
  