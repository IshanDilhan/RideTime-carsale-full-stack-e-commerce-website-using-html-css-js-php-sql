<?php 
include_once "header.php"; 

$query  = "SELECT `com_name`,`_comsubject`,`email`,`massage`,`comment_id`,`comment_available` FROM `comments` WHERE `comment_available`=1 ORDER BY `comment_id` DESC";
$searchQ = mysqli_query($con,$query);



?>

<style>
.message-cell {
        .message-cell {
    cursor: pointer;
    max-height: 2000px; /* Set a fixed maximum height as needed */
    overflow: hidden;
    white-space: normal; /* Allow text to wrap to the next row */
    word-wrap: break-word; /* Allow content to wrap to the next row if it exceeds max-width */
    transition: max-height 0.5s ease-in-out;
}
    }

    .message-cell.expanded {
        max-height: none;
        white-space: normal; /* Allow content to wrap to the next row when expanded */
    }
    
    @media (max-width: 768px) {
  th, td {
    min-width: 100px; /* Adjust the minimum width as needed */
    white-space: nowrap;

  }
  
</style>

<script>

    function expandMessage(cell) {
        cell.classList.toggle('expanded');
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
                        <h2>Read our <em>Comments</em></h2>
                        <p>READ what you are saying</p>
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
        <th scope="col">comment name</th>
        <th scope="col">comment email</th>
        <th scope="col">comment subject</th>
        <th scope="col">massage</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $num = 1;
      while ($row = mysqli_fetch_array($searchQ )) {
      ?>
        <tr>
          <th scope="row"><?php echo $num; ?></th>
          <td><?php echo $row['com_name']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['_comsubject']; ?></td>
          <td class="message-cell" onclick="expandMessage()">
    <div class="message-content " ><?php echo $row['massage']; ?></div>
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