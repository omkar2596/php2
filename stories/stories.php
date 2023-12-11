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
<?php include './partials/header.php';?>



<!-- jumbtron -->
<div class="container-fluid  mb-5">

<div class="jumbotron bg-warning rounded">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>    
      

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
               <img src="image/i3.jpg" class="d-block w-100" alt="no img">
             </div>
             <div class="carousel-item">
               <img src="image/samuel-girven-VJ2s0c20qCo-unsplash.jpg" class="d-block w-100" alt="no img">
             </div>
           </div>
          
         </div>
   </div>





<?php include './partials/footer.php';?>

</body>
</html>