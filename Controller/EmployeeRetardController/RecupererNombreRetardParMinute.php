<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/02/2020
 * Time: 00:41
 */
include"EmployyeRetardController.php";
if(isset($_POST['code']))
{


    $empretard=new EmployyeRetardController();
    echo $empretard->CalculRetardParMinute($_POST['code']);
}
?>