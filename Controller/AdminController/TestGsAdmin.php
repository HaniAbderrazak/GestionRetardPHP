<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22/01/2020
 * Time: 23:17
 */
include "AdminController.php";
include"../../Model/Admin.php";





$gsadmin=new AdminController();

echo $gsadmin->verifLogin('admin');

echo "<br/>";
echo $gsadmin->ModifierPasswordAdmin("ali@9666",2);
echo "<br/>". $gsadmin->VerifConnection("admin","admin");
echo $gsadmin->CodeAdminParLogin("ali");
echo "<br/>" ;
$admin=new Admin(null,"achref","1234");
//echo $gsadmin->AjoutAdmin($admin);
echo "<br/>" ;
print_r($gsadmin->RecupererListDeRetard());


?>