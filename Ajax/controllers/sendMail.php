<?php
require_once('vendor/phpmailer/phpmailer/class.phpmailer.php'); // requerimos la clase para modificar sus valores por default
  function sendmail($to,$subject,$message,$name)
  {
                $mail             = new PHPMailer();
                $body             = $message;
                $mail->IsSMTP();
                $mail->SMTPAuth   = true;
                $mail->Host       = "smtp.sendgrid.net"; //Nuestro proveedor
                $mail->Port       = 587;
                $mail->Username   = "Wimix_Solutions";  //Nuestro Usuario
                $mail->Password   = "Wimix2014$"; //Nuestro Password
                $mail->SMTPSecure = 'tls';
                $mail->SetFrom('verificacion.correo@wimixsolutions.com', 'Wimix Solutions'); //enviado de
                $mail->AddReplyTo("verificacion.correo@wimixsolutions.com","Wimix Solutions");
                $mail->Subject    = $subject;
                $mail->AltBody    = "";
                $mail->MsgHTML($body);
                $address = $to;
                $mail->AddAddress($address, $name);
                if(!$mail->Send()) {
                    return 0;
                } else {
                      return 1;
               }
  }

  // {
  //               $mail             = new PHPMailer();
  //               $body             = $message;
  //               $mail->IsSMTP();
  //               $mail->SMTPAuth   = true;
  //               $mail->Host       = "mail.wimixsolutions.com"; //Nuestro proveedor
  //               $mail->Port       = 587;
  //               $mail->Username   = "verificacion.correo@wimixsolutions.com";  //Nuestro Usuario
  //               $mail->Password   = "Wimix2014$"; //Nuestro Password
  //               $mail->SMTPSecure = 'ssl';
  //               $mail->SetFrom('verificacion.correo@wimixsolutions.com', 'Wimix Solutions'); //enviado de
  //               $mail->AddReplyTo("verificacion.correo@wimixsolutions.com","Wimix Solutions");
  //               $mail->Subject    = $subject;
  //               $mail->AltBody    = "";
  //               $mail->MsgHTML($body);
  //               $address = $to;
  //               $mail->AddAddress($address, $name);
  //               if(!$mail->Send()) {
  //                   return 0;
  //               } else {
  //                     return 1;
  //              }
  // }


 ?>
