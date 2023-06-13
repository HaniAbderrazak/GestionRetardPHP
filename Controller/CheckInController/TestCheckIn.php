<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 01/02/2020
 * Time: 11:56
 */
include"../../Model/CheckIn.php";
include"CheckInControlle.php";

$checkin=new CheckInControlle();
$dd=new DateTime('now');
$x=$dd->format('Y-m-d H:i:s');
/*$datej=array();
$datej[0]=$dd;
$ch="$datej[0]";*/
strval($x);

$codeemp=24;

/*$tab=array("datej"=> strval(date('y-m-d')),
    "entre"=>"2020-02-01 2:05:00",
    "codeemp"=>$codeemp);*/

$date=date("Y-m-d");
$modalcheckin=new CheckIn(null,$date,new DateTime('now'),21);
/*
echo $checkin->AjoutCheckIn($modalcheckin) ;
print_r($checkin->RecupererDateEntreEmployeeCheckInParID(11)) ; echo "<br/>";
$dateA=$checkin->RecupererDateEntreEmployeeCheckInParID(14);
echo $dateA->format("h:i:sa");
$datetimeNow=new DateTime('now');

$date_depart = new DateTime('09:00:00');
$interval = $date_depart->diff($dateA);

echo $interval->format('%H:%I ');
*/
$time_depart=$checkin->RecupererTime_depart();
$time_fin=$checkin->RecupererTime_fin();
$depart=$time_depart->format("H:i:sa");
$fin=$time_fin->format("H:i:sa");
echo "$depart";
echo "$fin";
if (isset($_SESSION['codeemp']))
{
   /* $id=$checkin->RecupererIdEmployeChechInParCodeEmpEtDatedejour(date('Y-m-d'),$_SESSION['codeemp']);
    $dateArivage=$checkin->RecupererDateEntreEmployeeCheckInParID($id);
    $dateEntre= $dateArivage->format("h:i:sa");
    $timee_depart=$checkin->RecupererTime_depart();
    $intervall = $timee_depart->diff($dateArivage);
    $dureretdardd=$intervall->format('%H:%I ');*/

    $id=$checkin->RecupererIdEmployeChechInParCodeEmpEtDatedejour(date('Y-m-d'),$_SESSION['codeemp']);
    $dateArivage=$checkin->RecupererDateEntreEmployeeCheckInParID($id);
    $timee_depart=$checkin->RecupererTime_depart();
    echo $checkin->RetournerDureeDeRetardEnMinute($timee_depart,$dateArivage);

  // echo "<br/>"." id de cette Employye check in est $id time dentree est  $dateEntre dure de retard est $dureretdardd ";

}


//echo "time depart : ".$time_depart->format('H:i:s a')."  est time fin ".$time_fin->format('H:i:s a');

/*
$tabentre=array();
$tabentre=$checkin->RecupererDateEntreEmployeeCheckInParID(7);
$entre=$tabentre[0]['entre'];
echo "<br/>";
echo $entre."<br/>";
//print_r( new DateTime("$entre"));
$date_depart = new DateTime('09:00:00');
$date_arrivage= new DateTime("$entre");
$dateHeureArivage= $date_arrivage->format("H:i:sa");
echo $dateHeureArivage; echo "<br/>";
$heureariv= new DateTime("$dateHeureArivage");

$interval = $date_depart->diff($heureariv);
$time=$interval->format('%H:%I ');
echo $time;

//var_dump($checkin->VerifCheck("2020-02-01",24)) ;*/


?>