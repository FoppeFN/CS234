<!DOCTYPE html>
<html lang="en">

<?php 
include 'database_connection.php';
session_start();

if(!isset($_SESSION['username'])){
   header('Location: ./Login_Page.html');
   exit();
}
?>

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">   
    <title><b>Home of STL Blues Hockey Analytics<b></title>
</head>

    <body>
    <div class ="w3-container w3-flat-peter-river">
    <h1><b>Home of STL Blues Hockey Analytics<b></h1>
</div>
    <div class="w3-bar w3-flat-peter-river">
        <a href="JerseyHistory.php" class="w3-bar-item w3-flat-sun-flower"> Best Blues Jerseys </a>
        <a href="GoaliesStats.php" class="w3-bar-item w3-flat-sun-flower"> Goalie Stats </a>
        <a href="LineStats.php" class="w3-bar-item w3-flat-sun-flower"> Line Stats </a>
        <a href="SkatersStats.php" class="w3-bar-item w3-flat-sun-flower"> Skater Stats</a>
        <a href="logout.php" class="w3-bar-item w3-flat-sun-flower">Logout</a>
</div>
    </body>
</html>