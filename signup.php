


<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="login-page">
      <div class="avatar">
        <img src="./logo/iskcon_logo.jpg" alt="Avatar">
      </div>
      <div class="form">
        <h2>Signup</h2>
        <form action="register.php" method="post">
          <input type="text" placeholder="Username" name="username" required>
          <input type="email" placeholder="Email" name="email" required>
          <input type="password" placeholder="Password" name="pass" required>
          <button>Sign up</button>
        </form>
        <p class="message">If you have already an account? <a href="index.php">Sign in</a></p>
        <!-- <p class="message">Forgot your password? <a href="#">Click here to reset it</a></p> -->
      </div>
    </div>

       <!-- loader -->

<div id="loader">
  <div class="spinner-grow" role="status">
    <span class="sr-only"></span>
  </div>
</div>

  </body>
</html>
