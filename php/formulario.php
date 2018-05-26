<?php
/**
 * Created by PhpStorm
 * User: martingoldthen
 * Date: 26/05/18
 * Time: 11:08
 */
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phone'] = $_POST['phone'];
$_SESSION['message'] = $_POST['message'];

include("mail_comercial.php");
include("bbdd.php");