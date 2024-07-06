<?php
   function divide($dividend,$divisor)
   {
    if($divisor==0)
    {
        throw new Exception("Devision By Zero");
    }
    return $dividend/$divisor;
    try
    {
        echo divide(10,0);
    }
    catch(Exception $e)
    {
        echo "Unable To Divide";
    }
    finally
    {
        echo "Process Complate";
    }
   }
?>