@include('headersetting')@foreach ($Settings as $setting)@endforeach
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

                    <div class="col-md-12">
                        <div class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link"  href="#articulos" data-toggle="tab">Articulos</a></li>
                                <li class="nav-item"><a class="nav-link"  href="#marcas" data-toggle="tab">Marcas</a></li>
                                <li class="nav-item"><a class="nav-link"  href="#categorias" data-toggle="tab">Categorias</a></li>
                                <li class="nav-item"><a class="nav-link"  href="#servicios" data-toggle="tab">Servicios</a></li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="articulos"> @include('articulos')
                            </div>
                            <div class="tab-pane" id="marcas">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    @include('marcas')
                                </div>
                            </div>
                            <div class="tab-pane" id="categorias">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    @include('categoria')
                                </div>
                            </div>
                            <div class="tab-pane" id="servicios">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    @include('servicios')
                                </div>
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
