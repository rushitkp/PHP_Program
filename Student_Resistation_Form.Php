<form action="" method="post"> 
Full Name:
<input type="text" name="t1"></br> </br> 
Email:
<input type="email" name="t2"></br> </br> 
Mobile No:
<input type="number" name="t3"></br> </br> 
DOB:
<input type="date" name="t4"></br> </br> 
City:
<select name="t5"> 
 <option>AHM</option> 
 <option>GAN</option> 
 <option>RUPAL</option> 
</select> 
</br> </br> 
Address: 
<textarea name="t6"></textarea> 
</br> </br> 
Gender:
<input type="radio" name="t7" value="male">Male 
<input type="radio" name="t7" value="male">Female 
</br> </br> 
<input type="submit" value="CHECK" name="submit"> 
</form> 

<?php 
if(isset($_POST["submit"])) 
{ 
$a1=$_POST["t1"]; 
$a2=$_POST["t2"]; 
$a3=$_POST["t3"]; 
$a4=$_POST["t4"]; 
$a5=$_POST["t5"]; 
$a6=$_POST["t6"]; 
$a7=$_POST["t7"];
 
echo(" Name:".$a1."</br>"); 
echo(" Email:".$a2."</br>"); 
echo(" Mobile:".$a3."</br>"); 
echo(" DOB:".$a4."</br>"); 
echo(" CITY:".$a5."</br>"); 
echo(" ADDRESS:".$a6."</br>"); 
echo(" Gender:".$a7."</br>"); 
}
?>