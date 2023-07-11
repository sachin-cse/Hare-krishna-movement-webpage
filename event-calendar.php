<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $userId = $_SESSION['id'];
} else {
    // Redirect to login page if user is not logged in
    echo "<script> window.location = 'index.php';</script>";
    exit;
}
$page = 'links';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/event.css">
    <script src="https://kit.fontawesome.com/9490fec376.js" crossorigin="anonymous"></script>
    <script src = './js/script.js'></script>
    <title>Hare Krishna movement</title>
    <link rel="icon" type="image/x-icon" href="./favicon/8.png">
  </head>
  <body>

  


    <!-- navbar -->
    <?php
    include 'navbar.php';
    ?>

<!-- image center -->
<section class="text-center my-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Isckon Events</h2>
        <div class="image-container">
        <img src="./carousel/isckon_festival.jpg" alt="Image" class="img-fluid" style="width:1000px;">
        <div class="image-text">Festival of India @ISCKON JAGANNATH RATH YATRA JUNE 20.</div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- image section end -->


<!-- model -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Profile Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Profile details form code here -->

        <div class="form-group">
          <label for="username">ID:</label>
          <input type="text" class="form-control" id="username" value="<?php echo $userId; ?>" readonly>
        </div>

        <br>

        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" value="<?php echo $username; ?>" readonly>
        </div>

      <br>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
        </div>
        <!-- Add more profile fields as needed -->
      </div>
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
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa-brands fa-facebook"></i></a> -->

      <!-- Twitter -->
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a> -->

      <!-- Google -->
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a> -->

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://instagram.com/mandal_sachin12?igshid=MzNlNGNkZWQ4Mg==" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- portfolio icon -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://sachin-cse.github.io/MyPortfolio/" role="button">
        <i class="fas fa-user"></i>
      </a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/sachin-mandal-2a894820a/" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/sachin-cse" role="button"
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->

  </body>

</html>