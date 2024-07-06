<form action="" method="POST">
    No1: <input type="number" name="t1"><br><br>
    No2: <input type="number" name="t2"><br><br>
    <select name="t3">
        <option>Add</option>
        <option>Sub</option>
        <option>Mul</option>
        <option>Div</option>
        <option>All</option>
    </select><br><br>
    <input type="submit" value="Check" name="sub">
</form>

<?php
    $a1=$_POST["t1"];
    $a1=$_POST["t2"];
    $a1=$_POST["t3"];
?>