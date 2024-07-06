<style>
    form{
        text-align: center;
        border: 4px solid black;
        margin: 300px;
        padding: 100px;
        height: 350px;
        width: 450px;
        padding-top: 50px;
        margin-top: 40px;
        background-color: pink;
    }
    h1{
        border: 3px solid black;
        margin: 60px;
    }
</style>
<form action="" method="POST">
    <h1>Resistation Form</h1>
    <!-- <b>Id:<input type="number" name="t"></b><br><br> -->
    <b>Name:<input type="text" name="t1"><br><br>
    <b>Mobile No:<input type="number" name="t2"><br><br>
    <b>Subject:<input type="text" name="t3"><br><br>
    <b>Massage:<textarea name="t4"></textarea><br><br>
    <b><input type="submit" value="Insert Data" name="s1"><br><br>
</form>
<a href="view.php">View Data</a>

<?php
    if(isset($_POST['s1']))
    {
        $connect=mysqli_connect("localhost","root","","cjpbca");
        // $t1=$_POST['t1'];
        $t1=$_POST['t1'];
        $t2=$_POST['t2'];
        $t3=$_POST['t3'];
        $t4=$_POST['t4'];
        $sql="CREATE DATABASE cjpbca";
        mysqli_query($connect,"insert into feedback(fname,fmo,fsub,fmsg)values('$f1','$f2','$f3','$f4')");
        echo "Insert Data Successfully"; 
    }
?>