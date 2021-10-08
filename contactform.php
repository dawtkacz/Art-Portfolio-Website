<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "!!TODO when hosted!!"; // fill in when hosted
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name." from PORTFOLIO SITE.\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}