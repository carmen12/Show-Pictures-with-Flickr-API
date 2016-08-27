<?php
include('inc/database.php');
//include('inc/cookie.php');
include('inc/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Save Your Favorite Flickr Photos</title>
  <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/mypic.css">
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="/js/flickr-search.js"></script>
  <link rel="shortcut icon" href="/flower.ico">
</head>
<body>
  <header>
    <nav>
    <ul>
      <?php
//      if(isset($_COOKIE['user'])){
//        echo "<li>Hi, ". $_COOKIE['user']."</li>";
//        echo '<li><a href="signout.php">Sign Out</a></li>';
//      }else{
//        echo '<li><a href="register.php">Sign Up</a></li>';
//        echo '<li><a href="signin.php">Sign In</a></li>';
//      }
      if(isset($_SESSION['user'])){
        echo "<li>Hi, ". $_SESSION['user']."</li>";
        echo '<li><a href="signout.php">Sign Out</a></li>';
      }else{
        echo '<li><a href="register.php">Sign Up</a></li>';
        echo '<li><a href="signin.php">Sign In</a></li>';
      } ?>
      <li><a href="index.php">Search</a></li>
      <li><a href="mypictures.php" class="selected">My Pictures</a></li>
    </ul>
  </nav>
  </header>
  <div class="grid-container centered">
    <div class="grid-100">
      <div class="contained">
        <div class="grid-100">
          <div class="heading">
            <?php
//            if(isset($_COOKIE['user'])) {
//              echo "<h1>Hi " . $_COOKIE['user'] . ", here are your photos:</h1>"; }
            if(isset($_SESSION['user'])) {
              echo "<h1>Hi " . $_SESSION['user'] . ", here are your photos:</h1>";
            } ?>
        </div>
        </div>
        <div id="photos">
            <ul>
          <?php

//          var_dump($_SESSION['user']);die;
//          if(isset($_COOKIE['user'])) {
          if(isset($_SESSION['user'])) {
            $stmt = $dbc->prepare("SELECT * FROM pictures WHERE user_name= :user;");
            $stmt->bindParam('user', $_SESSION['user']);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);

            while ($data = $stmt->fetch()) {
              ?>

                <li class="grid-25 tablet-grid-50" style="float: left">
                  <div class="image">
                    <img src="<?php echo $data['img_src']; ?>">
                    <div class="buttons">
<!--                      <button id="delete" class="text" onclick="$(this).closest('li').remove()">Delete</button>-->
                      <button id="delete" class="text" onclick="deleteImg(<?php echo "'".$data['img_src']."'"; ?>);">Delete</button>
                      <button id="flickr" class="text" onclick="window.open('<?php echo $data["img_link"]; ?>')">Go To Flickr</button>
                    </div>
                  </div>
                </li>

            <?php }
          }else{
            echo "<h1>Sign Up to create your own Picture Gallery.</h1>";
          }
          ?>
            </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<!--a href="--><?php //echo $data['img_link']; ?><!--" target="_blank"

$(this).closest('div').remove();

-->