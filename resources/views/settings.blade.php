<div class="tab-pane fade show " id="settings" role="tabpanel" aria-labelledby="settings-tab">
    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none; border-radius: 40px 10px;">
                <div class="card-body">
                    <h4 class="card-title">Opciones Sucursal @foreach ($Sucursal as
                        $sucursal)@if($sucursal->id==Auth::user()->id_sucursal)
                        {{$sucursal->nombre}} @endif @endforeach</h4>
                    <div class="row">
                        <div class="col-4">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true">Configura
                                    tu Panel <i class="far fa-arrow-alt-circle-right"></i></a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">Agrega
                                    o Edita tus Promociones <i class="far fa-arrow-alt-circle-right"></i></a>
                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Configura Redes Sociales <i
                                        class="far fa-arrow-alt-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab">
                                    <div class="card text-left">
                                        <div class="card-body">
                                            <form
                                                action="@if($Settings->isEmpty()) /agregarsettings @else /editsettings/1 @endif">
                                                @csrf
                                                @method('post')
                                                <label for="setting_nombre">Nombre del
                                                    Negocio/
                                                    Empresa</label>
                                                <input class="form-control" type="text" name="setting_nombre"
                                                    id="setting_nombre"
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
                                                <textarea class="form-control" name="setting_descripcion"
                                                    id="setting_descripcion" cols="30"
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
                                                            <input class="form-check-input" type="radio"
                                                                name="setting_plantilla" id="setting_plantilla" value=""
                                                                @if($Settings->isEmpty())
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
                                                            <input class="form-check-input" type="radio"
                                                                name="setting_plantilla" id="setting_plantilla"
                                                                value="../images/template1.png"
                                                                @if($Settings->isEmpty())
                                                            @else
                                                            @if($setting->setting_plantilla=='../images/template1.png')
                                                            checked @endif @endif >
                                                            <label class="form-check-label" for="setting_plantilla"
                                                                selected>Template 1</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="setting_plantilla" id="setting_plantilla"
                                                                value="../images/template2.png"
                                                                @if($Settings->isEmpty())
                                                            @else
                                                            @if($setting->setting_plantilla=='../images/template2.png')
                                                            checked @endif @endif disabled>
                                                            <label class="form-check-label"
                                                                for="setting_plantilla">Template
                                                                2 (Premiun version)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="setting_plantilla" id="setting_plantilla"
                                                                value="../images/template3.png"
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
                                                <input class="form-control" type="text" name="setting_rfc"
                                                    id="setting_rfc"
                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_rfc}}@endif"
                                                    required>

                                                <label for="setting_rfc">FaceBook ID(Necesario
                                                    para el chat y publicaciones)</label>
                                                <a href="" data-toggle="modal"
                                                    data-target="#modal_obtenerFacebook">Obtener
                                                    ChatID</a>
                                                <input class="form-control" type="text" name="setting_facebook"
                                                    id="setting_facebook"
                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_facebook}}@endif"
                                                    required>

                                                <label for="setting_rfc">Twitter
                                                    Empresa</label>
                                                <input class="form-control" type="text" name="setting_twitter"
                                                    id="setting_twitter"
                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_twitter}}@endif"
                                                    required>

                                                <label for="setting_banner">Banner del
                                                    Negocio/
                                                    Empresa</label>
                                                <input class="form-control" type="text" name="setting_banner"
                                                    id="setting_banner"
                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_banner}}@endif">
                                                <label for="setting_url">URL del Negocio/
                                                    Empresa</label>
                                                <input class="form-control" type="text"
                                                    value="https://@php echo $_SERVER['HTTP_HOST']; @endphp"
                                                    name="setting_url" id="setting_url">

                                                <label for="iva">IVA</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                        <input type="text" class="form-control" name="setting_iva"
                                                            id="setting_iva"
                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_iva}} @endif">
                                                    </div>
                                                </div>

                                                <label for="setting_descuento_1">Descuento
                                                    1</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                        <input type="text" class="form-control"
                                                            name="setting_descuento_1" id="setting_descuento_1"
                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_1}} @endif "
                                                            disabled>
                                                    </div>
                                                </div>
                                                <label for="setting_descuento_2">Descuento
                                                    2</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                        <input type="text" class="form-control"
                                                            name="setting_descuento_2" id="setting_descuento_2"
                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_2}} @endif"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <label for="setting_descuento_3">Descuento
                                                    3</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                        <input type="text" class="form-control"
                                                            name="setting_descuento_3" id="setting_descuento_3"
                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_3}} @endif"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <label for="setting_descuento_4">Descuento
                                                    4</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">%</span>
                                                        <input type="text" class="form-control"
                                                            name="setting_descuento_4" id="setting_descuento_4"
                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_4}} @endif"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <button type="submit" data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-info btn-lg btn-block mt-1"
                                                    style="vertical-align:middle"> <span>
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
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
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
                                                <input class="form-control" type="text"
                                                    name="descuento_banner_principal" id="descuento_banner_principal"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->descuento_banner_principal}}@endif"
                                                    required>

                                                <label for="bannera">Primer Banner</label>
                                                <input class="form-control" type="text" name="bannera" id="bannera"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannera}}@endif"
                                                    required>

                                                <label for="texto_bannera">Texto del primer
                                                    Banner</label>
                                                <input class="form-control" type="text" name="texto_bannera"
                                                    id="texto_bannera"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannera}}@endif"
                                                    required>

                                                <label for="bannerb">Segundo Banner</label>
                                                <input class="form-control" type="text" name="bannerb" id="bannera"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannerb}}@endif"
                                                    required>

                                                <label for="texto_bannera">Texto del Segundo
                                                    Banner</label>
                                                <input class="form-control" type="text" name="texto_bannerb"
                                                    id="texto_bannerb"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerb}}@endif"
                                                    required>

                                                <label for="bannerc">Tercer Banner</label>
                                                <input class="form-control" type="text" name="bannerc" id="bannerc"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannerc}}@endif"
                                                    required>

                                                <label for="texto_bannerc">Texto del tercer
                                                    Banner</label>
                                                <input class="form-control" type="text" name="texto_bannerc"
                                                    id="texto_bannerc"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerc}}@endif"
                                                    required>

                                                <label for="fecha_inicio">Fecha Inicio
                                                    Promocion</label>
                                                <input class="form-control" type="date" name="fecha_inicio"
                                                    id="fecha_inicio"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_inicio}}@endif">

                                                <label for="fecha_final">Fecha Final
                                                    Promocion</label>
                                                <input class="form-control" type="date" name="fecha_final"
                                                    id="fecha_final"
                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_final}}@endif">

                                                <button type="submit" data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-info btn-lg btn-block mt-1"
                                                    style="vertical-align:middle"> <span>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
