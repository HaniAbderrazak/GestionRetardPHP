<?php session_start();



    if (! isset($_SESSION['codeemp']))
    {
        header("location:../../View/EspaceEmployee/LoginFromEmployee/pages-login.php");
    }








?>