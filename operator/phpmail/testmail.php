<?php
//require_once('phpmail/class.phpmailer.php');
require_once('phpmail/PHPMailerAutoload.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('index.html');
$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.roomnrate.com"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.roomnrate.com"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "bookings@roomnrate.com"; // SMTP account username
$mail->Password   = "b00k1ng5";        // SMTP account password

$mail->SetFrom('bookings@roomnrate.com', 'First Last');

$mail->AddReplyTo("rachman@intiwhiz.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp, basic with authentication";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "rachman@intiwhiz.com";
$mail->AddAddress($address, $address);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
//  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
//  echo "Message sent!";
}
    
	
	?>