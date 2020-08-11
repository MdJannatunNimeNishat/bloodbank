
<?php 

include 'inc/header.php';
include 'lib/User.php';
Session::checkSession();
$user = new User();

 ?>
 <div class="panel panel-default">
		<div class="panel-heading">
			<!-- <h2><strong>Wlcome! </strong> -->
				<?php 
					$id = Session::get("id");
					$name = Session::get("name");
					$bloodGroup = Session::get("bloodGroup");
					$address = Session::get("address");
					$mobile = Session::get("mobile");
					$email = Session::get("email");
					$age = Session::get("age");
                    $gender = Session::get("gender");
					$pic = Session::get("pic");
                    $date = Session::get("lastDonetDate");
                    
                   // echo "<h1>$pic</h1>";
					/*if(isset($name)){
						echo $name;

					}*/
				 ?>

			</span></h2>
		</div>

<!------ Include the above in your HEAD tag ---------->

<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/> -->
<!-- https://bootsnipp.com/snippets/E1nNa -->
  <link rel="stylesheet" href="style/bootstrap.min.css"/>

<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="images/<?php echo $pic; ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                   
                                    <!-- <img src="images/<?php //echo $pic; ?>" width="60" height="60" /> -->

                                    <!-- <div class="middle">
                                        <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div> -->
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);"><?php echo $name ?></a></h2><br>
                                    <h6 class="d-block"><a href="javascript:void(0)">Mobile:</a> <?php echo $mobile ?></h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">Address:</a> <?php echo $address ?></h6>
                                    <h4><a href="editProfile.php?editProfile=<?php echo $id ?>">Edit info</a></h4>
                                    
                                </div>
                                
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Connected Services</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                               <?php echo $name ?>
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Last Donnet Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                        <!--not yeat done  -->
                                                <?php echo $date ?>
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Age:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $age ?>
                                            </div>
                                        </div>
                                        <hr />
                                           <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gender:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $gender ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Bloodgroup:</label>
                                            </div>

                                            <div class="col-md-8 col-6">
                                                <?php echo $bloodGroup ?>
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email:</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $email ?>
                                            </div>
                                        </div>
        
                                        <hr />
                                        

                                    </div>
                                   <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                                    	<h2>Social media links</h2>
                                    	<h4><a href="https://www.facebook.com/">Facebook</a></h4>
                                    	<a href="https://www.twitter.com/">Twitter</a>
                                    	<a href="https://www.instagram.com/">Instagram</a>
                                    	<!-- <i class="fa fa-facebook-official" style="font-size:24px"></i> -->
                                          
                                    </div>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php 
include 'inc/footer.php';

 ?>