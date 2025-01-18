<?php
include 'database_connection.php';
include 'admin.php';
session_start();
if(!isset($_SESSION['username'])){
    header('Location: ./Login_Page.html');
    exit();
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $oldusername = $_POST['oldusername'];

    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    if ($stmt->rowCount() > 0){
        die("Username is already taken");
    } 
    
  


    if($username != 'admin' ){
$hashedpass = password_hash($password, PASSWORD_BCRYPT);
$sql = "UPDATE users SET username = :username, password = :password WHERE username = :oldusername";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->bindParam(":password", $hashedpass);
$stmt->bindParam(":oldusername", $oldusername);
$stmt->execute();


header('Refresh: .00001 URL=./admin.php?message=You have modified a current user!');
exit();
    }
 }
 ?>

