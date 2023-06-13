$(function () {

    $(".ajout").click(function () {
        var login=$("#login").val();
        var password=$("#password").val();
        if(login.length == 0 && password.length==0)
        {

            $("#logg").append(" Identifiant  Obligatoire ");
            $("#pass").append(" Mot de Passe Obligatoire ");

        }

        else if (login.length ==0)
        {     if(password.length != 0){$("#password").hide();}
            $("#logg").append(" l'identifiant est obligatoire ");
        }

        else if (password.length ==0)
        {     if(login.length != 0){$("#logg").hide();}
            $("#pass").append(" mot de passe obligatoire ");
        }
        else{

            $.ajax({
                url:'../../Controller/AdminController/AjoutAdmin.php',
                method:'POST',
                data:{login:login,
                    password:password},
                success:function (data) {
                    if (login.length > 0 && password.length >0)
                    {   if (data == "succes")
                    {

                        alert("Admin " + login + " est Ajouter avec succes" )
                        $(location).attr('href', 'AdminProfile.php');
                    }
                    else {

                        alert(data );
                        $(location).attr('href', 'AdminProfile.php');
                        $( "#dialog-message" ).dialog({
                            modal: true,
                            buttons: {
                                Ok: function() {
                                    $( this ).dialog( "close" );

                                }
                            }

                        });

                        //  $(".error").html(data);
                    }

                    }


                }


            });
        }



    });

});

