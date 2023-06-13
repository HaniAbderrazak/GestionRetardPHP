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
    <link href="TemplateEmployee/bootstrap.min.css" rel="stylesheet" />
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
                    <a class="navbar-brand" >Employee Profile</a>
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
                                <h4 class="card-title">Employee </h4>
                                <p class="card-category">Profile</p>
                            </div>
                            <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <span class="label label-info">Nom : </span>
                                                <label  id="nom" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="label label-info">Prenom : </span>
                                                <label id="prenom" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="label label-info">Sexe : </span>
                                                <label id="sexe" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="label label-info">Telephone : </span>
                                                <label id="tel" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="label label-info">Adresse : </span>
                                                <label id="adresse" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span class="label label-info">Email  : </span>
                                                <label id="email" class="bmd-label-floating"> </label>
                                            </div>
                                        </div>


                                    </div>


                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-avatar">
                                <a href="#pablo">
                                    <img class="img" src="TemplateEmployee/img/sw.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-gray">PDG / CO-FONDATEUR</h6>
                                <h4  class="card-title">Ben Aicha Seifeddine</h4>
                                <p class="card-description">
                                    Merci pour votre travail. Je souhaitais prendre le temps de vous dire que personne d'autre que vous pourrait faire un meilleur travail que celui que vous faites. Je vous remercie pour votre implication. Sincères félicitations pour le travail que vous avez réalisé cette semaine.
                                </p>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-danger card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">info_outline</i>
                                </div>
                                <p class="card-category"> Retard(Jour)</p>
                                <h3 class="card-title"><strong id="nbrjour"></strong></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">local_offer</i> Tracked from Github
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <p class="card-category"> Retard(Minute)</p>
                                <h3 class="card-title"><strong id="nbrminute"></strong>
                                    <small>Minute</small>
                                </h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons text-danger">warning</i>
                                    <a href="#pablo">Faire attention</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header card-header-success card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">store</i>
                                </div>
                                <p class="card-category">Soustraction de congé</p>
                                <h3 class="card-title">- <strong id="nbrconge"></strong> <small>Minute</small></h3>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> Last 24 Hours
                                </div>
                            </div>
                        </div>
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
        var code=$("#code").val();
        console.log(code);
       $.ajax({
            url:'../../Controller/EmployeController/ListeJsonEmployye.php',
            method:'post',
            data:{code:code},
            dataType:'json',
            success:function (data) {

                var  obj = jQuery.parseJSON(JSON.stringify(data));
                $("#nom").append(obj[0].nom);
               $("#prenom").append(obj[0].prenom);
                $("#email").append(obj[0].email);
                $("#tel").append(obj[0].tel);
                $("#adresse").append(obj[0].Adresse);
                $("#sexe").append(obj[0].sexe);

                console.log(obj[0].nom);


            },



        });



        $.ajax({
            url:'../../Controller/EmployeeRetardController/RecupererNombreRetardParJour.php',
            method:'post',
            data:{code:code},
            success:function (jour) {
                $("#nbrjour").append(jour);




            },



        });
        $.ajax({
            url:'../../Controller/EmployeeRetardController/RecupererNombreRetardParMinute.php',
            method:'post',
            data:{code:code},
            success:function (minute) {
                $("#nbrminute").append(minute);
                $("#nbrconge").append(minute);




            },



        });
    });

</script>
<script>
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
</body>

</html>
