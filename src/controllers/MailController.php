<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../src/PHPMailer/src/Exception.php';
require '../src/PHPMailer/src/PHPMailer.php';
require '../src/PHPMailer/src/SMTP.php';


class MailController
{

    public static function send()
    {

        // username : dorancosalle220821@gmail.com

        // password :Doranco@salle22


        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'dorancosalle100921@gmail.com';                     //SMTP username
            $mail->Password   = 'Doranco@salle10';                               //SMTP password
            $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('amadoutidiane.diallo2016@gmail.com', 'Amadou');
            $mail->addAddress('dorancosalle220821@gmail.com', 'Joe User');     //Add a recipient

            $mail->addAddress('ellen@example.com');               //Name is optional
            

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments : envoyer des pj
            $mail->addEmbeddedImage('../public/upload/giphy.gif', 'giphy.gig');    


            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
   
            ob_start();
            include(VIEWS.'mail/mail.php');
            $mail->Body    = ob_get_clean();
          
            $mail->send();
            // echo 'Message has been sent';
            $_SESSION['message']['success'][]= 'Mail envoyé';
            header('location:../');
            // exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
