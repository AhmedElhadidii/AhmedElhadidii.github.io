<?php 
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['email'];
    $message = $_POST['message'];


    $mailto = "main@hadidiz.me";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from ".$name. \n .$mailfrom \n \n" .$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}