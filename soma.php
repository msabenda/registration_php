<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOMA | Login</title>
  <link rel="stylesheet" href="soma.css">
  <link rel="shortcut icon" href="soma-icon.png" type="image/x-icon">
</head>
<body>
  <div class="container">
    <div class="main">
      <div class="header">
        <h3>DAR ES SALAAM INSTITUTE OF <br> TECHNOLOGY</h3>
        <img src="soma-icon.png" alt="soma logo">
        <h3>SOMA</h3>
      </div>
      <div class="form-content">
        <form action="soma.php" method="post">
          <div class="field">
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
          </div>
  
          <input type="submit" name="login" value="Login">

        </form>
      </div>
      <div class="extra">
        <span>Don't have an account?</span><br>
        <a href="#">
          <button>
            Register
          </button>
        </a>
      </div>
    </div>

    <div class="footer">
      <p>&copy;2024 SOMA</p>
    </div>
  </div>
</body>
</html>