<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body >
    <h1 class="p-3">Signup</h1>
    <div class="container ">
        <form action="./action/register.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3 w-50 m-auto">
            <label class="font-weight-bold" for="fname">First name</label> 
          </div>
        <div class="mb-3">
         <input class="my-3 form-control w-50 m-auto" type="text" required="required" placeholder="enter first name" name="username">
        </div>

        <div class="mb-3 w-50 m-auto">
            <label class="font-weight-bold" for="photo">photo</label> 
          </div>
        <div class="mb-3">
         <input class="my-3 form-control w-50 m-auto" type="file"  name="photo">
        </div>

        <div class="mb-3 w-50 m-auto">
            <label class="font-weight-bold" for="email">Email address</label> 
          </div>
        <div class="mb-3">
         <input class="my-3 form-control w-50 m-auto" type="email" required="required" placeholder="enter first name" name="email">
        </div>

        <div class="mb-3 w-50 m-auto">
            <label class="font-weight-bold" for="passward">Passward</label> 
          </div>
        <div class="mb-3">
         <input class="my-3 form-control w-50 m-auto" type="text" required="required" placeholder="enter first name" name="passward">
        </div>

           <div class="mb-3 w-50 m-auto">
            <label class="font-weight-bold" for="Conformpassward">ConformPassward</label> 
          </div>
        <div class="mb-3">
         <input class="my-3 form-control w-50 m-auto" type="text" required="required" placeholder="enter first name" name="Conformpassward">
        </div>

<div class="text-center">
     <button class="btn btn-dark my-4" type="submit">Signup</button>
</div>
     <p class="font-weight-bold text-center">New around here? <a href="/my_blog/index.php">Login</a></p>
    </form>
</div>

</body>
</html>