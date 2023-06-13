<?php  session_start(); ?>
<html>

<head>
    <link rel="stylesheet" href="../../View/css/bootstrap.min.css">
    <STYLE>
          #sup{
              color: white;
          }
    </STYLE>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 21/01/2020
 * Time: 03:08
 */

include "GestionEmployye.php";
include"../../Model/Employee.php";



/* //$employe   = new Employee("1","imed","hleli","rue singapour","imedhleli@gmail.com","26554142","M","imed.hl","imed@12");

//print_r($gemp->RecupererEmployee());echo  "<br/>";

print_r($t);
echo "<br/>";*/
/*************************************  GESTION EMPLOYEE TEST  ************************************/
$gemp= new GestionEmployye();
$t=array();
$t=$gemp->RecupererEmployee();
$n=count($t);
//echo $gemp->AjoutEmploye();
?>
<form>


    <table border="1">
        <thead>
        <tr>
            <th> Code </th>
            <th> Nom </th>
            <th> Prenom </th>
            <th> Adresse </th>
            <th> Email </th>
            <th> Tel </th>
            <th> Sexe </th>
            <th> Identifient </th>
            <th> Mot de Passe </th>
            <th>Modifier</th>
            <th>Suprimer</th>
        </tr>


        </thead>
        <?php
        for($i=0;$i<$n;$i++)
        {?>
            <tr>

                <td><?php  echo $t[$i]['codeemp'] ?></td>
                <td><?php  echo $t[$i]['nom'] ?></td>
                <td><?php  echo $t[$i]['prenom'] ?></td>
                <td><?php  echo $t[$i]['Adresse'] ?></td>
                <td><?php  echo $t[$i]['email'] ?></td>
                <td><?php  echo $t[$i]['tel'] ?></td>
                <td><?php  echo $t[$i]['sexe'] ?></td>
                <td><?php  echo $t[$i]['login'] ?></td>
                <td><?php  echo $t[$i]['mdp'] ?></td>
                <td> <button class="btn btn-success"><a style = "color : white" href="ModifierEmploye.php?code=<?php  echo  $t[$i]['codeemp'] ?>">Modifier</a></button>   </td>

                <td> <button class="btn btn-danger"> <a id = "sup" onclick="return confirm('Voules est vous Suprimmer')" href="SuprimerEmployye.php?code=<?php  echo  $t[$i]['codeemp'] ?>" >Suprimer</a></button>   </td>

            </tr>

            <?php
        }
        ?>



    </table>
</form>



</body>
</html>






<?php


echo "<br/>";
//echo $gemp->ModifierEmploye();
print_r($gemp->RecupererEmployeeParID(8));
//echo $gemp->verifCode(9);

//echo  $bd->getConnection();
echo $gemp->VerifConnection("yahya.ss","yahya@9655")."<br/>";
$emp= new Employee(null,"Ahlem","ban salah ","souse rue riadh","ahlem.bns@gmail.com","26665412","F","ahlm.nbns","test@1234");
//echo $gemp->AjoutEmploye($emp);
echo "<br/>";

echo json_encode($gemp->RecupererEmployee());echo "<br/>";

$_SESSION['code']="1234";
echo $_SESSION['code'];

echo "<br/>";
echo $gemp->CodeEmpParLogin("yahya.ss");





?>