<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Redirect to login page if user is not logged in
    echo "<script> window.location = './index.php';</script>";
    exit;
}
$page = 'about';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/isckon.css">
    <script src = './js/script.js'></script>
    <script src="https://kit.fontawesome.com/9490fec376.js" crossorigin="anonymous"></script>
    <title>Hare Krishna movement</title>
    <link rel="icon" type="image/x-icon" href="./favicon/8.png">
</head>

<body>

    <!-- navbar -->
    <?php
    include './navbar/navbar.php'
    ?>
    <!-- main content -->
    <div class="d-flex justify-content-center">
        <h1>What is Isckon</h1>
    </div>
    <hr class="my-4 bg-light">

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p class="text">The International Society for Krishna Consciousness (ISKCON), otherwise
                    known as the Hare Krishna movement, includes five hundred major centers,
                    temples and rural communities, nearly one hundred affilated vegetarian restaurants,
                    thousands of namahattas or local meeting groups, a wide variety of community projects,
                    and millions of congregational members worldwide. Although less than fifty years on the global
                    stage,
                    ISKCON has expanded widely since its founding by His Divine Grace A. C. Bhaktivedanta Swami
                    Prabhupāda in New York City in 1966.
                </p>
                <div class="mx-auto">
                    <img src="./carousel/mayapur1.jpg" alt="Image description" width="500" height="300">
                </div>  
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p class="text">The International Society for Krishna Consciousness (ISKCON), otherwise
                    known as the Hare Krishna movement, includes five hundred major centers,
                    temples and rural communities, nearly one hundred affilated vegetarian restaurants,
                    thousands of namahattas or local meeting groups, a wide variety of community projects,
                    and millions of congregational members worldwide. Although less than fifty years on the global
                    stage,
                    ISKCON has expanded widely since its founding by His Divine Grace A. C. Bhaktivedanta Swami
                    Prabhupāda in New York City in 1966.
                </p>
                <div class="mx-auto">
                    <img src="./carousel/mayapur1.jpg" alt="Image description" width="500" height="300">
                </div>  
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-8 mx-auto text-center">
                <p class="text">The International Society for Krishna Consciousness (ISKCON), otherwise
                    known as the Hare Krishna movement, includes five hundred major centers,
                    temples and rural communities, nearly one hundred affilated vegetarian restaurants,
                    thousands of namahattas or local meeting groups, a wide variety of community projects,
                    and millions of congregational members worldwide. Although less than fifty years on the global
                    stage,
                    ISKCON has expanded widely since its founding by His Divine Grace A. C. Bhaktivedanta Swami
                    Prabhupāda in New York City in 1966.
                </p>
                <div class="mx-auto">
                    <img src="./carousel/mayapur1.jpg" alt="Image description" width="500" height="300">
                </div>  
            </div>
        </div>

    </div>

    <!-- footer part -->
    <footer class="bg-dark text-center text-white mt-5">
        <div class="container p-5 pb-0">
            <h4 class="text-white">Contact Us</h4>
            <section class="mb-4">
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fa-brands fa-facebook"></i></a>

                
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

            

               
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

               
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>

               
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>

            <section class="mb-4">
                <p class="text-white">NH60A Bankura. | India, West Bengal 722136 | Phone: +91-8318232814 | Email:
                    mandalsachin725@gmail.com</p>
            </section>

           
        </div>
     
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 All Rights Reserved
     
        </div>
        
    </footer>

    <!-- loader -->

    <div id="loader">
        <div class="spinner-grow" role="status">
            <span class="sr-only"></span>
        </div>
    </div>

    <!-- javascript file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>