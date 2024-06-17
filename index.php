<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>subscribtion form</title>
</head>
<body>
    <input type="checkbox" name="" id="toggle">
    <label for="toggle">more info</label>
    <form class="wrapper" method="post">
        <?php
            $useremail =""; // to make the filed empty when opening
            if(isset($_POST['subscribe'])){
                $useremail = $_POST['email']; //get the email that the user entered
                if(filter_var($useremail,FILTER_VALIDATE_EMAIL)){ // validate the email
                    $subject = 'thanks for subscribig'; 
                    $message = 'thanks for your subscribtion , you will get the latest updates from us .we will never give your information to any one';
                    $sender = 'From: tasneemahmed21120015@gmail.com';
                    if(mail($useremail , $subject , $message , $sender)){ // php bulitin function to send email
                        echo 'thank you for subscribing';
                        $useremail =""; // to make the filed empty after sending
                    }else{
                        echo 'failed to send your email';
                    }
                }else{
                    echo 'invalid email';
                    $useremail ="";
                }
            }
        ?>
        <h1>sbscribe</h1>
        <p>subscribe to our blog to see you message direct</p>
        <div class="inputs">
            <input name="email" type="text" placeholder="type your email" required value= "<?php echo $useremail; ?>">
            <input name="subscribe" class="submit" type="submit" value="subscribe">
        </div>
        <p>we will not share your information</p>
        <div  class="x_sign"></div>
    </form>
</body>
</html>