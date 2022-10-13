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
        "<h2 style='color: #9530c7'>Name: <span style='color: black'>$name</span></h2>" . "<br/>" .
        "<h3 style='color: #9530c7'>Email: <span style='color: black'>$mail</span></h3>" . "<br/>" .
        "<h3 style='color: #9530c7'>Subject: <span style='color: black'>$subject</span></h3>" . "<br/>" .
        "<h3 style='color: #9530c7'>Message: <span style='color: black'>$body</span></h3>";

    $email->setFrom("", 'Aurodium Website');
    $email->addAddress("");
    $email->isHTML(true);
    $email->Subject = $_POST["subject"];
    $email->Name = $_POST["name"];
    $email->Body = $message;

    if ($email->Send()) {
        echo "
        <script>alert('¡Mensaje enviado con éxito!');
        document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>alert('¡Error! Por favor, intente nuevamente...');</script>
        ";
    };
    $email->smtpClose();
}
