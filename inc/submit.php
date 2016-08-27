<?php
include('database.php');

if (isset($_POST['register'])){
    $pass = base64_encode($_POST['pass']);

    $stmt = $dbc->prepare("INSERT INTO users (name, pass) VALUES (:name,:pass)");
    $stmt->bindParam(':name',$_POST['name']);
    $stmt->bindParam(':pass',$pass);

    $stmt->execute();
    header('Location: inc/thanks.php');
}
