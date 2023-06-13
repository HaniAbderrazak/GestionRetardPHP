<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 22/01/2020
 * Time: 00:15
 */

include "../../Connection/BD.php";
class GestionEmployye
{




    public function RecupererEmployee()
    {

        $bd=new BD();
        $t=array();
        $i=0;
        $response=$bd->getConnection()->query("select * from employee");

        while($donne=$response->fetch())
        {
            $tab=array(
                "codeemp"=>$donne['codeemp'],
                 "nom"  =>$donne['nom'],
                "prenom"=> $donne['prenom'],
                "Adresse"=>$donne['Adresse'],
                "email"=> $donne['email'],
                "tel"  => $donne['tel'] ,
                "sexe" => $donne['sexe'] ,
                "login"  =>  $donne['login']  ,
                "mdp" => $donne['mdp']


            );

          $t[$i]=$tab;
          $i++;


        }
        return $t;

    }

       public function RecupererEmployeeParID($id)
       {



           $bd=new BD();
           $t=array();
           $i=0;
           $response=$bd->getConnection()->query("select * from employee where codeemp=".$id);
                 if ($this->verifCode($id))
                 {
                     while($donne=$response->fetch())
                     {
                         $tab=array(
                             "codeemp"=>$donne['codeemp'],
                             "nom"  =>$donne['nom'],
                             "prenom"=> $donne['prenom'],
                             "Adresse"=>$donne['Adresse'],
                             "email"=> $donne['email'],
                             "tel"  => $donne['tel'] ,
                             "sexe" => $donne['sexe'] ,
                             "login"  =>  $donne['login']  ,
                             "mdp" => $donne['mdp']


                         );

                         $t[$i]=$tab;
                         $i++;


                     }
                 }

           return $t;

       }

    public function AjoutEmploye($emp)
    {  $ajout="";
        $bd=new BD();




             /* $emp = new Employee(null,"ali","safi","rue ibn khaldoun tunis","ali.safi@yahoo.fr","56555412","M",
                  "ali.sfi","ali@sf96");*/
             if ($this->verifLogin($emp->login) == false)
             {          $req=$bd->getConnection()->prepare('insert into employee (nom,prenom,	Adresse,email,tel,sexe,login,mdp) values (:nom,
              :prenom,:adresse,:email,:tel,:sexe,:login,:mdp)');
                 $res=    $req->execute(array(
                     'nom'=> $emp->nom,
                     'prenom'=> $emp->prenom,
                     'adresse'=> $emp->adresse,
                     'email'=>$emp->email ,
                     'tel'=> $emp->tel,
                     'sexe'=> $emp->sexe,
                     'login'=> $emp->login,
                     'mdp'=>$emp->mdp
                 ));
                 if ($res)
                 {
                     $ajout="succes";
                 }
                 else { $ajout="echouee";}
             }
             else {
                 $ajout="Cette login est existe dans la base ";
             }







          return $ajout;

    }


    public function ModifierEmploye($emp)
    {
        $modifier="";
        $bd=new BD();




            if ($this->verifCode($emp->codeemp) == true)
            {
                $codeempparlogin=$this->CodeEmpParLogin($emp->login);


                    if ($this->verifLogin($emp->login) == false || $codeempparlogin==$emp->codeemp )
                    {


                        $req=$bd->getConnection()->prepare('UPDATE employee set  nom =  :nom,
                     prenom = :prenom, Adresse = :adresse,email = :email,tel = :tel,sexe = :sexe,login = :login,mdp = :mdp where codeemp= :code');
                        $res=    $req->execute(array(
                            'nom'=> $emp->nom,
                            'prenom'=> $emp->prenom,
                            'adresse'=> $emp->adresse,
                            'email'=>$emp->email ,
                            'tel'=> $emp->tel,
                            'sexe'=> $emp->sexe,
                            'login'=> $emp->login,
                            'mdp'=>$emp->mdp,
                            'code' => $emp->codeemp
                        ));
                        if ($res)
                        {
                            $modifier="Modification avec succes ";
                        }
                        else { $modifier="Modification echouee";}

                    }
                    else {$modifier="cette Nom d'Identifiant est deja utilisé " ;}






            }
            else {$modifier="code ne exsiste pas dans la base ";}








        return $modifier;

    }
    public function SupprimerEmploye($id)
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


public function verifCode($code)
 {
      $verif = false ;
     $bd= new BD();

     $req=$bd->getConnection()->prepare('select * from employee where codeemp = :code');
      $req->execute(array("code"=>$code));



     //var_dump($req->rowCount());exit();
     if ($req->rowCount()>0)
     {
         $verif=true;
     }

     return $verif;
 }
   /* public function verifPOSTAjout()
    {
        $verif=false;
        if ( isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['adr']) && isset($_POST['email']) &&

            isset($_POST['tel']) && isset($_POST['sexe']) && isset($_POST['login']) && isset($_POST['mdp']))
        {
            $verif=true;
        }
        //return $verif;
        return true;
    }*/



    function VerifConnection($login,$mdp)
    {
        $vcon = "" ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from employee where login = :login and  mdp = :pass');
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

    function verifLogin($login)
    {
        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select * from employee where login = :login');
        $req->execute(array("login"=>$login));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
            $verif=true;
        }

        return $verif;
    }

    function CodeEmpParLogin($login)
    {
        $code = 0 ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select codeemp from employee where login = :login ');
        $req->execute(array(
            "login"=>$login

        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        {
               while($donne=$req->fetch())
               {
                   $code=$donne['codeemp'];

               }

        }


        return $code;

    }
    //pour tester dans bienvenue.php
    function verifLoginParCodeEmp($code)
    {
        $verif = false ;
        $bd= new BD();

        $req=$bd->getConnection()->prepare('select login from employee where codeemp = :code ');
        $req->execute(array(
            "code"=>$code

        ));



        //var_dump($req->rowCount());exit();
        if ($req->rowCount()>0)
        { $verif=true;
            while($donne=$req->fetch())
            {
                $code=$donne['codeemp'];

            }

        }


        return $code;
    }


}