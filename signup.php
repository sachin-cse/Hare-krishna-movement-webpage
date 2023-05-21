


<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
  </head>
  <body>
    <div class="login-page">
      <div class="avatar">
        <img src="./logo/iskcon_logo.jpg" alt="Avatar">
      </div>
      <div class="form">
        <h2>Signup</h2>
        <form action="./php_file/register.php" method="post">
          <input type="text" placeholder="Username" name="username" required>
          <input type="email" placeholder="Email" name="email" required>
          <input type="password" placeholder="Password" name="pass" required>
          <button>Sign up</button>
        </form>
        <p class="message">If you have already an account? <a href="./index.php">Sign in</a></p>
        <!-- <p class="message">Forgot your password? <a href="#">Click here to reset it</a></p> -->
      </div>
    </div>
  </body>
</html>
