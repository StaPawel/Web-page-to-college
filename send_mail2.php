<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587 465
   $mail ->IsHTML(true);
   $mail ->Username = "email@example.com";
   $mail ->Password = "";
   $mail ->SetFrom("email@example.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail->addAttachment('', 'attach1', 'base64', 'pdf');
   $mail ->AddAddress($mailto);
   

   if(!$mail->Send())
   {
       echo "Wiadomość została wysłana";
   }
   else
   {
       echo "Wiadomość nie została wysłana";
   }
   ?>
   
   