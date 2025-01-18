<?php
include 'database_connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];


    if(!isset($username) || !isset($password)){
        echo "Username and/or password are required.";
    }
    else{
        $stmt = $pdo->prepare("SELECT password FROM users WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $result = $stmt->fetchAll();   
        if (($stmt->rowCount() > 0) && (password_verify($password, $result[0]['password']))){
            
            $_SESSION['username'] = $username;
            if($username === 'admin'){
                header('Location: ./admin.php');
            } else{
            header('Location: ./Main_Page.php');
            }
           
        }
        else{
            echo "Username or password does not match";
         }
    }


}

    ?>