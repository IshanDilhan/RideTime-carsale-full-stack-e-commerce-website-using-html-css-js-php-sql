<?php 
include_once "header1.php"; 

$query  = "SELECT `user_id`,`user_name`,`pwd`,`email`,`phone_no`,`user_image_url`,`user_is_active`,`last_login`,`created_date` FROM `car_user` ORDER BY `user_id` DESC";
$searchQ = mysqli_query($con,$query);



?>

<style>
.message-cell {
        cursor: pointer;
        max-height: 60px; /* Set a fixed maximum height as needed */
        max-width: 300px; /* Set a fixed maximum width as needed */
        overflow: hidden;
        text-overflow: ellipsis;
        word-wrap: break-word; /* Allow content to wrap to the next row */
        transition: max-height 0.5s ease-in-out;
    }

    .message-cell.expanded {
        max-height: none;
        white-space: normal; /* Allow content to wrap to the next row when expanded */
    }
    th, td {
    min-width: 100px; /* Adjust the minimum width as needed */
    white-space: nowrap;

  }
</style>

<script>

    function expandMessage(cell) {
        cell.classList.toggle('expanded');
    }

function enableDesable(itemID,enableOrDesable){
    $.ajax({
         type: "POST",
         url: "ajax/enableuser.php",
         data: "itemId=" + itemID + "&enable=" + enableOrDesable,
         success: function(msg){
			 location.reload();
			 
         }
    });

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
                        <h2>Read your <em>users</em></h2>
                        <p>Look your users and take actions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    
            <div class="col-md-12  text-center">
                <br>
                <br>
					                	<div ><span id="ishan" style="color: red; font-weight: bolder;">
                                        <?php
                                        
if(mysqli_num_rows($searchQ ) == 0)
{   echo mysqli_num_rows($searchQ );
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
        <th scope="col">user name</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        
        <th scope="col">Enable or Desable</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $num = 1;
      while ($row = mysqli_fetch_array($searchQ )) {
      ?>
        <tr>
          <th scope="row"><?php echo $num; ?></th>
          <td><?php echo $row['user_name']; ?></td>
          <td><?php echo $row['pwd']; ?></td>
          <td><?php echo $row['email']; ?></td>
          
    
</td>
          
          <?php
if ( $row['user_is_active']== 1) {
?>
    <td style="text-align: center; vertical-align: middle;">
    <img style="height: 25px; width: 25px; cursor: pointer;" src="./../assets/images/correct.png" alt="enable" onclick="enableDesable(<?php echo $row['user_id']; ?>, 'd')">
</td>

<?php
} else {
?>
    <td style="text-align: center; vertical-align: middle;">
        <img style="height: 25px; width: 25px; cursor: pointer;" src="./../assets/images/wrong.png" alt="disable" onclick="enableDesable(<?php echo $row['user_id']; ?>, 'e')">
    </td>
<?php
}
?>

        </tr>
      <?php
        $num++;
      }
      ?>
    </tbody>
  </table>
    </div>
    <?php  
  }
  ?></span></div>
			</div>


        
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 " style="text-align: center;">
                <br>
                <br>
                <br>
                
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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