<?php

namespace Notification;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class Email
{

    //* Metodos Packdist
    private $mail = stdClass::class;

    // * Metodo construtor para classes PHPMailer
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                      //Enable verbose debug output
        $this->mail->isSMTP();                                            //Send using SMTP
        $this->mail->Host       = 'mail.lael.me';                     //Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mail->Username   = 'sender@lael.me';                     //SMTP username
        $this->mail->Password   = 'lael@123';                               //SMTP password
        $this->mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $this->mail->Port       = 465;
        $this->mail->CharSet = "utf-8";
        $this->mail->setLanguage("br");
        $this->mail->isHTML(true);
        $this->mail->setFrom("sender@lael.me","Equipe Lael Develpers");
    }

    // * Metodo De Envio de Email
    public function sendEmail($subject, $body, $replyEamil, $replyName, $addresEamil, $addresName)
    {
        // echo "Envio de E-mail Teste!";
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replyEamil, $replyName);
        $this->mail->addAddress($addresEamil, $addresName);

        try {
            
            $this->mail->send();
        } catch (Exception $e) {
            //throw $th;
            echo"Erro ao enviar E-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";

        }
        
    }
}
