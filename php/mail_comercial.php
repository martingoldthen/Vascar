<?php
/**
 * Created by PhpStorm.
 * User: martingoldthen
 * Date: 26/05/18
 * Time: 11:37
 */

$to = "martingon03@gmail.com";
$subject ="Solicitud de " . $_POST['name'];
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


//Mensaje de correo
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= '<tr style="text-align: center; background: #942734; color: white"><td colspan="2">Datos del cliente</td></tr>';
$message .= "<tr><td><strong>Nombre y Apellidos:</strong> </td><td>" . strip_tags($_POST['name']." ".$_POST['surname']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Teléfono:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$message .= "</table>";
$message .= "<p>El cliente ha dejado el siguiente mensaje:</p>";
$message .= "</body></html>";
$message .= $_POST['message'];


///////////////////////////////////////////////////////////////////
$succes = mail($to, $subject, $message, $headers);