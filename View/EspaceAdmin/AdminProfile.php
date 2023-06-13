<?php include "VerifSession.php" ; ?>




<html>





<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="TemplateBaseAdmin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="TemplateBaseAdmin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Profile
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="TemplateBaseAdmin/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="TemplateBaseAdmin/assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="TemplateBaseAdmin/assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <?php  require_once "TemplateVerticalBase.php" ;?>
    </div>


    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <?php  require_once "TemplateHeaderBase.php" ;?>
        </nav>
        <!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Admin Profile</h4>
                        <p class="card-category">administrateur</p>
                    </div>
                    <div class="card-body">

                            <div class="row">

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Date : <?php echo   date('d/m/y h:i:s'); ?></label>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"></label>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"><img width="150px" height="120px" src="../img/parametre.png"/></label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        include"../../Controller/AdminController/AdminController.php";
                                        if (isset($_SESSION['login']))
                                        {
                                            $ac= new AdminController();

                                            $id=$ac->CodeAdminParLogin($_SESSION['login']);
                                            $tab=array();
                                            $tab=   $ac->RecupererAdminParID($id);
                                        }

                                        ?>

                                        <label class="bmd-label-floating"> numero d 'Identifiant : <?php  echo $tab[0]['id'] ; ?> </label>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"></label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <label class="bmd-label-floating">Identifient : <?php echo $tab[0]['login'] ; ?></label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Etat :
                                            <em style="color: red"><?php  if (($tab[0]['id']) == 1)
                                                echo"(Super Admin)";
                                            else echo "(admin)";
                                                ?>
                                            </em>
                                        </label>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"></label>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating"></label>

                                    </div>
                                </div>
                            </div>
                              <?php
                              if ($tab[0]['id'] == 1)
                              {
                                  ?>
                                  <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
                                      Ajouter Nouvelle Admin
                                  </button>


                           <?php
                              }
                             ?>

                            <div class="clearfix"></div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
        <footer class="footer">

        </footer>

    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter Nouvel Administrateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="bmd-label-floating">Identifiant</label>
                            <input id ="login" type="text" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="bmd-label-floating">Mot de passe</label>
                            <input id="password" type="password" class="form-control" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color: red" id = "logg" class="bmd-label-floating"></label>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color: red" id="pass" class="bmd-label-floating"></label>

                        </div>
                    </div>

                </div>




                <div class="modal-footer">
                    <button  class="btn btn-secondary" data-dismiss="modal">fermer</button>
                    <button  class="btn btn-primary ajout">Ajouter</button>
                </div>

            </div>
        </div>
    </div>
</div>
</body>

<script src="../js/jquery-3.3.1.js"></script>
<script src="TemplateBaseAdmin/js/scriptAjax.js"></script>


<!--   Core JS Files   -->
<script src="TemplateBaseAdmin/assets/js/core/jquery.min.js"></script>
<script src="TemplateBaseAdmin/assets/js/core/popper.min.js"></script>
<script src="TemplateBaseAdmin/assets/js/core/bootstrap-material-design.min.js"></script>
<script src="TemplateBaseAdmin/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="TemplateBaseAdmin/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="TemplateBaseAdmin/assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="TemplateBaseAdmin/assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="TemplateBaseAdmin/assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="TemplateBaseAdmin/assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="TemplateBaseAdmin/assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="TemplateBaseAdmin/assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="TemplateBaseAdmin/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="TemplateBaseAdmin/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="TemplateBaseAdmin/assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="TemplateBaseAdmin/assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="TemplateBaseAdmin/assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="TemplateBaseAdmin/assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->

<!-- Chartist JS -->
<script src="TemplateBaseAdmin/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="TemplateBaseAdmin/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="TemplateBaseAdmin/assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="TemplateBaseAdmin/assets/demo/demo.js"></script>



</html>