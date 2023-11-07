<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Best Host</title>
    <style>
      .imag{
        width:500px;
        height:400px;
      }
    </style>
  </head>
  <body style="background-color:#cae9ff">
    <div class="container-xxl bg-white p-0 " >
      <nav class="nav d-flex flex-row justify-content-between text-light p-2" style="background-color:#1b4965">
      <div class="logo mx-3"><div class="h2 ">Best Host</div></div>
      <div class="nav-menu d-flex flex-row ">
      <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
      <a class="btn nav-link text-light" href="#about">About</a>
      <!-- <a class="btn nav-link text-light" href="login/register-worker.php">Worker</a> -->

      <div class="dropdown">
  <button class="btn nav-link text-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Workers
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="login/login-worker.php">Sign In </a></li>
    <li><a class="dropdown-item" href="login/register-worker.php">Signup </a></li>
  </ul>
</div>
      <a class="btn nav-link text-light" href="login/login.php">Log in</a>
      <a class="btn nav-link text-light" href="login/register-customer.php">Sign Up</a>
      </div>
      </nav>

      <div class="section mt-5" style="background-color:#62b6cb;">
        <div class="h1 p-5 text-center text-uppercase text-dark" style="color:#1b4965;">"Expertly Planned, Perfectly Executed"</div>
      </div>

      <!-- image slides -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./photos/img-1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./photos/img-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./photos/img-3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- about pages -->
<div class="container" id="about">
<div class="section mt-2">
    <div class="row d-flex ">
      <div class="col">
        <img src="./photos/achor.jpg" alt="imag-1" class="imag rounded mx-auto p-3 justify-content-center align-self-center">
      </div>
      <div class="col-7 d-flex flex-column justify-content-center align-self-center " style="background-color:#5fa8d3;">
      <h3 class="mx-auto mt-3 "style="color:#1b4965">Anchor</h3>
        <p class="pt-3 px-5 text-dark">An anmcee or an anchor is short form for Master
           of Cerimonies is a person responsible for ensuring people 
           have a experience at an event. Whether it's a sangeet, wedding,
            corporate event, or any other kind of gathering, they are the 
            ones who makes sure things flow smoothly and everyone has a great time. </p><br>
            <a href="./login/login.php" class="btn btn-info w-25 mx-auto mb-3 text-light " style="background-color:#1b4965">Click Me</a>
      </div>
    </div>
  </div>

  <div class="section mt-2">
    <div class="row d-flex flex-row-reverse">
      <div class="col">
        <img src="./photos/hostress.jpg" alt="imag-1" class="imag justify-content-center align-self-center rounded mx-auto p-3">
      </div>
      <div class="col-7 d-flex flex-column justify-content-center align-self-center " style="background-color:#5fa8d3;">
      <h3 class="mx-auto mt-3 "style="color:#1b4965">Hostress</h3>
        <p class="pt-3 px-5 text-dark">An anmcee or an anchor is short form for Master
           of Cerimonies is a person responsible for ensuring people 
           have a experience at an event. Whether it's a sangeet, wedding,
            corporate event, or any other kind of gathering, they are the 
            ones who makes sure things flow smoothly and everyone has a great time. </p><br>
            <a href="./login/login.php" class="btn btn-info w-25 mx-auto mb-3 text-light " style="background-color:#1b4965">Click Me</a>
      </div>
    </div>
  </div>

  <div class="section mt-2">
    <div class="row d-flex ">
      <div class="col">
        <img src="./photos/catering.jpg" alt="imag-1" class=" imag justify-content-center align-self-center rounded mx-auto p-3">
      </div>
      <div class="col-7 d-flex flex-column justify-content-center align-self-center " style="background-color:#5fa8d3;">
      <h3 class="mx-auto mt-3 "style="color:#1b4965">Role in Restaurant/Catering Area</h3>
        <p class="pt-3 px-5 text-dark">An anmcee or an anchor is short form for Master
           of Cerimonies is a person responsible for ensuring people 
           have a experience at an event. Whether it's a sangeet, wedding,
            corporate event, or any other kind of gathering, they are the 
            ones who makes sure things flow smoothly and everyone has a great time. </p><br>
            <a href="./login/login.php" class="btn btn-info w-25 mx-auto mb-3 text-light " style="background-color:#1b4965">Click Me</a>
      </div>
    </div>
  </div>

  <div class="section mt-2">
    <div class="row d-flex flex-row-reverse">
      <div class="col">
        <img src="./photos/event.jpg" alt="imag-1" class=" imag justify-content-center align-self-center rounded mx-auto p-3">
      </div>
      <div class="col-7 d-flex flex-column justify-content-center align-self-center " style="background-color:#5fa8d3;">
      <h3 class="mx-auto mt-3 "style="color:#1b4965">Crowd and Stage Management</h3>
        <p class="pt-3 px-5 text-dark">An anmcee or an anchor is short form for Master
           of Cerimonies is a person responsible for ensuring people 
           have a experience at an event. Whether it's a sangeet, wedding,
            corporate event, or any other kind of gathering, they are the 
            ones who makes sure things flow smoothly and everyone has a great time. </p><br>
            <a href="./login/login.php" class="btn btn-info w-25 mx-auto mb-3 text-light " style="background-color:#1b4965">Click Me</a>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer p-5 m-3 h3 text-center text-light" style="background-color:#1b4965">
  Best Host
</div>

    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>