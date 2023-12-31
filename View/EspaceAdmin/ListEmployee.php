
<?php include "VerifSession.php" ?>








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
<?php
include "../../Controller/EmployeController/GestionEmployye.php";

$gsemployee=new GestionEmployye();
$emp=array();
$emp=$gsemployee->RecupererEmployee();
$n=count($emp);

?>
<input type="hidden" class="hide" />
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
            <div class="col-md-12">
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
                                    Identifiant
                                </th>
                                <th>
                                    Tel
                                </th>
                                <th>
                                  <center>  Modifier</center>
                                </th>
                                <th>
                                  <center>Suprimmer</center>
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
                                    <td class="text-primary">
                                        <?php echo $emp[$i]['login'] ?>
                                    </td>
                                    <td>
                                        <?php echo $emp[$i]['tel'] ?>
                                    </td>
                                    <td>
                                        <button id="<?php echo $emp[$i]['codeemp']; ?>" class="btn btn-primary pull-right edit " data-toggle="modal" data-target="#exampleModal">
                                            Modifier
                                        </button>
                                    </td>
                                    <td>
                                        <button onclick="return confirm('Voules est vous Suprimmer ?')" id="<?php echo $emp[$i]['codeemp']; ?>" class="btn btn-danger pull-right delete">Supprimer</button>
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
</body>
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

                <form method="post" action="../../Controller/EmployeController/AjoutEmployee.php">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Nom</label>
                                <input id="nom" name = "nom" type="text" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Prenom</label>
                                <input id="prenom" name = "prenom" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Email</label>
                                <input  id="email" name = "email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Telephone</label>
                                <input id="tel" name = "tel" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Adresse</label>
                                <input id="adresse" name = "adresse" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="bmd-label-floating">Sexe</label>
                                <select id="sexe"  name = "sexe" class="browser-default custom-select" required>
                                    <option value="" disabled selected>votre option</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Identifiant</label>
                                <input id="login"  name = "login" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="bmd-label-floating">Mot de Passe</label>
                                <input id="password"  name = "password" type="password" class="form-control" required>
                            </div>
                        </div>

                    </div>


                    <div class="clearfix">


                    </div>
                </form>





                <div class="modal-footer">
                    <button  class="btn btn-secondary" data-dismiss="modal">ferme</button>
                    <button  class="btn btn-primary modifier">Modifier</button>
                </div>

            </div>
        </div>
    </div>
</div>
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
<script>
    $(function () {
      // $("#nom").attr('value','fdvdv');

        $(".delete").click(function () {
            var code = $(this).attr('id');
            $.ajax({
                url:'../../Controller/EmployeController/SuprimerEmployye.php',
                method:'POST',
                data:{code:code},
                success:function (dataa ) {
                    alert(dataa);
                    $(location).attr('href', 'ListEmployee.php');

                }

            });



        });
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
                  $("#nom").val(obj[0].nom);
                  $("#prenom").val(obj[0].prenom);
                  $("#email").val(obj[0].email);
                  $("#tel").val(obj[0].tel);
                  $("#adresse").val(obj[0].Adresse);
                  $("#sexe").val(obj[0].sexe);
                  $("#login").val(obj[0].login);
                  $("#password").val(obj[0].mdp);
                  console.log(obj[0].nom);


              },



          });




      });
        $(".modifier").click(function () {
            var code= $(".hide").val();
            console.log(code);
            var nom =  $("#nom").val();
            var prenom = $("#prenom").val();
            var email =    $("#email").val();
            var tel=  $("#tel").val();
            var adresse = $("#adresse").val();
            var sexe = $("#sexe").val();
            var login=  $("#login").val();
            var password = $("#password").val();
            $.ajax({
                url:'../../Controller/EmployeController/ModifierEmploye.php',
                method:'POST',
                data:{code:code,
                    nom:nom,
                    prenom:prenom,
                    email:email,
                    tel:tel,
                    adresse:adresse,
                    sexe:sexe,
                    login:login,
                    password:password







                },
                success:function (data) {
                    alert(data);
                    $(location).attr('href', 'ListEmployee.php');

                },

            });

        });



    });

</script>