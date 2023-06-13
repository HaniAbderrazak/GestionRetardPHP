<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/02/2020
 * Time: 00:02
 */
include"EmployyeRetardController.php";
if(isset($_POST['code']))
{


    $empretard=new EmployyeRetardController();
    echo $empretard->CalculRetardParJour($_POST['code']);
}

?>