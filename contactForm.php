<?php

if(isset($_POST['submit']) && $_POST['mail'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {$name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "akmal.makhmudov57@gmail.com";

    $headers = "From: ".$mailForm;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject , $txt, $headers);
    header("Location: index.php?mailsend");}
}