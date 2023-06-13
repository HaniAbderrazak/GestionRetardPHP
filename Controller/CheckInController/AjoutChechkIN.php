<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 04/02/2020
 * Time: 18:32
 */
include "CheckInControlle.php";
include"../../Model/CheckIn.php";
if(isset($_POST['datej']) && isset($_POST['codeemp']))
{   $check=new CheckInControlle();
    $modelcheckin=new CheckIn(null,$_POST['datej'],$_POST['codeemp']);
   echo  $check->AjoutCheckIn($modelcheckin);

}

?>