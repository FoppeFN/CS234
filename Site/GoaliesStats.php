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
<div class = "w3-container w3-flat-peter-river">
<h1><b>Goalie Stats (All Situations)</h1><b>
</div>
</head>

<table class="w3-table w3-striped w3-bordered">
<tr class="w3-flat-peter-river">
    <th>Name</th>
    <th>Games Played</th>
    <th>Goals Saved Above Expected</th>
    <th>GAA</th>
    <th>Save %</th>
</tr>


<?php

 $sql = "SELECT * FROM goaliestats";
 $result = $pdo->query($sql);
 if($result->rowCount() > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>" .($row["name"]). "</td>";
            echo "<td>" .($row["gamesplayed"]). "</td>";
            echo "<td>" .($row["goalssavedaboveexpected"]). "</td>";
            echo "<td>" .($row["GAA"]). "</td>";
            echo "<td>" .($row["savepercentage"]). "</td>";
            echo "</tr>";

    }
 } else{
    echo "0 results";
 }
 ?>
 </table>