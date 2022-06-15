<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);

try {
  session_start();
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nouhailaelaalami@yahoo.com';                     //SMTP username
    $mail->Password   = 'rxldpyvswqvgqxmw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom( 'nouhailaelaalami@yahoo.com', 'Delivery');
    $mail->addAddress('nouhailaelaalami286@gmail.com', 'Delivery');     //Add a recipient
    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ' from:'.$_SESSION['emailCont'];
    $mail->Body    =  ''.$_SESSION['sujetCont'].'<h6 class="mt-5">Signature: '.$_SESSION['nameCont'].'</h6>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     $_SESSION['msg']='le message est envoyé';
    $mail->send();
    header('location:contact_client');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      
;  } 