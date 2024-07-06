<form action="" method="POST">
    No: <input type="No" id="No"><br><br>
    Name: <input type="Name" id="Name"><br><br>
    <input type="submit">
</form>
<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="rushit";
    $conn = mysqli_connect($servername,$username,$password,$database);

    $No=$_POST['No'];
    $Name=$_POST['Name'];
    
    $sql="INSERT INTO `rkp` (`No`, `Name`) VALUES ('6', 'r')";
    $result=mysqli_query($conn,$sql);
    $conn->close();
?>