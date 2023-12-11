<!-- <?php
  $con = new mysqli('localhost','root','','stories');
  if($con){
    echo "connectiom succesful";
  }
  else{
    die(mysqli_error($con));
  }
?> -->


<?php
  $con = new mysqli('localhost','root','','stories');
  if(!$con){
    die(mysqli_error($con));
  }

?>