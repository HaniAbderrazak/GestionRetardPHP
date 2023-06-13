<?php
session_start();

include "AdminController.php";
$admin=new AdminController();
if (isset ($_POST['login'])    && isset($_POST['password'])     )
{   if($admin->VerifConnection($_POST['login'],$_POST['password']) == "succes")
     {
         $_SESSION['login']=$_POST['login'];
     }

    echo $admin->VerifConnection($_POST['login'],$_POST['password']);
}


?>