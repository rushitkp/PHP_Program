<form action="" method="POST">
    No: <input type="number" name="t1" required><br><br>
    Name: <input type="text" name="t2" required> <br><br>
    Email: <input type="email" name="t3" required><br><br>
    Subject: <input type="text" name="t4" required><br><br>
    <input type="submit" name="s1" value="Submit">
</form>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "form";

$conn = mysqli_connect("localhost", "root", "", "form");

// if (!$conn) {
//     die("Connection Failed" . mysqli_connect_errno());
// } else {
//     echo "Connection Successfully<br>";
// }




if (isset($_POST['s1'])) {
    // $cn=mysqli_connect("localhost","root","","form");

    $f1 = $_POST['t1'];
    $f2 = $_POST['t2'];
    $f3 = $_POST['t3'];
    $f4 = $_POST['t4'];
    // mysqli_query($conn,"insert into contact(No,Name,Email,Subject) VALUES (NULL, '$f2', '$f3', '$f4')");  //OR
    $sql = "INSERT INTO `contact` (`No`, `Name`, `Email`, `Subject`) VALUES (NULL, '$f2', '$f3', '$f4')";
    $result = mysqli_query($conn, $sql);
    echo "Insert Data Successfully";

    // if ($result) {
    //     echo "Record Insert Successfully";
    // } else {
    //     echo "Record Not Inserted" . mysqli_errno($conn);
    // }
}
?>