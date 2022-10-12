<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['body'];

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["send"])) {

    $email = new PHPMailer(true);

    $email->isSMTP();
    $email->Host = "smtp.gmail.com";
    $email->SMTPAuth = "true";
    $email->Username = "";
    $email->Password = "";
    $email->SMTPSecure = "ssl";
    $email->Port = 465;

    $message =
        "<h4 style='color: green; text-decoration: underline;'>Name: </h4>" . "<h2>$name</h2>" . "<br/>" .
        "<h4 style='color: green; text-decoration: underline;'>Email: </h4>" . $mail . "<br/>" .
        "<h4 style='color: green; text-decoration: underline;'>Subject: </h4>" . "<h3>$subject</h3>" . "<br/>" .
        "<h4 style='color: green; text-decoration: underline;'>Message: </h4>" . "<p>$body</p>";

    $email->setFrom("a", 'Aurodium Website');
    $email->addAddress("");
    $email->isHTML(true);
    $email->Subject = $_POST["subject"];
    $email->Name = $_POST["name"];
    $email->Body = $message;

    if ($email->Send()) {
        echo "
        <script>alert('Email successfully sent!');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>alert('Error! Please, try again...');</script>
        ";
    };
    $email->smtpClose();
}

   
