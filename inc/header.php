<?php 

	$filepath = realpath(dirname(__FILE__));
	include_once $filepath.'/../lib/Session.php';
	Session::init();

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="inc/jquery.min.js"></script>
	<script src="inc/bootstrap.min.js"></script>  -->
	
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- <script src="bootstrap/ajax_3.4.1._jquery.min.js"></script> -->
  <script src="inc/bootstrap/bootstrap.min.js"></script>


  <link rel="stylesheet" href="inc/bootstrap/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="inc/bootstrap/bootstrap1.min.css"> -->
 
  <script src="inc/bootstrap/ajax_3.4.1._jquery.min.js"></script>

  <script src="inc/bootstrap/bootstrap.min.js"></script>
  
</head>

<?php 
	if(isset($_GET['action']) && $_GET['action'] == "logout"){

		Session::destroy();
	}


 ?>

<!-- <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/> -->
<body>
	<div class="container">
	<!-- 	<nav style="" class="navbar navbar-default postNav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">Blood Bank
					</a>
				</div>
				
				<ul class="nav  float-right ">
				
				
					<li><a href="?action=logout">Logout</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="register.php">Register</a></li>
					
				</ul>
			</div>
		</nav> -->

		<!--  -->
		<nav class="navbar navbar-default ">
  		<div class="container-fluid">
    		<div class="navbar-header">
      		<a class="navbar-brand" href="index.php">Blood Bank</a>
    		</div>
    		<ul class="nav navbar-nav ">
      		<li class="active"><a href="index.php">Home</a></li>
      		<li><a style=" color:#F66744;"href="?action=logout">Logout</a></li>
      		<li><a style=" color:#F66744;"href="login.php">Login</a></li>
      		<li><a style=" color:#F66744;"href="register.php">Register</a></li>
   		 </ul>
  </div>
</nav>
		<!--  -->
</div>