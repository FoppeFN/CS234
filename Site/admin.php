<?php
ob_start();
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
    <div class="w3-bar w3-flat-peter-river">
    <h1><b>Admin Page for STL Blues Hockey Analytics</b></h1>
    <a href="logout.php" class="w3-bar-item w3-flat-sun-flower">Logout</a>
    </div>
</head>
 

 <table class="w3-table">
<tr>
        <th>Username</th>
        <th>Password</th>
</tr>

<?php

$sql = "SELECT username, password FROM users";
$result = $pdo->query($sql);
if($result->rowCount() > 0){
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<tr>";
        echo "<td>" .($row["username"]). "</td>";
        echo "<td>" .($row["password"]). "</td>";
        echo "</tr>";

    }
} else{
    echo "0 results";
}
?>
</table>

<form action = "./delete.php" method = "POST">
 <input class="w3-input w3-border w3-light-grey" type="text" id="username" name="username" placeholder = "Enter your username" required/>
 <button type="submit" class = "w3-btn w3-flat-sun-flower">Delete</button>
</form>
 <br>
 <br>
 <br>
 <br>
 <form action = "./add.php" method ="POST">
 <input class="w3-input w3-border w3-light-grey" type="text" id="username" name="username" placeholder = "Enter your username" required/>
 <input class="w3-input w3-border w3-light-grey" type="text" id="password" name="password" placeholder = "Enter your password" required/>
 <button type="submit" class ="w3-btn w3-flat-sun-flower">Create New User</button>
</form>
<br>
<br>
<form action = "./modify.php" method="POST">
<input class = "w3-input w3-border w3-light-grey" type="text" id="oldusername" name ="oldusername" placeholder="enter username that you want to modify." required/>
<input class = "w3-input w3-border w3-light-grey" type="text" id="username" name ="username" placeholder="enter new username." />
<input class = "w3-input w3-border w3-light-grey" type="text" id="password" name ="password" placeholder="enter new password." />
<button type="submit" class ="w3-btn w3-flat-sun-flower">Modify existing user.</button>
</form>
