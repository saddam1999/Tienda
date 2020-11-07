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
$value = $setting->whatsapp;
setcookie("Whatsapp", $value);
    @endphp
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script type="text/javascript" src="../dist/js/jquery.smartCart.min.js"></script>
    <link href="../dist/css/smart_cart.min.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <!--Floating WhatsApp css-->
<link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
<!--Floating WhatsApp javascript-->
<script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
  <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);

        .flash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
        }

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

            -ms-transform: scale(2.5);
            -moz-transform: scale(2.5);
            -webkit-transform: scale(2.5);
            -o-transform: scale(2.5);
            transform: scale(2.5);
            position: relative;
            z-index: 100;
        }


        @media only screen and (max-width: 768px) {
            ul.gallery {
                margin-left: 15vw;
                margin-right: 15vw;
            }

            .DivName {
                cursor: pointer
            }
        }
    </style>
    <!-- Facebook Pixel Code --><script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '3271930189583444'); fbq('track', 'PageView');</script><noscript> <img height="1" width="1" src="https://www.facebook.com/tr?id=3271930189583444&ev=PageView&noscript=1"/></noscript><!-- End Facebook Pixel Code -->
    <ul class="nav nav-tabs bg-ligth" id="myTab" role="tablist" style="background-color:#fff;">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                    <path fill-rule="evenodd"
                        d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                </svg>Admin Punto de Venta</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" id="articulos-tab" data-toggle="tab" href="#articulos" role="tab"
                    aria-controls="articulos" aria-selected="true">Articulos
                </a>
                <a class="dropdown-item" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab"
                    aria-controls="marcas" aria-selected="false">Marcas
                </a>
                <a class="dropdown-item" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab"
                    aria-controls="categoria" aria-selected="false">Categorias
                </a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                    <path fill-rule="evenodd"
                        d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                </svg>Admin Taller</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" id="servicios-tab" data-toggle="tab" href="#servicios" role="tab"
                    aria-controls="servicios" aria-selected="false">Area de Servicios
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" id="taller-tab" data-toggle="tab" href="#taller">Equipos a Reparar</a>
                <a class="dropdown-item" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab"
                    aria-controls="marcas" aria-selected="false">Marcas
                </a>
                <a class="dropdown-item" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab"
                    aria-controls="categoria" aria-selected="false">Categorias
                </a>
            </div>
        </li>
        <li class="nav-item border-top border-left border-right border-warning rounded face">
            <a class="nav-link" id="taller-tab" data-toggle="tab" href="#taller" role="tab" aria-controls="taller"
                aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                <path fill-rule="evenodd"
                    d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
            </svg>Equipos a Reparar
            </a>
        </li>
        <li class="nav-item border-top border-left border-right border-info rounded face">
            <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas"
                aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>Reportes
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios"
                aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                </svg>Usuarios
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sucursal-tab" data-toggle="tab" href="#sucursal" role="tab" aria-controls="sucursal"
                aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd"
                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>Sucursal
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings"
                aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-toggles2"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M2 4a2 2 0 0 1 2-2h8a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2zm2-1a1 1 0 0 0 0 2h8a1 1 0 1 0 0-2H4z" />
                    <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
                    <path fill-rule="evenodd"
                        d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
                    <path fill-rule="evenodd" d="M6 15a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" />
                </svg>Opciones
            </a>
        </li>

        @foreach ($Caja as $caja)
        @if(Auth::user()->id_sucursal==$caja->id_sucursal)
        <div class="input-group-prepend bg-success" style="border-radius:12%;">
            <span class="input-group-text face text-secondary"><a href="" data-toggle="modal"
                    data-target="#modal_caja">Caja:
                    $@if($Caja->isEmpty()) @else {{$caja->corte}} @endif </a> </span>
        </div>
        @endif
        @endforeach

            <div class="input-group-prepend bg-warning" style="border-radius:12%;">
            @php $count=0; @endphp
            @foreach ($Equipo as $equipo)
            @php

            if($equipo->status != 2 && $equipo->status != 6)
            {
            $count++;
            }
            @endphp
            @endforeach
            <span class="input-group-text face text-secondary"><a  id="taller-tab" data-toggle="tab" href="#taller">Pendientes: {{$count}} </span></a>

        </div>
        <div class="input-group-prepend bg-primary" style="border-radius:12%;">
            <span class="input-group-text face text-secondary">SMS: {{$contador}}</span>
        </div>
    </ul>
    <div class="tab-content bg-black" id="myTabContent" style="
    background-image: url('https://img.freepik.com/vector-gratis/resumen-papel-hexagono-fondo-blanco_51543-7.jpg?size=626&ext=jpg&ga=GA1.2.1613989602.1602201600'); ">
        <div class="row">

    <div class="toast fixed-bottom " role="alert" data-delay="16000" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img width="40px;" src="https://iunlock.store/unlock-2.png" class="rounded mr-2" alt="...">
          <strong class="mr-auto">Pre Orden</strong>
          <small class="text-muted">hace 11 minutos</small>
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
          Gracias por tu interes en Holly Store Pro esta es una version Demo y no esta completa pero trabajamos arduamente por tenerlo finalizado proximamente en caso de estar interesado dejamos abierta la posibilidad de pre ordenar este sistema y obtener grandes ventajas en cuando a precios y funciones extras para quien ordene previamente contactame en caso de estar interesado.
               </div>
      </div>

            <div class="col-md-4 m-auto">
                <button type="button" data-toggle="modal" data-target="#modalvender" data-backdrop="static"
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
            <div class="col-md-4 m-auto mt-1">
                <button type="button" data-toggle="modal" data-target="#modaltaller" data-backdrop="static"
                    data-keyboard="false" class="btn btn-warning btn-lg btn-block text-white mt-3"
                    style="vertical-align:middle"><span>Reparar<center><svg width="2em" height="2em" viewBox="0 0 16 16"
                                class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                            </svg></center>
                    </span>
                </button>
            </div>
        </div>

        <div class="tab-pane fade show " id="articulos" role="tabpanel" aria-labelledby="articulos-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">

                            <div class="card-body">
                                <h4 class="card-title">Productos</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablearticulos">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Marca</th>
                                            <th>Categoria</th>
                                            <th>Talla</th>
                                            <th>ID Local</th>
                                            <th>Descuento(individual)</th>
                                            <th>Precio(MXN)</th>
                                            <th>Existencia</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal"
                                                    data-target="#modal_agregararticulo" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Articulo as $articulo)
                                        <tr>
                                            <td>{{$articulo->id}}</td>
                                            <td>{{$articulo->nombre}}</td>
                                            <td>{{$articulo->descripcion}}</td>
                                            @foreach($Marca as $marca)
                                            @if($articulo->id_marca ==$marca->id)
                                            <td>{{$marca->nombre}}</td>
                                            @endif
                                            @endforeach
                                            <td>{{$articulo->categoria}}</td>
                                            <td>{{$articulo->talla}}</td>
                                            <td>{{$articulo->IDlocal}}</td>
                                            @if($articulo->descuento==0)
                                            <td class="text-info"> 0% </td>
                                            @else
                                            <td class="text-warning">{{$articulo->descuento}}%</td>
                                            @endif
                                            @if($articulo->descuento==0)
                                            <td class="text-info">${{$articulo->precio}}</td>
                                            @else
                                            <td class="text-danger">${{$articulo->precio}}</td>
                                            @endif

                                            @if($articulo->existencia>0)
                                            <td>{{$articulo->existencia}}</td>
                                            @else
                                            <td class="text-danger">{{$articulo->existencia}}</td>
                                            @endif
                                            <td><a href="" data-toggle="modal" data-target="#modaleditararticulo"
                                                    data-id="{{$articulo->id}}" data-nombre="{{$articulo->nombre}}"
                                                    data-id_marca="{{$articulo->id_marca}}"
                                                    data-categoria="{{$articulo->categoria}}"
                                                    data-talla="{{$articulo->talla}}"
                                                    data-IDlocal="{{$articulo->IDlocal}}"
                                                    data-precio="{{$articulo->precio}}"
                                                    data-descuento="{{$articulo->descuento}}"
                                                    data-descripcion="{{$articulo->descripcion}}"
                                                    data-existencia="{{$articulo->existencia}}"
                                                    data-calificacion="{{$articulo->calificacion}}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-pencil-square" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deletearticulo/{{$articulo->id}}"><i
                                                        class="fa fa-trash"></i></a>
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
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="marcas" role="tabpanel" aria-labelledby="marcas-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Marca</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablemarcas">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Marca</th>
                                            <th>Descripcion</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal"
                                                    data-target="#modal_agregarmarca" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Marca as $marca)
                                        <tr>
                                            <td>{{$marca->id}}</td>
                                            <td>{{$marca->nombre}}</td>
                                            <td>{{$marca->descripcion}}</td>
                                            <td>
                                                <a href="/deletemarca/{{$marca->id}}"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                </div>
            </div>
        </div>

        <div class="tab-pane fade show " id="usuarios" role="tabpanel" aria-labelledby="usuarios-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Usuarios</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tableusuarios">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Sucursal</th>
                                            <th>Status</th>
                                            <th>Fecha Agregado</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal" data-target="#modalagregar"
                                                    data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Usuario as $usuario)
                                        <tr>

                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->rol}}</td>
                                            @foreach ($Sucursal as $sucursal)
                                            @if($sucursal->id==$usuario->id_sucursal)
                                            <td>{{$sucursal->nombre}}</td>
                                            @endif
                                            @endforeach
                                            @if($usuario->status==1)
                                            <td class="text-success">Activo</td>
                                            @elseif($usuario->status==0)
                                            <td class="text-danger">No activo</td>
                                            @else
                                            <td class="text-secondary">Sin status</td>
                                            @endif
                                            <td>{{$usuario->created_at}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditar"
                                                    data-id="{{$usuario->id}}"
                                                    data-id_sucursal="{{$usuario->id_sucursal}}"
                                                    data-name="{{$usuario->name}}" data-email="{{$usuario->email}}"
                                                    data-rol="{{$usuario->rol}}"
                                                    data-estatus="{{$usuario->status}}"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-pencil-square"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deleteusuario/{{$usuario->id}}"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                </div>
            </div>

            <div class="tab-pane fade" id="prueba" role="tabpanel" aria-labelledby="prueba-tab">...</div>
        </div>
        <div class="tab-pane fade show " id="servicios" role="tabpanel" aria-labelledby="servicios-tab">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">

                            <div class="card-body">
                                <h4 class="card-title">Servicios</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tableservicios">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <th>Tiempo</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal"
                                                    data-target="#modalagregarservicio" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Servicio as $servicio)
                                        <tr>
                                            <td>{{$servicio->id}}</td>
                                            <td>{{$servicio->nombre}}</td>
                                            <td>{{$servicio->descripcion}}</td>
                                            <td>${{$servicio->precio}}</td>
                                            <td>{{$servicio->tiempo}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditarservicio"
                                                    data-id="{{$servicio->id}}" data-nombre="{{$servicio->nombre}}"
                                                    data-descripcion="{{$servicio->descripcion}}"
                                                    data-precio="{{$servicio->precio}}"
                                                    data-tiempo="{{$servicio->tiempo}}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-pencil-square" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deleteservicio/{{$servicio->id}}"><svg width="1em"
                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                </div>
            </div>
        </div>

        <div class="tab-pane fade show " id="sucursal" role="tabpanel" aria-labelledby="sucursal-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Sucursales</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablesucursal">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Telegram</th>
                                            <th>Whatsapp</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal"
                                                    data-target="#modalagregarsucursal" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Sucursal as $sucursal)
                                        <tr>
                                            <td>{{$sucursal->id}}</td>
                                            <td>{{$sucursal->nombre}}</td>
                                            <td>{{$sucursal->direccion}}</td>
                                            <td>{{$sucursal->telefono}}</td>
                                            <td>{{$sucursal->email}}</td>
                                            <td>{{$sucursal->telegram}}</td>
                                            <td>{{$sucursal->whatsapp}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditarsucursal"
                                                    data-id="{{$sucursal->id}}" data-nombre="{{$sucursal->nombre}}"
                                                    data-email="{{$sucursal->email}}"
                                                    data-direccion="{{$sucursal->direccion}}"
                                                    data-telefono="{{$sucursal->telefono}}"
                                                    data-telegram="{{$sucursal->telegram}}"
                                                    data-whatsapp="{{$sucursal->whatsapp}}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-pencil-square" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deletesucursal/{{$sucursal->id}}"><svg width="1em"
                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </p>
                            </div>
                        </div>
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Cajas</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablecajas">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Usuario</th>
                                            <th>Sucursal</th>
                                            <th>Corte</th>
                                            <th>Status</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal"
                                                    data-target="#modalagregarcaja" data-backdrop="static"
                                                    data-keyboard="false" class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Caja as $caja)
                                        <tr>
                                            <td>{{$caja->id}}</td>
                                            @foreach ($Usuario as $usuario)
                                            @if($usuario->id==$caja->id_user)
                                            <td>{{$usuario->name}}</td>
                                            @endif
                                            @endforeach
                                            @foreach ($Sucursal as $sucursal)
                                            @if($sucursal->id==$caja->id_sucursal)
                                            <td>{{$sucursal->nombre}}</td>
                                            @endif
                                            @endforeach
                                            <td>{{$caja->corte}}</td>
                                            <td>{{$caja->id_corte}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditarcaja"
                                                    data-id="{{$caja->id}}" data-id_user="{{$caja->id_user}}"
                                                    data-id_sucursal="{{$caja->id_sucursal}}"
                                                    data-id_corte="{{$caja->id_corte}}" data-status="{{$caja->status}}"
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-pencil-square" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd"
                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deletecaja/{{$caja->id}}"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                </div>
            </div>
        </div>

        <div class="tab-pane fade show " id="categoria" role="tabpanel" aria-labelledby="categoria-tab">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">

                            <div class="card-body">
                                <h4 class="card-title">Categoria</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablecategoria">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Opciones</th>
                                            <th><button type="button" data-toggle="modal" data-target="#modal_categoria"
                                                    data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-success btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-clipboard-plus" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                            <path fill-rule="evenodd"
                                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zM8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z" />
                                                        </svg></center>
                                                </button></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Categoria as $categoria)
                                        <tr>
                                            <td>{{$categoria->id}}</td>
                                            <td>{{$categoria->nombre_categoria}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modal_editarcategoria"
                                                    data-id="{{$categoria->id}}"
                                                    data-nombre_categoria="{{$categoria->nombre_categoria}}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                        class="bi bi-pencil-square" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg></a>
                                                <a href="/deletecategoria/{{$categoria->id}}"><svg width="1em"
                                                        height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
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
                </div>
            </div>
        </div>
        <div class="tab-pane fade show " id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Opciones</h4>
                                <div class="wrapper">
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical">
                                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill"
                                                    href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                    aria-selected="true">Logotipos/Nombres</a>
                                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill"
                                                    href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                    aria-selected="false">Diseño</a>
                                                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill"
                                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                    aria-selected="false">Promociones</a>
                                                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill"
                                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">Banners</a>
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                    aria-labelledby="v-pills-home-tab">
                                                    <div class="card text-left">
                                                        <div class="card-body">
                                                            <form
                                                                action="@if($Settings->isEmpty()) /agregarsettings @else /editsettings/1 @endif">
                                                                @csrf
                                                                @method('post')
                                                                <label for="setting_nombre">Nombre del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_nombre" id="setting_nombre"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_nombre}}@endif"
                                                                    required>
                                                                <label for="setting_direccion">Direccion del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_direccion" id="setting_direccion"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_direccion}}@endif"
                                                                    required>
                                                                <label for="setting_telefono">Telefono del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_telefono" id="setting_telefono"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_telefono}}@endif"
                                                                    required>
                                                                <label for="setting_logo">Logo del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_logo" id="setting_logo"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif"
                                                                    required>
                                                                <label for="setting_contacto">Contacto del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_contacto" id="setting_contacto"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_contacto}}@endif"
                                                                    required>
                                                                <label for="setting_abierto">Horario del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="setting_text"
                                                                    name="setting_abierto" id="setting_abierto"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_abierto}}@endif"
                                                                    required>
                                                                <label for="setting_descripcion">Descripcion del
                                                                    Negocio/
                                                                    Empresa</label>
                                                                <textarea class="form-control"
                                                                    name="setting_descripcion" id="setting_descripcion"
                                                                    cols="30"
                                                                    rows="3">@if($Settings->isEmpty()) @else {{$setting->setting_descripcion}}@endif</textarea>
                                                                <label for="setting_moneda">Selecciona la moneda que
                                                                    requieres:</label>
                                                                <select class="form-control" name="setting_moneda"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_moneda}}@endif"
                                                                    required>
                                                                    <option class="form-control" value="Dollar">Dolar
                                                                    </option>
                                                                    <option class="form-control" value="Euro">Euro
                                                                    </option>
                                                                    <option class="form-control" value="MXN" selected>
                                                                        Peso Mexicano
                                                                    </option>
                                                                    <option class="form-control" value="Libra">Libra
                                                                    </option>
                                                                    <option class="form-control" value="Rupia">Rupia
                                                                    </option>
                                                                </select>
                                                                <label for="setting_rfc">RFC del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_rfc" id="setting_rfc"
                                                                    value="@if($Settings->isEmpty()) @else {{$setting->setting_rfc}}@endif"
                                                                    required>
                                                                <label for="setting_banner">Banner del Negocio/
                                                                    Empresa</label>
                                                                <input class="form-control" type="text"
                                                                    name="setting_banner" id="setting_banner"
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
                                                                        <input type="text" class="form-control"
                                                                            name="setting_iva" id="setting_iva"
                                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_iva}} @endif">
                                                                    </div>
                                                                </div>

                                                                <label for="setting_descuento_1">Descuento 1</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">%</span>
                                                                        <input type="text" class="form-control"
                                                                            name="setting_descuento_1"
                                                                            id="setting_descuento_1"
                                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_1}} @endif ">
                                                                    </div>
                                                                </div>
                                                                <label for="setting_descuento_2">Descuento 2</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">%</span>
                                                                        <input type="text" class="form-control"
                                                                            name="setting_descuento_2"
                                                                            id="setting_descuento_2"
                                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_2}} @endif">
                                                                    </div>
                                                                </div>
                                                                <label for="setting_descuento_3">Descuento 3</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">%</span>
                                                                        <input type="text" class="form-control"
                                                                            name="setting_descuento_3"
                                                                            id="setting_descuento_3"
                                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_3}} @endif">
                                                                    </div>
                                                                </div>
                                                                <label for="setting_descuento_4">Descuento 4</label>
                                                                <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">%</span>
                                                                        <input type="text" class="form-control"
                                                                            name="setting_descuento_4"
                                                                            id="setting_descuento_4"
                                                                            value="@if($Settings->isEmpty()) @else {{$setting->setting_descuento_4}} @endif">
                                                                    </div>
                                                                </div>
                                                                <button type="submit" data-backdrop="static"
                                                                    data-keyboard="false"
                                                                    class="btn btn-info btn-lg btn-block mt-1" style="vertical-align:middle"> <span> Guardar
                                                                    <center><svg width="2em" height="2em"
                                                                            viewBox="0 0 16 16"
                                                                            class="bi bi-pencil-square"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                        </svg></center> </span> </button> </form>

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
                                                                <input class="form-control" type="text" name="titulo"
                                                                    id="titulo"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->titulo}}@endif"
                                                                    required>

                                                                <label for="titulo_banner_principal">Titulo Banner
                                                                    Principal</label>
                                                                <input class="form-control" type="text"
                                                                    name="titulo_banner_principal"
                                                                    id="titulo_banner_principal"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->titulo_banner_principal}}@endif"
                                                                    required>

                                                                <label for="descuento_banner_principal">Descuento Banner
                                                                    Principal</label>
                                                                <input class="form-control" type="text"
                                                                    name="descuento_banner_principal"
                                                                    id="descuento_banner_principal"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->descuento_banner_principal}}@endif"
                                                                    required>

                                                                <label for="bannera">Primer Banner</label>
                                                                <input class="form-control" type="text" name="bannera"
                                                                    id="bannera"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannera}}@endif"
                                                                    required>

                                                                <label for="texto_bannera">Texto del primer
                                                                    Banner</label>
                                                                <input class="form-control" type="text"
                                                                    name="texto_bannera" id="texto_bannera"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannera}}@endif"
                                                                    required>

                                                                <label for="bannerb">Segundo Banner</label>
                                                                <input class="form-control" type="text" name="bannerb"
                                                                    id="bannera"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannerb}}@endif"
                                                                    required>

                                                                <label for="texto_bannera">Texto del Segundo
                                                                    Banner</label>
                                                                <input class="form-control" type="text"
                                                                    name="texto_bannerb" id="texto_bannerb"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerb}}@endif"
                                                                    required>

                                                                <label for="bannerc">Tercer Banner</label>
                                                                <input class="form-control" type="text" name="bannerc"
                                                                    id="bannerc"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->bannerc}}@endif"
                                                                    required>

                                                                <label for="texto_bannerc">Texto del tercer
                                                                    Banner</label>
                                                                <input class="form-control" type="text"
                                                                    name="texto_bannerc" id="texto_bannerc"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->texto_bannerc}}@endif"
                                                                    required>

                                                                <label for="fecha_inicio">Fecha Inicio Promocion</label>
                                                                <input class="form-control" data-provide="datepicker"
                                                                    type="date" name="fecha_inicio" id="fecha_inicio"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_inicio}}@endif"
                                                                    required>

                                                                <label for="fecha_final">Fecha Final Promocion</label>
                                                                <input class="form-control" data-provide="datepicker"
                                                                    type="date" name="fecha_final" id="fecha_final"
                                                                    value="@if($Promocion->isEmpty()) @else {{$promocion->fecha_final}}@endif"
                                                                    required>

                                                                <button type="submit" data-backdrop="static"
                                                                    data-keyboard="false"
                                                                    class="btn btn-info btn-lg btn-block mt-1" style="vertical-align:middle"> <span> Guardar
                                                                    <center><svg width="1em" height="1em"
                                                                            viewBox="0 0 16 16" class="bi bi-hdd"
                                                                            fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd"
                                                                                d="M14 9H2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1zM2 8a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z" />
                                                                            <path
                                                                                d="M5 10.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                                            <path fill-rule="evenodd"
                                                                                d="M4.094 4a.5.5 0 0 0-.44.26l-2.47 4.532A1.5 1.5 0 0 0 1 9.51v.99H0v-.99c0-.418.105-.83.305-1.197l2.472-4.531A1.5 1.5 0 0 1 4.094 3h7.812a1.5 1.5 0 0 1 1.317.782l2.472 4.53c.2.368.305.78.305 1.198v.99h-1v-.99a1.5 1.5 0 0 0-.183-.718L12.345 4.26a.5.5 0 0 0-.439-.26H4.094z" />
                                                                        </svg></center> </span></button> </form>

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
            </div>
        </div>
        <div class="tab-pane fade show " id="taller" role="tabpanel" aria-labelledby="taller-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border border-warning">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Equipos a Reparar</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tabletaller">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Tecnico</th>
                                            <th>Cliente</th>
                                            <th>Serial</th>
                                            <th>IMEI</th>
                                            <th>Captura</th>
                                            <th>Comentario</th>
                                            <th>Fecha Recibido</th>
                                            <th>Fecha Entrega</th>
                                            <th>Status</th>
                                            <th>Opciones</th>
                                            <th>Imprimir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Equipo->sortByDesc('status')  as $equipo)
                                            <tr>
                                            <td>{{$equipo->id}}</td>
                                            @foreach ($Usuario as $user)
                                            @if($user->id==$equipo->id_user)
                                            <td>{{$user->name}}</td>
                                            @endif
                                            @endforeach
                                            @foreach ($Usuario as $user)
                                            @if($user->id==$equipo->id_cliente)
                                            <td>{{$user->name}}</td>
                                            @endif
                                            @endforeach
                                            <td>{{$equipo->serial}} {{$equipo->id_pago}}</td>
                                            <td>{{$equipo->imei}}</td>
                                            <td><img class="thumbnail zoom" style="border-radius:10px;"
                                                    src="./fotos/{{$equipo->id_captura}}" alt=""></td>
                                            <td><textarea class="border border-dark" name="" id="" cols="auto"
                                                    rows="auto" disabled>{{$equipo->id_comentario}}</textarea></td>

                                            <td><input class="text-secondary" type="date"
                                                    value="{{$equipo->fecha_recibido}}"></td>
                                            <td>
                                                @php
                                                $date1 = new DateTime("now");
                                                $date2 = new DateTime($equipo->fecha_entrega);
                                                @endphp

                                                @if($date1->format("Y-m-d") == $equipo->fecha_entrega )
                                                @php $contador++; @endphp
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text text-danger" id="basic-addon1"><svg
                                                            width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-alarm" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                                                        </svg><input class="text-danger" type="date"
                                                            value="{{$equipo->fecha_entrega}}">
                                                    </span>
                                                </div>
                                                @else
                                                <input class="text-info" type="date" value="{{$equipo->fecha_entrega}}">
                                                @endif
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-dark" data-id="{{$equipo->id}}"
                                                    data-status="{{$equipo->status}}" data-pago="{{$equipo->pago}}"
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

                                                </a></td>
                                            @if($equipo->status!=2 && $equipo->status !=6)
                                            <td>
                                                <a href="" data-toggle="modal" data-target="#modaledittaller"
                                                    data-id="{{$equipo->id}}" data-pago="{{$equipo->pago}}"
                                                    data-presupuesto="{{$equipo->presupuesto}}"
                                                    data-inversion="{{$equipo->inversion}}"
                                                    data-id_servicio="{{$equipo->id_servicio}}"
                                                    data-precio="{{$equipo->precio}}"
                                                    data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                    data-id_captura="{{$equipo->id_captura}}"
                                                    data-id_comentario="{{$equipo->id_comentario}}"
                                                    data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                    data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                    data-status="{{$equipo->status}}"
                                                    data-tiene_camara="{{$equipo->Tiene_Camara}}"
                                                    data-centro_carga="{{$equipo->Centro_Carga}}"
                                                    data-señal="{{$equipo->Señal}}"
                                                    data-lectorsd="{{$equipo->LectorSD}}"
                                                    data-altavoz="{{$equipo->AltaVoz}}"
                                                    data-botonhome="{{$equipo->BotonHome}}"
                                                    data-microfono="{{$equipo->Microfono}}"
                                                    data-lector_sim="{{$equipo->Lector_SIM}}"
                                                    data-volumenplus="{{$equipo->Volumenplus}}"
                                                    data-volumenless="{{$equipo->Volumenless}}"
                                                    data-encendido="{{$equipo->Encendido}}"
                                                    data-auricular="{{$equipo->Auricular}}"
                                                    data-touch="{{$equipo->Touch}}" data-bateria="{{$equipo->Bateria}}"
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
                                                <a href="/deleteequipo/{{$equipo->id}}"><svg width="2em" height="2em"
                                                        viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                    </svg></a>
                                                <a href="" data-toggle="modal" data-target="#modal_foto"
                                                    data-id="{{$equipo->id}}"
                                                    data-presupuesto="{{$equipo->presupuesto}}"
                                                    data-inversion="{{$equipo->inversion}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-servicio="{{$equipo->id_servicio}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                    data-id_captura="{{$equipo->id_captura}}"
                                                    data-id_comentario="{{$equipo->id_comentario}}"
                                                    data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                    data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                    data-status="{{$equipo->status}}"
                                                    data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                    data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                    data-Señal="{{$equipo->Señal}}"
                                                    data-LectorSD="{{$equipo->LectorSD}}"
                                                    data-AltaVoz="{{$equipo->AltaVoz}}"
                                                    data-BotonHome="{{$equipo->BotonHome}}"
                                                    data-Microfono="{{$equipo->Microfono}}"
                                                    data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                    data-Volumenplus="{{$equipo->Volumenplus}}"
                                                    data-Volumenless="{{$equipo->Volumenless}}"
                                                    data-Encendido="{{$equipo->Encendido}}"
                                                    data-Auricular="{{$equipo->Auricular}}"
                                                    data-Touch="{{$equipo->Touch}}" data-Bateria="{{$equipo->Bateria}}"
                                                    data-Enciende="{{$equipo->Enciende}}"
                                                    data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                    data-Golpes="{{$equipo->Golpes}}"
                                                    data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                        height="2em" viewBox="0 0 16 16"
                                                        class="bi bi-camera text-success" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                                                        <path fill-rule="evenodd"
                                                            d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                        <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                                                    </svg></a>
                                                <a href="/galleria/{{$equipo->id}} " target="_blank"
                                                    data-id="{{$equipo->id}}"
                                                    data-presupuesto="{{$equipo->presupuesto}}"
                                                    data-inversion="{{$equipo->inversion}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                    data-id_captura="{{$equipo->id_captura}}"
                                                    data-id_comentario="{{$equipo->id_comentario}}"
                                                    data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                    data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                    data-status="{{$equipo->status}}"
                                                    data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                    data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                    data-Señal="{{$equipo->Señal}}"
                                                    data-LectorSD="{{$equipo->LectorSD}}"
                                                    data-AltaVoz="{{$equipo->AltaVoz}}"
                                                    data-BotonHome="{{$equipo->BotonHome}}"
                                                    data-Microfono="{{$equipo->Microfono}}"
                                                    data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                    data-Volumenplus="{{$equipo->Volumenplus}}"
                                                    data-Volumenless="{{$equipo->Volumenless}}"
                                                    data-Encendido="{{$equipo->Encendido}}"
                                                    data-Auricular="{{$equipo->Auricular}}"
                                                    data-Touch="{{$equipo->Touch}}" data-Bateria="{{$equipo->Bateria}}"
                                                    data-Enciende="{{$equipo->Enciende}}"
                                                    data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                    data-Golpes="{{$equipo->Golpes}}"
                                                    data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><svg width="2em"
                                                        height="2em" viewBox="0 0 16 16" class="bi bi-film text-warning"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z" />
                                                    </svg></a>

                                                <a href="" data-toggle="modal" data-target="#modal_pago"
                                                    data-id="{{$equipo->id}}"
                                                    data-presupuesto="{{$equipo->presupuesto}}"
                                                    data-inversion="{{$equipo->inversion}}"
                                                    data-pago="{{$equipo->pago}}"
                                                    data-adelanto="{{$equipo->adelanto}}"
                                                    data-precio="{{$servicio->precio}}"
                                                    data-id_servicio="{{$equipo->id_servicio}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}"
                                                    data-imei="{{$equipo->imei}}"
                                                    data-id_sucursal="{{$equipo->id_sucursal}}"
                                                    ><svg width="2em"
                                                        height="2em" viewBox="0 0 16 16" class="bi bi-cash text-info"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                                        <path
                                                            d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                                    </svg>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/imprimir/{{$equipo->id}}" target="_blank"
                                                    data-id="{{$equipo->id}}" data-pago="{{$equipo->pago}}"
                                                    data-id_servicio="{{$equipo->id_servicio}}"
                                                    data-presupuesto="{{$equipo->presupuesto}}"
                                                    data-inversion="{{$equipo->inversion}}"
                                                    data-precio="{{$equipo->precio}}"
                                                    data-id_sucursal="{{Auth::user()->id_sucursal}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                    data-id_captura="{{$equipo->id_captura}}"
                                                    data-id_comentario="{{$equipo->id_comentario}}"
                                                    data-fecha_recibido="{{$equipo->fecha_recibido}}"
                                                    data-fecha_entrega="{{$equipo->fecha_entrega}}"
                                                    data-status="{{$equipo->status}}"
                                                    data-Tiene_Camara="{{$equipo->Tiene_Camara}}"
                                                    data-Centro_Carga="{{$equipo->Centro_Carga}}"
                                                    data-Señal="{{$equipo->Señal}}"
                                                    data-LectorSD="{{$equipo->LectorSD}}"
                                                    data-AltaVoz="{{$equipo->AltaVoz}}"
                                                    data-BotonHome="{{$equipo->BotonHome}}"
                                                    data-Microfono="{{$equipo->Microfono}}"
                                                    data-Lector_SIM="{{$equipo->Lector_SIM}}"
                                                    data-Volumenplus="{{$equipo->Volumenplus}}"
                                                    data-Volumenless="{{$equipo->Volumenless}}"
                                                    data-Encendido="{{$equipo->Encendido}}"
                                                    data-Auricular="{{$equipo->Auricular}}"
                                                    data-Touch="{{$equipo->Touch}}" data-Bateria="{{$equipo->Bateria}}"
                                                    data-Enciende="{{$equipo->Enciende}}"
                                                    data-Memoria="{{$equipo->Memoria}}" data-SIM="{{$equipo->SIM}}"
                                                    data-Golpes="{{$equipo->Golpes}}"
                                                    data-Tiene_Bateria="{{$equipo->Tiene_Bateria}}"><i
                                                        class="far fa-file-pdf text-warning h1 face"
                                                        alt="Imprime archivo PDF"></i></a>
                                                <a href="/QR/{{$equipo->id}}" target="_blank">
                                                    <h1><i class="fas fa-qrcode face" alt="Imprime QR"></i></h1>
                                                </a>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="ventas" role="tabpanel" aria-labelledby="ventas-tab">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Ventas</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tableventas"  >
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Cajero</th>
                                            <th>Cliente</th>
                                            <th>Equipo</th>
                                            <th>Precio</th>
                                            <th>Sucursal</th>
                                            <th>Adelanto</th>
                                            <th>Monto a Pagar</th>
                                            <th>Total</th>
                                            <th>Fecha</th>
                                            <th>Pagado</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Pago_Equipo as $pago_equipo)
                                        <tr>
                                            <td>{{$pago_equipo->id}}</td>
                                            @foreach ($Usuario as $usuario)
                                            @if($pago_equipo->id_user==$usuario->id)
                                            <td>{{$usuario->name}}</td>
                                            @endif
                                            @endforeach

                                            @foreach ($Usuario as $usuario)
                                            @if($pago_equipo->id_cliente==$usuario->id)
                                            <td>{{$usuario->name}}</td>
                                            @endif
                                            @endforeach

                                            @foreach ($Equipo as $equipo)
                                            @if($equipo->id==$pago_equipo->id_equipo)
                                            @if($equipo->serial=='')
                                            <td>{{$equipo->serial}}</td>
                                            @else
                                            <td>{{$equipo->imei}}</td>
                                            @endif
                                            @endif
                                            @endforeach

                                            <td>{{$pago_equipo->monto}}</td>

                                            @foreach ($Sucursal as $sucursal)
                                            @if($pago_equipo->id_sucursal==$sucursal->id)
                                            <td>{{$sucursal->nombre}}</td>
                                            @endif
                                            @endforeach

                                            <td>{{$pago_equipo->adelanto}}</td>

                                            @if($pago_equipo->iva=='')
                                            <td class="price">${{$pago_equipo->total}}</td>
                                            @elseif($pago_equipo->iva!=''&&$pago_equipo->total!=0)
                                            <td class="price">${{$pago_equipo->total}} + {{$pago_equipo->iva}} IVA </td>
                                            @elseif($pago_equipo->iva!=''&&$pago_equipo->total==0)
                                            <td class="price">${{$pago_equipo->total}}</td>
                                            @endif

                                            @if($pago_equipo->iva=='')
                                            <td class="price">${{$pago_equipo->total}}</td>
                                            @elseif($pago_equipo->iva!=''&&$pago_equipo->total!=0)
                                            <td class="price">${{$pago_equipo->total}} + {{$pago_equipo->iva}} IVA </td>
                                            @elseif($pago_equipo->iva!=''&&$pago_equipo->total==0)
                                            <td class="price">${{$pago_equipo->totals}}</td>
                                            @endif

                                            <td class="price">{{$pago_equipo->created_at->format('d/m/y')}}</td>
                                            <td>{{$pago_equipo->status}}</td>

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="col-md-12 text-center">
                                <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Movimiento Caja</h4>
                                <table class="table table-striped table-inverse table-responsive" id="tablemovimientos" >
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th class="th-sm">#</th>
                                            <th class="th-sm">Cajero</th>
                                            <th class="th-sm">Sucursal</th>
                                            <th class="th-sm">Comentario</th>
                                            <th class="th-sm">Monto</th>
                                            <th class="th-sm">Movimiento</th>
                                            <th class="th-sm">Fecha</th>
                                            <th><button type="button" data-toggle="modal" data-target="#modal_caja"
                                                    data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-warning btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wallet2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                                        </svg></center>
                                                </button>

                                                <button type="button" data-toggle="modal" data-target="#modal_corte"
                                                    data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-info btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                                        <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                                        <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                                                      </svg></center>
                                                </button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($MovimientoCaja as $MovimientoCaja)
                                        <tr>
                                            <td>{{$MovimientoCaja->id}}</td>
                                            @foreach ($Usuario as $usuario)
                                            @if($usuario->id==$MovimientoCaja->id_user)
                                            <td>{{$usuario->name}}</td>
                                            @endif
                                            @endforeach

                                            @foreach ($Sucursal as $sucursal)
                                            @if($MovimientoCaja->id_sucursal==$sucursal->id)
                                            <td>{{$sucursal->nombre}}</td>
                                            @endif
                                            @endforeach

                                            <td><textarea name="" id="" cols="auto" rows="auto"
                                                    disabled>{{$MovimientoCaja->comentario}}</textarea>
                                            </td>
                                            @if($MovimientoCaja->status=='deposito')
                                            <td class="text-success">+ {{$MovimientoCaja->monto}}</td>
                                            @else
                                            <td class="text-danger">
                                                <del>- {{$MovimientoCaja->monto}}</del></td>
                                            @endif
                                            @if($MovimientoCaja->status=='deposito')
                                            <td class="text-success">Deposito</td>
                                            @else
                                            <td class="text-warning">Retiro</td>
                                            @endif
                                            <td>{{$MovimientoCaja->created_at->format('d/m/y')}}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="col-md-12 text-center">
                                <ul class="pagination pagination-lg pager" id="myPager"></ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="se-pre-con"></div>

<div id="WAButton"></div>
</x-app-layout>
<!-- Footer -->
<footer class="page-footer font-small bg-dark text-white rounded" style="background-image: url('../img/backgrounds.jpeg');">
    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-2">
                <div class="flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic" href="https://twitter.com/hollydev3">
                        <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic" href="https://www.youtube.com/channel/UCX1rcl5HxAb94teb1l_Tu-A">
                        <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Youtube +-->
                    <a class="you-ic" href="https://www.youtube.com/channel/UCX1rcl5HxAb94teb1l_Tu-A">
                        <i class="fab fa-youtube fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Telegram-->
                    <a class="tele-ic" href="https://t.me/hollydev2">
                        <i class="fab fa-telegram fa-lg mr-md-5 mr-3  white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-1 text-white">© 2020 Copyright:
        <a href="https://hollyrenew.website/"> HollyDev</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
@extends('scripts')
@extends('modal')
