<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>e-complaint</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>



<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">e-Complaint</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <div class="dropdown">
  				<a class="nav-link" data-toggle="dropdown">Login
  				<span class="caret"></span></a>
  				<ul class="dropdown-menu ">
    				<li><a class="dropdown-item" href="userlogin.php">USER LOGIN</a></li>
    				<li><a class="dropdown-item" href="policelogin.php">POLICE LOGIN</a></li>
    				<li><a class="dropdown-item" href="#">ADMIN LOGIN</a></li>
  				</ul>
			</div>
	      </li>	
	      <li class="nav-item">
	        <div class="dropdown">
  				<a class="nav-link" data-toggle="dropdown">Register
  				<span class="caret"></span></a>
  				<ul class="dropdown-menu ">
    				<li><a class="dropdown-item" href="user_signup.php">USER REGISTER</a></li>
    				<li><a class="dropdown-item" href="policesignup.php">POLICE REGISTER</a></li>
  				</ul>
			</div>
	      </li>
	      <?php if(isset($_SESSION['u_email'])): ?>
	      <li class="nav-item">
	        <a class="nav-link " href="./process/logout.proc.php" tabindex="-1" aria-disabled="true">Logout</a>
	      </li>
	  	  <?php endif; ?>
	    </ul>
	  </div>
</nav>
