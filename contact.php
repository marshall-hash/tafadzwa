<?php
if (isset($_POST['Submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['phone'];
    $message = $_POST['message'];

    $mailTo= "tmugoni93@gmail.com";
    $headers = "From: ".$email;
    $txt = "You received an email from".$name.".\n\n".$message;

    mail($mailTo,$subject,$txt, $headers);
    header("Location: index.php?mailsend");

    mail(); 
}