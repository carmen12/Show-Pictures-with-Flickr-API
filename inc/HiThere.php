<?php include('session.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Save Your Favorite Flickr Photos</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="/flower.ico">
</head>
<body>
<header>
    <nav>
        <ul>
            <?php
//            if(isset($_COOKIE['user']) ){
//                echo "<li>Hi, ". $_COOKIE['user']."</li>";
//                echo '<li><a href="../signout.php">Sign Out</a></li>';
//            } ?>
            <?php
            if(isset($_SESSION['user']) ){
                echo "<li>Hi, ". $_SESSION['user']."</li>";
                echo '<li><a href="../signout.php">Sign Out</a></li>';
            } ?>
            <li><a href="../index.php">Search</a></li>
            <li><a href="../mypictures.php">My Pictures</a></li>
        </ul>
    </nav>
</header>
<div class="grid-container centered">
    <div class="grid-100">
        <div class="contained">
            <div class="grid-100">
                <div class="heading">
                    <?php
                        if(isset($_SESSION['user']) ){
                            echo "<h1>Hi there, ". $_SESSION['user']." !</h1>";
                        }else{
                            echo "<h1>Hi there, welcome back !</h1>";
                        }
                    ?>
                    <h2>Check out our new pictures, <a href="../index.php">here</a>!</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>