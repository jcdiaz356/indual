@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">
@endsection



@section('content')

        <!-- SLIDER -->
    <section id="slider">

        <div class="fluid_container">
            <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                <div  data-src="images/slides/foto1.jpg">
                </div>
                <div  data-src="images/slides/foto2.jpg">
                </div>
                <div  data-src="images/slides/foto3.jpg">
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

