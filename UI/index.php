<?php
    //Idea ,coded , and built by sebastian muchui.
    // 7iastian@gmail.com. 
    //Copyright 2020 all rights reserved.
    require "../Handlers/validation.php";
    $ver_subject = "verification code";

    mail($second_Email, $subject,$message_body,$headers);
    
    require "../UI/verification.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    <title>Mail verification</title>
</head>
<body>
    <form action="verification.php" method="post" id="form" name="Iform">
        <input type="text" placeholder="Name" name="name" id="name" required> <br> <br>
        <input type="email" placeholder="Email" name="email" id="emailOne" required> <br> <br>
        <input type="email" placeholder="Recepient Email" name="recepient_email" id="recepient" required> <br> <br>
        <input type="text" placeholder="message" name="message" id="message" required> <br> <br>
        <input type="email" placeholder="Another email adress where we can confirm" name="second_Email" id="referee" required> <br> <br>
        <input type="submit" value="submit" name="submit" id="submit">
    </form>
    <script src="../Handlers/validate.js"></script>
</body>
</html>