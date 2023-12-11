<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>applacation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="">

    <form  class="container w-50 m-auto p-4 my-4 border border-dark text-center">
        <div>
            <label class="font-weight-bold" for="email">Email address</label> 
        </div>
        <input class="my-3" type="email" require="require" placeholder="email@example.com">

        <div>
            <label for="passward">Passward</label> 
        </div>
        <input class="my-3" type="passward" require="require" placeholder="passward">

        <div>
        <button class="btn btn-info my-2" type="submit">Login</button>
        </div>
<hr>
        <p class="font-weight-bold">New around here? <a href="partials/registration.php">Sign up</a></p>
</form>
</div>
</body>
</html>