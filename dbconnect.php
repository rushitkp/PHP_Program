<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="rk";
    $connect=mysqli_connect("localhost","root","","rk");
    
    if(!$connect)
    {
        die ("Datatbase Connection Error");
    }
    else 
    {
        echo "Database Connected Successfully";
        // echo "Database Name Is:".$dbname;
    }
    ?>