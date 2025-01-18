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




    $stmt = $pdo->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    if ($stmt->rowCount() > 0){
        echo "Username is already taken";
    } 
    else{
        $hashedpass = password_hash($password, PASSWORD_BCRYPT);
        $sql = 'INSERT INTO users (username, password) VALUES (:username, :password)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $hashedpass);
        $stmt->execute();

        header('Refresh: .0000000001; URL=./admin.php?message=You have created a new user!'); //Message appears in URL
        exit();
    }
}
 ?>
    















    }









 }
 ?>