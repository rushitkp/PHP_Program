<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="rk";
    
    $conn=mysqli_connect("localhost","root","","rk");
    
    if(!$conn)
    {
        die("Connection Failed".mysqli_connect_errno());
    }
    else
    {
        echo "Connection Successfully<br>"; 
    }

    $sql=mysqli_fetch_assoc($result);
    echo $num."Record Found In The Database";
    $no=1;
    // if($num>0)
    // {
    //     while($row=mysqli_)
    // }
?>