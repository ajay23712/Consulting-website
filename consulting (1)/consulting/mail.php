<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username   = 'seyaconsultingllp@gmail.com';                  
    $mail->Password   = 'Seyacon@1971'; 
   
    $mail->SMTPSecure = 'tls';
    $mail->Port = 25
    $mail->SMTPDebug = 1;
 
    $mail->setFrom('seyaconsultingllp@gmail.com', 'Admin');
    $mail->addAddress($_REQUEST["email"]);
    // testdev040@gmail.com
   
    $mail->isHTML(true);
    $mail->Subject = 'Hello,';
    $mail->Body = 'Dear User. Thank you for contacting .';

    $mail->send();
    echo "Email sent successfully.";
} catch (Exception $e) {
    echo "Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>