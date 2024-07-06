<form>
    E-mail:<input type="email"><br><br>
    password:<input type="password"><br><br>
    <input type="Submit" id="Submit">
</form>
<?php
$servername="localhost";
$username= "root";
$password="";
$dbname="contact";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed".mysqli_connect_error());
 }else{
    echo "Connection was succesfully";
}
$sql= "INSERT INTO `rk` (`E-mail`, `Password`) VALUES ('jkpkk@gmail.com', '1212121')";
$result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
// $count=mysqli_num_rows($result);
?>
