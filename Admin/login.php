<?php
include_once "header.php"; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
	
	if(isset($_POST['username']) && isset($_POST['pass'])){
        //echo 'ishan';
		$_SESSION['login'] = false;
		
		$username = @trim(stripslashes($_POST['username']));
		$pass     = md5(@trim(stripslashes($_POST['pass'])));
		
		
		// $selectUser = "SELECT `user_id`, `user_cato`, `email_address`, `phone_no`,
		//  `user_image_url`, `user_is_active`, `gender`, `firstname`, `lastname`
		// FROM `burger_user`
		// WHERE `username`='$username' and `pwd`='$pass' 
		// AND `user_is_active`=1 
		// AND `mailConf`=1 LIMIT 1";

        $selectUser = "SELECT `user_id`,`user_cato`,`user_name`,`pwd`,`email`,`phone_no`,
        `user_image_url`,`user_is_active`,`last_login`,`created_date`
        FROM`car_user`
        WHERE `username`='$username' and `pwd`='$pass' 
		AND `user_is_active`=1 
		LIMIT 1" ;
        

		$result = mysqli_query($con,$selectUser);
		$count = mysqli_num_rows($result);
		
		
		if($count == 1){
			
			while($row = mysqli_fetch_array($result)){

				$_SESSION['user_id']      = $row['user_id'];
				$_SESSION['user_cato']    = $row['user_cato'];
				$_SESSION['user_name']    = $row['user_name'];
				$_SESSION['pwd']          = $row['pwd'];
				$_SESSION['login']        = TRUE;
				$_SESSION['email']         = $row['email'];
				$_SESSION['session']      = session_id();
				$_SESSION['last_Login']    = $row['last_Login'];
				
				
				echo "ishan";
				//current date time
				$date1 = date("Y-m-d H:i:s"); 
				
				$updateUserRecored = "UPDATE `car_user` SET `lastLogin`='$date1' WHERE `user_id`=". $row['user_id'];
				mysqli_query($con,$updateUserRecored);
				
				header("Location: index.php");
                
			}
		}
			else{
				
				header("Location: login.php?msg=1");
                
			}

	}

}






?>

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/bg-banner.jpg);  height: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">


                        <h2> <em>Login </em>now</h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ***** Our Classes Start ***** -->
    <div id="booking-2" class="wide-70 booking-section division" style="margin-top: 60px; margin-bottom: 60px;">
        <div class="container">
            


                <!-- BOOKING FORM -->
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="background-color:#eeeeee;">
                    <div class="form-holder">

                        <div class="pl-xl" style="text-align: center; ">
                            <br>
                            
                            <p style="text-align: center; font-size: 18px;">LOGIN HERE </p>
        
        
                        </div>


                        <!-- Form -->
                        <form name="bookinkform" class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> "
                            style="height: 200px; margin-top: 20px;">

                            
                            

                            <!-- Form Input -->
                            <div class="col-lg-12">
                                <input type="text" name="username"  class="form-control name"
                                    placeholder="User name"  >
                            </div>
                            <!-- Form Input -->
                            <div class="col-lg-12" style="margin-top: -23px;">
                                <input name="pass" type="password"  class="form-control name"
                                    placeholder="Password" required>
                            </div>

                            
                            
                            <!-- Form Button -->
                            <div class="col-md-12 mt-10">
                                <button type="submit" class="btn btn-md submit "
                                    style="align-items: center; background-color: #fd0f02; color: white; border-radius: 6px; padding: 10px 20px; border: none;"
                                     value="login">login</button>

                            </div>

                            <!-- Form Message -->
					        <div class="col-md-12 booking-form-msg text-center">
					                	<div class="sending-msg"><span class="loading" style="color: red; font-weight: bolder;"><?php 
										if(isset($_GET['msg'])){ 
											
											if($_GET['msg'] == 1){
												echo 'Invalide username and password';
											}

											else if($_GET['msg'] == 2){
												echo 'Please loging again..!';
											}
										
										}
										
										
										?></span></div>
					        </div>
                        </form> <!-- End Form -->

                    </div>
                </div> <!-- END BOOKING FORM -->

            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BOOKING-2 -->

    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg); height: 350px; ">
        <div class="container" >
            <div class="row" ;>
                <div class="col-lg-10 offset-lg-1" >
                    <div class="cta-content" style="text-align: center; margin-top: -40px;">
                        <h2>Send us a <em>message</em></h2>
                        <p>Welcome to our car sale website! Browse our wide selection of top-quality vehicles at
                            competitive prices. From sleek sedans to rugged SUVs, we have the perfect car to suit your
                            needs. Our team of experts is ready to assist you in finding your dream car. Start your
                            journey to a smooth ride today!</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Footer Start ***** -->


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>