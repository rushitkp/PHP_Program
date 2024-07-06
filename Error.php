<?php
    if(!file_exists("for.php"))
    {
        die("File Not Found");
    }
    else
    {
        echo $file=fopen("for.php","r");
    }
?>