
<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/loader.css">
    
  </head>
  <body>
    <div class="login-page">
      <div class="avatar">
        <img src="./logo/iskcon_logo.jpg" alt="Avatar">
      </div>
      <div class="form">
        <h2>Login</h2>
        <form action="login.php" method="post" name='signin'>
          <input type="text" placeholder="Username" name="usrname">
          <input type="password" placeholder="Password" name="password">
          <button>Log in</button>
        </form>
        <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        <p class="message">Forgot your password? <a href="forgot_pass.php">Click here to reset it</a></p>
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
