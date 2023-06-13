<?php
session_start();

include "EmployyeRetardController.php";
include"../../Model/EmployeRetard.php";
/*if(isset($_POST['datej']) && isset($_POST['codeemp']))
{   $retard=new EmployyeRetardController();
   $modelRetard=new EmployeRetard(null,"2020-06-09","30","hhhkhiii","37","24");
    echo  $retard->AjoutEmployeRetard($modelcheckin);

}*/

if (isset($_POST['motif']) )
{
    if ($_POST['motif']=="")
    {
        $retard=new EmployyeRetardController();
        $modelRetard=new EmployeRetard(null,date("Y-m-d"),$_SESSION['duree'],$_POST['textAreaMotif'],$_SESSION['idcheck'],$_SESSION['codeemp']);
        $retard->AjoutEmployeRetard($modelRetard);
        header("location:../../View/EspaceEmployee/profileemployye.php");


    }
    else{
        $retard=new EmployyeRetardController();
        $modelRetard=new EmployeRetard(null,date("Y-m-d"),$_SESSION['duree'],$_POST['motif'],$_SESSION['idcheck'],$_SESSION['codeemp']);
          $retard->AjoutEmployeRetard($modelRetard);
        header("location:../../View/EspaceEmployee/profileemployye.php");
        //$_SESSION['retard']="merci pour votre attention";
        //echo $_POST['motif'];
    }






}


?>