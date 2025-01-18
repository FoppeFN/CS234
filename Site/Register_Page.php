<?php
ob_start();
include 'database_connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];



    if(!isset($username) || !isset($password)){
        echo "Username and/or password are required.";
    } 
    else {
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

            echo "You are registered!";
            header('Refresh: 3; URL=./Login_Page.html?message=You are registered!'); //Message appears in URL
            exit();
            
        }  
    }
}
ob_end_flush();

?>

