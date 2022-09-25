<?php
//////////////////////////////////////////////
include('conectar.php');

global $conecta;

$tanque = mysqli_query($conecta,"SELECT * FROM `tanque4`");

while($row = mysqli_fetch_array($tanque)){
    $serie = $row['serie'];
    $min = $row['minimo'];
    $sensor = $row['SensorT4'];
    $max = $row['maximo'];
}
/////////////////////////////////////////////
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/////////////////////////////////////////////
date_default_timezone_set('America/Argentina/Cordoba');
$t1 = date('l jS \of F Y h:i:s A'); //Fecha actual
///////////////////////////////////////////
//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'maximiliano1995utn@gmail.com';                     //SMTP username
    $mail->Password   = 'tagjhgejkimlqtra';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('maximiliano1995utn@gmail.com', 'SENSORES DEBAJO DEL RANGO');
    $mail->addAddress('maximiliano1995utn@gmail.com', 'MaximilianoVera');     //Add a recipient
    $mail->addAddress('proyectoshmv95@gmail.com','ProyectosUtn');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('frio.png', 'Fuera_de_rango_frio.png');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Tanque 4: ALERTA MIN!!!';
    $mail->Body    = "El día $t1, la temperatura del sensor S1=$sensor °C del $serie estuvo por debajo del rango mínimo establecido Mín=$min °C. Nota: Recuerde volver a activar la alarma!!!";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Mensaje a sido enviado, la temperatura del sensor no supera el rango minimo';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}