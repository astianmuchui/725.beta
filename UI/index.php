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
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" id="form" name="Iform">
        <input type="text" placeholder="Name" name="name" id="name" > <br> <br>
        <input type="text" placeholder="Email" name="email" id="emailOne"> <br> <br>
        <input type="text" placeholder="Recepient Email" name="recepient_email" id="recepient"> <br> <br>
        <input type="text" placeholder="message" name="message" id="message"> <br> <br>
        <input type="text" placeholder="Another email adress where we can confirm" name="second_Email" id="referee"> <br> <br>
        <input type="text" name="verification_code" placeholder="verification code sent to the above email" id="code"> <br> <br>
        <input type="submit" value="submit" name="submit">
    </form>
    <script src="../Handlers/validate.js"></script>
</body>
</html>