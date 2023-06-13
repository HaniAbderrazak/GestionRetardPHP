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

                    $(location).attr('href', '../AdminProfile.php');
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