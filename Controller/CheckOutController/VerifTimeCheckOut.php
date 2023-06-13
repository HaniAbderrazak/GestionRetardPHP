<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/02/2020
 * Time: 02:51
 */
include"ChechkOutController.php";
if(isset($_POST['code']))
{
    $checkout=new ChechkOutController();
    $time_sortie=$checkout->RecupererTime_fin();
//echo $time_sortie->format("H:i:sa")
    $time_sortie_emp= new DateTime('now');
    $interval=$time_sortie->diff($time_sortie_emp);
    $heurediff =$interval->format("%H");

    if($heurediff==0)
    {
        echo"succes";
    }
    else{
        echo "echouee";
    }
}




?>