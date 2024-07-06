<?php 
// $to_email = "rushitkp145@gmail.com"; 
// $subject = "Test email to send from XAMPP"; 
// $body = "Hi, This is test mail to check how to send mail from Localhost Using 
// Gmail "; 
// $headers = "From: sender email"; 
// if (mail($to_email, $subject, $body, $headers)) 
// { 
//  echo "Email successfully sent to $to_email...";
// } 
// else 
// { 
//  echo "Email sending failed!"; 
// } 
?>

<?php
    $to="rushitkp145@gmail.com";
    $subject="Test Mail";
    $message="Hello,This is a simple email message";
    $from="sender mail";
    $headers="From:$from";
    if(mail($to,$subject,$message,$headers))
    {
    echo "Mail Sent Successfully";
    }
    else
    {
        echo "Mail Send Error";
    }
?>