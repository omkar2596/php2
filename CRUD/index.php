<?php include 'connect.php' ;
//sumbit button click kelavr inserted data
if(isset($_POST['submit'])){     //38  ....https://www.youtube.com/watch?v=JydKzPOni3k&list=LL&index=2&t=295s
    //  echo "succesful inserted data when use click on submit button";
    $userName = $_POST['userName'];
    //  echo $userName; //seperate user name print karaychey asel tr
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];

    //insert query
    $sql = "INSERT INTO `phpcrud` (userName,email,mobile,address) VALUES  
                                  ('$userName','$email','$mobile','$address') ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "data success";
        header('location:display.php');//data sumbit kelavr automati display.php la janar
    }else{
        echo die("data errror");
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP CRUD</h1>
    <a href="display.php" style="color:white;">VIEW DATA</a>
    <form action="" method="post" >
        <input type="text" placeholder="enter name" required autocomplete="off" name="userName">
        <input type="email" placeholder="enter email" required autocomplete="off" name="email">
        <input type="number" placeholder="enter mobile no" required autocomplete="off" name="mobile">
        <input type="text" placeholder="enter address" required autocomplete="off" name="address">
        <input type="submit" class="btn" name="submit">
        
    </form>
</body>
</html>