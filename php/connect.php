<?php
/**
 * Created by PhpStorm.
 * User: martingoldthen
 * Date: 26/05/18
 * Time: 16:31
 */
$dbhost = "shareddb-h.hosting.stackcp.net";
$dbuser = "vascardb-33319847";
$dbpass = "Vascar123";
$dbname = "vascardb-33319847";
try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $error) {
    die("Error conexión BBDD" . $error->getMessage());
}