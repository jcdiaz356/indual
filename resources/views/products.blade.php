@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">
    @endsection



@section('content')

        <div class="container cuerpo">
            <div class="row">
                <div class="span12">
                    <img src="images/productos.jpg" alt="">
                </div>

            </div>
            <div class="row">
                <div class="span12">
                    <div class="row">
                        <div class="span12">
                            <h2>Productos</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span12">
                            <P>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet dolorem eaque fuga inventore necessitatibus possimus repellat! Debitis nulla rem temporibus tenetur vitae! Cumque eos eum hic ipsa odio omnis.
                            </P>
                        </div>
                    </div>
                    <!-- Paginator-->
                    <DIV class="row">
                        <div class="span12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Ant.</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Sig.</a></li>
                                </ul>
                            </div>
                        </div>
                    </DIV>
                    <!-- End paginator-->
                    <!-- content product 1r ow-->
                    <div class="row">
                        <div class="span12">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="{{ route('productDetail') }}" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="{{ route('productDetail') }}" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="{{ route('productDetail') }}" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="{{ route('productDetail') }}" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>
                    <!-- content product 1r ow-->
                    <div class="row">
                        <div class="span12">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="#" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="#" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="#" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="span3">
                                    <div class="thumbnail">
                                        <img  alt="" src="images/producto.jpg" >
                                        <div class="caption">
                                            <h3>PRODUCTO 1l</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p class="text-center">
                                                <a href="#" class="btn primary btn-warning">MAS INFORMACIÓN</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </div>


                    <!-- Paginator-->
                    <DIV class="row">
                        <div class="span12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Ant.</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Sig.</a></li>
                                </ul>
                            </div>
                        </div>
                    </DIV>
                    <!-- End paginator-->
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

