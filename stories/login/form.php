<?php
if(isset($_POST['email'])){
//localhost/travelWeb/travel1.php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("failed". mysqli_connect_error());
}
echo "connection succesfully done!";


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `login`.`form` ( `email`, `password`) VALUES('$email', '$password');";
echo $sql;

if($con->query($sql) == true){
    echo "succesfully inserted";
}
else{
    echo "error: $sql <br> $con->error";
}
$con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form.css">
  <title>Document</title>
</head>

<body>
<form action="form.php" method="post">
    <div class="imgcontainer">
      <h1>Welcome back!</h1>
    </div>

    <div class="container">
      <label for="username"><b>Email</b></label>
      <input type="email" placeholder="Enter your email" name="email">

      <label for="paasword"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password">

      <button ><a href="/stories/index.php">Login </a></button>

      

      <p class="center">or login With SSO</p>

    </div>
  
  </form>





  

</body>

</html>