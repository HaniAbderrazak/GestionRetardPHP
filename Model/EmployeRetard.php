<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 07/02/2020
 * Time: 18:43
 */

class EmployeRetard
{
    private  $id;
    private $datej;
    private $duree;
    private $motif;
    private $idcheck;
    private $codeemp;
    public function  __construct($id,$datej,$duree,$motif,$idcheck,$codeemp)
    {
        $this->id=$id;
        $this->datej=$datej;
        $this->duree=$duree;
        $this->motif=$motif;
        $this->idcheck=$idcheck;
        $this->codeemp=$codeemp;

    }

    public function __get($att){
        return( $this->{$att});
    }

    public function __set($att,$v){
        $this->{$att}=$v;
    }

}