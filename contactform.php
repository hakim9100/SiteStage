<?php

if (isset($_POST['submit'])) {
    $name= $_POST['name'];
    $sujet= $_POST['sujet'];
    $mailFrom= $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "hakim.ali17@outlook.fr"; 
    $headars = "From: " .$mailFrom;
    $txt ="You have received an e-mail from ".$name.".\n\n" .$message;
    mail($mailTo, $subject , $txt , $headers);
    header("Location: contact.php?mailsend");
}