<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    

    <title>About Us</title>
    <style>
        body{

            background: url("./img/about.png");
        }
        .rounded-circle{

            width:200px;
            height:200px;
        }
        
        #text{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 16px;
            font-weight: bold;
        }
        </style>

  </head>

  <body>

  <br><br>
<!-- Page Content -->
 <div class="container">

<!-- Introduction Row -->
<h1 class="my-4" >About Us<br>
  <small>It's Nice to Meet You!</small>
</h1>
<p id="text">Welcome to <b>FuitPOA</b>, your number one source for all Fruits. We're dedicated to giving you the very best and fresh Fruits, with a focus on <b>Quality and Good Service</b>. Founded in 2020 by <b>Abas</b>.<br>

We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
<br>
<br>
Sincerely,<br>
Abas

</p>
<!-- Team Members Row -->
<div class="row mx-auto">
  <div class="col-lg-12">
    <h2 class="my-4"><center>Our Team<center></h2>
  </div>
  <div class="col-lg-6 col-sm-6 text-center mb-4 ">
    <img class="rounded-circle img-fluid d-block mx-auto" src="./img/Nasra.jpg" alt="">
    <h3>Nasra<br>
      <small>Businesswoman</small>
    
    </h3>
    <h6>Partnership with FruitPoa</h6>
    </div>
    <div class="col-lg-6 col-sm-6 text-center mb-4 ">
    <img class="rounded-circle img-fluid d-block mx-auto" src="./img/abas.jpeg" alt="">
    <h3>Abas<br>
      <small>Businessman and owner of FruitPoa Company</small>
    
    </h3>
    <h6>Most Successful Businessman In Town</h6>
    </div>
</div>

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-1 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; Your FruitPoa.com 2020</p>
</div>
<!-- /.container -->
</footer>



</body>

</html>