<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 31/01/2020
 * Time: 02:04
 */
include"GestionEmployye.php";
include"../../Model/Employee.php";
if (isset($_POST['code']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adresse']) && isset($_POST['email']) && isset($_POST['tel'])
&& isset($_POST['sexe']) && isset($_POST['login']) && isset($_POST['password']))
{
    $empc=new GestionEmployye();
    $employee= new Employee($_POST['code'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['email'],$_POST['tel'],$_POST['sexe'],$_POST['login'],$_POST['password']);
    echo $message=$empc->ModifierEmploye($employee);






}
?>