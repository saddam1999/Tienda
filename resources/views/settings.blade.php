@include('headersetting')
@foreach ($Settings as $setting)@endforeach
@foreach ($Promocion as $promocion)@endforeach
@php
date_default_timezone_set('UTC');
$contador=0;
@endphp
@include('modal')

<body class="">
<div class="wrapper ">
    @include('sidebar2')
    <div class="main-panel">
        <!-- Navbar -->
        @include('menu2')
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <h4 class="card-title">Opciones</h4>

                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="#personalizar" data-target="#personalizar"
                                data-toggle="tab"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-toggles" viewBox="0 0 16 16">
                                    <path
                                        d="M4.5 9a3.5 3.5 0 1 0 0 7h7a3.5 3.5 0 1 0 0-7h-7zm7 6a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm-7-14a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zm2.45 0A3.49 3.49 0 0 1 8 3.5 3.49 3.49 0 0 1 6.95 6h4.55a2.5 2.5 0 0 0 0-5H6.95zM4.5 0h7a3.5 3.5 0 1 1 0 7h-7a3.5 3.5 0 1 1 0-7z" />
                                </svg>Personalizar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#promociones" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-award-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z" />
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z" />
                                </svg>Promociones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#usuarios" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg>Usuarios</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#sucursales" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-building" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                    <path
                                        d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                                </svg>Sucursales</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#cajas" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-calculator" viewBox="0 0 16 16">
                                    <path
                                        d="M12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                    <path
                                        d="M4 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-4z" />
                                </svg>Cajas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#notificaciones" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-chat-square-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>Notificaciones</a></li>
                        <li class="nav-item"><a class="nav-link" href="#licencia" data-toggle="tab"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-key" viewBox="0 0 16 16">
                                    <path
                                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>Licencia</a></li>
                    </ul>
                </div>

                    <div class="tab-content">
                        <div class="tab-pane active bg-white" id="personalizar">
                            <div class="card-body">
                                <form action="@if($Settings->isEmpty()) /agregarsettings @else /editsettings/1 @endif">
                                    @csrf
                                    @method('post')
                                    <label for="setting_nombre">Nombre del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_nombre" id="setting_nombre"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_nombre}}@endif"
                                        required>
                                    <label for="setting_direccion">Direccion del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_direccion"
                                        id="setting_direccion"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_direccion}}@endif"
                                        required>
                                    <label for="setting_telefono">Telefono del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_telefono"
                                        id="setting_telefono"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_telefono}}@endif"
                                        required>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label for="setting_logo">Logo del
                                                Negocio/
                                                Empresa</label>
                                            <input class="form-control" type="text" name="setting_logo"
                                                id="setting_logo"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="m-auto border border-secondary shadow-lg"
                                                style="border-radius: 10px;" width="auto" height="auto"
                                                src="@if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif"
                                                alt="">
                                        </div>
                                    </div>

                                    <label for="setting_descripcion">Texto del
                                        Banner
                                        Negocio/
                                        Empresa en la pagina principal</label>
                                    <textarea class="form-control" name="setting_descripcion" id="setting_descripcion"
                                        cols="30"
                                        rows="3">@if($Settings->isEmpty()) @else {{$setting->setting_descripcion}}@endif</textarea>
                                    <label for="setting_contacto">Correo del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_contacto"
                                        id="setting_contacto"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_contacto}}@endif"
                                        required>
                                    <label for="setting_abierto">Horario del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="setting_text" name="setting_abierto"
                                        id="setting_abierto"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_abierto}}@endif"
                                        required>

                                    <label for="setting_moneda">Selecciona la
                                        moneda que
                                        requieres:@if($Settings->isEmpty())
                                        @else
                                        {{$setting->setting_moneda}}@endif</label>
                                    <select class="form-control" name="setting_moneda" id="setting_moneda"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_moneda}}@endif"
                                        required>
                                        <option class="form-control" value="Dollar">
                                            Dolar
                                        </option>
                                        <option class="form-control" value="Euro">
                                            Euro
                                        </option>
                                        <option class="form-control" value="MXN" selected>
                                            Peso Mexicano
                                        </option>
                                        <option class="form-control" value="Libra">
                                            Libra
                                        </option>
                                        <option class="form-control" value="Rupia">
                                            Rupia
                                        </option>
                                    </select>
                                    <div class="row mt-2">
                                        <div class="col-md-6">
                                            <label for="setting_plantilla">Selecciona
                                                Plantilla pagina
                                                Principal:</label> <br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="setting_plantilla"
                                                    id="setting_plantilla" value="" @if($Settings->isEmpty())
                                                checked
                                                @else
                                                @if($setting->setting_plantilla=='https://hollyrenew.website/demo.jpeg')
                                                checked
                                                @endif
                                                @endif >
                                                <label class="form-check-label" for="setting_plantilla"
                                                    selected>Template Coming Soon</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="setting_plantilla"
                                                    id="setting_plantilla" value="../images/template1.png"
                                                    @if($Settings->isEmpty())
                                                @else
                                                @if($setting->setting_plantilla=='../images/template1.png')
                                                checked @endif @endif >
                                                <label class="form-check-label" for="setting_plantilla"
                                                    selected>Template 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="setting_plantilla"
                                                    id="setting_plantilla" value="../images/template2.png"
                                                    @if($Settings->isEmpty())
                                                @else
                                                @if($setting->setting_plantilla=='../images/template2.png')
                                                checked @endif @endif disabled>
                                                <label class="form-check-label" for="setting_plantilla">Template
                                                    2 (Premiun version)</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="setting_plantilla"
                                                    id="setting_plantilla" value="../images/template3.png"
                                                    @if($Settings->isEmpty())
                                                @else
                                                @if($setting->setting_plantilla=='../images/template3.png')
                                                checked @endif @endif disabled>
                                                <label class="form-check-label" for="inlineRadio3">Template
                                                    3 (Premiun version)</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img name="template" id="template"
                                                class="m-auto border border-secondary shadow-lg"
                                                style="border-radius: 10px;"
                                                src="@if($Settings->isEmpty()) https://hollyrenew.website/demo.jpeg @else {{$setting->setting_plantilla}}@endif"
                                                alt="">
                                        </div>
                                    </div>

                                    <label for="setting_rfc">RFC del Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_rfc" id="setting_rfc"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_rfc}}@endif"
                                        required>

                                    <label for="setting_rfc">FaceBook ID(Necesario
                                        para el chat y publicaciones)</label>
                                    <a href="" data-toggle="modal" data-target="#modal_obtenerFacebook">Obtener
                                        ChatID</a>
                                    <input class="form-control" type="text" name="setting_facebook"
                                        id="setting_facebook"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_facebook}}@endif"
                                        required>

                                    <label for="setting_rfc">Twitter
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_twitter" id="setting_twitter"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_twitter}}@endif"
                                        required>

                                    <label for="setting_banner">Banner del
                                        Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text" name="setting_banner" id="setting_banner"
                                        value="@if($Settings->isEmpty()) @else {{$setting->setting_banner}}@endif">
                                    <label for="setting_url">URL del Negocio/
                                        Empresa</label>
                                    <input class="form-control" type="text"
                                        value="https://@php echo $_SERVER['HTTP_HOST']; @endphp" name="setting_url"
                                        id="setting_url">

                                    <label for="iva">IVA</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                            <input type="text" class="form-control" name="setting_iva" id="setting_iva"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_iva}} @endif">
                                        </div>
                                    </div>
                                    <label for="meta_diaria">Meta Diaria</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" name="setting_meta_diaria"
                                                id="setting_meta_diaria"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_meta_diaria}} @endif">
                                        </div>
                                    </div>
                                    <label for="meta_mensual">Meta Mensual</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                            <input type="text" class="form-control" name="setting_meta_mensual"
                                                id="setting_meta_mensual"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_meta_mensual}} @endif">
                                        </div>
                                    </div>

                                    <label for="setting_descuento_1">Descuento
                                        1</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                            <input type="text" class="form-control" name="setting_descuento_1"
                                                id="setting_descuento_1"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_1}} @endif "
                                                disabled>
                                        </div>
                                    </div>
                                    <label for="setting_descuento_2">Descuento
                                        2</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                            <input type="text" class="form-control" name="setting_descuento_2"
                                                id="setting_descuento_2"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_2}} @endif"
                                                disabled>
                                        </div>
                                    </div>
                                    <label for="setting_descuento_3">Descuento
                                        3</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                            <input type="text" class="form-control" name="setting_descuento_3"
                                                id="setting_descuento_3"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_3}} @endif"
                                                disabled>
                                        </div>
                                    </div>
                                    <label for="setting_descuento_4">Descuento
                                        4</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">%</span>
                                            <input type="text" class="form-control" name="setting_descuento_4"
                                                id="setting_descuento_4"
                                                value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_4}} @endif"
                                                disabled>
                                        </div>
                                    </div>
                                    <button type="submit" data-backdrop="static" data-keyboard="false"
                                        class="btn btn-info btn-lg btn-block mt-1" style="vertical-align:middle"> <span>
                                            Guardar
                                            <center><svg width="2em" height="2em" viewBox="0 0 16 16"
                                                    class="bi bi-pencil-square" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg></center> </span>
                                    </button>
                                </form>

                            </div>
                        </div>
                        <div class="tab-pane" id="promociones">
                            <div class="card text-left">
                                <div class="card-body">
                                    <form
                                        action="@if($Promocion->isEmpty()) /agregarpromocion @else /editpromocion/1 @endif">
                                        @csrf
                                        @method('post')
                                        <label for="titulo">Titulo</label>
                                        <input class="form-control" type="text" name="titulo" id="titulo"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->titulo}}@endif"
                                            required>

                                        <label for="titulo_banner_principal">Titulo
                                            Banner
                                            Principal</label>
                                        <input class="form-control" type="text" name="titulo_banner_principal"
                                            id="titulo_banner_principal"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->titulo_banner_principal}}@endif"
                                            required>

                                        <label for="descuento_banner_principal">Descuento
                                            Banner
                                            Principal</label>
                                        <input class="form-control" type="text" name="descuento_banner_principal"
                                            id="descuento_banner_principal"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->descuento_banner_principal}}@endif"
                                            required>

                                        <label for="bannera">Primer Banner</label>
                                        <input class="form-control" type="text" name="bannera" id="bannera"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->bannera}}@endif"
                                            required>

                                        <label for="texto_bannera">Texto del primer
                                            Banner</label>
                                        <input class="form-control" type="text" name="texto_bannera" id="texto_bannera"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannera}}@endif"
                                            required>

                                        <label for="bannerb">Segundo Banner</label>
                                        <input class="form-control" type="text" name="bannerb" id="bannera"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->bannerb}}@endif"
                                            required>

                                        <label for="texto_bannera">Texto del Segundo
                                            Banner</label>
                                        <input class="form-control" type="text" name="texto_bannerb" id="texto_bannerb"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerb}}@endif"
                                            required>

                                        <label for="bannerc">Tercer Banner</label>
                                        <input class="form-control" type="text" name="bannerc" id="bannerc"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->bannerc}}@endif"
                                            required>

                                        <label for="texto_bannerc">Texto del tercer
                                            Banner</label>
                                        <input class="form-control" type="text" name="texto_bannerc" id="texto_bannerc"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerc}}@endif"
                                            required>

                                        <label for="fecha_inicio">Fecha Inicio
                                            Promocion</label>
                                        <input class="form-control" type="date" name="fecha_inicio" id="fecha_inicio"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_inicio}}@endif">

                                        <label for="fecha_final">Fecha Final
                                            Promocion</label>
                                        <input class="form-control" type="date" name="fecha_final" id="fecha_final"
                                            value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_final}}@endif">

                                        <button type="submit" data-backdrop="static" data-keyboard="false"
                                            class="btn btn-info btn-lg btn-block mt-1" style="vertical-align:middle">
                                            <span>
                                                Guardar
                                                <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-hdd" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M14 9H2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 8a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                                                        <path
                                                            d="M5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                        <path fill-rule="evenodd"
                                                            d="M4.094 4a.5.5 0 0 0-.44.26l-2.47 4.532A1.5 1.5 0 0 0 1 9.51v.99H0v-.99c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198v.99h-1v-.99a1.5 1.5 0 0 0-.183-.718L12.345 4.26a.5.5 0 0 0-.439-.26H4.094z" />
                                                    </svg></center> </span></button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="usuarios">
                            <div class="card text-left">
                                <div class="card-body">
                                    <h4 class="card-title">Usuarios</h4>
                                    <table class="table table-striped table-inverse table-responsive"
                                        id="tableusuarios">
                                        <thead class="thead-inverse">
                                            <tr>
                                                <th><button type="button" data-toggle="modal"
                                                        data-target="#modalagregar" data-backdrop="static"
                                                        data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                        <i class="fas fa-user-plus"></i>
                                                    </button></th>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Rol</th>
                                                <th>Sucursal</th>
                                                <th>Telefono</th>
                                                <th>Status</th>
                                                <th>Fecha Agregado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($Usuario as $usuario)
                                            <tr>
                                                <td>
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapse{{$usuario->id}}"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    Opciones </button>
                                                            </h2>
                                                            <div id="collapse{{$usuario->id}}"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">

                                                                    <a href="" data-toggle="modal"
                                                                        data-target="#modaleditar"
                                                                        data-id="{{$usuario->id}}"
                                                                        data-id_sucursal="{{$usuario->id_sucursal}}"
                                                                        data-name="{{$usuario->name}}"
                                                                        data-email="{{$usuario->email}}"
                                                                        data-rol="{{$usuario->rol}}"
                                                                        data-telefono="{{$usuario->telefono}}"
                                                                        data-estatus="{{$usuario->status}}"><svg
                                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                                            class="bi bi-pencil-square"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                        </svg></a>
                                                                    <a href="/deleteusuario/{{$usuario->id}}"><svg
                                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                                            class="bi bi-trash" fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                        </svg></a> </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>{{$usuario->name}}</td>
                                                <td>{{$usuario->email}}</td>
                                                <td>{{$usuario->rol}}</td>
                                                @foreach ($Sucursal as $sucursal)
                                                @if($sucursal->id==$usuario->id_sucursal)
                                                <td>{{$sucursal->nombre}}</td>
                                                @endif
                                                @endforeach
                                                <td>{{$usuario->telefono}}</td>

                                                @if($usuario->status==1)
                                                <td class="text-success">Activo</td>
                                                @elseif($usuario->status==0)
                                                <td class="text-danger">No activo</td>
                                                @else
                                                <td class="text-secondary">Sin status</td>
                                                @endif
                                                <td>
                                                    @php
                                                    $dia1 = $usuario->created_at->format("d");
                                                    $mes = $usuario->created_at->format("m");
                                                    $ano = $usuario->created_at->format("Y");
                                                    if ($mes == 1) {
                                                    $mes1 = 'Enero';
                                                    } elseif ($mes == 2) {
                                                    $mes1 = 'Febrero';
                                                    } elseif ($mes == 3) {
                                                    $mes1 = 'Marzo';
                                                    } elseif ($mes == 4) {
                                                    $mes1 = 'Abril';
                                                    } elseif ($mes == 5) {
                                                    $mes1 = 'Mayo';
                                                    } elseif ($mes == 6) {
                                                    $mes1 = 'Junio';
                                                    } elseif ($mes == 7) {
                                                    $mes1 = 'Julio';
                                                    } elseif ($mes == 8) {
                                                    $mes1 = 'Agosto';
                                                    } elseif ($mes == 9) {
                                                    $mes1 = 'Septiembre';
                                                    } elseif ($mes == 10) {
                                                    $mes1 = 'Octubre';
                                                    } elseif ($mes == 11) {
                                                    $mes1 = 'Noviembre';
                                                    } elseif ($mes == 12) {
                                                    $mes1 = 'Diciembre';
                                                    }@endphp

                                                    {{$dia1.'-'.$mes1.'-'.$ano}}
                                                </td>

                                                <td></td>
                                            </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="sucursales">
                            @include('sucursal')
                        </div>
                        <div class="tab-pane" id="cajas">
                            @include('caja')
                        </div>
                        <div class="tab-pane" id="notificaciones">
                            @include('notificacion')
                        </div>
                        <div class="tab-pane" id="licencia">
                            @include('licencia')
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('footer2')
    </div>
    </div>
    @include('scripts2')
</body>
