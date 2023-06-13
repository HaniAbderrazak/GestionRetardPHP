<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 21/01/2020
 * Time: 22:38
 */

class Employee
{
private $codeemp;
private $nom;
private $prenom;
private $adresse;
private $email;
private $tel;
private $sexe;
private $login;
private $mdp;

    public function  __construct($codeemp,$nom,$prenom,$adresse,$email,$tel,$sexe,$login,$mdp)
     {
         $this->codeemp=$codeemp;
         $this->nom=$nom;
         $this->prenom=$prenom;
         $this->adresse=$adresse;
         $this->email=$email;
         $this->tel=$tel;
         $this->sexe=$sexe;
         $this->login=$login;
         $this->mdp=$mdp;

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
        return 'Employee [ codeemp = '.$this->codeemp.'  ,nom='.$this->nom.'   , prenom='.$this->prenom.' , adresse='.$this->adresse.'  , email =
         '.$this->email.',tel='.$this->tel.' ,  sexe ='.$this->sexe.' , login='.$this->login.' , mdp ='.$this->mdp.' ]';
    }
}