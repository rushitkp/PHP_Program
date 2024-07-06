<?php
    // $cn="RK";
    // $cv="rkp@gmail.com";
    setcookie("RK","RKP",time()+(86400*30),"/");
    if(!isset($_COOKIE['RK']))
    {
        echo "Cookie Not Set";
    }
    else
    {
        echo "Cookie Set:".$_COOKIE["RK"];
        echo "<br>";
    }
    //Destroy Cookie
    setcookie("RK","",time()-3600);
    echo "Coocie Destroy";
?>