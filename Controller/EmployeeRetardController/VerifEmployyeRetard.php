<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 06/02/2020
 * Time: 19:16
 */
include"EmployyeRetardController.php";
$empretard=new EmployyeRetardController();
if (isset($_SESSION['codeemp']) && isset($_POST['datej']))
{
    echo $empretard->VerifEmployyeRetardParCodeetDatedeJour($_POST['datej'],$_SESSION['codeemp']);



}

?>