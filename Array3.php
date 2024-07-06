<?php
  echo "Assosiative Array <hr>";
  
  $color=array('rk'=>'red','km'=>'orange','ak'=>'Green');

//   echo $color['km']."<br>";
//   echo $color['rk']."<br>";
//   echo $color['ak']."<br>";

foreach($color as $r=>$v)
{
    echo "$r => $v <br>";
}

?>