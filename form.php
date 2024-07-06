<form action="form.php" method="post">
First Name:<input type="text" name="FirstName" id="FirstName"><br><br>
Last Name:<input type="text" name="LastName" id="LastName"><br><br>
<input type="submit">
</form>

<?php
    $servername="localhost";
    $username= "root";
    $password="";
    $dbname="rushit";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed");
    
     }
      $FirstName=$_POST['FirstName'];
      $LastName=$_POST['LastName'];
        
      $sql="INSERT INTO `rkpphp` (`no`, `name`, `rollno`, `Date`) VALUES ('1', 'rushit prajapti', '65', '2012-09-11')";
        
        $conn->close();
?>