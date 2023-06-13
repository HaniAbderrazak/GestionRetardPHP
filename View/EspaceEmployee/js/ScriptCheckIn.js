$(function () {
    $("#autre").hide();

    $(".chIn").click(function () {

        var datej=$("#datej").val();
        var code=$("#code").val();

        if($("#check").is(':checked'))
        {
            console.log($("#idcheck").val());

            $.ajax({
                url:'../../Controller/CheckInController/AjoutChechkIN.php',
                method:'post',
                data:{codeemp:code,
                    datej:datej

                },
                success:function(data){
                    if(data=="succes")
                    {
                            $.ajax({
                            url:'../../Controller/CheckInController/DureeDeRetardEnMinute.php',
                            method:'post',
                            data:{datej:datej},
                            success:function (dataa) {

                                console.log(dataa);

                                //alert('Envoyer vers Motif Retard');
                                if(dataa >30)
                                {
                                    alert("t'arrive en retard pendant plus de 30 minute");
                                    $(".modal").show(1000);
                                    $("select.custom-select").change(function () {
                                        var selectedCountry = $(this).children("option:selected").val();
                                        console.log("You have selected the country - " + selectedCountry);
                                        if (selectedCountry == "") {
                                            $("#autre").show(200);
                                            // $(".motif").hide(200);


                                        }
                                        else {
                                            $("#autre").hide(200);

                                        }
                                    });
                                }
                                else {
                                    alert("Bonjour !");
                                }
                                //  $(".fade").show();
                                /*  var duree=parseInt(dataa);
                                  $("#dure").val(duree);*/

                            }

                        });


                    }else{
                        $.ajax({
                            url:'../../Controller/EmployeeRetardController/VerifEmployyeRetard.php',
                            method:'post',
                            data:{datej:datej},
                            success:function (data3) {
                                if(data3=="succes")
                                {
                                    alert(data);
                                }
                                else{

                                    /*   //Nouvelle script ajax pour Recuperer le valeur de retard
                                      var dure=$("#dure").val();
                                      console.log(dure);*/
                                    $.ajax({
                                        url:'../../Controller/CheckInController/DureeDeRetardEnMinute.php',
                                        method:'post',
                                        data:{datej:datej},
                                        success:function (dure) {

                                            console.log(dure);

                                            // alert("Envyer vers page Motif Retard cars Mawjoud fl checkIN est non pas declare le motif");
                                            if(dure >30) {
                                                alert("t'arrive en retard pendant plus de 30 minute");
                                                $(".modal").show(1000);
                                                $("select.custom-select").change(function () {
                                                    var selectedCountry = $(this).children("option:selected").val();
                                                    console.log("You have selected the country - " + selectedCountry);
                                                    if (selectedCountry == "") {
                                                        $("#autre").show(200);
                                                        // $(".motif").hide(200);


                                                    }
                                                    else {
                                                        $("#autre").hide(200);

                                                    }
                                                });
                                            }
                                            else{
                                                alert("bonjour !");
                                            }
                                            //     $(".fade").show();
                                            /*  var duree=parseInt(dataa);
                                              $("#dure").val(duree);*/

                                        }

                                    });



                                }
                                // console.log(data3);
                            }

                        });
                        //if succes Verif dateetcodeemp alert(data)
                        // alert(data);
                    }

                }

            });




        }
        else {alert("Il faut Verifier Votre Check IN pour  Aujourd'hui");}

    });

    /*$(".chechin").click(function () {
        var datej=$("#datej").val();
        //  console.log(datejj);
        $.ajax({
            url:'../../Controller/CheckInController/DureeDeRetardEnMinute.php',
            method:'post',
            data:{datej:datej},
            success:function (dataa) {
                //  alert(dataa);
                console.log(dataa);
            }

        });

    });*/




});