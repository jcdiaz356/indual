@extends('layouts.default')


@section('stylesheet')
    <link href="{{asset('css/camera.min.css')}}" rel="stylesheet">
    @endsection



@section('content')

    <div class="container cuerpo">

        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span12">
                        <h2>Productos</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="span5 p-top p-bottom">
                        <img src="images/producto.jpg" alt="">
                    </div>
                    <div class="span7 p-top p-bottom">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#home">DESCRIPCIÓN</a></li>
                            <li><a href="#profile">ESPECIFICACIONES</a></li>
                            <li><a href="#messages">COMPRAR</a></li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <h4>Texto 1</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab harum hic iste reprehenderit saepe.
                                    Commodi molestiae quo totam. Aliquid ducimus est explicabo illum ipsum non officia quisquam quo repellat tempore?</p>
                                <h4>Texto 2</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam at beatae blanditiis cumque cupiditate, debitis illum, ipsam itaque modi natus nostrum odio odit placeat quia temporibus veritatis vitae voluptas?</p>
                                <ul>
                                    <li>lista 1</li>
                                    <li>Lista2</li>
                                    <li>Lista 3</li>
                                    <li>Lista 4</li>
                                    <li>Lista 5</li>
                                    <li>Lista 6</li>
                                </ul>
                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, labore, quod. Culpa, cum, cumque dolorem dolores est excepturi facilis fugiat, laboriosam magnam nemo neque porro quam reiciendis soluta sunt unde.</p>
                            </div>
                            <div class="tab-pane" id="profile">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at blanditiis
                                consequuntur et eveniet fuga, ipsum itaque labore molestiae neque non obcaecati perspiciatis placeat, quaerat quam, quibusdam rerum sequi voluptate.
                            </div>
                            <div class="tab-pane" id="messages">

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
                                <div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab beatae cumque deserunt dolorem doloribus dolorum eligendi eos explicabo, laboriosam libero molestias nostrum odio perspiciatis repellat repellendus suscipit tempora voluptatem. Dolorem.</p>
                                </div>
                                <form class="form-horizontal" id="contactform">
                                    <div class="control-group">
                                        <label class="control-label">Nombre                                      </label>
                                        <div class="controls">
                                            <input type="text" name="yourname" id="yourname" class="validate[required] " data-prompt-position="topLeft:270"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Correo</label>
                                        <div class="controls">
                                            <input type="text" name="email" id="email" class="validate[required,custom[email]] "
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

                <!-- content product 1r ow-->
                <div class="row">
                    <div class="span12">

                    </div>
                </div>
                <!-- content product 1r ow-->

            </div>

        </div>
    </div>

@endsection



@section('scriptPlugin')
    <script>
        // ------------------------------Camera --------------------------


        //Activando el tab de navegación

        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })


    </script>
@endsection

