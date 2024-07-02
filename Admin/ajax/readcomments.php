<?php 
session_start();
ob_start();
require_once('./../db_connector.php');


$carname = @trim(stripslashes($_POST['carname']));
$carbrand = @trim(stripslashes($_POST['carbrand']));
$carstatus = @trim(stripslashes($_POST['carstatus']));
$displayprice   = @trim(stripslashes($_POST['displayprice']));
$sellingprice = (@trim(stripslashes($_POST['sellingprice'])));
$enginepower = @trim(stripslashes($_POST['enginepower']));
$km = @trim(stripslashes($_POST['km']));
$giartype = @trim(stripslashes($_POST['giartype']));
$carimage = @trim(stripslashes($_POST['carimage']));



$searchQ = "SELECT `car_id`,`car_name`,`car_brand`,`car_status`,`display_price`,`seling_price`,`engine_power`,`km`,`giar_type`,`car_image_url`,`car_is_enable` FROM `cars` 
WHERE ";

if($carname != ""){
    $searchQ .= " `car_name` like '%$carname%' ORDER BY `car_id` DESC" ;
}
else if($carbrand != ""){
  $searchQ .= " `car_brand` like '%$carbrand%'ORDER BY `car_id` DESC;" ;

}else if($carstatus != ""){
  $searchQ .= " `car_status` like '%$carstatus%'ORDER BY `car_id` DESC;" ;

}else{
  $searchQ .= " `seling_price` like '%$sellingprice%'ORDER BY `car_id` DESC;" ;
}


$selectQRes = mysqli_query($con,$searchQ);
if(mysqli_num_rows($selectQRes) == 0)
{
    echo 'no item found ! ';
}

else 
{
    ?>
<div class="container">
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
        <th scope="col">Enable or Desable</th>
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
          <?php
if ( $row['car_is_enable']== 1) {
?>
    <td>
        <img style="height: 25px; width: 25px;cursor: pointer;" src="./../assets/images/correct.png" alt="enable" onclick="enableDesable(<?php echo $row['car_id']; ?>, 'd')">
    </td>
<?php
} else {
?>
    <td>
        <img style="height: 25px; width: 25px;cursor: pointer;" src="./../assets/images/wrong.png" alt="disable" onclick="enableDesable(<?php echo $row['car_id']; ?>, 'e')">
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
  ?>
