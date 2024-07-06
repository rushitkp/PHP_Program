<?php 
session_start(); 
$_SESSION["user"] = "Rushit"; 
echo "User is: ".$_SESSION["user"]; //session print 
session_destroy(); //session Destroy
?> 
