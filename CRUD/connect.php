<!-- <?php

$conn = mysqli_connect('localhost','root','','CRUD');
if($conn){
    echo "data successfully";
}
?> -->

<?php

$conn = mysqli_connect('localhost','root','','CRUD');
if(!$conn){
    echo "data connection problem";
}
?>