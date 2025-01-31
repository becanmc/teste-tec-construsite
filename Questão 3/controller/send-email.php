<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST["send-email"])) {

    $name = $_POST["message-name"];
    $tel = $_POST["message-tel"];
    $email = $_POST["message-email"];
    $message = $_POST["message"];

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                                           
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'rebecanmcosta@gmail.com';                  
        $mail->Password   = 'qtow edmj sket anbc';                      
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                   
        
        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress($email, $name);
        $mail->addReplyTo($email, $name);
    
        //Content
        $mail->isHTML(true);                                
        $mail->Subject = 'Envio de email com PHPMailer - Rebeca Costa';
        $mail->Body    = $message;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    } 

}





