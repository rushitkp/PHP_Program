<form>
    <select name="t1">
        <option value="orange">Orange</option>
        <option value="green">Green</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
    </select><br><br>
    <input type="submit" value="check" name="s1">
</form>

<?php
    if(isset($_GET['s1'])){
        $a=$_GET['t1'];
        echo ("<body bgcolor=$a></body>");
    }
?>