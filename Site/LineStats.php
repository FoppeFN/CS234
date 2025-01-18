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
<h1><b>Line Stats (5v5 Situations)</h1></b>
</div> 
</head>

<table class="w3-table w3-striped w3-bordered">
<tr class ="w3-flat-peter-river">
    <th>Line Pair</th>
    <th>Minutes</th>
    <th>Expected Goals %</th>
    <th>Expected Goals For</th>
    <th>Expected Goals Against</th>
</tr>


<?php

 $sql = "SELECT * FROM linestats";
 $result = $pdo->query($sql);
 if($result->rowCount() > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>" .($row["linepair"]). "</td>";
            echo "<td>" .($row["minutes"]). "</td>";
            echo "<td>" .($row["xgoalspct"]). "</td>";
            echo "<td>" .($row["xgoalsfor"]). "</td>";
            echo "<td>" .($row["xgoalsagainst"]). "</td>";
            echo "</tr>";

    }
 } else{
    echo "0 results";
 }
 ?>
 </table