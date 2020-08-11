<?php 

include_once 'Session.php';
include 'Database.php';



class User 
{
	private $db;
	public function __construct()
	{
		$this->db = new Database();
	}

	//public function userRegistration($data,$file){
	public function userRegistration($data){
		$name = $data['name'];
		$email = $data['email'];
		$age = $data['age'];
		$gender = $data['gender'];
		$bloodGroup = $data['bloodGroup'];
		$address = $data['address'];
		$mobile = $data['mobile'];
		// error on uploding picture. it say's  Undefined index: picture
	//upload picture 
		
		/*$picture =$data[$_FILES['picture']['name']];
		$pic_tmp = $data[$_FILES['picture']['tmp_name']];

		move_uploaded_file($pic_tmp,"User_img/$picture");*/
	 //upload picture end

		$password = md5($data['password']); // generate a larg encryption

	$sql = "INSERT INTO user(name,email,age,gender,bloodGroup,address,password,mobile) VALUES(:name,:email,:age,:gender,:bloodGroup,:address,:password,:mobile)";

	/*$sql = "INSERT INTO user(name,email,age,gender,bloodGroup,address,password,mobile,pic) VALUES(:name,:email,:age,:gender,:bloodGroup,:address,:password,:mobile)";*/

	$query = $this->db->pdo->prepare($sql);
	$query -> bindValue(':name',$name);
	
	
	$query -> bindValue(':email',$email);
	$query -> bindValue(':age',$age);
	$query -> bindValue(':gender',$gender);
	$query -> bindValue(':bloodGroup',$bloodGroup);
	$query -> bindValue(':address',$address);
	$query -> bindValue(':password',$password);
	$query -> bindValue(':mobile',$mobile);
	//$query -> bindValue(':picture',$picture);
	$result = $query ->execute();

	if($result){
		$msg = "<div class='alert alert-sucess'><strong>Sucess !</strong>Thnak you,You have benn registered</div>";
		

		header("Location: login.php");
		return $msg;

	}else{
		$msg = "<div class='alert alert-danger'><strong>Error !</strong>Error</div>";
		return $msg;
	}
	}




	public function	getLoginUser($email,$password){
		$sql = "SELECT * FROM user WHERE email = :email AND password = :password LIMIT 
		1";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':email',$email);
		$query->bindValue(':password',$password);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;
	}


	public function usrLoginUser($data){

		
		$email = $data['email'];
		$password = md5($data['password']);
		


		$result = $this->getLoginUser($email,$password);
		if($result){
			Session::init();
			Session::set("login",true);
			Session::set("id",$result->id);
			Session::set("name",$result->name);
			Session::set("bloodGroup",$result->bloodGroup);
			Session::set("address",$result->address);
			Session::set("mobile",$result->mobile);
			Session::set("email",$result->email);
			Session::set("age",$result->age);
			Session::set("gender",$result->gender);

			//not done yeat
			Session::set("pic",$result->pic);
			Session::set("lastDonetDate",$result->lastDonetDate);
			//not done yeat


			header("Location: userProfile.php");
		}
		else{
			$msg = "<div class='alert alert-danger'><strong>Error! Data not found</strong></div>";
			echo $msg;
		}
		
	}

	public function getUserById($userid){
		$sql = "SELECT * FROM user WHERE id=:id LIMIT 1";
		$query = $this->db->pdo->prepare($sql);
		$query->bindValue(':id',$userid);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_OBJ);
		return $result;
	}

	public function updateUserData($id, $data){

		$name = $data['name'];
		$address = $data['address'];
		$mobile = $data['mobile'];
		$email = $data['email'];
		/**/
		$lastDonetDate = $data['lastDonetDate'];
		$lastDonetDate = date("Y-m-d",strtotime($lastDonetDate));
		/**/


		//$age = $data['age'];
		//$gender = $data['gender'];
		//$bloodGroup = $data['bloodGroup'];
		
		
		// error on uploding picture. it say's  Undefined index: picture
	//upload picture 
		
		/*$picture =$data[$_FILES['picture']['name']];
		$pic_tmp = $data[$_FILES['picture']['tmp_name']];

		move_uploaded_file($pic_tmp,"User_img/$picture");*/
	 //upload picture end

		$password = md5($data['password']); // generate a larg encryption
	$sql = "
		UPDATE user SET
		name =:name,
		email=:email,
		address=:address,
		password=:password,
		mobile=:mobile,
		lastDonetDate=:lastDonetDate
		WHERE id = :id

	";

	$query = $this->db->pdo->prepare($sql);
	$query -> bindValue(':name',$name);
	$query -> bindValue(':email',$email);
	//$query -> bindValue(':age',$age);
	//$query -> bindValue(':gender',$gender);
	//$query -> bindValue(':bloodGroup',$bloodGroup);
	$query -> bindValue(':address',$address);
	$query -> bindValue(':password',$password);
	$query -> bindValue(':mobile',$mobile);
	$query -> bindValue(':lastDonetDate',$lastDonetDate);
	$query -> bindValue(':id',$id);
	$result = $query ->execute();
	
	if($result){
		$msg = "<div class='alert alert-sucess'><strong>Sucess !</strong>Data updated</div>";
		return $msg;
	}else{
		$msg = "<div class='alert alert-danger'><strong>Error !</strong>Error</div>";
		return $msg;
	}



	}

	public  function search($blood){

		
		$bloodGroup = $blood['bloodgroup'];
		$address = $blood['location'];

		 
		$sql = "SELECT * FROM user  where bloodGroup=:bloodGroup AND address LIKE CONCAT('%',:address,'%') ";
	

		$query = $this->db->pdo->prepare($sql);

		$query -> bindValue(':bloodGroup',$bloodGroup);
		$query -> bindValue(':address',$address);

		
		$exe= $query->execute(array(':bloodGroup'=>$bloodGroup,':address'=>$address));
		if($exe){
			if($query->rowCount()>0){
				foreach( $query as $r) {
					
   
					$name= $r['name'];
					$email= $r['email'];
					$age= $r['age'];
					$gender= $r['gender'];
					$bloodGroup= $r['bloodGroup'];
					$address= $r['address'];
					$mobile= $r['mobile'];
					$pic= $r['pic'];
					$lastDonetDate= $r['lastDonetDate'];

					/*new date work*/
					$date2 = date('Y/m/d'); 
					$currentDate = strtotime($date2);
					//convert the lastDonetDate into strtotime formet 
					$lastDonetDateConv = strtotime($lastDonetDate);
					//echo $currentDate;
					//echo $date2;
					$diff=0;
					$years=0;
					$days = abs($currentDate - $lastDonetDateConv)/60/60/24;
					
					//echo "days=",$days;
					


					if($days>=90){
						echo "
					
						<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>




<div class='card '>
  <img src='../lr/images/$pic' alt='D.img' style='width:100%'>
  <h1>$name</h1>
  <p class='title'>$address</p>
  <p>email:$email</p>
  <p>blood group:$bloodGroup</p>
  <p>Age:$age</p>
  <p>Mobile no.:$mobile</p>
  <p>Gender:$gender</p>
  <p>Last Donet Date:$lastDonetDate</p>
</div>
<br>
</body>
</html>

					
					 
					
			 ";
			}else{
				//echo "Not found any";
			}



					/*new date work*/

					

					

}

			}else{
			
			$msg = "<div class='alert alert-sucess p-3 mb-2 bg-danger text-white' ><strong>Failed !</strong>Data not found</div>";
			echo $msg;
		}
		}



		/**/

		//$run_pro = mysqli_query($con,$sql);
		//return $run_pro;



	}

	

}


 ?>