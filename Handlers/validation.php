<?php
 //Idea ,coded , and built by sebastian muchui.
    // 7iastian@gmail.com. 
    //Copyright 2020 all rights reserved.
    //Any use of this system for the wrong purpose will result in calling of relevant authorities
    $name = " ";
    $email = " ";
    $message = " ";
    $second_Email = " ";
    $verification = " ";
    $recepient_email = " ";
    $company_mail = "7iastian@gmail.com";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $second_Email = htmlspecialchars($_POST['second_Email']);
    $verification = htmlspecialchars($_POST['verification_code']);
    $recepient_email = htmlspecialchars($_POST['recepient_email']);
    $to = 'astianseb730@gmail.com';
    $subject = "[IAstian mail project] Verification code";
    $_code = rand(1000,9999);
    $ver_code = "<h1> $_code </h1>";
    $headers = "From: $company_mail \r\n";
    $message_body = " 
    <div>
        <h1>We have received your email request to $email</h1>
        <h3>please enter the verification code below.</h3>
        <h1>$_code</h1>
        <p>Note: this code expires within one hour</p>
   </div> ";
    if(isset($_POST['submit'])){
        mail($email,$subject,$message_body,$headers);
           if(empty($name) && empty($email) && empty($message) && empty($second_Email) && empty($recepient_email)){
                echo '<h2 style="color: darkred; font-weight: 200; font-family: Arial, Helvetica ,sans-serif;">Please fill in all fields </h2>';
           }else{
               //We passed
           }
           if(filter_var($email ,FILTER_VALIDATE_EMAIL) && filter_var($second_Email ,FILTER_VALIDATE_EMAIL) && filter_var($recepient_email, FILTER_VALIDATE_EMAIL) === true){
                //we passed
           }else{
               echo '<h2 style="color: darkred;font-family: Arial, Helvetica ,sans-serif;">Use a valid email</h2>';
           }
            if(mail($email,$subject,$message_body,$headers)){
                mail($recepient_email,"contact request",$message,"From: $email \r\n");
                echo "<h2>Your email was sent,</h2> ";
            } else{
                return false;
            }    
    }
    ?>