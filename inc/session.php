<?php
include('database.php');

if (isset($_POST['name']) && isset($_POST['pass'])) {
    $submitted_name = $_POST['name'];
    $submitted_password = $_POST['pass'];

    $stmt = $dbc->query("SELECT pass, name FROM users WHERE name='$submitted_name'");
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if(base64_decode($data['pass']) != $submitted_password) {
        $err = "<h1><img src='img/warning2.png'>Make sure your password or username is correct.</h1>";
    } else {
        $_SESSION['user'] = $data['name'];
        header('Location: inc/HiThere.php');
    }
}
