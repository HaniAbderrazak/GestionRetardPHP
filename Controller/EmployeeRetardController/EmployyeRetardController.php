<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 06/02/2020
 * Time: 19:06
 */
include "../../Connection/BD.php";
class EmployyeRetardController
{
    function RecupererIdEmployeRetardParCodeEmpEtDatedejour($date,$code)
    {
        $id=0;

        $bd= new BD();

        $req=$bd->getConnection()->prepare('select id from retard where datej = :datej and codeemp = :codeemp');
        $req->execute(array(
            "datej"=>$date,
            "codeemp"=>$code
        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $donne=$req->fetch();
            $id=$donne['id'];
        }


        return $id;

    }



    function VerifEmployyeRetardParCodeetDatedeJour($date,$code)
    {
        $verif="";

        $bd= new BD();

        $req=$bd->getConnection()->prepare('select id from retard where datej = :datej and codeemp = :codeemp');
        $req->execute(array(
            "datej"=>$date,
            "codeemp"=>$code
        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
           $verif="succes";
        }
        else{
            $verif="echouee";

        }


        return $verif;

    }
    function AjoutEmployeRetard($EmpRetard)
    {
        $ajout="";
        $bd=new BD();





         try{

            $req=$bd->getConnection()->prepare('insert into retard (datej,duree,motif,idcheckin,codeemp) values ( ?,?,?,?,?)');
            $res=    $req->execute(array(
                $EmpRetard->datej,
                $EmpRetard->duree,
                $EmpRetard->motif,
                $EmpRetard->idcheck,
                $EmpRetard->codeemp


            ));
            // $req=$bd->getConnection()->exec("insert into checkin (datej,entre,codeemp) values (".$chechin->datej.",".NOW().",".$chechin->codeemp.")");
            if ($res)
            {
                $ajout="succes";
            }
            else { $ajout="echouee";}
        }
        catch(PDOException $e)
        {
            $ajout="Problemme PDOException";

        }











        return $ajout;

    }

    function CalculRetardParJour($code)
    {

        $nbrjour=0;

        $bd= new BD();

        $req=$bd->getConnection()->prepare('select duree from retard where  codeemp = :codeemp');
        $req->execute(array(
            "codeemp"=>$code

        ));



       // var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {

            $nbrjour+=$req->rowCount();
        }



        return $nbrjour;


    }

    function CalculRetardParMinute($code)
    {
        $nbrminute=0;

        $bd= new BD();

        $req=$bd->getConnection()->prepare('select duree from retard where  codeemp = :codeemp');
        $req->execute(array(
            "codeemp"=>$code

        ));



        // var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
               while($donne=$req->fetch())
               {
                   $nbrminute+=$donne['duree'];

               }

        }



        return $nbrminute;

    }

}
