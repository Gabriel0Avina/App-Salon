<?php

namespace Clases;

use mail\mail\mail;
use PHPMailer\PHPMailer\PHPMailer;

class Email{

    public $email;
    public $nombre;
    public $token;

    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion(){

        //crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = 'd9ec80fb129251';
        $mail->Password = 'ef649ca9140fd9';

        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress('joe@example.net', 'Joe User');   
        
        //set HTML
        
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
      
        $mail->Subject = 'Here is the subject';
        $contenido = "<html>";
        $contenido.= "<p><strong>Hola " . $this->nombre . "</strong> Has Creado tu Cuenta en App Salon, solo debes confirmala presionando el siguiente enlace</p>";
        $contenido.= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a></p>";
        $contenido.= "<p>Si tu no solicitaste esta cuenta, puedes ignorar el mensaje</p>";
        $contenido.= "</html>";
        $mail->Body = $contenido;
        // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


        //Enviar el email

        $mail->send();

    }
    public function enviarInstrucciones(){
         //crear el objeto de email
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'smtp.mailtrap.io';
         $mail->SMTPAuth = true;
         $mail->Port = 2525;
         $mail->Username = 'd9ec80fb129251';
         $mail->Password = 'ef649ca9140fd9';
 
         $mail->setFrom('from@example.com', 'Mailer');
         $mail->addAddress('joe@example.net', 'Joe User');   
         
         //set HTML
         
         $mail->isHTML(true);
         $mail->CharSet = 'UTF-8';
       
         $mail->Subject = 'Reestablece tu Password';
         $contenido = "<html>";
         $contenido.= "<p><strong>Hola " . $this->nombre . "</strong> Has solicitado Reestablecer tu password , sigue el siguiente enlace para Hacerlo </p>";
         $contenido.= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>restablecer password</a></p>";
         $contenido.= "</html>";
         $mail->Body = $contenido;
         // $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
         $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
 
         //Enviar el email
 
         $mail->send();
    }
}