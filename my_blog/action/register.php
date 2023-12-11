<?php 
$username=$_POST['fname'];

$email=$_POST['email'];
$passward=$_POST['passward'];
$Cpassward=$_POST['Conformpassward'];
$photo=$_FILES['photo']['name'];
$tempname=$_FILES['photo']['tempname'];
$vote=$_POST[''];

if($passward!=$Cpassward){
    echo '<script>
    alert("password do not match");
    window.location="my_blog\partials\registration.php";
    </script>';
}else{
    move_uploaded_file=($tempname,"../uploads/$image");
    $sql="insert into `userdata`(name,photo,email,passward) values('$username','$photo''$email','$passward')";

    $result=mysqli_query($con,$sql);

    if($result){
        echo '<script>
    alert("success");
    window.location="my_blog\partials\registration.php";
    </script>';
    }
}
?>