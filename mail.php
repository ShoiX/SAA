<?php
require 'include/config.php';
require_once('include/phpmailer/PHPMailerAutoload.php');

$mail = new PHPmailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '587';;
$mail->isHTML();
$mail->Username = SERVEREADDRESS;
$mail->Password = EPASS;
$mail->SetFrom('saahealthcarepasig@gmail.com');
$mail->Subject = 'Hello World';
$mail->Body = 'Hello, Jerryco';
$mail->addAddress(ADMINEADDRESS);

/*;*/
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #
}
?>