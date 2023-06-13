<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 26/01/2020
 * Time: 23:00
 */
include "GestionEmployye.php";
if (isset($_POST['submit']))
{
    $gsemploye= new GestionEmployye();
   $conn= $gsemploye->VerifConnection($_POST['login'],$_POST['password']);

   if ($conn=="succes")
   {

       $codeemp=$gsemploye->CodeEmpParLogin($_POST['login']);
       $_SESSION['codeemp']=$codeemp;
    //   $tab=$gsemploye->RecupererEmployeeParID($codeemp);
      // $nom=$tab[0]['nom'];
       header("Location: ../../View/EspaceEmployee/profileemployye.php ");


   }
   else {
       $_SESSION['message']=$conn;

       header("Location: ../../View/EspaceEmployee/LoginFromEmployee/pages-login.php");
   }
}
?>