<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/02/2020
 * Time: 02:40
 */
include "../../Connection/BD.php";
class ChechkOutController
{
    function AjoutCheckOut($checkout)
    {
        $ajout="";
        $bd=new BD();





        if ($this->VerifCheck($checkout->datej,$checkout->codeemp) == false)
        {   try{

            $req=$bd->getConnection()->prepare('insert into checkout (datej,sortie,codeemp) values ( ? ,NOW(), ?)');
            $res=    $req->execute(array(
                $checkout->datej,
                $checkout->codeemp


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


        }
        else {
            $ajout="tu a deja declare Sortie aujourd'hui ";
        }







        return $ajout;

    }
    function VerifCheck($date,$codeemp)
    {

        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from checkout where datej = :datej and codeemp = :codeemp');
        $req->execute(array(
            "datej"=>$date,
            "codeemp"=>$codeemp
        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $verif=true;
        }

        return $verif;

    }
    function RecupererTime_fin()
    {


        $bd=new BD();
        $dt=new DateTime();

        $response=$bd->getConnection()->query("select timeOut from timeinout ");


        while($donne=$response->fetch())
        {
            $dt=new DateTime($donne['timeOut']);



        }


        return $dt;

    }
}