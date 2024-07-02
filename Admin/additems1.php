<?php 
include_once "header1.php"; 
?>

<script>
  var ok1 = true;
var ok2 = true;
var ok3 = true;
var ok4 = true;
var ok5 = true;
var ok6 = true;
var ok7 = true;
var ok8 = true;  
  
  function addfile() {
  event.preventDefault();
    // Prevent the default form submission behavior
    // event.preventDefault();

    // Set the message in the "loading" span
    $("#loading").html('Uploading...');

    // Get the selected image file
    var imageFile = $("#image")[0].files[0];

    // Create a FormData object to send the image
    var formData = new FormData();
    formData.append("image", imageFile);

    // Submit the form via AJAX
    $.ajax({
        url: "upload.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(msg) {
            // Handle the response as needed
            $("#loading").html(msg);
        },
        error: function() {
            // Handle errors here
            $("#loading").html('An error occurred.');
        }
    });
 }
   
    


 function additem() {
    var carname = $("#carname").val();
    var carbrand = $("#carbrand").val();
    var carstatus = $("#carstatus").val();
    var displayprice = $("#displayprice").val();
    var sellingprice = $("#sellingprice").val();
    var enginepower = $("#enginepower").val();
    var km = $("#km").val();
    var giartype = $("#giartype").val();
    var image = $("#image").val();
event.preventDefault();


    $.ajax({
    
        type: "POST",
        url: "ajax/additems.php",
        data: "carname=" + carname +
            "&carbrand=" + carbrand +
            "&carstatus=" + carstatus +
            "&displayprice=" + displayprice +
            "&sellingprice=" + sellingprice +
            "&enginepower=" + enginepower +
            "&km=" + km +
            "&giartype=" + giartype +
            "&image=" + image,
            success: function(msg) {
            msg=msg.trim();
            if (msg === '1') {
               alert('Your data saved ...!');
            } else {
               alert('Your data not saved try again ..!');
            }
            },
        
    });
   }


    function clearitems(){

    $("#carname").val('')
    $("#carbrand").val('')
    $("#carstatus").val('')
    $("#displayprice").val('')
    $("#sellingprice").val('')
    $("#enginepower").val('')
    $("#km").val('')
    $("#giartype").val('')
    $("#image").val('')
    





    }

  

  function validatevalue1(inputElement) {
        
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^[a-zA-Z]+[a-zA-Z0-9\s]*$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {

            ok1=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter name correctly..!";
            inputElement.setCustomValidity("Please enter name correctly..!");
        } else {
            ok1=true;
            // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
            
        }
}
function validatevalue2(inputElement) {
    
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^[a-zA-Z]+[a-zA-Z0-9\s]*$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {

            ok2=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter name correctly..!";
            inputElement.setCustomValidity("Please enter name correctly..!");
        } else {
            ok2=true;
            // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
            
        }
}
function validatevalue3(inputElement) {
    
        
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^[a-zA-Z]+[a-zA-Z0-9\s]*$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {

            ok3=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter name correctly..!";
            inputElement.setCustomValidity("Please enter name correctly..!");
        } else {
            ok3=true;
            // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
           
            
        }
}
function validatevalue4(inputElement) {
    
    
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^[a-zA-Z]+[a-zA-Z0-9\s]*$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {

            ok4=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter name correctly..!";
            inputElement.setCustomValidity("Please enter name correctly..!");
        } else {
            ok4=true;
            // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
            
        }
}

function validateNumber1(inputElement) {
      
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^\d+$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {
            ok5=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter numbers only.";
            inputElement.setCustomValidity("Please enter numbers only.");
        } else {
            ok5=true;
             // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
        }
        
}
function validateNumber2(inputElement) {
       
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^\d+$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {
            ok6=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter numbers only.";
            inputElement.setCustomValidity("Please enter numbers only.");
        } else {
            ok6=true;
             // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
        }
        
}
function validateNumber3(inputElement) {
       
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^\d+$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {
            ok7=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter numbers only.";
            inputElement.setCustomValidity("Please enter numbers only.");
        } else {
            ok7=true;
             // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
        }
        
}
function validateNumber4(inputElement) {
       
        // Get the entered value from the input element
        var inputValue = inputElement.value;

        // Define a regex pattern to match numbers only
        var regex = /^\d+$/;

        // Get the error message element
        var errorMessageElement = document.getElementById("loading");

        // Test if the input matches the regex pattern
        if (!regex.test(inputValue)) {
            ok8=false;
            // If it doesn't match, show an error message
            errorMessageElement.textContent = "Please enter numbers only.";
            inputElement.setCustomValidity("Please enter numbers only.");
        } else {
            ok8=true;
             // If it matches, clear any error message
            errorMessageElement.textContent = "";
            inputElement.setCustomValidity("");
            
        }
        
}
    function validate(){
        
        if(ok1===true&&ok2===true&&ok3===true&&ok4===true&&ok5===true&&ok6===true&&ok7===true&&ok8===true){
            additem();
            addfile();
            
            
        }else{
            alert('please check you entered data again..!');

        }
    }
</script>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Add your <em>Car here</em></h2>
                        <p>you can add your car here freely</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Car Name </label>
                                <input type="text" name="carname" id="carname" class="form-control name" placeholder="car name*" required onblur="validatevalue1(this)">
                                 
                            </div>
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" name="carbrand" id="carbrand" class="form-control name" placeholder="car brand*" required onblur="validatevalue2(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Car Status</label>
                                <input type="text" name="carstatus" id="carstatus" class="form-control name" placeholder="car status*" required onblur="validatevalue3(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Display Price ($)</label>
                                <input type="text" name="displayprice" id="displayprice" class="form-control name" placeholder="Display Price*" required onblur="validateNumber1(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Selling Price ($)</label>
                                <input type="text" name="sellingprice" id="sellingprice" class="form-control name" placeholder="selling price*" required onblur="validateNumber2(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Engine Power (cc)</label>
                                <input type="text" name="enginepower" id="enginepower" class="form-control name" placeholder="engine power*" required onblur="validateNumber3(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Km</label>
                                <input type="text" name="km" id="km" class="form-control name" placeholder="km*" required onblur="validateNumber4(this)">
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Giar Type</label>
                                <input type="text" name="giartype" id="giartype" class="form-control name" placeholder="giartype*" required onblur="validatevalue4(this)">
                                 
                            </div>
                            
                        </div>
                        
                
                        
                            
                            
                            
                        
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="form-group">
        <label>Car Image</label>
    </div>
    <div class="form-group">
    <input type="file" name="image" id="image" accept="image/*" required>
    
</div>

</div>

                    </div>   
                    <div class="col-sm-4 offset-sm-4">
                      <div class="main-button text-center">
                      <button onclick="validate()">Add Car</button> 
                          <button onclick="clearitems()" >clear </button>   
                      </div>
                    </div>

                        
                       
                    
                    <br>
                     <div class="col-md-12 booking-form-msg text-center">
                        <div class="sending-msg"><span class="loading" id="loading" style="color: red; font-weight: bolder;"></span></div>
                    </div>
                    <br>
                </form>
            </div>



        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 " style="text-align: center; ">
                    <p>
                        Copyright © 2023 RIDE TIME CAR SALE
                        - Design by: <a href="https://www.ishanwaruna.com/">Ishan Dilhan</a>
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