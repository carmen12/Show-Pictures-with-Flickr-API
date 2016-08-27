<?php
//include('inc/cookie.php');
include('inc/session.php');

//if(isset($_COOKIE['user'])){
//    setcookie('user', "", time() - 3600);
//    header('Location: index.php');
//}

if(isset($_SESSION['user'])){

    session_unset();
}

header('Location: signin.php');