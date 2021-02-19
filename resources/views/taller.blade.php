@include('header2')@foreach ($Settings as $setting)@endforeach
@foreach ($Promocion as $promocion)@endforeach
@php
date_default_timezone_set('UTC');
$contador=0;
@endphp

<body class="">
    <div class="wrapper ">
        @include('sidebar2')
        <div class="main-panel">
            <!-- Navbar -->
            @include('menu2')
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-4 m-auto mb-3">
                        <button type="button" data-toggle="modal" data-target="#modal_ventas" data-backdrop="static"
                            data-keyboard="false" class="btn btn-success btn-lg btn-block mt-3"
                            style="vertical-align:middle"><span>Punto de Venta<center><svg width="2em" height="2em"
                                        viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                                        <path fill-rule="evenodd"
                                            d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                    </svg></center> </span></button>
                    </div>

                    <div class="col-md-4 m-auto mt-1 mb-3">
                        <button name="taller_boton" id="taller_boton" type="button" data-toggle="modal"
                            data-target="#modaltaller" data-backdrop="static" data-keyboard="false"
                            class="btn btn-warning btn-lg btn-block text-white mt-3"
                            style="vertical-align:middle"><span>Reparar<center><svg width="2em" height="2em"
                                        viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                                    </svg></center>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                @if(Auth::check())
                                <h4 class="card-title">Equipos Sucursal @foreach ($Sucursal as
                                    $sucursal) @if($sucursal->id==Auth::user()->id_sucursal)
                                    {{$sucursal->nombre}} @endif @endforeach</h4> @else @php Auth::logout(); @endphp
                                @endif
                            </div>

                            <div class="card-body">
                                @php
                                $pendiente=0;
                                $revision=0;
                                $cancelado=0;
                                $espera=0;
                                $cliente=0;
                                $listo=0;
                                $entregado=0;
                                @endphp
                                @if(Auth::check())
                                @foreach($Equipo as $contador)
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==0)
                                @php
                                $pendiente++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==1)
                                @php
                                $revision++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==2)
                                @php
                                $cancelado++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==3)
                                @php
                                $espera++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==4)
                                @php
                                $cliente++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==5)
                                @php
                                $listo++;
                                @endphp
                                @endif
                                @if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==6)
                                @php
                                $entregado++;
                                @endphp
                                @endif
                                @endforeach
                                @endif
                                <nav>
                                    <small>
                                        <div class="nav nav-tabs" id="myTab" name="myTab" role="tablist">
                                            <button class="nav-link active" id="nav-pendiente-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-pendiente" type="button" role="tab"
                                                aria-controls="nav-pendiente" aria-selected="true">Pendientes
                                                <span class="badge bg-warning">{{$pendiente}}</span>
                                            </button>

                                            <button class="nav-link" id="nav-revision-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-revision" type="button" role="tab"
                                                aria-controls="nav-revision" aria-selected="false">En Revision <span
                                                    class="badge bg-info">{{$revision}}</span></button>

                                            <button class="nav-link" id="nav-espera-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-espera" type="button" role="tab"
                                                aria-controls="nav-espera" aria-selected="false">Espera<span
                                                    class="badge bg-primary">{{$espera}}</span></button>

                                            <button class="nav-link" id="nav-cliente-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-cliente" type="button" role="tab"
                                                aria-controls="nav-cliente" aria-selected="false">En Espera Respuesta
                                                <span class="badge bg-primary">{{$cliente}}</span></button>

                                            <button class="nav-link" id="nav-entregado-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-entregado" type="button" role="tab"
                                                aria-controls="nav-entregado" aria-selected="false">Listo <span
                                                    class="badge bg-secondary">{{$listo}}</span></button>

                                            <button class="nav-link" id="nav-listo-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-listo" type="button" role="tab"
                                                aria-controls="nav-success" aria-selected="false">Entregado <span
                                                    class="badge bg-success">{{$entregado}}</span></button>

                                            <button class="nav-link" id="nav-cancelado-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-cancelado" type="button" role="tab"
                                                aria-controls="nav-cancelado" aria-selected="false">Cancelados<span
                                                    class="badge bg-danger">{{$cancelado}}</span></button>
                                        </div>
                                    </small>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-pendiente" role="tabpanel"
                                        aria-labelledby="nav-pendiente-tab">
                                        <div class="table-responsive">
                                         @include('pendiente')
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-listo" role="tabpanel" aria-labelledby="nav-listo-tab">
                                <div class="table-responsive">
                                    @include('listo')

                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-cancelado" role="tabpanel" aria-labelledby="nav-cancelado-tab">
                        <div class="table-responsive">
                            @include('cancelado')

                </div>
            </div>
            <div class="tab-pane fade" id="nav-espera" role="tabpanel" aria-labelledby="nav-espera-tab">
                <div class="table-responsive">
                    @include('espera')


        </div>
    </div>
    <div class="tab-pane fade" id="nav-cliente" role="tabpanel" aria-labelledby="nav-cliente-tab">
        <div class="table-responsive">
            @include('cliente')

    </div>
    </div>

    <div class="tab-pane fade" id="nav-revision" role="tabpanel" aria-labelledby="nav-revision-tab">
        <div class="table-responsive">
            @include('revision')

    </div>
    </div>
    <div class="tab-pane fade" id="nav-listo" role="tabpanel" aria-labelledby="nav-listo-tab">
        <div class="table-responsive">

            <table class="table" id="tabletaller">
                <thead class="text-primary">
                    <th><small>Opciones</small></th>
                    <th><small class="text-muted">Modelo/Serial o IMEI</small></th>
                    <th><small>Cliente</small> </th>
                    <th><small>Fecha Recibido</small></th>
                    <th><small>Fecha Entrega</small></th>
                    <th><small>Cambiar Status</small></th>
                    <th><small>Imprimir</small></th>
                </thead>
                <tbody>
                    @if(Auth::check())
                    @foreach($Equipo->sortByDesc('id') as $equipo)
                    @if($equipo->id_sucursal==Auth::user()->id_sucursal&&$equipo->status==6)
                    <tr>
                        <td>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item text-white">
                                    <button class="bg-white text-white accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne{{$equipo->id}}"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                    <div id="collapseOne{{$equipo->id}}" class="accordion-collapse collapse text-white "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body" style="width: 200px;">
                                            <a href="" class=" d-inline " data-toggle="modal"
                                                data-target="#modaledittaller" data-id="{{$equipo->id}}"
                                                data-pago="{{$equipo->pago}}"
                                                data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-precio="{{$equipo->precio}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-modelo="{{$equipo->modelo}}" data-uniqueid="{{$equipo->uniqueid}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-tiene_camara="{{$equipo->Tiene_Camara}}"
                                                data-centro_carga="{{$equipo->Centro_Carga}}"
                                                data-señal="{{$equipo->Señal}}" data-lectorsd="{{$equipo->LectorSD}}"
                                                data-altavoz="{{$equipo->AltaVoz}}"
                                                data-botonhome="{{$equipo->BotonHome}}"
                                                data-microfono="{{$equipo->Microfono}}"
                                                data-lector_sim="{{$equipo->Lector_SIM}}"
                                                data-volumenplus="{{$equipo->Volumenplus}}"
                                                data-volumenless="{{$equipo->Volumenless}}"
                                                data-encendido="{{$equipo->Encendido}}"
                                                data-auricular="{{$equipo->Auricular}}" data-touch="{{$equipo->Touch}}"
                                                data-bateria="{{$equipo->Bateria}}"
                                                data-enciende="{{$equipo->Enciende}}"
                                                data-memoria="{{$equipo->Memoria}}" data-sim="{{$equipo->SIM}}"
                                                data-golpes="{{$equipo->Golpes}}"
                                                data-tiene_bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a>
                                            <a class=" d-inline " href="/deleteequipo/{{$equipo->id}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-trash"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg></a>
                                            <a class=" d-inline " href="" data-toggle="modal" data-target="#modal_foto"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-servicio="{{$equipo->id_servicio}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}"
                                                data-AltaVoz="{{$equipo->AltaVoz}}"
                                                data-BotonHome="{{$equipo->BotonHome}}"
                                                data-Microfono="{{$equipo->Microfono}}"
                                                data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                data-Volumenplus="{{$equipo->Volumenplus}}"
                                                data-Volumenless="{{$equipo->Volumenless}}"
                                                data-Encendido="{{$equipo->Encendido}}"
                                                data-Auricular="{{$equipo->Auricular}}" data-Touch="{{$equipo->Touch}}"
                                                data-Bateria="{{$equipo->Bateria}}"
                                                data-Enciende="{{$equipo->Enciende}}"
                                                data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                data-Golpes="{{$equipo->Golpes}}" data-modelo="{{$equipo->modelo}}"
                                                data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-camera text-success"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                </svg></a>

                                            <a class=" d-inline " href="/galleria/{{$equipo->id}} " target="_blank"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}"
                                                data-AltaVoz="{{$equipo->AltaVoz}}"
                                                data-BotonHome="{{$equipo->BotonHome}}"
                                                data-Microfono="{{$equipo->Microfono}}"
                                                data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                data-Volumenplus="{{$equipo->Volumenplus}}"
                                                data-Volumenless="{{$equipo->Volumenless}}"
                                                data-Encendido="{{$equipo->Encendido}}"
                                                data-Auricular="{{$equipo->Auricular}}" data-Touch="{{$equipo->Touch}}"
                                                data-Bateria="{{$equipo->Bateria}}"
                                                data-Enciende="{{$equipo->Enciende}}"
                                                data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                data-Golpes="{{$equipo->Golpes}}" data-modelo="{{$equipo->modelo}}"
                                                data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-film text-warning"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z" />
                                                </svg></a>

                                            <a class=" d-inline " href="" data-toggle="modal" data-target="#modal_pago"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}" data-pago="{{$equipo->pago}}"
                                                data-adelanto="{{$equipo->adelanto}}" data-modelo="{{$equipo->modelo}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_sucursal="{{$equipo->id_sucursal}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-cash text-info"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                                    <path
                                                        d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                                </svg>
                                            </a>
                                            <a type="button" class="btn btn-outline-dark" href="" data-toggle="modal"
                                                data-target="#modal_info" data-id="{{$equipo->id}}"
                                                data-pago="{{$equipo->pago}}"
                                                data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-precio="{{$equipo->precio}}"
                                                data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-modelo="{{$equipo->modelo}}" data-uniqueid="{{$equipo->uniqueid}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}">Mas
                                                info de {{$equipo->modelo}}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </td>
                        <td><small>Orden #
                                {{$equipo->id}}</small><br><small>{{$equipo->modelo}}</small><br>
                            <small
                                class="text-muted">@if($equipo->serial==''){{$equipo->imei}}@else{{$equipo->serial}}@endif</small>
                        </td>
                        <!--
                    @foreach ($Usuario as $user)
                    @if($user->id==$equipo->id_user)
                    <td><small>
                            {{$user->name}}</small></td>
                    @endif
                    @endforeach-->
                        <td><small>{{$equipo->id_cliente }}</small></td>
                        <td><input class="text-secondary form-control" type="date" value="{{$equipo->fecha_recibido}}">
                        </td>
                        <td>
                            @php
                            $date1 = new DateTime("now");
                            $date2 = new DateTime($equipo->fecha_entrega);
                            $diff = $date1->diff($date2);
                            @endphp

                            @if($equipo->status==1 || $equipo->status==3 || $equipo->status==4
                            ||
                            $equipo->status==5|| $equipo->status==0)
                            @if($date1->format("Y-m-d") == $equipo->fecha_entrega )
                            @php $contador++; @endphp
                            <div class="input-group-prepend ">
                                <span class="input-group-text text-danger" id="basic-addon1"><svg width="1em"
                                        height="1em" viewBox="0 0 16 16" class="bi bi-alarm" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                    </svg>
                                    <input class="text-danger" type="date" value="{{$equipo->fecha_entrega}}">
                                </span>

                            </div>
                            @elseif($date1->format("Y-m-d") >= $equipo->fecha_entrega )
                            <input class="text-danger form-control" type="date" value="{{$equipo->fecha_entrega}}">
                            <small class="text-danger card-footer">Exceso de tiempo por:
                                @if($diff->days>=1)
                                {{$diff->days .' dias'}} @else
                                {{$diff->days .' dia'}}@endif</small>
                            @else
                            <input class="text-info form-control" type="date" value="{{$equipo->fecha_entrega}}">
                            <small class="text-success card-footer">faltan: @if($diff->days>=1)
                                {{$diff->days .' dias'}} @else
                                {{$diff->days .' dia'}}@endif</small>
                            @endif
                            @elseif($equipo->status==6)
                            <div class="card text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-patch-check-fill text-success ml-auto mr-auto" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                                <h4 class="card-title text-info ml-auto mr-auto">Entregado</h4>
                                <p class="card-text ml-auto mr-auto">{{$equipo->fecha_entrega}}
                                </p>
                            </div>
        </div>
        @elseif($equipo->status==2)
        <small>
            <div class="card text-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-patch-exclamation-fill text-danger ml-auto mr-auto" viewBox="0 0 16 16">
                    <path
                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <h4 class="card-title text-warning ml-auto mr-auto">Cancelado</h4>
                <p class="card-text ml-auto mr-auto">{{$equipo->fecha_entrega}}</p>
            </div>
    </div>
    @endif
    </td>
    <td>
        <a href="" @if($equipo->status==2) class="btn btn-danger"
            @endif
            @if($equipo->status==6)
            class="btn btn-secondary" @endif class="btn btn-dark"
            data-id="{{$equipo->id}}"
            data-status="{{$equipo->status}}"
            data-pago="{{$equipo->pago}}"
            data-toggle="modal" data-target="#modal_status">
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
            @endif
            <i class="far fa-clone"></i>
        </a></td>

    <td>
        <a class="custom-control-inline" href="/imprimir/id={{$equipo->id}}&csrf={{ csrf_token() }}" target="_blank"
            data-id="{{$equipo->id}}" data-pago="{{$equipo->pago}}" data-id_servicio="{{$equipo->id_servicio}}"
            data-presupuesto="{{$equipo->presupuesto}}" data-inversion="{{$equipo->inversion}}"
            data-precio="{{$equipo->precio}}" data-id_sucursal="{{Auth::user()->id_sucursal}}"
            data-id_user="{{$equipo->id_user}}" data-id_cliente="{{$equipo->id_cliente}}"
            data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}" data-id_captura="{{$equipo->id_captura}}"
            data-id_comentario="{{$equipo->id_comentario}}" data-fecha_recibido="{{$equipo->fecha_recibido}}"
            data-fecha_entrega="{{$equipo->fecha_entrega}}" data-status="{{$equipo->status}}"
            data-Tiene_Camara="{{$equipo->Tiene_Camara}}" data-Centro_Carga="{{$equipo->Centro_Carga}}"
            data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}" data-AltaVoz="{{$equipo->AltaVoz}}"
            data-BotonHome="{{$equipo->BotonHome}}" data-Microfono="{{$equipo->Microfono}}"
            data-Lector_SIM="{{$equipo->Lector_SIM}}" data-Volumenplus="{{$equipo->Volumenplus}}"
            data-Volumenless="{{$equipo->Volumenless}}" data-Encendido="{{$equipo->Encendido}}"
            data-Auricular="{{$equipo->Auricular}}"
            data-email="{{$equipo->email}}"
            data-telefono="{{$equipo->telefono}}"
             data-Touch="{{$equipo->Touch}}" data-Bateria="{{$equipo->Bateria}}"
            data-Enciende="{{$equipo->Enciende}}" data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
            data-Golpes="{{$equipo->Golpes}}" data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><i
                class="far fa-file-pdf text-warning h5 face" alt="Imprime archivo PDF"></i></a>
        <a href="/QR/{{$equipo->id}}" target="_blank">
            <h5><i class="fas fa-qrcode face" alt="Imprime QR"></i>
            </h5>
        </a>
    </td>
    </tr>
    @endif
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    <div class="tab-pane fade" id="nav-entregado" role="tabpanel" aria-labelledby="nav-entregado-tab">
        <div class="table-responsive">
            <table class="table" id="tabletaller">
                <thead class="text-primary">
                    <th><small>Opciones</small></th>
                    <th><small class="text-muted">Modelo/Serial o IMEI</small></th>
                    <th><small>Cliente</small> </th>
                    <th><small>Fecha Recibido</small></th>
                    <th><small>Fecha Entrega</small></th>
                    <th><small>Cambiar Status</small></th>
                    <th><small>Imprimir</small></th>
                </thead>
                <tbody>
                    @foreach($Equipo->sortByDesc('id') as $equipo)
                    @if($equipo->id_sucursal==Auth::user()->id_sucursal&&$equipo->status==5)
                    <tr>
                        <td>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item text-white">
                                    <button class="bg-white text-white accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne{{$equipo->id}}"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                    <div id="collapseOne{{$equipo->id}}" class="accordion-collapse collapse text-white "
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body" style="width: 200px;">
                                            <a href="" class=" d-inline " data-toggle="modal"
                                                data-target="#modaledittaller" data-id="{{$equipo->id}}"
                                                data-pago="{{$equipo->pago}}"
                                                data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-precio="{{$equipo->precio}}"
                                                data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-modelo="{{$equipo->modelo}}" data-uniqueid="{{$equipo->uniqueid}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-tiene_camara="{{$equipo->Tiene_Camara}}"
                                                data-centro_carga="{{$equipo->Centro_Carga}}"
                                                data-señal="{{$equipo->Señal}}" data-lectorsd="{{$equipo->LectorSD}}"
                                                data-altavoz="{{$equipo->AltaVoz}}"
                                                data-botonhome="{{$equipo->BotonHome}}"
                                                data-microfono="{{$equipo->Microfono}}"
                                                data-lector_sim="{{$equipo->Lector_SIM}}"
                                                data-volumenplus="{{$equipo->Volumenplus}}"
                                                data-volumenless="{{$equipo->Volumenless}}"
                                                data-encendido="{{$equipo->Encendido}}"
                                                data-auricular="{{$equipo->Auricular}}" data-touch="{{$equipo->Touch}}"
                                                data-bateria="{{$equipo->Bateria}}"
                                                data-enciende="{{$equipo->Enciende}}"
                                                data-memoria="{{$equipo->Memoria}}" data-sim="{{$equipo->SIM}}"
                                                data-golpes="{{$equipo->Golpes}}"
                                                data-tiene_bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></a>
                                            <a class=" d-inline " href="/deleteequipo/{{$equipo->id}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-trash"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd"
                                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg></a>
                                            <a class=" d-inline " href="" data-toggle="modal" data-target="#modal_foto"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-servicio="{{$equipo->id_servicio}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}"
                                                data-AltaVoz="{{$equipo->AltaVoz}}"
                                                data-BotonHome="{{$equipo->BotonHome}}"
                                                data-Microfono="{{$equipo->Microfono}}"
                                                data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                data-Volumenplus="{{$equipo->Volumenplus}}"
                                                data-Volumenless="{{$equipo->Volumenless}}"
                                                data-Encendido="{{$equipo->Encendido}}"
                                                data-Auricular="{{$equipo->Auricular}}" data-Touch="{{$equipo->Touch}}"
                                                data-Bateria="{{$equipo->Bateria}}"
                                                data-Enciende="{{$equipo->Enciende}}"
                                                data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                data-Golpes="{{$equipo->Golpes}}" data-modelo="{{$equipo->modelo}}"
                                                data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-camera text-success"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                    <path fill-rule="evenodd"
                                                        d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                </svg></a>

                                            <a class=" d-inline " href="/galleria/{{$equipo->id}} " target="_blank"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}"
                                                data-AltaVoz="{{$equipo->AltaVoz}}"
                                                data-BotonHome="{{$equipo->BotonHome}}"
                                                data-Microfono="{{$equipo->Microfono}}"
                                                data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                data-Volumenplus="{{$equipo->Volumenplus}}"
                                                data-Volumenless="{{$equipo->Volumenless}}"
                                                data-Encendido="{{$equipo->Encendido}}"
                                                data-Auricular="{{$equipo->Auricular}}" data-Touch="{{$equipo->Touch}}"
                                                data-Bateria="{{$equipo->Bateria}}"
                                                data-Enciende="{{$equipo->Enciende}}"
                                                data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                data-Golpes="{{$equipo->Golpes}}" data-modelo="{{$equipo->modelo}}"
                                                data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-film text-warning"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z" />
                                                </svg></a>

                                            <a class=" d-inline " href="" data-toggle="modal" data-target="#modal_pago"
                                                data-id="{{$equipo->id}}" data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}" data-pago="{{$equipo->pago}}"
                                                data-adelanto="{{$equipo->adelanto}}" data-modelo="{{$equipo->modelo}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_sucursal="{{$equipo->id_sucursal}}"><svg width="2em"
                                                    height="2em" viewBox="0 0 16 16" class="bi bi-cash text-info"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                                    <path
                                                        d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                                </svg>
                                            </a>
                                            <a type="button" class="btn btn-outline-dark" href="" data-toggle="modal"
                                                data-target="#modal_info" data-id="{{$equipo->id}}"
                                                data-pago="{{$equipo->pago}}"
                                                data-presupuesto="{{$equipo->presupuesto}}"
                                                data-inversion="{{$equipo->inversion}}"
                                                data-email="{{$equipo->email}}"
                                                data-telefono="{{$equipo->telefono}}"
                                                data-id_servicio="{{$equipo->id_servicio}}"
                                                data-precio="{{$equipo->precio}}"
                                                data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                data-id_user="{{$equipo->id_user}}"
                                                data-id_cliente="{{$equipo->id_cliente}}"
                                                data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                data-id_captura="{{$equipo->id_captura}}"
                                                data-id_comentario="{{$equipo->id_comentario}}"
                                                data-modelo="{{$equipo->modelo}}" data-uniqueid="{{$equipo->uniqueid}}"
                                                data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                data-status="{{$equipo->status}}">Mas
                                                info de {{$equipo->modelo}}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </td>
                        <td><small>Orden #
                                {{$equipo->id}}</small><br><small>{{$equipo->modelo}}</small><br>
                            <small
                                class="text-muted">@if($equipo->serial==''){{$equipo->imei}}@else{{$equipo->serial}}@endif</small>
                        </td>
                        <!--
                        @foreach ($Usuario as $user)
                        @if($user->id==$equipo->id_user)
                        <td><small>
                                {{$user->name}}</small></td>
                        @endif
                        @endforeach-->
                        <td><small>{{$equipo->id_cliente }}</small></td>
                        <td><input class="text-secondary form-control" type="date" value="{{$equipo->fecha_recibido}}">
                        </td>
                        <td>
                            @php
                            $date1 = new DateTime("now");
                            $date2 = new DateTime($equipo->fecha_entrega);
                            $diff = $date1->diff($date2);
                            @endphp

                            @if($equipo->status==1 || $equipo->status==3 || $equipo->status==4
                            ||
                            $equipo->status==5|| $equipo->status==0)
                            @if($date1->format("Y-m-d") == $equipo->fecha_entrega )
                            @php $contador++; @endphp
                            <div class="input-group-prepend ">
                                <span class="input-group-text text-danger" id="basic-addon1"><svg width="1em"
                                        height="1em" viewBox="0 0 16 16" class="bi bi-alarm" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                    </svg>
                                    <input class="text-danger" type="date" value="{{$equipo->fecha_entrega}}">
                                </span>

                            </div>
                            @elseif($date1->format("Y-m-d") >= $equipo->fecha_entrega )
                            <input class="text-danger form-control" type="date" value="{{$equipo->fecha_entrega}}">
                            <small class="text-danger card-footer">Exceso de tiempo por:
                                @if($diff->days>=1)
                                {{$diff->days .' dias'}} @else
                                {{$diff->days .' dia'}}@endif</small>
                            @else
                            <input class="text-info form-control" type="date" value="{{$equipo->fecha_entrega}}">
                            <small class="text-success card-footer">faltan: @if($diff->days>=1)
                                {{$diff->days .' dias'}} @else
                                {{$diff->days .' dia'}}@endif</small>
                            @endif
                            @elseif($equipo->status==6)
                            <div class="card text-left">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-patch-check-fill text-success ml-auto mr-auto" viewBox="0 0 16 16">
                                    <path
                                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                </svg>
                                <h4 class="card-title text-info ml-auto mr-auto">Entregado</h4>
                                <p class="card-text ml-auto mr-auto">{{$equipo->fecha_entrega}}
                                </p>
                            </div>
        </div>
        @elseif($equipo->status==2)
        <small>
            <div class="card text-left">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-patch-exclamation-fill text-danger ml-auto mr-auto" viewBox="0 0 16 16">
                    <path
                        d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>
                <h4 class="card-title text-warning ml-auto mr-auto">Cancelado</h4>
                <p class="card-text ml-auto mr-auto">{{$equipo->fecha_entrega}}</p>
            </div>
    </div>
    @endif
    </td>
    <td>
        <a href="" @if($equipo->status==2) class="btn btn-danger"
            @endif
            @if($equipo->status==6)
            class="btn btn-secondary" @endif class="btn btn-dark"
            data-id="{{$equipo->id}}"
            data-status="{{$equipo->status}}"
            data-pago="{{$equipo->pago}}"
            data-toggle="modal" data-target="#modal_status">
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
            @endif
            <i class="far fa-clone"></i>
        </a></td>

    <td>
        <a class="custom-control-inline" href="/imprimir/id={{$equipo->id}}&csrf={{ csrf_token() }}" target="_blank"
            data-id="{{$equipo->id}}" data-pago="{{$equipo->pago}}" data-id_servicio="{{$equipo->id_servicio}}"
            data-presupuesto="{{$equipo->presupuesto}}" data-inversion="{{$equipo->inversion}}"
            data-precio="{{$equipo->precio}}" data-id_sucursal="{{Auth::user()->id_sucursal}}"
            data-id_user="{{$equipo->id_user}}" data-id_cliente="{{$equipo->id_cliente}}"
            data-serial="{{$equipo->serial}}"
            data-email="{{$equipo->email}}"
            data-telefono="{{$equipo->telefono}}"
            data-imei="{{$equipo->imei}}" data-id_captura="{{$equipo->id_captura}}"
            data-id_comentario="{{$equipo->id_comentario}}" data-fecha_recibido="{{$equipo->fecha_recibido}}"
            data-fecha_entrega="{{$equipo->fecha_entrega}}" data-status="{{$equipo->status}}"
            data-Tiene_Camara="{{$equipo->Tiene_Camara}}" data-Centro_Carga="{{$equipo->Centro_Carga}}"
            data-Señal="{{$equipo->Señal}}" data-LectorSD="{{$equipo->LectorSD}}" data-AltaVoz="{{$equipo->AltaVoz}}"
            data-BotonHome="{{$equipo->BotonHome}}" data-Microfono="{{$equipo->Microfono}}"
            data-Lector_SIM="{{$equipo->Lector_SIM}}" data-Volumenplus="{{$equipo->Volumenplus}}"
            data-Volumenless="{{$equipo->Volumenless}}" data-Encendido="{{$equipo->Encendido}}"
            data-Auricular="{{$equipo->Auricular}}" data-Touch="{{$equipo->Touch}}" data-Bateria="{{$equipo->Bateria}}"
            data-Enciende="{{$equipo->Enciende}}" data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
            data-Golpes="{{$equipo->Golpes}}" data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><i
                class="far fa-file-pdf text-warning h5 face" alt="Imprime archivo PDF"></i></a>
        <a href="/QR/{{$equipo->id}}" target="_blank">
            <h5><i class="fas fa-qrcode face" alt="Imprime QR"></i>
            </h5>
        </a>
    </td>
    </tr>
    @endif
    @endforeach
    @endif
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    @include('footer2')
    </div>
    </div>
    @include('modal')
    @include('scripts2')
</body>
