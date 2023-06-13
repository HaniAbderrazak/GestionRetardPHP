<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 30/01/2020
 * Time: 12:21
 */
include "AdminController.php";
include "../../Model/Admin.php";


if (isset($_POST['login']) && isset($_POST['password']))
{
    $acon=new AdminController();
    $admin=new Admin(null,$_POST['login'],$_POST['password']);
    echo $acon->AjoutAdmin($admin);

}
else echo "pas de deooner on post";


?>