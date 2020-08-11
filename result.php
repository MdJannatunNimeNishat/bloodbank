<?php 
include 'lib/User.php';
include 'inc/header.php'

 ?>

 <?php 
 	$searchObj = new User();
 	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['search'])){
 	
 		
 		 $searchObj->search($_POST);

  	}
  		 ?>
  <?php 
  	include 'inc/footer.php'

   ?>
