<?php 
include_once "header.php"; 



?>
<script>

function serchitems() {
    var carname = $("#carname").val();
    var carbrand = $("#carbrand").val();
    var carstatus = $("#carstatus").val();
    var displayprice = $("#displayprice").val();
    var sellingprice = $("#sellingprice").val();
    var enginepower = $("#enginepower").val();
    var km = $("#km").val();
    var giartype = $("#giartype").val();
    var carimage = $("#carimage").val();

    $.ajax({
        type: "POST",
        url: "ajax/searchItems1.php",
        data: "carname=" + carname +
            "&carbrand=" + carbrand +
            "&carstatus=" + carstatus +
            "&displayprice=" + displayprice +
            "&sellingprice=" + sellingprice +
            "&enginepower=" + enginepower +
            "&km=" + km +
            "&giartype=" + giartype +
            "&carimage=" + carimage,
        success: function(msg){
			if(msg == '0'){
				// $("#ishan").html('No items found..!');  
			}
			else{
					$("#ishan").html(msg);  
			}
         }
                 
        
    });
    return false;
}

// function enableDesable(itemID,enableOrDesable){
//     $.ajax({
//          type: "POST",
//          url: "ajax/enable.php",
//          data: "itemId=" + itemID + "&enable=" + enableOrDesable,
//          success: function(msg){
// 			serchitems();
			 
//          }
//     });

// }

function clearitems(){

    $("#carname").val('')
    $("#carbrand").val('')
    return false;
    





}
</script>
<style>
  @media (max-width: 768px) {
  th, td {
    min-width: 100px; /* Adjust the minimum width as needed */
    white-space: nowrap;

  }
  
  </style>

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
                <form id="contact" method="POST" onsubmit="return false;" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Car Name </label>
                                <input type="text" name="carname" id="carname" class="form-control name" placeholder="car name*" >
                                 
                            </div>
                        </div>
                        
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" name="carbrand" id="carbrand" class="form-control name" placeholder="car brand*" >
                                 
                            </div>
                            
                        </div>
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Car Status</label>
                                <input type="text" name="carstatus" id="carstatus" class="form-control name" placeholder="car status*" >
                                 
                            </div>
                            
                        </div>
                
                        
                
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            
                            <div class="form-group">
                                <label>Selling Price</label>
                                <input type="text" name="sellingprice" id="sellingprice" class="form-control name" placeholder="sellingprice*" >
                                 
                            </div>
                            
                        </div>
                
                
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Car Brand</label>
                                <input type="text" name="carbrand" id="carbrand" class="form-control name" placeholder="car brand*" required>
                                 
                            </div>
                            
                        </div>
                 -->
                        
                
                        
                    </div>
                    
                    <div class="col-sm-4 offset-sm-4">
                      <div class="main-button text-center">
                          <button onclick="serchitems()" >search car </button>
                          <button onclick="clearitems()" >clear </button>
                      </div>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-md-12  text-center">
					                	<div ><span id="ishan" style="color: red; font-weight: bolder;"></span></div>
			</div>
            <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content" style="text-align: center;">
                        
                        <br>
                        <h2><em> Choose your Car </em></h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
            
            <?php
$searchQ = "SELECT `car_id`, `car_name`, `car_brand`, `car_status`, `display_price`, `seling_price`, `engine_power`, `km`, `giar_type`, `car_image_url`, `car_is_enable` FROM `cars` where `car_is_enable`=1 ORDER BY `car_id` DESC";
 





$selectQRes = mysqli_query($con,$searchQ);
if(mysqli_num_rows($selectQRes) == 0)
{
    echo 'no item found ! ';
}

else 
{
    ?>
<div class="container table-responsive">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Car Name</th>
        <th scope="col">Car Brand</th>
        <th scope="col">Car Status</th>
        <th scope="col">Display Price</th>
        <th scope="col">Selling Price</th>
        <th scope="col">Engine Power</th>
        <th scope="col">KM</th>
        <th scope="col">Gear Type</th>
        <th scope="col">Car Image</th>
        
        <th scope="col">More details</th>
    
      </tr>
    </thead>
    <tbody>
      <?php
      $num = 1;
      while ($row = mysqli_fetch_array($selectQRes)) {
      ?>
        <tr>
          <th scope="row"><?php echo $num; ?></th>
          <td><?php echo $row['car_name']; ?></td>
          <td><?php echo $row['car_brand']; ?></td>
          <td><?php echo $row['car_status']; ?></td>
          <td><?php echo $row['display_price']; ?></td>
          <td><?php echo $row['seling_price']; ?></td>
          <td><?php echo $row['engine_power']; ?></td>
          <td><?php echo $row['km']; ?></td>
          <td><?php echo $row['giar_type']; ?></td>
          <td><img src="./<?php echo $row['car_image_url']; ?>" width="100" height="100"></td>
          
          <td>
            <a class="btn btn-primary" href="car-details.php?car_id=<?php echo $row['car_id']; ?>">View Details</a>

          </td>


        </tr>
      <?php
        $num++;
      }
      ?>
    </tbody>
  </table>
    </div>
    <?php  
  }?>


        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 " style="text-align: center;">
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