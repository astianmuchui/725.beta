<?php
     $name = " ";
     $email = " ";
     $message = " ";
     $second_Email = " ";
     $verification = " ";
     $recepient_email = " ";
     $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']);
     $message = htmlspecialchars($_POST['message']);
     $second_Email = htmlspecialchars($_POST['second_Email']);
     $verification = htmlspecialchars($_POST['verification_code']);
     $recepient_email = htmlspecialchars($_POST['recepient_email']);
  
    $company_mail = "7iastian@gmail.com";
    $to = 'astianseb730@gmail.com';
    $subject = "[IAstian mail project] Verification code";
    $_code = rand(1000,9999);
    $ver_code = "<h1> $_code </h1>";
    $headers = "From: $company_mail \r\n";
    $message_body = " 
    <div style='background-color:#ff4242;width:60%; align-self:center; height: max-content;padding:10px 30px; font-family: Arial ,Helvetica ,Sans-serif;margin: 0 auto;'>
        <h1>We have received your email request to $email</h1>
        <h3>please enter the verification code below.</h3>
        <h1>$_code</h1>
        <p style='background: black; color: white; padding: 5px 15px;text-align:center'>Note: this code expires within one hour</p>
   </div> ";
    echo $message_body;
?>