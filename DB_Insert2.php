<form action="" method="POST">
    No:<input type="number"name="t1" id="t1"><br><br>
    Name:<input type="text" name="t2" id="t2"> <br><br>
    Email:<input type="email" name="t3" id="t3"><br><br>
    Subject:<input type="text" name="t4" id="t4"><br><br>
    <input type="submit" name="s1" value="Submit">
</form>    

<?php

    // $cn=mysqli_connect("localhost","root","","cjpbca");
    if(isset($_POST['s1']))
    {
    $conn=mysqli_connect("localhost","root","","form");
    $No=$_POST['t1'];
    $Name=$_POST['t2'];
    $Email=$_POST['t3'];
    $Subject=$_POST['t4'];
    mysqli_query($conn,"INSERT INTO `contact` (`Name`, `Email`, `Subject`) VALUES ('Akash','akp@gmail.com','C')"); 
    // $sql="INSERT INTO `contact` (`Name`, `Email`, `Subject`) VALUES ('$Name','$Email','$Subject')"; 
    // $sql="INSERT INTO `contact` (`Name`, `Email`, `Subject`) VALUES ('akash','akp@gmail.com','c')"; 
    }
// if(!$conn)
// {
//     die("Connection Failed".mysqli_connect_errno());
// }
// else
// {
//     echo "Connection Successfully<br>"; 
//     // $result=mysqli_query($conn,$sql);
// }
// if($result)
// {
//     echo "Data InsertSucceessfully";
// }
// else{
//     echo "Record Not Insert".mysqli_error($conn);
// }


?>