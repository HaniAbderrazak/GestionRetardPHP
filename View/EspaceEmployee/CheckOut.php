<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php
include"../../Controller/EmployeController/VerifSession.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="TemplateEmployee/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="TemplateEmployee/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Material Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="TemplateEmployee/assets/css/MaterialIcon.css" />
    <link rel="stylesheet" href="TemplateEmployee/assets/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="TemplateEmployee/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="TemplateEmployee/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<input id="code" name="prodId" type="hidden" value="<?php echo $_SESSION['codeemp'] ?>">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="TemplateEmployee/assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a  class="simple-text logo-normal">
                Espace Employee
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">

                <li class="nav-item active ">
                    <a class="nav-link" href="profileemployye.php">
                        <i class="material-icons">person</i>
                        <p>Employye Profile</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="CheckIn.php">
                        <i class="material-icons">content_paste</i>
                        <p>ChechkIn</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="CheckOut.php">
                        <i class="material-icons">content_paste</i>
                        <p>ChechkOut</p>
                    </a>
                </li>


              <!--  <li class="nav-item ">
                    <a class="nav-link" href="Contact.php">
                        <i class="material-icons">language</i>
                        <p>Contact</p>
                    </a>
                </li>-->

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" >Chechk-OUT</a>
                </div>

                <div class="collapse navbar-collapse justify-content-end">

                    <ul class="navbar-nav">



                        <li class="nav-item dropdown">
                            <a  style="zoom:2" class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="profileemployye.php">Profile</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Deconnexion.php">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Employee</h4>
                                <p class="card-category">Chechk-OUT</p>
                            </div>
                            <div class="card-body">
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Date d'Aujourd'hui (disactiver)</label>
                                            <input type="date" id="datej" value="<?php echo date("Y-m-d");  ?>"class="form-control" disabled>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Verification d'sortie</label>
                                            <input id="check" type="checkbox" class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Time d'sortie (Desactiver) </label>
                                            <input type="text" value=" <?php echo date(' h:i:s a'); ?> " class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>

                                <button  class="btn btn-primary pull-right chIn">Check-OUT</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">


                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">


            </div>
        </footer>
    </div>
</div>
<div class="fixed-plugin">

</div>
<!--   Core JS Files   -->
<script src="TemplateEmployee/assets/js/core/jquery.min.js"></script>
<script src="TemplateEmployee/assets/js/core/popper.min.js"></script>
<script src="TemplateEmployee/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="TemplateEmployee/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="TemplateEmployee/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="TemplateEmployee/assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="TemplateEmployee/assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="TemplateEmployee/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="TemplateEmployee/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="TemplateEmployee/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="TemplateEmployee/assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="TemplateEmployee/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="TemplateEmployee/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="TemplateEmployee/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="TemplateEmployee/assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="TemplateEmployee/assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="TemplateEmployee/assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->

<!-- Chartist JS -->
<script src="TemplateEmployee/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="TemplateEmployee/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="TemplateEmployee/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="TemplateEmployee/assets/demo/demo.js"></script>
<script>
    $(function () {
        $(".chIn").click(function () {
            var datej=$("#datej").val();
            var code=$("#code").val();
            console.log(datej);
            console.log(code);
            if($("#check").is(':checked'))
            {
                //ajax;
                $.ajax({
                    url:'../../Controller/CheckOutController/VerifTimeCheckOut.php',
                    method:'post',
                    data:{
                        code:code

                        
                    },
                    success:function (data) {
                        if(data=="succes")
                        {
                           // alert("Au Revoir");
                            $.ajax({
                                url:'../../Controller/CheckOutController/AjoutCheckOut.php',
                                method:'post',
                                data:{datej:datej,
                                    code:code

                                },
                                success:function (ajout) {
                                    if(ajout=="succes")
                                    {
                                        alert("Au Revoir ");
                                    }
                                    else {
                                        alert(ajout);
                                    }

                                }


                            });
                        }
                        else{
                            alert("Temps de check out est 18:00:00 PM")
                        }
                        
                    }


                });

            }
            else {alert("Il faut Verifier Votre Check OUT pour  Aujourd'hui");}

        });

    });
</script

</body>

</html>
