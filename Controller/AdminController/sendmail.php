<?php

/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 09/02/2020
 * Time: 17:59
 */
if(isset($_POST['submit']))
{   $mail=$_POST['email'];
    $objet=$_POST['objet'];
    $contenu=$_POST['contenu'];
  if (mail($mail,$objet,$contenu))
  {
     //header("location : ../../View/EspaceAdmin/ListeEmployeeEnRetard.php");
      //echo "succes";
      //include "../../View/EspaceAdmin/ListeEmployeeEnRetard.php";
      header("Location: ../../View/EspaceAdmin/ListeEmployeeEnRetard.php");



  }
  else {
      echo "echouee";
  }

}

?>