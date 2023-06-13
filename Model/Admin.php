<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22/01/2020
 * Time: 22:16
 */

class Admin
{   private  $id;
    private $login;
    private $password;

    public function  __construct($id,$login,$password)
    {
        $this->id=$id;
        $this->login=$login;
        $this->password=$password;

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
        return 'Admin [ ID = '.$this->id.'  ,Login='.$this->login.'   , Password='.$this->password.'  ]';
    }

}