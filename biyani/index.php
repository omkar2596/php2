<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index stories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php include './partials/connect.php';?>    
<?php include './partials/header0.php';?>   
    <div class=" slider">
       
        <?php include './partials/header.php';?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"                                    aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"                                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img src="image/i.jpg" class="d-block w-100" alt="no img">
              </div>
              <div class="carousel-item">
                <img src="image/i.jpg" class="d-block w-100" alt="no img">
              </div>
              <div class="carousel-item">
                <img src="image/samuel-girven-VJ2s0c20qCo-unsplash.jpg" class="d-block w-100" alt="no img">
              </div>
            </div>
           
          </div>
    </div>

    <?php include './partials/aboutus.php';?>


<!-- card -->
    <div class="container">
      <h1 class="text-center mb-5 featureTitle">EVENTS</h1>
0
      <div class="row">

         <!--database -->
    <?php
    $sql="select * from `biyani`";
    $result = mysqli_query($con,$sql);
    if($result){
      while ($row=mysqli_fetch_assoc($result)) {
       
        $id=$row['topic_id'];
        $topic_image=$row['topic_image'];
        $topic_name=$row['topic_name'];
        $topic_desc=$row['topic_desc'];
       
        echo ' <div class="col-sm-6 col-md-4 mb-5"> 
        <div class="card" style="width: 18rem;">
    <img src='. $topic_image.' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">'.$topic_name.'</h5>
      <p class="card-text">'.$topic_desc.'</p>
      <a href="stories.php" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>';
      }
    }
    ?>

        <div class="col-sm-6 col-md-4 mb-5"> 
      <div class="card" style="width: 18rem;">
  <img src="image/i.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>


</div>
</div>



    
    <?php include './partials/footer.php';?>
</body>
</html>