<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 31/01/2020
 * Time: 07:57
 */
include"GestionEmployye.php";
if(isset($_POST['code']))
{
    $gsemp=new GestionEmployye();
    echo json_encode($gsemp->RecupererEmployeeParID($_POST['code']));

}

?>

