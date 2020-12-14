<?php
 //Idea ,coded , and built by sebastian muchui.
    // 7iastian@gmail.com. 
    //Copyright 2020 all rights reserved.
    //Any use of this system for the wrong purpose will result in calling of relevant authorities
    require "../Handlers/mail.php";
    $name = " ";
    $email = " ";
    $message = " ";
    $second_Email = " ";
    $recepient_email = " ";
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $second_Email = htmlspecialchars($_POST['second_Email']);
    $recepient_email = htmlspecialchars($_POST['recepient_email']);
        

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
                    //    echo '<h2 style="color: darkred;font-family: Arial, Helvetica ,sans-serif;">Use a valid email</h2>';
                       return false;
                   }
                    if(mail($email,$subject,$message_body,$headers)){
                        mail($recepient_email,"contact request",$message,"From: $email \r\n");
                        echo "<h2>Your email was sent,</h2> ";
                        return true;
                    } else{
                        return false;
                    }   
                    header("location: ../UI/verification.php");
                }
                
                
    ?>