<?php
include('database.php');

if (isset($_POST['name']) && isset($_POST['pass'])) {

    $submitted_name = $_POST['name'];
    $submitted_password = $_POST['pass'];

//    echo $submitted_password;

    $stmt = $dbc->query("SELECT pass FROM users WHERE name='$submitted_name'");

    $data = $stmt->fetch(PDO::FETCH_ASSOC);
//    var_dump($data);
    if($data['pass'] != $submitted_password) {
        $err = "<h1><img src='img/warning2.png'>Make sure your password or username is correct.</h1>";
    } else {
        setcookie('user', $submitted_name);
        setcookie('password', $submitted_password);
        header('Location: inc/HiThere.php');
    }
}
