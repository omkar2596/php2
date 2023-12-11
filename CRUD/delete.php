<!-- //url data 'get methode'access kr sktey hey
//variable set methode asel url la ..trch get methode access krta yenar -->
<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    // echo $delete_id;

    $delete_data = mysqli_query($conn,"DELETE FROM `phpcrud` WHERE id=$delete_id") 
    or die("query field");

    if ($delete_data) {
        header('location:display.php');
    }else {
        header('location:display.php');
    }

}
?>