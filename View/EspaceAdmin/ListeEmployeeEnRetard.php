
<?php include "VerifSession.php" ?>


<?php
include "../../Controller/AdminController/AdminController.php";

$gsadmin=new AdminController();
$emp=array();
$emp=$gsadmin->RecupererListDeRetard();
$n=count($emp);

?>





<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="TemplateAdmin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="TemplateBaseAdmin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Espace Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="TemplateBaseAdmin/assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="TemplateBaseAdmin/assets/demo/demo.css" rel="stylesheet" />
    <link href="../css/adminprofil.css" rel="stylesheet" />
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
            <div class="col-md-10">
                <div class="card">

                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Admin</h4>
                        <p class="card-category">Liste des Employee</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    Nom
                                </th>
                                <th>
                                    Prenom
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telephone
                                </th>
                                <th>
                                    Durre
                                </th>
                                <th>
                                    Motif
                                </th>

                                <th>
                                    Date
                                </th>

                                <th>
                                 <center>   Envoyer un Mail </center>
                                </th>


                                </thead>
                                <tbody>
                                <?php
                                for($i=0;$i<$n;$i++)
                                {


                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $emp[$i]['codeemp'] ?>
                                        </td>
                                        <td>
                                            <?php echo $emp[$i]['nom'] ?>
                                        </td>
                                        <td>
                                            <?php echo $emp[$i]['prenom'] ?>
                                        </td>
                                        <td>
                                            <?php echo $emp[$i]['email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $emp[$i]['tel'] ?>
                                        </td>


                                        <td  class="text-primary">
                                            <?php echo  $emp[$i]['duree'] ?>
                                        </td>
                                        <td  class="text-primary">
                                            <?php echo  $emp[$i]['motif'] ?>
                                        </td>

                                        <td  class="text-primary">
                                            <?php echo  $emp[$i]['datej'] ?>
                                        </td>
                                        <td>
                                            <button id="<?php echo $emp[$i]['codeemp']; ?>" class="btn btn-primary pull-right edit " data-toggle="modal" data-target="#exampleModal">
                                                envoyer mail
                                            </button>
                                        </td>






















                                    </tr>
                                <?php }?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Envoyer Un Email </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="../../Controller/AdminController/sendmail.php" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Mail</label>
                                    <input id="mail" name = "email" type="text" class="form-control" required>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Objet  </label>
                                    <input  id="objet" name = "objet" type="text" class="form-control">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Content  </label>
                                   <textarea name="contenu" rows="10" cols="30"></textarea>
                                </div>
                            </div>
                        </div>




                        <div class="clearfix">


                        </div>
                        <div class="modal-footer">
                            <button  class="btn btn-secondary" data-dismiss="modal">ferme</button>
                            <input type="submit"  name="submit" value="Envoyer" class="btn btn-primary modifier" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</body>


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

<script >

    $(function () {

        $(".edit").click(function () {

            var code=$(this).attr('id');
            console.log(code);
            $.ajax({
                url:'../../Controller/EmployeController/ListeJsonEmployye.php',
                method:'post',
                data:{code:code},
                dataType:'json',
                success:function (data) {

                    var  obj = jQuery.parseJSON(JSON.stringify(data));
                    $(".hide").val(obj[0].codeemp);
                    console.log($(".hide").val());

                    $("#mail").val(obj[0].email);

                    console.log(obj[0].nom);


                },



            });




        });

    });
</script>

