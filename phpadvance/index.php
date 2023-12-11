<!-- https://www.youtube.com/watch?v=2d6rzSI5Sko&list=LL&index=1&t=168s -->

<!-- <?php
require_once 'partials/connect.php';
$objj=new Database();
var_dump($objj);
?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- font awsome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
<h1 class="bg-dark text-center text-light p-2">PHP Advance CRUD</h1>
<div class="container">




<!-- form modal form.php -->
<?php 
include 'form.php';
?>
<?php
include 'profile.php';
?>
<!--fform modal end -->


<!-- input search and button section -->
<div class="row mb-3">
    <!--  -->
  <div class="col-10">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text bg-dark">
            <i class="fa-solid fa-magnifying-glass text-light"></i>
            </span>
        </div>
            <input type="text" class="form-control" placeholder="search">
        
    </div>
  </div>
  <!--button .and modal varti ahe  -->
  <div class="col-2">
    <button class="btn btn-dark" type="button"  data-bs-toggle="modal" data-bs-target="#usermodal">
     Add new user
    </button>
    
  </div>
</div>

<!-- tablee -->
<?php
include 'tables.php';
?>
    
<!-- table end -->
<!-- peganation start -->
<nav aria-label="Page navigation example" id="pegination">
  <ul class="pagination justify-content-center">
    <li class="page-item disable"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
<!-- pegination end -->
</div>

<!-- <i class="fa-solid fa-magnifying-glass"></i> -->


<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- bootstrap proper and js link -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>