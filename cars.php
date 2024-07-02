<?php 
include_once "header.php";


$itemsPerPage = 6; // Number of items to display per page
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number or set it to 1 by default
$offset = ($page - 1) * $itemsPerPage; // Calculate the offset

$sql = "SELECT `car_id`, `car_name`, `car_brand`, `car_status`, `display_price`, `seling_price`, `engine_power`, `km`, `giar_type`, `car_image_url`, `car_is_enable`
        FROM `cars`
        WHERE car_is_enable =1
        ORDER BY `car_id` DESC
        LIMIT $itemsPerPage
        OFFSET $offset";

// $first_itemQ="SELECT `car_id`, `car_name`, `car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`,`car_is_enable`
// FROM `cars`   ORDER BY `car_id` DESC  ";



$firstQ  = $sql;
$result1 = mysqli_query($con,$firstQ);
$count1  = mysqli_num_rows($result1);
?>
<script>

function serchitems() {
    event.preventDefault();
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
        url: "ajax/searchItems.php",
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



function clearitems(){

    $("#carname").val('')
    $("#carbrand").val('')
    $("#carstatus").val('')
    $("#sellingprice").val('')
    return false;
    
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
                        <h2>Our <em>Cars</em></h2>
                        <p>Discover a diverse range of vehicles and find the vehicle that speaks to you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5023542624997520"
     crossorigin="anonymous"></script>
    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="contact-form">
                <form action="#" id="contact">
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
                    </div>
                    
                    <div class="col-sm-4 offset-sm-4">
                      <div class="main-button text-center">
                          <button onclick="serchitems()"style="border-radius: 6px;" > Search car </button>  
                          <button onclick="clearitems()"style="border-radius: 6px;" > Clear</button>  
                      </div>
                    </div>
                    
                    <div class="col-md-12  text-center">
                        <br>
					                	<div ><span id="ishan" style="color: red; font-weight: bolder;"></span></div>
			        </div>
                    <br>
                    <br>
                </form>
            </div>

            <div class="row">
<?php
 if($count1 > 0){

    while($row = mysqli_fetch_array($result1)){
?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?php echo $row['car_image_url']; ?>" alt="" height="250px" width="100px">

                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup>$</sup><?php echo $row['display_price']; ?> </del> &nbsp; <sup>$</sup><?php echo $row['seling_price']; ?>
                            </span>

                            <h4><?php echo $row['car_name']; ?></h4>

                            <p>
                                <i class="fa fa-dashboard"></i> <?php echo $row['km']; ?>km &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cube"></i> <?php echo $row['engine_power']; ?> cc &nbsp;&nbsp;&nbsp;
                                <i class="fa fa-cog"></i> <?php echo $row['giar_type']; ?> &nbsp;&nbsp;&nbsp;
                            </p>

                            <ul class="social-icons">

                                    <li><a href="car-details.php?car_id=<?php echo $row['car_id']; ?>">+ View Car</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <?php   
                		}
	
                    }
                    else{
                        echo 'No items found...!';
                    }
                ?>
            </div>

            <br>
            <?php  
            $totalCars = 100; // Total number of cars (you may need to fetch this dynamically)

            $totalPages = ceil($totalCars / $itemsPerPage); // Calculate the total number of pages
            
            echo '<nav>';
            echo '<ul class="pagination pagination-md justify-content-center">';
            
            // Previous Page Link
            if ($page > 1) {
                echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>';
            }
            
            // Page Links
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<li class="page-item ' . ($i == $page ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
            }
            
            // Next Page Link
            if ($page < $totalPages) {
                echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>';
            }
            
            echo '</ul>';
            echo '</nav>';
            
            
            







            // <nav>
            //   <ul class="pagination pagination-lg justify-content-center">
            //     <li class="page-item">
            //       <a class="page-link" href="#" aria-label="Previous">
            //         <span aria-hidden="true">&laquo;</span>
            //         <span class="sr-only">Previous</span>
            //       </a>
            //     </li>
            //     <li class="page-item"><a class="page-link" href="#">1</a></li>
            //     <li class="page-item"><a class="page-link" href="#">2</a></li>
            //     <li class="page-item"><a class="page-link" href="#">3</a></li>
            //     <li class="page-item">
            //       <a class="page-link" href="#" aria-label="Next">
            //         <span aria-hidden="true">&raquo;</span>
            //         <span class="sr-only">Next</span>
            //       </a>
            //     </li>
            //   </ul>
            // </nav>
            ?>
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