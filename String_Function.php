<!-- demonstrate the use of string function.  -->
<?php 
//A string is a sequence of characters, like "Hello world!". 
$txt="My name is Rushit"; 
echo($txt); 
echo("</br></br>"); 

echo "My name is RK Prajapati"; 
echo("</br></br>"); 

echo "String Length</br>";
echo strlen($txt);//find string length 
echo("</br></br>"); 

echo "Count Words in a String<br>";
echo str_word_count($txt);//Count Words in a String
echo("</br></br>"); 

echo "Reverse a String<br>";
echo strrev($txt);//Reverse a String 
echo("</br></br>"); 

echo "Replace Text Within a String <br>";
echo str_replace("AR", "MR", "Hello Rushit"); // Replace Text Within a String 
echo("</br></br>"); 


echo "converts a string to Lower Case <br>";
echo strtolower($txt);//converts a string to Lower Case 
echo("</br></br>"); 

echo "Search For a Text Within a String<br>";
echo strpos("Hello RK", "RK");//Search For a Text Within a String 
echo("</br></br>");

echo "converts a string to Upper Case <br>";
echo strtoupper($txt);//converts a string to Upper Case 
echo("</br></br>"); 

echo "Convert the first character<br>";
echo lcfirst("Hello world!");//Convert the first character of "Hello" to lowercase: 
echo("</br></br>"); 

echo "Convert the first character<br>";
echo ucfirst("hello world!");//Convert the first character of "hello" to uppercase: 
echo("</br></br>"); 

echo "Convert the first character of <br>";
echo ucwords("my name is Rushit");//Convert the first character of 
// each word to uppercase: 
echo("</br></br>"); 

$a="php"; 
echo md5($a);