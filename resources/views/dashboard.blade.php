<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @foreach ($Settings as $setting)@endforeach
            @foreach ($Promocion as $promocion)@endforeach

        </h2>
    </x-slot>
    @php
    date_default_timezone_set('UTC');
    $contador=0;
    @endphp
    @include('header')
    <!--Scripts y librerias-->
    <div class="se-pre-con"></div>
    @yield('sidebar')
    <!-- SideBar-->

    <body>
        <div class="container-fluid">
            <div class="header fixed-header navbar-default navbar-fixed-top" role="navigation">

                <h3 class="text-muted" id="trigger"><span><span class="bl">
                            Dashboard</span></span>
                    <small class="starter"></small></h3>

            </div>
            <div></div>
            <div class="sidebar closed" style="background-image: url('../img/backgrounds.jpeg');">
                <header>
                    <img style="border-radius:70%;"
                        src=" @if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif" width="80" height="80"
                        class="d-inline-block align-top ml-5" alt="">
                    <h2 class="text-white">@if($Settings->isEmpty()) @else{{$setting->setting_nombre}}@endif</h2> <a
                        href="#" id="close"><span class="entypo-cancel"></span></a>
                    <h5 class="text-info ml-auto mr-auto"> {{Auth::user()->name}}</h5>

                    <a class="ml-5" href="#" id="trigger"> Cerrar Menu <i class="fas fa-bars"></i></a>
                </header>
                @include('menu')
                <!-- Menu de botones-->
            </div>
            <div id="blurrMe">
                <div class="tab-content bg-black" id="myTabContent"
                    style="background-image: url('https://wallpaperset.com/w/full/d/d/5/462750.jpg'); ">
                    @include('tabs')
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
                            <button type="button" data-toggle="modal" data-target="#modaltaller" data-backdrop="static"
                                data-keyboard="false" class="btn btn-warning btn-lg btn-block text-white mt-3"
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

                    @include('articulos')
                    @include('marcas')
                    @include('usuarios')
                    @include('servicios')
                    @include('sucursal')
                    @include('categoria')
                    @include('settings')
                    @include('taller')
                    @include('ventas')

                    <a class="border border-secondary; fixed-bottom face  shadow-lg" style="
                    width:5%; margin-bottom: 19%; margin-right:18px; font-size:40px; border-radius:10px 10px"
                        onclick="openNav()">
                        <div class="container" onclick="myFunction(this)">
                            <i class="fas fa-caret-square-down"></i>
                        </div>
                    </a>
                    Menu

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <filter id="blur">
                            <feGaussianBlur stdDeviation="10" />
                        </filter>

                        <filter id="blurLogo">
                            <feGaussianBlur stdDeviation="1" />
                        </filter>
                    </svg>

                    @extends('scripts')
                    @extends('footer')
                    @extends('modal')
    </body>

    </html>

</x-app-layout>
