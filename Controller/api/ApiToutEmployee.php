<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 27/01/2020
 * Time: 02:54
 *
 */

include "../EmployeController/GestionEmployye.php";

$gemp=new GestionEmployye();
$tab=$gemp->RecupererEmployee();
echo json_encode($tab);
?>