
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
        <h2>Login</h2>
        <form action="./php_file/login.php" method="post" name='signin'>
          <input type="text" placeholder="Username" name="usrname">
          <input type="password" placeholder="Password" name="password">
          <button>Log in</button>
        </form>
        <p class="message">Not registered? <a href="./signup.php">Create an account</a></p>
        <p class="message">Forgot your password? <a href="./forgot_pass.php">Click here to reset it</a></p>
      </div>
    </div>
  </body>
</html>
