<?php
session_start();
if(!isset($_SESSION['Username'])){
    header('location:index.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>CMS</title>
</head>
<body>



	<nav class="navbar navbar-dark bg-dark sticky-top">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Welcome <?php
echo $_SESSION['Username'];
?></a>
		<a href="logout.php" class="btn btn-danger">LOG OUT </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
	      <div class="offcanvas-header">
	        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dashboard</h5>
	        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	      </div>
	      <div class="offcanvas-body">
	        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
	          <li class="nav-item">
	            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="student.php">Student</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Teacher</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="#">Batch</a>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </div>
	</nav>











	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	  <symbol id="check-circle-fill" viewBox="0 0 16 16">
	    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
	  </symbol>
	  
	</svg>
	<div class="content container-lg">
		<div class="alert alert-success d-flex align-items-center" role="alert">
		  <svg class="bi flex-shrink-0 me-2" width="30" height="30" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
		  <div>
		    Welcome to your Dashboard!
		  </div>
		</div>
	</div>








	<div class="row container-fluid py-4">
	  <div class="col-sm-3 py-4">
	    <div class="card bg-dark">
	      <div class="card-body">
	        <h5 class="card-title text-light text-center"><i class="fa-solid fa-graduation-cap"></i> Students</h5>
	        <a href="student.php" class="btn btn-warning">View</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3 py-4">
	    <div class="card bg-dark">
	      <div class="card-body">
	        <h5 class="card-title text-light text-center"><i class="fa-solid fa-chalkboard-user"></i> Teachers</h5>
	        <a href="#" class="btn btn-warning">View</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3 py-4">
	    <div class="card bg-dark">
	      <div class="card-body">
	        <h5 class="card-title text-light text-center"><i class="fa-solid fa-people-roof"></i> Batches</h5>
	        <a href="#" class="btn btn-warning">View</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-3 py-4">
	    <div class="card bg-dark">
	      <div class="card-body">
	        <h5 class="card-title text-light text-center"><i class="fa-solid fa-user-group"></i> Users</h5>
	        <a href="#" class="btn btn-warning">View</a>
	      </div>
	    </div>
	  </div>
	</div>











	















	<nav class="navbar fixed-bottom navbar-light" style="background-color: #f4bb19;">
	  <div class="container-fluid">
	    <h3 class="container-fluid text-center text-light">E-SHIKHO</h3>
	  </div>
	</nav>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/055fc9e940.js" crossorigin="anonymous"></script>
</body>
</html>