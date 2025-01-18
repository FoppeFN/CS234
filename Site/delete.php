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
    
if($username != 'admin' ){
$sql = "DELETE FROM users WHERE username = :username";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(":username", $username);


if($stmt->execute()){
header('Refresh: .0000000001; URL=./admin.php?message=You have deleted a current user'); //Message appears in URL
exit();
}
else{
    echo "This user is not in the database.";
}
}

 }
  ob_end_flush();
  ?>