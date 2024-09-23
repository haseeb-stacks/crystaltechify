<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "info@crystaltechify.com";
$subject = "Mail From website";

// $headers = "From: $name <$email>" . "\r\n" .
// "Phone: $phone" . "\r\n" .
// "Subject: $subject" . "\r\n" .
// "Message: $message" . "\r\n";

$message = "Name: " . $name . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "Phone: " . $phone . "<br>";
$message .= "Subject: " . $subject . "<br>";
$message .= "Message: " . $_POST['message'] . "<br>";


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.crystaltechify.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shagufta@cyberxapp.com';                     //SMTP username
    $mail->Password   = 'shagufta123';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shagufta@cyberxapp.com', 'Cyberx');
    $mail->addAddress($to, 'shagufta');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    // $mail->AltBody = $message;


    $mail->send();
    header("Location: thankyou.php");
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}