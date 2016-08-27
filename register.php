<?php include('inc/submit.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Save Your Favorite Flickr Photos</title>
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
  <link rel="shortcut icon" href="/flower.ico">
</head>
<body>
  <header>
    <nav>
    <ul>
      <li><a href="register.php" class="selected">Sign Up</a></li>
<!--      <li><a href="signin.php">Sign In</a></li>-->
      <li><a href="index.php">Search</a></li>
      <li><a href="mypictures.php">My Pictures</a></li>
    </ul>
  </nav>
  </header>
  <div class="grid-container centered">
    <div class="grid-100">
      <div class="contained">
        <div class="grid-100">
          <div class="heading">
            <!-- <h1>Flickr Photo Search</h1> -->
              <form method="post">
                <p>
                  <label for="username">Username</label><br>
                  <input id="username" name="name" type="text">
                </p>
                <p>
                  <label for="password">Password</label><br>
                  <input id="password" name="pass" type="password">
                   <span>Enter a password longer than 8 characters</span>
                </p>
                <p>
                  <label for="confirm_password">Confirm Password</label><br>
                  <input id="confirm_password" name="confirm_pass" type="password">
                   <span>Please confirm your password</span>
                </p>
                <p>
                  <input type="submit" name="register" value="REGISTER" id="submit">
                </p>
              </form>
            <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
            <script src="js/verify.js" type="text/javascript" charset="utf-8"></script>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>