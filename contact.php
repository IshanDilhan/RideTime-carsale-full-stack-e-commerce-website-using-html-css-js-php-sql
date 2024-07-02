<?php 
include_once "header.php"; 

?>
<script>
    var ok=true;
function validateEmail() {
    // Get the email input element by its ID
    var emailAddress = document.getElementById('email').value;

    // Regular expression for validating email addresses
    var emailRegex = /^.*@gmail\.com$/;


    // Test the email against the regex pattern
    if (emailRegex.test(emailAddress)) {
        // Email is valid
        // You can perform additional actions here if the email is valid
        ok=true;
    } else {
        // Email is invalid, display an alert
        alert('Invalid email address.');
        ok=false;
    }
}
    function isvalid(){
        if(ok===true ){
            addcomment()  
        }else{
            alert('enter valid email');
        }
    }
    function addcomment() {
    var name = $("#name").val();
    var email = $("#email").val();
    var subject = $("#subject").val();
    var message = $("#message").val();
    
    $.ajax({
        type: "POST",
        url: "ajax/addcomments.php",
        data: "name=" + name +          
            "&email=" + email +
            "&subject=" + subject +
            "&message=" + message 
            ,
            success: function(msg) {
                msg=msg.trim();
            if (msg === '1') {
               alert('Massage sent...');
               location.reload();
            } else {
               alert('Massage not sent...');
            }
            },
        
    });

}


function clearitems(){

    $("#name").val('')
    $("#email").val('')
    $("#subject").val('')
    $("#message").val('')
    
    





}
</script>


    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Feel free to <em>Contact Us</em></h2>
                        <p>We give you 24 Hours and 365 Days services</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h5>Ishan Dilhan</a></h5>
                    <h5><a href="#">+94 701880662</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">Ridetimecarsale@gmail.com</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>Galle, Sri Lanka</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us" style="margin-top: 0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                    <iframe style="margin-left: 10px; padding: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8716.408924997826!2d80.21419140643088!3d6.030523411022204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb6932fce3%3A0x4a35b903f9c64c03!2sGalle!5e0!3m2!1sen!2slk!4v1695949121789!5m2!1sen!2slk" width="730"  height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" onblur="validateEmail()">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                              <button type="button" id="form-submit" class="main-button" onclick="isvalid()">Send Message</button>
                              <button type="button" class="main-button" onclick="clearitems()">Clear</button>

                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <br>
    
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align: center;">
                        Copyright © 2023 RIDE TIME CAR SALE
                        - Design by: <a href="https://www.ishanwaruna.com/">Ishan Dilhan</a>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </footer>

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