<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Indual - El lugar adecuado para tener un buen descanso</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->



    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet-responsive.min.css')}}">
    {{--<link href="css/camera.min.css" rel="stylesheet">--}}


    @yield('stylesheet')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <!--<script src="../assets/js/html5shiv.js"></script>-->
    <![endif]-->
    <!-- Fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
     <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">-->
    <link rel="shortcut icon" href="{{ asset('favicon.ico')  }}">

</head>
<body>
<!-- header -->
<div id="header" class="clearfix" >
    <div class="container">
        <a class="logo" href="{{ route('home') }}">
        </a>
        <div class="menu">
            <div class="navbar navbar-top">
                <ul class="nav" id="navigation">
                    <li class="dropdown active">
                        <a href="{{ route('home') }}" class="dropdown-toggle"><i class="icon-home"></i> INICIO </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('about') }}" class="dropdown-toggle"> QUIENES SOMOS </a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('products') }}" class="dropdown-toggle"  >VENTA DE MAQUINARIAS</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('services') }}" class="dropdown-toggle"  >SERVICIOS</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('infrastructure') }}" class="dropdown-toggle">INFRAESTRUCTURA</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('contact') }}" class="dropdown-toggle"  >CONTACTENOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-- /header -->


@yield('content')

{{--FOOOTER--}}
<footer>
    <div class="container">
        <div class="row-fluid p-top p-bottom ">
            <div class="span4 text-copy-right ">
                <p>Av. Oscar R. Benavides No 1605 (Ex-Colonial) Urb. Trinidad Lima 1 Telefax: 425-6586 / 424-2274 - Nextel: 830*6019 / 0*6674 / 816*4920 - RPM: *308005</p>
            </div>
            <div class="span7 menu-footer">

                <div class="navbar navbar-top">
                    <ul class="nav" id="navigation">
                        <li class="dropdown active">
                            <a href="{{ route('home') }}" class="dropdown-toggle"><i class="icon-home"></i> INICIO </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('about')}}" class="dropdown-toggle"> QUIENES SOMOS </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('products')}}" class="dropdown-toggle" data-toggle="dropdown">VENTA DE MAQUINARIAS</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('services')}}" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('infrastructure')}}" class="dropdown-toggle">INFRAESTRUCTURA</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ route('contact')}}" class="dropdown-toggle" data-toggle="dropdown">CONTACTENOS</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="span1">
                <div class="social">
                    <div class="social-facebook  ">
                        <a target="_blank" href="#" alt="facebook">facebook</a>
                    </div>
                    <div class="social-twitter  ">
                        <a target="_blank" href="#" alt="twitter">twitter</a>
                    </div>
                    <div class="social-google  ">
                        <a target="_blank" href="#" alt="google">google</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{!! Html::script('js/jquery-1.8.3.min.js')  !!}
{!! Html::script('js/bootstrap.js')  !!}

{!! Html::script('js/bootstrap-dropdown.js') !!}
{!! Html::script('js/selectnav.min.js') !!}
{!! Html::script('js/jquery.easing.1.3.js') !!}
{!! Html::script('js/camera.js') !!}

@yield('scriptPlugin')

<script type="text/javascript">
    //Menu dropdown
    $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).show();
        $(this).addClass('open');
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).hide();
        $(this).removeClass('open');
    });

    $('.dropdown-menu li').hover(function() {
        $(this).find('.sub-menu').stop(true, true).show();
        $(this).addClass('open');
    }, function() {
        $(this).find('.sub-menu').stop(true, true).hide();
        $(this).removeClass('open');
    });
    // Forma de combo Responsive nav al menu
    selectnav('navigation', {
        label: 'SELECIONAR...',
        autoselect: false,
        nested: true,
        indent: '--'
    });
    selectnav('navigation-footer', {
        label: 'SELECIONAR...',
        autoselect: false,
        nested: true,
        indent: '--'
    });


</script>
</body>
</html>

