<?php include('inc/session.php');

?>
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
            <li><a href="index.php">Search</a></li>
            <li><a href="register.php">Sign Up</a></li>
            <li><a href="signin.php" class="selected">Sign In</a></li>
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
                    <?php
                    if(!empty($err)) {
                        echo $err;
                    } ?>
                    <form method="post">
                        <p>
                            <label for="username">Username</label><br>
                            <input id="username" name="name" type="text" required>
                        </p>
                        <p>
                            <label for="password">Password</label><br>
                            <input id="password" name="pass" type="password" required>
                            <!-- <span>Enter a password longer than 8 characters</span> -->
                        </p>
                        <p>
                            <input type="submit" name="signin" value="SUBMIT">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>