<?php
function checkNo($no)
{ 
if ($no < 0) 
 throw new Exception ("Value must be Positive");
 else
echo " <p> no = " . $no;
}
try
{ checkNo(55); checkNo(-111); }
catch(Exception $e)
{ echo ' <p> Message : ' . $e->getMessage(); }
?>
