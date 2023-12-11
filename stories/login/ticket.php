

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="form1.css">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 


</head>

<body>
<main>
      <nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">HelpDesk System  </a>
          
            <a class="navbar-brand" href="\stories\login\form.php">Log Out </a>
      </nav>
      </main>
    



<!-- <form action="form1.php" method="post">
    <div class="imgcontainer">
      <h1>Conform Ticket Arise</h1>
    </div>

    <div class="container">
      <label for="username"><b>Email</b></label>
      <input type="email" placeholder="Enter your email" name="email">
      <button ><a href="form2.php">Send</a></button>-
    </div>
  
</form> -->
<div class="container border mt-3 bg-light">
    <div class="row">

<div class="form-group">
<h5 for="name">name</h5>
<input
type="text"
class="form-control"
id="name"
placeholder="enter your name"
/>
</div>

<div class="form-group">
<h5 for="message">email</h5>
<input
type="email"
class="form-control"
id="email"
placeholder="enter your mail"
/>
</div>

<div class="form-group">
    <h5 for="message">message</h5>
    <textarea id="message" rows="3" class="form-control"> </textarea>
</div>

<button class="btn btn-primary" onclick="sendMail()">sumbit</button>

</div>
</div>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("SR9SzCYntx84RsLx6");
   })();
</script>

<script src="index.js"></script>
</body>
</html>