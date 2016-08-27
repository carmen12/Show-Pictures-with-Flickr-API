<?php
session_start();
try{
    $host = 'localhost';
    $name = 'flickr';
    $user = 'root';
    $pass = '1234';

    $dbc = new PDO("mysql:host=$host;dbname=$name",$user,$pass); //Create a PDO obj
}catch(PDOException $e){
    echo $e->getMessage();
    exit;
}
