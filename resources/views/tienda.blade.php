@include('header2')@foreach ($Settings as $setting)@endforeach
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
                        @include('articulos')
                    </div>

                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @include('marcas')
                    </div>
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @include('categoria')
                    </div>
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @include('servicios')
                    </div>
                </div>
            </div>
            @include('footer2')
        </div>
    </div>
    @include('scripts2')
</body>
