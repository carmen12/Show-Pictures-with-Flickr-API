<?php
include('database.php');
if(isset($_SESSION['user'])){
    $stmt = $dbc->prepare("DELETE FROM pictures WHERE img_src= :src AND user_name= :name");
    $stmt->bindParam(':name',$_SESSION['user']);
    $stmt->bindParam(':src',$_POST['src']);
    $stmt->execute();
}


