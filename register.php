<?php 

include 'inc/header.php';
include 'lib/User.php';

 ?>
 <?php 
 /*
 	$user = new User();
 	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){
 	
 		//$usrRegi = $user->userRegistration($_POST,$_FILES);
 		$usrRegi = $user->userRegistration($_POST);
 		
 	}
*/
  ?>

<!-- last try -->
   <?php 
 	/*$user = new User();
 	if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['register'])){
 			
 			$permited = array('jpg','jpeg','png','gif');
 		echo $file_name = $_FILES['image']['name'];


 
 		
 	}*/

  ?>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Donner Registration</h2>
		</div>

		<div class="panel-body">
			<div style="max-width:600px; margin:0 auto">
<?php 
	if (isset($usrRegi)) {
		echo $usrRegi;
	}

 ?>


<?php
	/*
	$conn = mysqli_connect('localhost','root','','blood_bank');
	if($conn){
	   echo "Connected";
	}
	
   if(isset($_FILES['image'])){
	  $errors= array();
	  
	  $file_name = $_FILES['image']['name'];
	  $file_tmp =$_FILES['image']['tmp_name'];
	  
	  $file_size =$_FILES['image']['size'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      // if($file_size > 2097152){
      //    $errors[]='File size must be excately 2 MB';
      // }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
		 
         $sql= "INSERT INTO user(pic) VALUES ('$file_name')" ;
         $qry = mysqli_query($conn,$sql);
         if($qry){
            echo "img uploded";
         }
         
		
		 echo "Success";
      }else{
        // print_r($errors);
      }
   }
   */
?>
<?php 
	$conn = mysqli_connect('localhost','root','','blood_bank');
	if($conn){
	   echo "Connected";
	}
	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$bloodGroup = $_POST['bloodGroup'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$date = $_POST['date'];
		$password = md5($_POST['password']);

		/* */
		$file_name = $_FILES['image']['name'];
		$file_tmp =$_FILES['image']['tmp_name'];
		/* */

		move_uploaded_file($file_tmp,"images/".$file_name);
			$sql = "INSERT INTO user(name,email,age,gender,bloodGroup,address,password,mobile,pic,lastDonetDate)
			 VALUES('$name','$email','$age','$gender','$bloodGroup','$address','$password','$mobile','$file_name','$date')";
         $qry = mysqli_query($conn,$sql);
         if($qry){
            echo "img uploded";
         }else{
			 echo "error";
		 }
	}



?>
		
			<form class="" action="" method="POST" enctype="multipart/form-data" >
				<div class="form-group">
					<label for="name">Your name</label>
					<input type="text" id="name" name="name" class="form-control" required=""> 
				</div>
				<div class="form-group">
					<label for="Email Address">Email Address</label>
					<input type="email" id="email" name="email" class="form-control" required=""> 
				</div>
				
				<div class="form-group">
					<label for="Age">Age</label>
					<input type="text" id="age" name="age" class="form-control" required=""> 
				</div>
				


			
				<div class="form-group">
					<label for="Gender">Choose your Gender</label>
				

					<div class="radio">
  					<label><input  type="radio"  id="gender" name="gender" value="Mail" checked="" >Male</label>
					</div>
					<div class="radio">
  					<label><input type="radio" id="gender" name="gender" value="Femail">Female</label>
					</div>
				</div>
	
					<div class="form-group">
				 <label for="bloodgroup">Choose your blood group</label>
    			<select id="blood-group" name="bloodGroup" class="form-control">
      				<option>O+</option>
     				<option>O-</option>
      				<option>B+</option>
      				<option>B+</option>
      				<option>A+</option>
      				<option>A-</option>
      				<option>AB+</option>
      				<option>AB-</option>
    			</select>
    		</div>


			<div class="form-group">
					<label for="Address">Last Donet date</label>
					<input type="date" id="date" name="date" class="form-control" required=""> 
				</div>




				<div class="form-group">
					<label for="Address">Address</label>
					<input type="text" id="address" name="address" class="form-control" required=""> 
				</div>

				<div class="form-group">
					<label for="Mobile Number">Mobile Number</label>
					<input type="text" id="mobile" name="mobile" class="form-control" required=""> 
				</div>

				<div class="form-group">
					<label for="picture">Upload your picture</label>
					<!-- <input type="file"  name="picture" class="form-control" >  -->
					  <input type="file" name="image" class="form-control"/>
				</div>


				<div class="form-group">
					<label for="Password">Password</label>
					<input type="password" id="password" name="password" class="form-control" required=""> 
				</div>
				<button type="submit" name="register" class="btn btn-success" >Submit</button>
			</form>
			</div>
		</div>

	</div>




	 <?php 
	include 'inc/footer.php';

 ?>