<!-- <?php
  $con = new mysqli('localhost','root','','biyani');
  if($con){
    echo "connectiom succesful";
  }
  else{
    die(mysqli_error($con));
  }
?> -->


<?php
  $con = new mysqli('localhost','root','','biyani');
  if(!$con){
    die(mysqli_error($con));
  }

?>