@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">
    @endsection



    @section('content')

        <div class="container cuerpo">


            <div class="row">
                <div class="span12">
                    <img src="images/servicios.jpg" alt="">
                </div>
            </div>

            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span12">
                            <h2>Servicios</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <P>

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet dolorem eaque fuga inventore necessitatibus possimus repellat! Debitis nulla rem temporibus tenetur vitae! Cumque eos eum hic ipsa odio omnis.

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda aut cumque, dignissimos, dolore, expedita fugiat in maxime molestiae natus perspiciatis qui reiciendis repellat saepe sed suscipit totam? Dolorum, nam.
                            </P>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum explicabo impedit ipsam magni nulla quia repellendus reprehenderit sunt? Accusamus accusantium dolor eos id, in libero perspiciatis. Fugit, quod, sed.
                            </p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consequatur culpa dignissimos et itaque, mollitia nam nostrum possimus praesentium quae quis quod sequi similique suscipit tempora totam? Nemo, provident!</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque facilis hic labore maxime necessitatibus nobis non, pariatur quia quibusdam recusandae sapiente sequi, sint, temporibus? Assumenda atque enim maiores quod sapiente!</p>
                        </div>
                    </div>



                </div>

            </div>


        </div>
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

