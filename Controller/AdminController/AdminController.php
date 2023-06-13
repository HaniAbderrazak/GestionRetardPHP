<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22/01/2020
 * Time: 22:25
 */

include "../../Connection/BD.php";
class AdminController
{

    public function Recupereradmin()
    {

        $bd=new BD();
        $t=array();
        $i=0;
        $response=$bd->getConnection()->query("select * from admin");

        while($donne=$response->fetch())
        {
            $tab=array(
                "id"=>$donne['id'],
                "login"  =>$donne['login']


            );

            $t[$i]=$tab;
            $i++;


        }
        return $t;

    }

    public function RecupererAdminParID($id)
    {



        $bd=new BD();
        $t=array();
        $i=0;
        $response=$bd->getConnection()->query("select * from admin where id=".$id);
        if ($this->verifCode($id))
        {
            while($donne=$response->fetch())
            {
                $tab=array(
                    "id"=>$donne['id'],
                    "login"  =>$donne['login']



                );

                $t[$i]=$tab;
                $i++;


            }
        }

        return $t;

    }

    public function AjoutAdmin($admin)
     {
         $ajout="";
         $bd=new BD();




             if($this->verifLogin($admin->login))
             {
                    $ajout ="Login exsiste deja  ";
             }
             else
             {
                 $req=$bd->getConnection()->prepare('insert into admin (login,password) values (:login,:password) ');
                 $res=    $req->execute(array(
                     'login'=> $admin->login,
                     'password'=> $admin->password

                 ));
                 if ($res)
                 {
                     $ajout="succes";
                 }
                 else { $ajout="echouee";}

             }






         return $ajout;

     }
     public function  ModifierPasswordAdmin($newpass,$id)
     {
         $modifier="";
         $bd=new BD();

        // $admin = new Admin(2,"ali","ali@9655");


             if ($this->verifCode($id) == true)
             {
                 $req=$bd->getConnection()->prepare('UPDATE admin set  password =  :pass  where id= :id');
                 $res=    $req->execute(array(
                     'pass'=> $newpass,
                     'id'=> $id

                 ));
                 if ($res)
                 {
                     $modifier="Modification avec succes ";
                 }
                 else { $modifier="Modification echouee";}
             }
             else {$modifier="code ne exsiste pas dans la base ";}







         return $modifier;
     }
     public function SuprimerAdmin($id)
     {

         $suprimer="";
         $bd=new BD();




         if ($this->verifCode($id) == true)
         {
             $req=$bd->getConnection()->prepare('DELETE from employee  where codeemp= :id');
             $res=    $req->execute(array(
                 'id'=> $id

             ));
             if ($res)
             {
                 $suprimer="Suppression avec succes ";
             }
             else { $suprimer="Suppression echouee";}
         }
         else {$suprimer="code ne exsiste pas dans la base ";}







         return $suprimer;
     }


    public function verifCode($id)
    {
        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from admin where id = :id');
        $req->execute(array("id"=>$id));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $verif=true;
        }

        return $verif;
    }


    function verifLogin($login)
    {
        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from admin where login = :login');
        $req->execute(array("login"=>$login));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $verif=true;
        }

        return $verif;
    }
    function VerifConnection($login,$mdp)
    {
        $vcon = "" ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from admin where login = :login and  password = :pass');
        $req->execute(array(
            "login"=>$login,
            "pass"=>$mdp
            ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $vcon="succes";
        }
        else {
            $vcon="login ou mot de passe est incorect ! ";
        }

        return $vcon;
    }
    function CodeAdminParLogin($login)
    {
        $code = "" ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select id from admin where login = :login ');
        $req->execute(array(
            "login"=>$login

        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            while($donne=$req->fetch())
            {
                $code=$donne['id'];

            }

        }


        return $code;

    }

    public function RecupererListDeRetard()
    {

        $bd=new BD();
        $t=array();
        $i=0;
        $response=$bd->getConnection()->query("select * from employee e ,retard r where e.codeemp=r.codeemp");

        while($donne=$response->fetch())
        {
            $tab=array(
                "codeemp"=>$donne['codeemp'],
                "nom"=>$donne['nom'],
                "prenom"  =>$donne['prenom'],
                "email"  =>$donne['email'],
                "tel"  =>$donne['tel'],
                "duree"  =>$donne['duree'],
                "motif" =>$donne['motif'],
                "datej"  =>$donne['datej']



            );

            $t[$i]=$tab;
            $i++;


        }
        return $t;

    }
}