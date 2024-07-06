<style>
    *{
        background-color: pink;
    }
</style>

<h3>Form</h3>
<form action="" method="$_GET">
    Name:<input type="text" name="t1"><br><br>
    E-mail:<input type="email" name="t2"><br><br>
    Password:<input type="password" name="t3"><br><br>
    City:<select name="t4">
        <option>Select</option>
        <option>Visnagar</option>
        <option>Gandhinagar</option>
        <option>Ahmadavad</option>
        <option>Surat</option>
    </select><br><br>
    Mobile No:<input type="number" name="t5"><br><br>
    Date of birth:<input type="date" name="t6"><br><br>
    Address:<textarea name="t8"></textarea><br><br>
    Gender: 
    <input type="radio" name="t7">Male
    <input type="radio" name="t7">Female<br><br>
    <input type="submit" value="Submit"><br><br>
</form>

<?php
    $a1=$_GET['t1'];
    $a2=$_GET['t2'];
    $a3=$_GET['t3'];
    $a4=$_GET['t4'];
    $a5=$_GET['t5'];
    $a6=$_GET['t6'];
    $a7=$_GET['t7'];
    $a8=$_GET['t8'];
     
    echo "Name:".$a1;
    echo "<br>";
    echo "E-mail:".$a2;
    echo "<br>";
    echo "Password:".$a3;
    echo "<br>";
    echo "City:".$a4;
    echo "<br>";
    echo "Mobile Np:".$a5;
    echo "<br>";
    echo "Date Of Birth:".$a6;
    echo "<br>";
    echo "Address:".$a8;
    echo "<br>";
    echo "Gender:".$a7;
?>