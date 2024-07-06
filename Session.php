<?php
 session_start();

 $_SESSION['RK']="Hello Php";
 print_r($_SESSION);
//  echo "Session is:".$_SESSION['RK'];
unset($_SESSION['RK']);
session_destroy();
?>