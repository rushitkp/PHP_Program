<form action="" method="GET">
    <select name="t1">
        <option value="textbox">Textbox</option>
        <option value="date">Date</option>
        <option value="color">Color</option>
    </select><br><br>
    <input type="button" name="s1" value="Check">
</form>
                                               
<?php
    if(isset($_GET['s1']))
    {
        $a=$_GET['t1'];
        if($a==1)
        {
            echo ("<input type='text'>");
        }
        else if($a==2)
        {
            echo ("<input type=''date>");
        }
        else if($a==3)
        {
            echo ("<input type=''color>");
        }
    }

?>

  