<?php
    //Idea ,coded , and built by sebastian muchui.
    // 7iastian@gmail.com. 
    //Copyright 2020 all rights reserved.
    require "../Handlers/validation.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mail verification</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" placeholder="Name" name="name"> <br> <br>
        <input type="text" placeholder="Email" name="email"> <br> <br>
        <input type="text" placeholder="Recepient Email" name="recepient_email"> <br> <br>
        <input type="text" placeholder="message" name="message"> <br> <br>
        <input type="text" placeholder="Another email adress where we can confirm" name="second_Email"> <br> <br>
        <input type="text" name="verification_code" placeholder="verification code sent to the above email"> <br> <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>