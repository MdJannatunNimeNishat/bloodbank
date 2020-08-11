<?php 

include 'inc/header.php';
 // include_once 'userProfile.php';
//include 'lib/Session.php';

 include 'lib/user.php';
Session::checkSession();

 ?>
 <?php 

 	// if(isset($_GET['editProfile'])){
 	// 	$get_id=$_GET['editProfile'];
 	// 	$query = "select * from user where id= '$get_id' ";
 		
 	// 	$data = $this->db->query($query);
 		

		// foreach ($result as $row) {
			
		// 		echo "

		// 		'.$row["name"].'


		// 		";
		// }
 	// }


  ?>

 <?php 

 	if (isset($_GET['editProfile'])){
 		$userid= (int) $_GET['editProfile'];
 	}

 	$user = new User();
 	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update'])){	
 		
 		$updateUser= $user->updateUserData($userid, $_POST);
 		
 	}


 ?>

<!-- <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/> -->
	<br>
	<div class="panel panel-default">
		<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Update your profile <span class="float-right"><a class="btn btn-primary" href="userProfile.php">Back</a></span></h2>
		</div>




		<div class="panel-body">
			<div style="max-width:600px; margin:0 auto">
<?php 
	if (isset($updateUser)) {
		echo $updateUser;
	} 

 ?>
<?php 

	$userdate = $user->getUserById($userid);
	if($userdate){

	

 ?>


			<form class="" action="" method="POST">
				<div class="form-group">
					<label for="name">Your name</label>
					<input type="text" id="name" name="name" class="form-control" value="<?php echo $userdate->name ?> "> 
				</div>

				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" id="address" name="address" class="form-control" required="" value="<?php echo $userdate->address ?>"> 
				</div>

				<div class="form-group">
					<label for="mobile">Mobile no.</label>
					<input type="text" id="mobile" name="mobile" class="form-control" required="" value="<?php echo $userdate->mobile ?>"> 
				</div>
				<div class="form-group">
					<label for="Email Address">Email Address</label>
					<input type="email" id="email" name="email" class="form-control" value="<?php echo $userdate->email ?>"  required=""> 
				</div>
				<!-- <div class="form-group">
					<label for="Image">Image</label>
					<input type="file" id="image" name="image" class="form-control" value=""  required=""> 
				</div> -->



<!-- problem in date -->
				<div class="form-group">
					<label for="last donet date">Last Donet date</label>
					<input type="date" id="lastDonetDate" name="lastDonetDate" class="form-control" value="<?php echo $userdate->lastDonetDate ?>  "> 
				</div>
<!-- problem in date -->



				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" id="password" name="password" class="form-control" value="****" > 
				</div>
				<div class="text-center">
					<button type="submit" name="update" class="btn btn-success" >Update</button>
				</div>
				
			</form>

		<?php } ?>


			</div>
		</div>

	</div>

	<?php 

	//include 'inc/footer.php';

	 ?>