<?php
/**
 * Created by PhpStorm.
 * User: martingoldthen
 * Date: 26/05/18
 * Time: 11:38
 */
session_start();
$nombre = $_SESSION['name'];
$mail = $_SESSION['email'];
$phone = $_SESSION['phone'];
$message = $_SESSION['message'];

require_once 'connect.php';


$sql_insert = "INSERT INTO `users` (name, mail, phone, message) VALUES (?, ?, ?, ?)";
try {
    $sentencia = $db->prepare($sql_insert);
    $sentencia-> execute(array($nombre, $mail, $phone, $message));
}catch(PDOException $error) {
    die("Error a insertar " . $error->getMessage()) or die("Error al redirigir a formulario con error $error->getMessage()");
}

// redirige a listado de deptos
header("Location: success.php") or die("Error al redirigir a la pagina de exito");