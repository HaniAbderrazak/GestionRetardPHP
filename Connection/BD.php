<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 21/01/2020
 * Time: 02:56
 */

class BD
{
private $serveur;
private $base;
private  $host;
private $mdp;
private $con;

public function __construct()
{
    $this->serveur='localhost';
    $this->base='gestionretard';
    $this->host='root';
    $this->mdp='';

}



public function getConnection()
{
     try{
         $this->con= new PDO("mysql:host=".$this->serveur.";dbname=".$this->base."","".$this->host."","".$this->mdp."");


     }
     catch (PDOException $e)
     {
         die("<h1>Imposible de seconnecter a la Base de Donne</h1>");
     }
     return $this->con;
}

}