<?php  
 setcookie("Rushit","User",time()+3600,"/"); 
// 86400 = 1 day 
 if(!isset($_COOKIE['Rushit'])) 
 { 
 echo "Cookie is not set"; 
 } 
 else 
 { 
 echo "Cookie is set<br>"; 
 } 
 //delete cookies 
 // set the expiration date to one hour ago 
 setcookie("User", "", time() - 3600); 
 echo "Cookie 'user' is deleted."; 
?>