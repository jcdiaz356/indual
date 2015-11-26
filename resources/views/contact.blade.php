@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">



    <link href="{{asset('plugins/validationEngine/validationEngine.jquery.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/infobox/src/infobox.js"></script>

    <script>
        /* Inicializa Mapa*/
        function initialize() {
            var secheltLoc = new google.maps.LatLng(-12.0481833, -77.0614333);
            var myMapOptions = {
                //center: secheltLoc,
                center: new google.maps.LatLng(-12.0484667, -77.0526167),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 14,
                scrollwheel: false,

                mapTypeControl: false,
                //zoomControl: false
            };
            var theMap = new google.maps.Map(document.getElementById("map_canvas"), myMapOptions);
            var image = new google.maps.MarkerImage(
                    'images/pinMap.png',
                    new google.maps.Size(136, 44),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(68, 46));
            var shadow = new google.maps.MarkerImage(
                    'images/pinMap-shadow.png',
                    new google.maps.Size(33, 26),
                    new google.maps.Point(0, 0),
                    new google.maps.Point(9, 26));
            var marker = new google.maps.Marker({
                map: theMap,
                icon: image,
                shadow: shadow,
                draggable: false,
                animation: google.maps.Animation.DROP,
                position: secheltLoc,
                visible: true
            });

            var boxText = document.createElement("div");
            boxText.innerHTML = '<div class="captionMap animated bounceInDown"><img src="images/ubicacion.jpg" class="alignleft"  alt=""> <span>INDUAL</span> Av. Oscar R. Benavides No 1605 (Ex-Colonial) Urb. Trinidad   <br> Lima 1 <br>Perú,</div>';

            var myOptions = {
                content: boxText,
                disableAutoPan: false,
                maxWidth: 0,
                pixelOffset: new google.maps.Size(-140, 0),
                zIndex: null,
                boxStyle: {
                    width: "280px"
                },

                closeBoxMargin: "10px 8px 2px 2px",
                closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif",
                infoBoxClearance: new google.maps.Size(1, 1),
                isHidden: false,
                pane: "floatPane",
                enableEventPropagation: false
            };

            google.maps.event.addListener(marker, "click", function (e) {
                ib.open(theMap, this);
            })

            var ib = new InfoBox(myOptions);
            ib.open(theMap, marker);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection



@section('content')

    <div class="cuadro_buscar">
        <div class="search-top">
            <form role="form" id="search_form_" action="javascript:;" method="POST" accept-charset="utf-8">

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" id="sendsearch" class="form-search" placeholder="Buscar..." data-trigger="manual" data-placement="top" height="10">
                <span class="input-group-btn">
                  <input id="buscar" type="submit" value="" name="sa">
                </span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- map_canvas-->
    <div id="map_canvas">

        <!-- css3 preLoading-->
        <div class="mapPerloading"> <span>Cargando</span>
            <span class="l-1"></span>
            <span class="l-2"></span>
                <span
                        class="l-3"></span>
            <span class="l-4"></span>
                 <span class="l-5">
                </span>
            <span class="l-6"></span>
        </div>
    </div>
    <!--/map_canvas -->
    <div class="wrap2">
        <div class="header-title">
            <h3>Contáctenos</h3>
        </div>
        <div class="detail2">

            <div class="row-fluid">
                <div class="span6 p-top clearfix">

                    <address>
                        <ul class="listcontact">
                            <li class="cont-phone">
                                Telefax: 425-6586 / 424-2274 <br>
                                Nextel: 830*6019 / 0*6674 / 816*4920 <br>
                                RPM: *308005
                            </li>
                            <li class="cont-email"><a href="mailto:ventas@indual.com">ventas@indual.com</a></li>
                            <li class="cont-adress"><strong>INDUAL</strong><br>
                                Av. Oscar R. Benavides No 1605 (Ex-Colonial) Urb. Trinidad   <br>

                                Lima 1 – Perú<br></li>
                        </ul>
                    </address>
                </div>
                <div class="span6 p-top clearfix">
                    <!--Success notifications-info text-->
                    <div class="notifications-error clearfix" style="display:none">
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Error!</h4>
                            Ha ocurrido un error al enviar el mensaje, intentelo mas tarde...
                        </div>
                    </div>
                    <div class="notifications-success clearfix" style="display:none">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Exito!</h4>
                            Se ha enviado correctamente su mensaje ...
                        </div>
                    </div>
                    <form class="form-horizontal" id="contactform">
                        <div class="control-group">
                            <label class="control-label">Nombre                                      </label>
                            <div class="controls">
                                <input type="text" name="yourname" id="yourname" class="validate[required] span10" data-prompt-position="topLeft:270"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Correo</label>
                            <div class="controls">
                                <input type="text" name="email" id="email" class="validate[required,custom[email]] span10"
                                        />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="textarea">Mensaje</label>
                            <div class="controls">
                                          <textarea name="Messages" class="validate[required] input-medium " id="textarea"
                                                    rows="3"></textarea>
                            </div>
                        </div>
                        <div class="control-group last">
                            <div class="controls">
                                <button type="submit" class="btn btn-small btn btn-warning">ENVIAR MENSAJE</button>
                            </div>
                        </div>
                    </form>
                </div>


            </div>



        </div>
    </div>
@endsection





@section('scriptPlugin')
    {!! Html::script('js/jquery.nicescroll.js')  !!}
    {!! Html::script('plugins/validationEngine/jquery.validationEngine.js')  !!}
    {!! Html::script('plugins/validationEngine/languages/jquery.validationEngine-es.js')  !!}



    <script>
        // ------------------------------Camera --------------------------
        $('#camera_wrap_4').camera({
            playPause: false,
            height: '500',
            loader: 'none',
            pagination: false,
            thumbnails: false,
            hover: false,
            opacityOnGrid: false,
            imagePath: 'images/',
            overlayer:false,
        });



    // ------------------------------Scrolling --------------------------
    $("#boxscroll2").niceScroll({
    touchbehavior:false,
    cursorcolor:"#F0BD0F",
    cursorborder: "1px solid #F0BD0F",
    cursoropacitymax:0.7,
    cursorwidth:6,
    background:"#ccc",
    autohidemode:false});

    </script>

    <script type="text/javascript">

                // --------- Validando y enviando el formulario de contactos---------------------



            function Contact_form(form, options){
                // text on load you change , 0: No Overlay , 1 loading with  Overlay
                //loading('Enviando',1);
                var data=form.serialize();
                $.ajax({
                    url: "http://dataservicios.com/indual/ajax/submitcontact.php",
                    data: data,
                    type: "POST",
                    dataType: 'json',
                    beforeSend:iniciandoEnvio,
                    success: llegadaEnvio,
                    error:errorEnvio,
                    cache: false

                });
                return false;
            }

    function iniciandoEnvio(){
        loading('Enviando',1);
    }

    function  llegadaEnvio(datos){
        if(datos.check==0){ // if Ajax respone datos.check =0 or not complete
            $('#preloader').fadeOut(400,function(){ $(this).remove(); });
            unloading();
            //alert("No completado");
            $('.notifications-error').slideDown(function(){
                setTimeout("$('.notifications-error').slideUp();",7000);
            });
            return false;
        }
        if(datos.check==1){ // if Ajax respone datos.check =1 or Complete
            $('.notifications-success').slideDown(function(){
                setTimeout("$('.notifications-success').slideUp();",7000);
            }); // Show  notifications box
            $('#contactform').get(0).reset();  //  reset form
            unloading();   //  remove loading
        }
        console.log("llegadaEnvio");
    }

    function errorEnvio(){
        unloading();
        $('.notifications-error').slideDown(function(){
            setTimeout("$('.notifications-error').slideUp();",7000);
        });
        $('.alert-error').text('Error en el servidor')

        console.log("errorEnvio");

    }

    // Abriendo  el overlay por medio de la función  Loading  para darle un efecto
    function loading(name,overlay) {
        $('body').append('<div id="overlay"></div><div id="preloader">'+name+'..</div>');
        if(overlay==1){
            $('#overlay').css('opacity',0.4).fadeIn(400,function(){  $('#preloader').fadeIn(400); });
            return  false;
        }
        $('#preloader').fadeIn();
    }
    // // Cerrando el overlay por medio de la función Unloading
    function unloading() {
        //$('#preloader').fadeOut(400,function(){
        //          $('#overlay').fadeOut();
        //          }).remove();
        $('#preloader').fadeOut(400).remove();
        $('#overlay').fadeOut(400).remove();
    }

    $(document).ready(function () {
        jQuery("#contactform").validationEngine({
            ajaxFormValidation: true,
            onBeforeAjaxFormValidation: Contact_form
        });
    });
    </script>
@endsection

