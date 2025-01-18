<?php
include 'database_connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
<div class ="w3-container w3-flat-peter-river">  
<h1><b>Skater Stats (5v5 Situations)</h1></b>
</div>
</head>

<table class="w3-table w3-striped w3-bordered">
<tr class="w3-flat-peter-river">
    <th>Name</th>
    <th>Games Played</th>
    <th>xG</th>
    <th>Goals</th>
    <th>Points</th>
    <th>Assists</th>
    <th>Shooting %</th>
    <th>Corsi</th>
    <th>On Ice Goals %</th>
    <th>On Ice Goal Differential</th>
</tr>


<?php

 $sql = "SELECT * FROM skaterstats";
 $result = $pdo->query($sql);
 if($result->rowCount() > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>" .($row["name"]). "</td>";
            echo "<td>" .($row["gamesplayed"]). "</td>";
            echo "<td>" .($row["xG"]). "</td>";
            echo "<td>" .($row["goals"]). "</td>";
            echo "<td>" .($row["assists"]). "</td>";
            echo "<td>" .($row["points"]). "</td>";
            echo "<td>" .($row["shootingpct"]). "</td>";
            echo "<td>" .($row["corsi"]). "</td>";
            echo "<td>" .($row["onicegoalspct"]). "</td>";
            echo "<td>" .($row["onicegoaldiff"]). "</td>";
            echo "</tr>";

    }
 } else{
    echo "0 results";
 }
 ?>
 </table