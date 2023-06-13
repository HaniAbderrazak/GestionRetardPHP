<?php session_start();


if (! isset($_SESSION['login']))
{
    header("location:LoginFormAdmin/Login.php ");
}
//$x=$Cadmin->verifLogin($_SESSION['login']);
?>