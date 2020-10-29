@foreach ($Equipo as $equipo)
@foreach ($Settings as $settings)
@foreach ($Usuario as $usuario)
@if($equipo->id==$id && $settings->id==1 && $usuario->id==$equipo->id_cliente)
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ORDEN #{{$equipo->id}}</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="../css/main.css" rel="stylesheet" type="text/css">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <style>
        /**THE SAME CSS IS USED IN ALL 3 DEMOS**/
        /**gallery margins**/
        ul.gallery {
            margin-left: 3vw;
            margin-right: 3vw;
        }

        .zoom {
            -webkit-transition: all 0.35s ease-in-out;
            -moz-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in;
        }

        .zoom:hover,
        .zoom:active,
        .zoom:focus {
            /**adjust scale to desired size,
    add browser prefixes**/
            -ms-transform: scale(2.5);
            -moz-transform: scale(2.5);
            -webkit-transform: scale(2.5);
            -o-transform: scale(2.5);
            transform: scale(2.5);
            position: relative;
            z-index: 100;
        }

        /**To keep upscaled images visible on mobile,
    increase left & right margins a bit**/
        @media only screen and (max-width: 768px) {
            ul.gallery {
                margin-left: 15vw;
                margin-right: 15vw;
            }

            /**TIP: Easy escape for touch screens,
    give gallery's parent container a cursor: pointer.**/
            .DivName {
                cursor: pointer
            }
        }
    </style>

    <style>
        @import url(http://fonts.googleapis.com/css?family=Bree+Serif);

        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Bree Serif', serif;
        }
    </style>

    <div class="container">
        <div class="row">

            <div class="col-xs-1">
                @if($settings->setting_logo=="")
                <h6><a href=" "><img alt="{{$settings->setting_logo}}" src="{{$settings->setting_logo}}" /></a></h6>
                @else
                <h6><a href=" "><img alt="{{$settings->setting_logo}}" src="{{$settings->setting_logo}}" /></a></h6>
                @endif
            </div>
            <div class="col-xs-5">
                <!-- <img src="../fotos/{{$equipo->id_captura}}" alt="">-->

                <h5><a href=""><img alt="" />
                        <p>{{$settings->setting_nombre}}</p>
                        <p>{{$settings->setting_direccion}}</p>
                        <p>{{$settings->setting_contacto}}</p>
                        <p>{{$settings->setting_telefono}}</p>
                    </a>
                </h5>

            </div>
            <div class="col-xs-6 text-right">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>ORDEN</h1>

                    </div>
                    <div class="panel-body">
                        <h4>ORDEN Nº :
                            <a href="#">#{{$equipo->id}}</a>
                        </h4>
                    </div>
                </div>
            </div>

            <hr />

            <h1 style="text-align: center;">Revision de Orden</h1>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Fecha Alta Orden : {{$equipo->fecha_recibido}} </h4>
                            <h4>Fecha Posible Entrega Orden : {{$equipo->fecha_entrega}}</h4>
                            <h4>Status :
                                @if($equipo->status==0)
                                Recibido
                                @elseif($equipo->status==1)
                                En Revision
                                @elseif($equipo->status==2)
                                Cancelado
                                @elseif($equipo->status==3)
                                Espera
                                @elseif($equipo->status==4)
                                A espera de Cliente(Contactarse a Sucursal)
                                @elseif($equipo->status==5)
                                Listo(Para entregar)
                                @elseif($equipo->status==6)
                                Entregado
                                @endif</h4>

                        </div>
                        <div class="panel-body">

                            <h4>Cliente :
                                <a href="#">@if($equipo->id_cliente==$usuario->id){{$usuario->name}}@endif</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </h4>
                            <h4>Tecnico : 
                                <a href="#">@if($usuario->id == $equipo->id_user) {{$usuario->name}} @endif</a>
                             
                            </h4>
                        </div>
                    </div>
                </div>

            </div>

            <pre></pre>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">
                            <h4>Revision de componentes :</h4>
                        </th>
                        <th style="text-align: center;">
                            <h4>Diagnostico Previo :</h4>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3" style="text-align: center;">
                            <div class="col-6-md">
                                <div class="form-group">
                                    <div class="card text-left">
                                        <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Tiene_Camara"
                                                    name="Tiene_Camara" @if($equipo->Tiene_Camara !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox1">Camara</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Centro_Carga"
                                                    name="Centro_Carga" @if($equipo->Centro_Carga !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox2">Centro
                                                    Carga</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Señal" name="Señal"
                                                    @if($equipo->Señal !='') checked @endif disabled >
                                                <label class="form-check-label" for="inlineCheckbox3">Señal</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="LectorSD"
                                                    name="LectorSD" @if($equipo->LectorSD !='') checked @endif disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">LectorSD</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="AltaVoz"
                                                    name="AltaVoz" @if($equipo->AltaVoz !='') checked @endif disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">AltaVoz</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="BotonHome"
                                                    name="BotonHome" @if($equipo->BotonHome !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">BotonHome</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Microfono"
                                                    name="Microfono" @if($equipo->Microfono !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Microfono</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Lector_SIM"
                                                    name="Lector_SIM" @if($equipo->Lector_SIM !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Lector SIM</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Volumenplus"
                                                    name="Volumenplus" @if($equipo->Volumenplus !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Volumen +</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Volumenless"
                                                    name="Volumenless" @if($equipo->Volumenless !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Volumen -</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Encendido"
                                                    name="Encendido" @if($equipo->Encendido !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Encendido</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Auricular"
                                                    name="Auricular" @if($equipo->Auricular !='') checked @endif
                                                disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Auricular</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Touch" name="Touch"
                                                    @if($equipo->Touch !='') checked @endif disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Touch</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="Bateria"
                                                    name="Bateria" @if($equipo->Bateria !='') checked @endif disabled>
                                                <label class="form-check-label" for="inlineCheckbox3">Bateria</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td rowspan="3" style="text-align: center;"><a href="#">
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <div class="card text-left">
                                            <div class="card-body">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Enciende"
                                                        name="Enciende" @if($equipo->Enciende !='') checked @endif
                                                    disabled>
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Enciende?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Memoria"
                                                        name="Memoria" @if($equipo->Memoria !='') checked @endif
                                                    disabled>
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Memoria?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="SIM" name="SIM"
                                                        @if($equipo->SIM !='') checked @endif disabled>
                                                    <label class="form-check-label" for="inlineCheckbox3">SIM?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Golpes"
                                                        name="Golpes" @if($equipo->Golpes !='') checked @endif disabled>
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Golpes?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Bateria"
                                                        name="Bateria" @if($equipo->Bateria !='') checked @endif
                                                    disabled>
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Bateria?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <pre></pre>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="text-align: center;">
                            <h4>SERIAL/IMEI</h4>
                        </th>
                        <th style="text-align: center;">
                            <h4>Concepto</h1>
                        </th>
                        <th style="text-align: center;">
                            <h4>Adelanto</h4>
                        </th>
                        <th style="text-align: center;">
                            <h4>Total</h4>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="text-align: center;">@if($equipo->imei==''){{$equipo->serial}}@else {{$equipo->imei}}
                            @endif</td>
                        <td><a href="#"> {{$equipo->id_comentario}} </a></td>
                        <td class=" text-right "> {{$equipo->pago}}</td>
                        <td class=" text-right "> {{$equipo->presupuesto}}</td>

                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: right;">Total {{$settings->moneda}}</td>
                        <td style="text-align: right;"><a href="#"> @php $temporal= $equipo->presupuesto-$equipo->pago;
                                @endphp {{$temporal}}</a></td>

                    </tr>
                    <tr>
                        <td class="text-danger" colspan="4" style="text-align: right;">LA PRESENTE INFORMACION PUEDE
                            CAMBIAR DE UN MOMENTO A OTRO POR TANTO ESTA INFORMACION NO ES 100% FIABLE HASTA LA VERSION
                            FINAL</td>
                    </tr>
                </tbody>
            </table>
            <pre></pre>

            <div class="row">
                <div class="col-xs-4">
                    <h1><a href=" "><img alt="" src="../{{$id}}.png" /></a></h1>
                </div>
                <div class="col-xs-8">
                    <div class="panel panel-info" style="text-align: right;">
                        <h6> "Este documento no representa un documento legal ni administrativo y no conlleva ninguna
                            accion legal"</h6>
                    </div>

                </div>
            </div>

        </div>
    </div>
</head>
<ul class="list-inline gallery">

    <div class="container">
        <h1>Orden : # {{$id}}</h1>
        <div class="row">

            @foreach ($Captura as $captura)
            @if($captura->id_equipo==$id)
            @foreach ($Usuario as $usuario)
            @if($usuario->id==$captura->id_user)
            <h3>Tecnico:{{$usuario->name}}</h3>
            @endif
            @endforeach
            <div class="col-md-12">
                <li><img class="thumbnail zoom " src="../fotos/{{$captura->captura}}" style="border-radius:40px;"></li>
                <textarea class="form-control mt-2" name="" id="" cols="30"
                    rows="10">{{$captura->descripcion}}</textarea>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</ul>

<body>
</body>

<!-- Modal -->
<div class="modal fade" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white">Atencion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="card text-left">
                        <div class="card-body">
                            <h4 class="card-title">IMPORTANTE</h4>
                            <p class="card-text">Estimado:
                                @if($equipo->id_cliente==$usuario->id){{$usuario->name}}@endif LA PRESENTE PAGINA SOLO
                                REPRESENTA LA INFORMACION ACERCA DEL EQUIPO HASTA EL MOMENTO Y PUEDE SER CAMBIADA DE UN
                                MOMENTO A OTRO LE PEDIMOS DE LA MANERA MAS ATENTA QUE ESTA INFORMACION SOLO LA TOME PARA
                                CONSULTAR COMO VA SU EQUIPO Y CON NINGUN MOTIVO MAS SI REQUIERE MAS INFORMACION ACERCA
                                DE SU EQUIPO PUEDE CONTACTARSE A {{$settings->setting_telefono}} en un horario de
                                {{$settings->setting_abierto}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#modal_info').modal('show');
</script>

</html>
@endif
@endforeach
@endforeach
@endforeach