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
 <link rel="stylesheet" href="JerseyHistory.css"/>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">   
</head>

<body>
<div class="w3-container w3-flat-peter-river">
<h1><b>Best Blues Jersey's In Recent Memory</b></h1>
</div>


<div class="cards">
 <div class="w3-card" style="width:50%">
    <img src="BluesReverseRetro22-23.jpg" alt="Jordan Binnington RR Action Shot" style="width:100%">
    <div class="w3-container w3-flat-sun-flower" >
    <h4><b>22-23 Reverse Retro </b></h4>
</div>
</div>



 <div class="w3-card" style="width:42%">
    <img src="reverseretro.jpg" alt="Reebok Retro" style="width:100%">
    <div class="w3-container w3-sand" >
    <h4><b>2008-2014 Reebok Retro </b></h4>
</div>
</div>




 <div class="w3-card" style="width:50%">
    <img src="2017winterclassic.jpg" alt="Vladimir Tarasenko 2017 WC" style="width:100%">
    <div class="w3-container w3-flat-peter-river" >
    <h4><b>2017 Winter Classic</b></h4>
</div>
</div>


 <div class="w3-card" style="width:50%">
    <img src="2025winterclassic.jpg" alt="2025 WC" style="width:100%">
    <div class="w3-container w3-pale-yellow" >
    <h4><b>2025 Winter Classic</b></h4>
</div>
</div>


 <div class="w3-card" style="width:49%">
    <img src="2021winterclassic.jpg" alt="2021 WC" style="width:100%">
    <div class="w3-container w3-pale-Yellow" >
    <h4><b>2021 Winter Classic</b></h4>
</div>
</div>

</div>

</body>

