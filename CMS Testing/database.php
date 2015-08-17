<?php
$server = "localhost";
$u_name = "root";
$p_word = "password";

//Connect to DB
try{
    $db = new PDO("mysql:host=$server;dbname=tattoos_by_amanda", $u_name, $p_word);
}catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}