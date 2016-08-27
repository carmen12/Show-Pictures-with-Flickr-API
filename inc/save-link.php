<?php
include('database.php');
if (isset($_POST['link']) && isset($_SESSION['user'])){
    $stmt = $dbc->prepare("INSERT INTO pictures (user_name, img_link, img_src) VALUES (:name,:link, :src)");
    $stmt->bindParam(':name',$_SESSION['user']);
    $stmt->bindParam(':link',$_POST['link']);
    $stmt->bindParam(':src',$_POST['src']);
    $stmt->execute();
}

