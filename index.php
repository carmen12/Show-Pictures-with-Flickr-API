<?php
include('inc/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Save Your Favorite Flickr Photos</title>
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/main.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="js/flickr-search.js"></script>
  <link rel="shortcut icon" href="/flower.ico">
</head>
<body>
  <header>
    <nav>
    <ul>
      <?php
      if(isset($_SESSION['user'])){
        echo "<li>Hi, ". $_SESSION['user']."</li>";
        echo '<li><a href="signout.php">Sign Out</a></li>';
      }else{
        echo '<li><a href="register.php">Sign Up</a></li>';
        echo '<li><a href="signin.php">Sign In</a></li>';
      } ?>
      <li><a href="index.php" class="selected">Search</a></li>
      <li><a href="mypictures.php">My Pictures</a></li>
    </ul>
  </nav>
  </header>
  <div class="grid-container centered">
    <div class="grid-100">
      <div class="contained">
        <div class="grid-100">
          <div class="heading">
            <h1>Flickr Photo Search</h1>
            <form>
              <label for="search">Type a search term</label>
              <input type="search" name="search" id="search" required>
              <input type="submit" value="Search" id="submit">
            </form>
          </div>
          <p id="imgsaved"></p>
        </div>
        <div id="photos">

        </div>
      </div>
    </div>
  </div>
</body>
</html>