<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rk";

$conn = mysqli_connect("localhost", "root", "", "rk");

if (!$conn) {
    die("Connection Failed" . mysqli_connect_errno());
} else {
    echo "Connection Successfully<br>";
}
$sql = ("INSERT INTO `mytable` (`Name`, `Mobile NO`, `Subject`, `Massage`) VALUES ('RK', '910485', 'Java', 'Hello')");
echo "Insert Data Successfully";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Record Insert Successfully";
} else {
    echo "Record Not Inserted" . mysqli_errno($conn);
}
