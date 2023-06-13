
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V8</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <script src="../jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
</head>
<body>


<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
           <div class="login100-form validate-form p-l-55 p-r-55 p-t-178"   ><!-- Remplace form  par div  -->
					<span class="login100-form-title">
						ADMIN
					</span>
                    <div class="error" ><p id="eroor"></p></div>
                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" id="login" type="text" name="username" placeholder="Nom d'administrateur">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" id="pass" type="password" name="pass" placeholder="Mote de passe ">
                    <span class="focus-input100"></span>
                </div>



                <div class="container-login100-form-btn">
                    <button style="margin-top: 70px"  class="login100-form-btn btnsubmit">
                        se connecter
                    </button>
                </div>
                <div style="color: red" class="eroor"> <p id="eroor"></p></div>

                <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">

						</span>

                    <a href="#" class="txt3">

                    </a>
                </div>
           </div>
        </div>
    </div>
</div>



<!--    ************************ Model Dialog ********************* -->
<div id="dialog-message" title="Probleme securite">
    <center><p id = "errorModal" style="color: red">
            <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>

        </p>
    </center>


</div>






<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src="js/AjaxScript.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script

</body>
<!--<script>
    $(function(){
        //$(".eroor").hide();
        $( "#dialog-message" ).hide();

        $(".btnsubmit").click(function(){
            var logg = $("#login").val();
            var pass = $("#pass").val();
            console.log(pass);
            console.log(login);




            $.ajax({
                url:'../../../Controller/AdminController/LoginAdmin.php',
                method:'POST',
                data:{login:logg,
                      password:pass},
                success:function (data) {
                    if (logg.length > 0 && pass.length >0)
                       {   if (data == "succes")
                           {
                              $(location).attr('href', '../../EspaceAdmin/TemplateAdmin/examples/admin.php');
                           }
                           else {

                           $("#errorModal").append(data);
                           $( "#dialog-message" ).dialog({
                               modal: true,
                               buttons: {
                                   Ok: function() {
                                       $( this ).dialog( "close" );

                                   }
                               }

                           });

                         //  $(".eroor").html(data);
                               }

                        }
                        else if (logg.length == 0 )
                        {
                            alert("Taper Votre login s ' il vous plait ");

                        }
                        else if( pass.length ==0)
                    {
                        alert("Taper Votre Mote de passe s ' il vous plait");
                    }
                        else  {


                        $('#pass').validate({ // initialize the plugin
                            // rules & options,
                            errorPlacement: function(error, element) {
                                element.attr("placeholder", error.text());
                            }
                        });




                    }

                }


            });


        });




    });

</script>-->
</html>