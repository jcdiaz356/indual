@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">
    @endsection



    @section('content')

            <!-- SLIDER -->
    <!-- SLIDER -->
    <section id="slider">
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
        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div  data-src="images/slides/servicios.png">
                </div>
                <div  data-src="images/slides/servicios.png">
                </div>
                <!-- <div  data-src="images/slides/foto3.jpg">
                </div>  -->
            </div>
        </div>
        <div class="wrap">
            <div class="header-title">
                <h3>Nosotros</h3>
            </div>
            <div class="detail">
                <div id="boxscroll2" style="overflow: hidden; outline: none;" tabindex="5001">
                    <h4>Quienes Somos</h4>
                    <p>Somos una empresa con mas de 10 años de experiencia en el sector metal mecánico especialistas en fabricación y reparación de piezas para la mineria, pesqueria, agroindustria y la industria en general.</p>
                    <h4>Visión</h4>
                    <p>Ser la empresa de metalmecanica lider del mercado nacional y la de mayor prestigio en el rubro de reconstrucción de partes y componentes reconocida por su calidad, rapides y cumplimiento: orientada a brindar soluciones integrales para su empresa.</p>
                </div>

            </div>
        </div>

    </section>
@endsection



@section('scriptPlugin')
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
    </script>
@endsection

