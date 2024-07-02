<?php include_once "header.php"; ?>
<script>
    var ok = false;

    $(document).ready(function() {
        //loadCombo();
        //locadRegins('1');
    });

    function ckUsername() {
        var usern = $("#userName").val();
        var items = "";

        $.ajax({
            type: "POST", // HTTP method used for the request
            url: "ajax/ckUserName.php", // URL of the server-side script that checks the username
            data: "myUserName=" + usern, // Data to be sent in the request body (the username to check)
            success: function(msg) {
                // This function will be called if the AJAX request is successful (HTTP 2xx response status)
                if (msg === '0') {
                    // Username is available
                    ok = true;
                    $("#loading").html('Username taken..!, Try another one'); // Clear any previous error message
                } else {
                    // Username is taken
                    ok = false;
                    $("#loading").html(''); // Display error message

                }

            },
            



            

        });

    };






    function ckEmail() {
        var email = $("#email").val();
        var items = "";

        $.ajax({
            type: "POST",
            url: "ajax/ckEmail.php",
            data: "email=" + email,
            success: function(msg) {
                if (msg == '0') {
                    ok = true;
                    $("#loading").html('');
                } else {
                    ok = false;
                    $("#loading").html('Email address taken..!, Try another one.');
                }
            }
        });
    }

    function registerUser() {
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var userName = $("#userName").val();
        var email = $("#email").val();
        var password = $("#password1").val();
        var items = "";

        $.ajax({
            type: "POST",
            url: "ajax/registerUser.php",
            data: "fname=" + fname +
                "&lname=" + lname +
                "&userName=" + userName +
                "&email=" + email +
                "&pwd=" + password,
            success: function(msg) {
                if (msg == '0') {
                    $("#loading").html('Error occored. Try another username or email address');
                } else {
                    window.location.href = "./index.php";
                }
            }
        });
    }

    function passWDs() {
        var pwd1 = $("#password1").val();
        var pwd2 = $("#password2").val();

        if (pwd1 != pwd2) {
            $("#loading").html('Password and Re-enter password does not match.!');
            ok = false;
        }
    }

    function validateAll() {
        if (!ok) {
            alert('Stoped the operation..!')
            event.preventDefault(); // Prevent form submission
        }

    }
</script>
<!-- ***** Header Area End ***** -->

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/bg-banner.jpg);  height: 200px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">


                    <h2> <em>Register </em>now</h2>
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

                    <p style="text-align: center; font-size: 18px;">REGISTER HERE </p>


                </div>


                <!-- Form -->
                <form name="bookinkform" class="row" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> " style="height: 200px; margin-top: 20px;">

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input type="text" name="fname" id="fname" class="form-control name" placeholder="First Name*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input type="text" name="lname" id="lname" class="form-control name" placeholder="Your Name*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input type="text" name="userName" id="userName" class="form-control name" placeholder="User name*" required onblur="ckUsername();">
                    </div>

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input type="email" name="email" class="form-control email" placeholder="Email Address*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input id="password1" type="password" name="password1" class="form-control name" placeholder="Password*" required>
                    </div>

                    <!-- Form Input -->
                    <div class="col-lg-6">
                        <input type="password" name="password2" id="password2" class="form-control password" placeholder="Re -enter password*" required>
                    </div>

                    <!-- Form Button -->
                    <div class="col-md-12 mt-10">
                        <button type="button" class="btn btn-md submit" style="background-color: #fd0f02; color: white; border-radius: 6px; padding: 10px 20px; border: none;" onclick="registerUser();">Register</button>

                    </div>

                    <!-- Form Message -->
                    <div class="col-md-12 booking-form-msg text-center">
                        <div class="sending-msg"><span class="loading" id="loading" style="color: red; font-weight: bolder;"></span></div>
                    </div>

                </form> <!-- End Form -->

            </div>
        </div> <!-- END BOOKING FORM -->

    </div> <!-- End row -->
</div> <!-- End container -->
</div> <!-- END BOOKING-2 -->

<!-- ***** Our Classes End ***** -->

<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg); height: 350px; ">
    <div class="container">
        <div class="row" ;>
            <div class="col-lg-10 offset-lg-1">
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