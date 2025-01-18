<?php
#test comment

session_start();
session_destroy();
header('Location: ./Login_Page.html');
exit();
?>