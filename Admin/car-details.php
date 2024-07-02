<?php 
include_once "header.php"; 

$first_itemQ="SELECT `car_id`, `car_name`, `car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`,`car_is_enable`
FROM `cars`   ORDER BY `car_id` DESC  LIMIT 6";

$firstQ  = $first_itemQ;
$result1 = mysqli_query($con, $firstQ);
$count1  = mysqli_num_rows($result1);


// Include your database connection code here

// Check if the car_id parameter is set in the URL
if (isset($_GET['car_id'])) {
    // Sanitize and retrieve the car_id
    $car_id = mysqli_real_escape_string($con, $_GET['car_id']);

    // Query to retrieve car details based on car_id
    $car_query = "SELECT * FROM `cars` WHERE car_id = $car_id";
    $car_result = mysqli_query($con, $car_query);

    if ($car_result && mysqli_num_rows($car_result) > 0) {
        // Fetch car details
        $car_row = mysqli_fetch_assoc($car_result);
?>
        <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Car Name <em><?php echo $car_row['car_name']; ?></em></h2>
                        <h2>Display Price <em>$<?php echo $car_row['display_price']; ?></em></h2>
                        <h2>Selling Price <em>$<?php echo $car_row['seling_price']; ?></em></h2>
                    </div>
                </div>
                <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" >
                <div class="carousel-item active">
                  <img class="d-block w-100" style="height: 500px; width: 400px;"  src="<?php echo $car_row['car_image_url']; ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="height: 500px; width: 400px;"src="<?php echo $car_row['car_image_url']; ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" style="height: 500px; width: 400px;"src="<?php echo $car_row['car_image_url']; ?>" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            
            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-cog"></i> Vehicle Specs</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-info-circle"></i> Vehicle Description</a></li>
                  <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Vehicle Extras</a></li>
                  <li><a href='#tabs-4'><i class="fa fa-phone"></i> Contact Details</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Vehicle Specs</h4>

                    <div class="row">
                       <div class="col-sm-6">
                            <label>Type</label>
                       
                            <p><?php echo $car_row['car_status']; ?></p>
                       </div>
                       
                       <div class="col-sm-6">
                            <label>Make</label>
                       
                            <p>Lorem ipsum dolor sit</p>
                       </div>

                       <div class="col-sm-6">
                            <label> Model</label>
                       
                            <p>Lorem ipsum dolor sit</p>
                       </div>

                       <div class="col-sm-6">
                            <label>First registration</label>
                       
                            <p>05/2010</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Mileage</label>
                       
                            <p><?php echo $car_row['km']; ?>km</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Fuel</label>
                       
                            <p>diesel</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Engine size</label>
                       
                            <p><?php echo $car_row['engine_power']; ?>cc</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Power</label>
                       
                            <p>85 hp</p>
                       </div>


                       <div class="col-sm-6">
                            <label>Gearbox</label>
                       
                            <p><?php echo $car_row['giar_type']; ?></p>
                       </div>

                       <div class="col-sm-6">
                            <label>Number of seats</label>
                       
                            <p>4</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Doors</label>
                       
                            <p>2/3</p>
                       </div>

                       <div class="col-sm-6">
                            <label>Color</label>
                       
                            <p>Black</p>
                       </div>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Vehicle Description</h4>
                    
                    <p>- Colour coded bumpers <br> - Tinted glass <br> - Immobiliser <br> - Central locking - remote <br> - Passenger airbag <br> - Electric windows <br> - Rear head rests <br> - Radio <br> - CD player <br> - Ideal first car <br> - Warranty <br> - High level brake light <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco                         laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat                     cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
                   </article>
                  <article id='tabs-3'>
                    <h4>Vehicle Extras</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <p>ABS</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Leather seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Power Assisted Steering</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Electric heated seats</p>
                        </div>
                        <div class="col-sm-6">
                            <p>New HU and AU</p>
                        </div>
                        <div class="col-sm-6">
                            <p>Xenon headlights</p>
                        </div>
                    </div>
                  </article>
                  <article id='tabs-4'>
                    <h4>Contact Details</h4>

                    <div class="row">   
                        <div class="col-sm-6">
                            <label>Name</label>

                            <p>John Smith</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Phone</label>

                            <p>123-456-789 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile phone</label>
                            <p>456789123 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">john@carsales.com</a></p>
                        </div>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>























<?php
        // Display car details
        // echo "<h1>Car Details</h1>";
        // echo "<p>Car Name: " . $car_row['car_name'] . "</p>";
        // echo "<p>Display Price: $" . $car_row['display_price'] . "</p>";
        // echo "<p>Selling Price: $" . $car_row['seling_price'] . "</p>";
        // Add more details as needed

        // Close the database connection
        mysqli_close($con);
    } else {
        echo "Car not found or invalid car ID.";
    }
} else {
    echo "Car ID not provided.";
}
?>


    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
 
    <!-- ***** Fleet Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
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