<?php

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  // here we use the php mail function
  // to send an email to:
  // you@example.com
  mail( "justine.sery@gmail.com", "Feedback Form Results",$message, "From: $email" );
?>

<?php
require("class.PHPMailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "justine.sery@gmail.com;js@justinesery.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "justine@justinesery.com";  // SMTP username
$mail->Password = "TiG]y3TXoe9s"; // SMTP password

$mail->From = "justine.sery@gmail.com";
$mail->FromName = "Justine Portfolio";
$mail->AddAddress("justine.sery@gmail.com", "Justine Sery");
$mail->AddAddress("justine.sery@gmail.com");                  // name is optional
$mail->AddReplyTo("justine.sery@gmail.com", "Justine");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Message from Portfolio";
$mail->Body    = "This is the HTML message body <b>in bold!</b>";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>