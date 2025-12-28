<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // 🔴 YAHAN APNA EMAIL ADDRESS DALO
    $to = "vajakaran0999@gmail.com";

    $fullMessage = "
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    Message:\n$message
    ";

    $headers = "From: $email";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
