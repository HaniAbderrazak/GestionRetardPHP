<?php session_start();
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 03/02/2020
 * Time: 01:40
 */

if(isset($_SESSION['codeemp']))
{   header("location:pages-login.php");
    session_destroy();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page de connexion | Employé - Modèle d'employé réactif.</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="css/style.css" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="css/demo/jasmine.css" rel="stylesheet">
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="plugins/pace/pace.min.css" rel="stylesheet">
    <script src="plugins/pace/pace.min.js"></script>
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>

<div id="container" class="cls-container">
    <!-- LOGIN FORM -->
    <!--===================================================-->
    <div class="lock-wrapper">
        <div class="panel lock-box">
            <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
            <h4> Bonjour employee!</h4>
            <p class="text-center"><strong>Veuillez vous connecter pour accéder à votre compte</strong></p>
            <div class="row">
                <form action="../../../Controller/EmployeController/VerifEmployeLogin.php" class="form-inline" method="post">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        <div class="text-left">
                            <label class="text-muted">Identifiant</label>
                            <input id="signupInputEmail1" name="login" type="text" placeholder="taper votre identifiant" class="form-control" required />
                        </div>
                        <div class="text-left">
                            <label for="signupInputPassword" class="text-muted">Mote de passe</label>
                            <input id="signupInputPassword" name="password" type="password" placeholder="taper votre Mote de passe" class="form-control lock-input" required />
                        </div>
                        <div class="pull-left pad-btm">
                            <label style = "color: red" class="error">
                                <?php if (isset( $_SESSION['message']))
                                {
                                    echo  $_SESSION['message'];
                                }
                                    ?>
                            </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-block btn-primary">
                            se connecter
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->
<!--jQuery [ REQUIRED ]-->
<script src="js/jquery-2.1.1.min.js"></script>
<!--BootstrapJS [ RECOMMENDED ]-->
<script src="js/bootstrap.min.js"></script>
<!--Fast Click [ OPTIONAL ]-->
<script src="plugins/fast-click/fastclick.min.js"></script>
<!--Switchery [ OPTIONAL ]-->
<script src="plugins/switchery/switchery.min.js"></script>
<!--Bootstrap Select [ OPTIONAL ]-->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
</body>
</html>