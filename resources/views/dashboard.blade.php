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

                <div class="icon-bar">
                    <a onclick="closeNav()"  class="nav-link" id="taller-tab" data-toggle="tab" href="#taller" role="tab"
                    aria-controls="taller"><i class="fa fa-home"></i></a>
                    <a onclick="closeNav()" class="nav-link" id="taller-tab" data-toggle="tab" href="#taller" role="tab"
                        aria-controls="taller"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                            <path fill-rule="evenodd"
                                d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                        </svg></a>
                    <a onclick="closeNav()" class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab"
                        aria-controls="ventas" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-cart4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg></a>
                    <a onclick="closeNav()" class="nav-link" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab"
                        aria-controls="usuarios" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-people" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg></a>
                    <a onclick="closeNav()" class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-toggles2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 4a2 2 0 0 1 2-2h8a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H4z" />
                            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
                            <path fill-rule="evenodd"
                                d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
                            <path fill-rule="evenodd"
                                d="M6 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                        </svg></a>
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
