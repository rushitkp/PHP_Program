<?php
    $servername="localhost";
    $username="root";
    $password="";
    $conn = mysqli_connect($servername,$username,$password);

    $sql="CREATE DATABASE rk";
    $result = mysqli_query($conn,$sql);
    echo var_dump($result);
    echo "<br>";

if($result){
    echo "The db was created succesfully";
}
else{
    echo "The db was not succesfully";
}

echo "<br>";

    if(!$conn){
        die("Connection failed:".mysqli_connect_error());
    }
    else{
        echo "connection was succesful";
    }
?>
