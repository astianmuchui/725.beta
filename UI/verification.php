<?php 
    require "../Handlers/mail.php";
    $second_Email = " ";
    
    // echo "<h1 style='color: white;'>$_code</h1>";

    $second_Code = $_POST['number_verified'];
    if(isset($_POST['submit'])){
        if($second_Code = $_code){
                $second_Email = $_POST['second_Email'];
                echo "<h1 style='color: white;'>it is even</h1>";
        }else{
            return false;
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enter verification code</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="number_verified"> A verification code was sent to <?php print $second_Email ?> </label> <br> <br>
            <input type="number" name="number_verified" id="" placeholder="enter code"> 
            <br> <br>
            <input type="submit" value="submit ." id="submit" name="submit">

    </form>
</body>
</html>