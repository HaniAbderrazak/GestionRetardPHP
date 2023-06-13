<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/02/2020
 * Time: 11:34
 */
include "../../Connection/BD.php";
class CheckInControlle
{
    public function RecupererDateEntreEmployeeCheckInParID($id)
    {



        $bd=new BD();
        $dt=new DateTime();

        $response=$bd->getConnection()->query("select * from checkin where id=".$id);
        if ($this->verifId($id))
        {
            while($donne=$response->fetch())
            {
                $dt=new DateTime($donne['entre']);



            }
        }

        return $dt;

    }
    public function verifId($id)
    {
        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from checkin where id = :id');
        $req->execute(array("id"=>$id));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $verif=true;
        }

        return $verif;
    }
    function RecupererIdEmployeChechInParCodeEmpEtDatedejour($date,$code)
    {
        $id=0;

        $bd= new BD();

        $req=$bd->getConnection()->prepare('select id from checkin where datej = :datej and codeemp = :codeemp');
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


    function AjoutCheckIn($chechin)
    {
        $ajout="";
        $bd=new BD();





        if ($this->VerifCheck($chechin->datej,$chechin->codeemp) == false)
        {   try{

            $req=$bd->getConnection()->prepare('insert into checkin (datej,entre,codeemp) values ( ? ,NOW(), ?)');
            $res=    $req->execute(array(
                $chechin->datej,
                $chechin->codeemp


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
            $ajout="tu a deja declare l'entre aujourd'hui ";
        }







        return $ajout;

    }
    function VerifCheck($date,$codeemp)
    {

        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from checkin where datej = :datej and codeemp = :codeemp');
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
    function RecupererTime_depart()
    {


        $bd=new BD();
        $dt=new DateTime();

        $response=$bd->getConnection()->query("select timeIn from timeinout ");


            while($donne=$response->fetch())
            {
                $dt=new DateTime($donne['timeIn']);



            }


        return $dt;

    }


    function RetournerDureeDeRetardEnMinute($timeDepart,$timeArrivage)
    {

        $intervall = $timeDepart->diff($timeArrivage);
        $DurreEnHeure=$intervall->format('%H ');
        $DurreEnMinute=$intervall->format('%I ');
        return $this->ConvertirRetardEnMinute($DurreEnHeure,$DurreEnMinute);
    }

    function ConvertirRetardEnMinute($heure,$minute)
    {
        $durreMinute=0;
        $m=intval($minute);
        $h=intval($heure);
        if($heure == 00)
        {
            $durreMinute=$m;

        }
        else{
            $ResultatDurre=($h * 60)+$m;
            $durreMinute=intval($ResultatDurre);
        }
        return $durreMinute;

    }

}