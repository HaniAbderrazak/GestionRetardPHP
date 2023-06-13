<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 10/02/2020
 * Time: 02:43
 */

class CheckOut
{
    private  $id;
    private $datej;
    private $codeemp;
    public function  __construct($id,$datej,$codeemp)
    {
        $this->id=$id;
        $this->datej=$datej;

        $this->codeemp=$codeemp;

    }

    public function __get($att){
        return( $this->{$att});
    }

    public function __set($att,$v){
        $this->{$att}=$v;
    }
    public function  __toString()
    {
        // TODO: Implement __toString() method.
        return 'CheckIn [ ID = '.$this->id.'  ,DateJ='.$this->datej.'  , Codeemp='.$this->codeemp.'  ]';
    }


}