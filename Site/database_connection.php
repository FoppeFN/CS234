<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = "mysql:host=localhost:8889;dbname=project";
$username = 'root';
$password = 'root';

try{
    $pdo = new PDO($dsn, $username, $password);
}catch(PDOException $e){
    die("Datbase connection error: " .$e->getMessage());
}

?>