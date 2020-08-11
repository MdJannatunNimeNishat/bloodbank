<?php 
include 'lib/User.php';
//include 'inc/header.php';
 ?>

 <?php 
 	$search = new User();
 	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['search'])){
 	
 		$result = $search->search($_POST);
 		
 		while($searchResult=mysqli_fetch_array($result)) {
 			$pro_id = $result['id'];
 			echo $pro_id;
 		}
 			
 		
 	}

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Blood Bank</title>
  
  <link rel="stylesheet" type="text/css" href="style/style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="inc/bootstrap/bootstrap.min.css">
 
  <script src="inc/bootstrap/ajax_3.4.1._jquery.min.js"></script>

  <script src="inc/bootstrap/bootstrap.min.js"></script>
 
</head>
<body>

<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="#">Blood Bank</a> -->
      <!--  -->

      <!--  -->
    </div>
    <ul class="nav navbar-nav ">
      <li class="active"><a href="index.php">Blood Bank</a></li>
      
      <li><a style=" color:#F66744;"href="index.php">Home</a></li>
      <li><a style=" color:#F66744;"href="register.php">Registration</a></li>
      <li><a style=" color:#F66744;"href="login.php">Login</a></li>
      <li><a style=" color:#F66744;"href="About_us/About_us.php" target="_block">About us</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <div class="header">
		<form method="post" action="result.php">
			<h1>Search Here</h1>
			<div class="form-box">
				
    				<select required name="bloodgroup" class="search-field business"  required="">
		      				<option>Choose your blood group</option>
		      				<option>O+</option>
		      				<option>O-</option>
		      				<option>B+</option>
		      				<option>B+</option>
		      				<option>A+</option>
		      				<option>A-</option>
		      				<option>AB+</option>
		      				<option>AB-</option>
    				</select>


				<input type="text" name="location" class="search-field business " placeholder="location" required="">
				<button class="search-field business search-bth color" type="submit" name="search" >Search</button>
			</div>
		</form>
	</div>

</div>

</body>
</html>
<?php 
include 'inc/footer.php';

 ?>