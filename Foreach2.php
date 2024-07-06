<?php
    $colors =array("Rk"=>'red',"sk","Jk","Km");
    foreach ($colors as $key => $value) {
        echo "<br>Favorite color $key is $value<br>";
    }
    echo $colors["Rk"];
?>