<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if user is not logged in
    echo "<script> window.location = './index.php';</script>";
    exit;
}
$page = 'dashboard';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/9490fec376.js" crossorigin="anonymous"></script>
    <script src = './js/script.js'></script>
    <title>Hare Krishna movement</title>
    <link rel="icon" type="image/x-icon" href="./favicon/8.png">
  </head>
  <body>

  


    <!-- navbar -->
    <?php
    include './navbar/navbar.php'
    ?>

<!-- carousel effect -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./carousel/5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./carousel/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./carousel/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<!-- content -->
<h1>We are Isckon</h1>
<div class="card-group mb-5">
  <div class="card">
    <img src="./carousel/mayapur1.jpg" class="card-img-top" alt="bhaktiyoga">
    <div class="card-body">
      <h5 class="card-title">Bhaktiyoga</h5>
      <p class="card-text">The path of bhakti-yoga is developed through a variety of activities</p>
    </div>
  </div>
  <div class="card">
    <img src="./carousel/mayapur1.jpg" class="card-img-top" alt="chanting">
    <div class="card-body">
      <h5 class="card-title">Chanting</h5>
      <p class="card-text">The Hare Krishna mantra is a chant meant for enhancing consciousness to the greatest possible degree.
      </p>
    </div>
  </div>
  <div class="card">
    <img src="./carousel/mayapur1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mayapur</h5>
      <p class="card-text">Mayapur is one of the nine dhams of the holy islands, which look like petals of a lotus flowe</p>
    </div>
  </div>
</div>
<!-- footer part -->

<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <h4 class="text-white">Contact Us</h4>
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa-brands fa-facebook"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a> -->

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>

    <section class="mb-4">
      <p class="text-white">NH60A Bankura. | India, West Bengal 722136 | Phone: +91-8318232814 | Email: mandalsachin725@gmail.com</p>
    </section>

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 All Rights Reserved
    <!-- <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a> -->
  </div>
  <!-- Copyright -->
</footer>

<!-- loader -->
<div id="loader">
<div class="spinner-grow" role="status">
  <span class="sr-only"></span>
</div>
</div>



<!-- javascript file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>

</html>