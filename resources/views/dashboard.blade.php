<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            @foreach ($Settings as $setting)@endforeach
            @foreach ($Promocion as $promocion)@endforeach

        </h2>
    </x-slot>
    @php date_default_timezone_set('UTC');
    $contador=0;
    @endphp

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link href="../dist/css/smart_cart.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../dist/js/jquery.smartCart.min.js"></script>
    <link href="../css/main.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
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
                <a class="nav-link" id="articulos-tab" data-toggle="tab" href="#articulos" role="tab"
                    aria-controls="articulos" aria-selected="true"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z" />
                    </svg>Articulos
                </a>
                <a class="dropdown-item" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab"
                    aria-controls="marcas" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z" />
                    </svg>Marcas
                </a>
                <a class="dropdown-item" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab"
                    aria-controls="categoria" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-archive" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>Categorias
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
                <a class="dropdown-item" id="taller-tab" data-toggle="tab" href="#taller">Taller</a>
                <a class="dropdown-item" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab"
                    aria-controls="marcas" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-handbag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 1a2 2 0 0 0-2 2v2h4V3a2 2 0 0 0-2-2zm3 4V3a3 3 0 1 0-6 0v2H3.361a1.5 1.5 0 0 0-1.483 1.277L.85 13.13A2.5 2.5 0 0 0 3.322 16h9.356a2.5 2.5 0 0 0 2.472-2.87l-1.028-6.853A1.5 1.5 0 0 0 12.64 5H11zm-1 1v1.5a.5.5 0 0 0 1 0V6h1.639a.5.5 0 0 1 .494.426l1.028 6.851A1.5 1.5 0 0 1 12.678 15H3.322a1.5 1.5 0 0 1-1.483-1.723l1.028-6.851A.5.5 0 0 1 3.36 6H5v1.5a.5.5 0 0 0 1 0V6h4z" />
                    </svg>Marcas
                </a>
                <a class="dropdown-item" id="categoria-tab" data-toggle="tab" href="#categoria" role="tab"
                    aria-controls="categoria" aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16"
                        class="bi bi-archive" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                    </svg>Categorias
                </a>
            </div>
        </li>

        <li class="nav-item">
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
            <span class="input-group-text face text-secondary">Pendientes: {{$count}}</span>
        </div>
        <div class="input-group-prepend bg-primary" style="border-radius:12%;">
            <span class="input-group-text face text-secondary">Urgente: {{$contador}}</span>
        </div>
    </ul>
    @if(Auth::user()->rol=="Admin"||Auth::user()->rol=="Tecnico")
    <div class="toast" data-autohide="false">
        <div class="toast-header">
            <strong class="mr-auto text-primary">Toast Header</strong>
            <small class="text-muted">5 mins ago</small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            @if (session('pago_equipo'))
            <div class="alert alert-success m-3">
                <?php echo '<html>'.session('id_sucursal').'</html>' ?>
            </div>
            @endif
        </div>
    </div>
    @endif
    <div class="tab-content bg-black" id="myTabContent" style="background-image: url('https://img.freepik.com/vector-gratis/resumen-papel-hexagono-fondo-blanco_51543-7.jpg?size=626&ext=jpg&ga=GA1.2.1613989602.1602201600'); ">
        <div class="row">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                <h4 class="card-title">Settings</h4>
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                        @foreach($Equipo as $equipo)
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
                                            <td><a href="" class="btn btn-dark" data-id="{{$equipo->id}}"
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
                                                    data-id_servicio="{{$equipo->id_servicio}}"
                                                    data-total="{{$equipo->total}}" data-iva="{{$equipo->iva}}"
                                                    data-monto="{{$equipo->monto}}"
                                                    data-adelanto="{{$equipo->adelanto}}"
                                                    data-id_user="{{$equipo->id_user}}"
                                                    data-id_cliente="{{$equipo->id_cliente}}"
                                                    data-serial="{{$equipo->serial}}" data-imei="{{$equipo->imei}}"
                                                    data-id_captura="{{$equipo->id_captura}}"
                                                    data-id_sucursal="{{$equipo->id_sucursal}}"
                                                    data-precio="{{$servicio->precio}}"
                                                    data-id_comentario="{{$equipo->id_comentario}}"
                                                    data-pago="{{$equipo->pago}}"
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
                                                        height="2em" viewBox="0 0 16 16" class="bi bi-cash text-info"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z" />
                                                        <path
                                                            d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                                    </svg></a>

                                            </td>
                                            <td><a href="/imprimir/{{$equipo->id}}" target="_blank"
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
                                <table class="table table-striped table-inverse table-responsive">
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
                                            <td class="price">{{$pago_equipo->created_at}}</td>

                                            <td>{{$pago_equipo->status}}</td>

                                        </tr>
                                        @endforeach
                                        <span>El resultado es: </span> <span id="result"></span>

                                    </tbody>
                                </table>
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
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Cajero</th>
                                            <th>Sucursal</th>
                                            <th>Comentario</th>
                                            <th>Monto</th>
                                            <th>Movimiento</th>
                                            <th>Fecha</th>
                                            <th><button type="button" data-toggle="modal" data-target="#modal_caja"
                                                    data-backdrop="static" data-keyboard="false"
                                                    class="btn btn-warning btn-lg btn-block">
                                                    <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-wallet2" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
                                                        </svg></center>
                                                </button></th>
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
                                            <td>{{$MovimientoCaja->created_at}}</td>
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
        <div class="se-pre-con"></div>

</x-app-layout>

<!-- Modal Bienvenida-->
<div class="modal fade" id="modal_configurar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Bienvenido a HollyStore</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Gracias por tu Compra</h4>
                        <p>Antes de comenzar necesitamos configurar algunas cosas importantes para el buen
                            funcionamiento de la plataforma.</p>
                        @if ($Sucursal->isEmpty())
                        <a href="" data-toggle="modal" data-target="#modalagregarsucursal">1.-Agregar una Sucursal (Aqui
                            defines en donde estas trabajando)</a><br>
                        @else
                        <del><a class="text-secondary" disabled>1.-Agregar una Sucursal (Aqui defines en donde estas
                                trabajando)</a><br></del>
                        @endif

                        @if ($Caja->isEmpty())
                        <a href="" data-toggle="modal" data-target="#modalagregarcaja">2.-Agregar una Caja (Aqui
                            recibiras los pagos de tu pagina)</a><br>
                        @else
                        <del><a class="text-secondary" disabled>2.-Agregar una Caja (Aqui recibiras los pagos de tu
                                pagina)</a><br></del>
                        @endif

                        @if($Marca->isEmpty())
                        <a href="" class="nav-link" data-toggle="modal" data-target="#modal_agregarmarca">3.-Agregar tu
                            primera Marca Comercial</a><br>
                        @else
                        <del><a class="text-secondary" disabled>3.-Agregar tu primera Marca Comercial</a><br></del>
                        @endif

                        @if ($Settings->isEmpty())
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false">4.-Configurar Tu Negocio</a><br>
                        @else
                        <del><a class="text-secondary" disabled>4.-Configurar Tu Negocio</a><br></del>
                        @endif

                        <hr>
                        <p class="mb-0">Agradecemos que te tomes tu tiempo para este paso en caso de tener dudas
                            contactame en twitter por @hollydev1</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Caja-->
<div class="modal fade" id="modalagregarcaja" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Asignar Caja a Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarcaja">
                        @method('POST')
                        @csrf
                        <label for="nombre">Nombre</label>
                        <select class="form-control" name="id_user" id="id_user">
                            @foreach($Usuario as $usuario)
                            @if($usuario->rol=="tecnico"||$usuario->rol=="admin")
                            <option class="form-control" value="{{$usuario->id}}">{{$usuario->name}}</option>
                            @endif
                            @endforeach
                        </select>
                        <input type="hidden" name="corte" id="corte" value="0">
                        <input type="hidden" name="id_corte" id="id_corte" value="Activo">

                        <label for="id_sucursal">Sucursal</label>
                        <select class="form-control" name="id_sucursal" id="id_sucursal">
                            @foreach ($Sucursal as $sucursal)
                            <option class="form-control" value="{{$sucursal->id}}">{{$sucursal->nombre}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Agregar Articulo -->
<div class="modal fade" id="modal_agregararticulo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/store" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre"
                                        placeholder="Agrega el nombre del articulo" value="" required>
                                </div>
                                <div class="col-6-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" rows="10" cols="50" name="descripcion"
                                        id="descripcion" placeholder="Agrega la descripcion del Articulo"
                                        required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="precio">Precio Neto</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" name="precio" id="precio"
                                            placeholder="Precio" value="" required>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="existencia">Existencia</label>
                                    <input type="text" class="form-control" name="existencia" id="existencia"
                                        placeholder="Existencia" value="" required>
                                </div>
                                <div class="col-6-md">
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">Importante!</h4>
                                        <p>Si pones un precio con descuento el precio final del articulo cambiara al
                                            precio con el descuento es decir el precio final sera ya con el descuento
                                            aplicado,si no seleccionas esta opcion el precio final sera sin descuento
                                        </p>
                                        <hr>
                                        <label for="descuento">Descuento</label>
                                        <div class="inputDiv">
                                            <div id="etiqueta"></div>
                                            <input id="descuento" name="descuento" type="range" value="0" min="0"
                                                max="100" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Principal</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <input class="form-control" type="file" name="imagena" name="imagena"
                                            accept-charset="UTF-8" enctype="multipart/form-data" required>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #1</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <input class="form-control" type="file" name="imagenb" id="imagenb"
                                            accept-charset="UTF-8" enctype="multipart/form-data">

                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #2</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <input class="form-control" type="file" name="imagenc" id="imagenc"
                                            accept-charset="UTF-8" enctype="multipart/form-data">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #3</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <input class="form-control" type="file" name="imagend" id="imagend"
                                            accept-charset="UTF-8" enctype="multipart/form-data">

                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <select class="form-control" id="id_marca" name="id_marca" required>
                                            <option value="0" selected>Seleciona una Marca</option>
                                            @foreach($Marca as $marca)
                                            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Categoria</label>
                                        <select class="form-control" id="categoria" name="categoria" required>
                                            <option value="N/A" selected>Seleciona una Categoria</option>
                                            @foreach($Categoria as $categoria)
                                            <option value="{{$categoria->nombre_categoria}}">
                                                {{$categoria->nombre_categoria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Talla</label>
                                        <select class="form-control" id="talla" name="talla" required>
                                            <option value="N/A" selected>Seleciona una Talla</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                            <option value="xxl">XXL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="IDlocal">Codigo Local</label>
                                    <input type="text" class="form-control" name="IDlocal" id="IDlocal"
                                        placeholder="Agrega el codigo que usas localmente para indentificar el producto">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal  Editar Articulo-->
<div class="modal fade" id="modaleditararticulo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Editar Articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="editararticulo" id="editararticulo" action="/editararticulo">
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" rows="10" cols="50" name="descripcion1"
                                        id="descripcion1" required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="precio1">Precio Neto</label>

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" name="precio1" id="precio1" value="">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="existencia1">Existencia</label>
                                    <input type="text" class="form-control" name="existencia1" id="existencia1"
                                        value="">
                                </div>
                                <div class="col-6-md">
                                    <div class="alert alert-warning" role="alert">
                                        <h4 class="alert-heading">Importante!</h4>
                                        <p>Si pones un precio con descuento el precio final del articulo cambiara al
                                            precio con el descuento es decir el precio final sera ya con el descuento
                                            aplicado,si no seleccionas esta opcion el precio final sera sin descuento
                                        </p>
                                        <hr>
                                        <label for="descuento1">Descuento</label>
                                        <div class="inputDiv">
                                            <div id="etiqueta"></div>
                                            <input id="descuento1" name="descuento1" type="range" value="0" min="0"
                                                max="100" autocomplete="off">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Principal</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagena1" name="imagena1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #1</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagenb1" name="imagenb1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #2</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagenc1" name="imagenc1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Imagen Galleria #3</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagend1" name="imagend1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Marca</label>
                                        <select class="form-control" id="id_marca1" name="id_marca1" required>
                                            <option value="0" selected>Seleciona una Marca</option>
                                            @foreach($Marca as $marca)
                                            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Categoria</label>
                                        <select class="form-control" id="categoria1" name="categoria1" required>
                                            <option value="N/A" selected>Seleciona una Categoria</option>
                                            @foreach($Categoria as $categoria)
                                            <option value="{{$categoria->nombre_categoria}}">
                                                {{$categoria->nombre_categoria}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Talla</label>
                                        <select class="form-control" id="talla1" name="talla1" required>
                                            <option value="N/A">Seleciona una Talla</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                            <option value="xxl">XXL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="IDlocal1">Codigo Local</label>
                                    <input type="text" class="form-control" name="IDlocal1" id="IDlocal1">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal  Agregar Marca-->
<div class="modal fade" id="modal_agregarmarca" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Marca</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/marca">
                        <div class="row">
                            <div class="container">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="col-4-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" class="form-control" rows="10" cols="50"
                                        name="descripcion" id="descripcion" required></textarea>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Logo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo" name="logo">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal editar usuario -->
<div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Editar Usuario</h5>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="modaledit" id="modaledit" action="">
                        @method('POST')
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name1" id="name1"
                                    class="form-control  @error('name') is-invalid @enderror" placeholder="Name"
                                    value="{{ old('name') }}" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control  @error('email') is-invalid @enderror" name="email1" id="email1"
                                    value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <!--
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password1"  id="password1" required autocomplete="new-password" disabled>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            -->

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="estatus1" id="estatus1">
                                    <option value="1" selected>Active</option>
                                    <option value="0">No Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sucursal</label>
                                <select class="form-control" name="id_sucursal1" id="id_sucursal1">
                                    @foreach ($Sucursal as $sucursal)
                                    <option class="form-control" value="{{$sucursal->id}}">{{$sucursal->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Rol</label>
                                <select class="form-control" name="rol1" id="rol1">
                                    <option value="admin">Admin</option>
                                    <option value="tecnico">Tecnico</option>
                                    <option value="cliente" selected>Cliente</option>
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Edit User</button>
                        </div>
                        <div class="clearfix"></div>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Modal  Agregar usuario-->
<div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/addusuario">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control  @error('name') is-invalid @enderror" placeholder="Name"
                                    value="{{ old('name') }}" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="Email"
                                    class="form-control  @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" placeholder="Password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="status" id="status" value="1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sucursal</label>
                                <select class="form-control" name="id_sucursal" id="id_sucursal">
                                    @foreach ($Sucursal as $sucursal)
                                    <option class="form-control" value="{{$sucursal->id}}">{{$sucursal->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rol</label>
                                <select class="form-control" name="rol">
                                    <option value="admin">Admin</option>
                                    <option value="tecnico">Tecnico</option>
                                    <option value="cliente" selected>Cliente</option>
                                </select>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right">Add User</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Editar Servicio -->
<div class="modal fade" id="modaleditarservicio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Editar Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="editarservicio" id="editarservicio" action="/editarservicio">
                        <div class="row">
                            <div class="container">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" required>
                                </div>
                                <div class="col-4-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion1" class="form-control" rows="10" cols="50"
                                        name="descripcion1" id="descripcion1" required></textarea>
                                </div>
                                <div class="col-4-md">
                                    <div class="input-group-prepend">
                                        <label for="precio1">Precio</label><br>
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" name="precio1" id="precio1" required>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="tiempo1">Tiempo</label>
                                        <select class="form-control" id="tiempo1" name="tiempo1" required>
                                            <option value="Null" selected>Tiempo Estimado</option>
                                            <option value="Instantaneo">Instantaneo</option>
                                            <option value="15 minutos">15 Minutos</option>
                                            <option value="30 minutos">30 Minutos</option>
                                            <option value="1 Hora">1 Hora</option>
                                            <option value="1:30">1:30 Hora con 30 minutos</option>
                                            <option value="2:30">2:30 Horas con 30 minutos</option>
                                            <option value="5:00">5:00 Horas</option>
                                            <option value="1 Dia">1 Dia</option>
                                            <option value="Se notificara cuando este listo">Notificar cuando este listo
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Logo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo1" name="logo1">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal  Agregar servicio-->
<div class="modal fade" id="modalagregarservicio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarservicio">
                        <div class="row">
                            <div class="container">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" required>
                                </div>
                                <div class="col-4-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea name="descripcion" class="form-control" rows="10" cols="50"
                                        name="descripcion" id="descripcion" required></textarea>
                                </div>
                                <div class="col-4-md">
                                    <div class="input-group-prepend">
                                        <label for="precio">Precio</label><br>
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" name="precio" id="precio" required>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Tiempo</label>
                                        <select class="form-control" id="tiempo" name="tiempo" required>
                                            <option value="Null" selected>Tiempo Estimado</option>
                                            <option value="Instantaneo">Instantaneo</option>
                                            <option value="15 minutos">15 Minutos</option>
                                            <option value="30 minutos">30 Minutos</option>
                                            <option value="1 Hora">1 Hora</option>
                                            <option value="1:30">1:30 Hora con 30 minutos</option>
                                            <option value="2:30">2:30 Horas con 30 minutos</option>
                                            <option value="5:00">5:00 Horas</option>
                                            <option value="1 Dia">1 Dia</option>
                                            <option value="Se notificara cuando este listo">Notificar cuando
                                                este listo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="imagen1">Logo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="logo" name="logo">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Punto de venta-->
<div class="modal fade" id="modalvender" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl " role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white">Punto de Venta<center><svg width="2em" height="2em"
                            viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                            <path fill-rule="evenodd"
                                d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg></center>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <!-- BEGIN PRODUCTS -->
                                <table class="table table-striped table-inverse table-responsive sc-product-item">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>#</th>
                                            <th>Articulo</th>
                                            <th>Imagen</th>
                                            <th>Descripcion</th>
                                            <th>Precio</th>
                                            <td>Comprar</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Articulo as $articulo)
                                        <tr>
                                            <td scope="row" name="product_id">{{$articulo->id}}</td>
                                            <td><img data-name="product_image"
                                                    src="http://placehold.it/250x150/2aabd2/ffffff?text=Product+1"
                                                    alt="..."
                                                    class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                                                    alt=""></td>
                                            <td data-name="product_name">{{$articulo->nombre}}</td>
                                            <td data-name="product_desc">{{$articulo->descripcion}}</td>
                                            <td name="product_price">{{$articulo->precio}}</td>
                                            <td name="product_price">{{$articulo->precio}}</td>
                                            <td><button class="sc-add-to-cart btn btn-success">Add to cart</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="/agregarpago">
                                @csrf
                                @method('POST')
                                <div id="smartcart"></div>
                            </form>
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

<!-- Modal Taller-->
<div class="modal fade" id="modaltaller" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white">Reparar<center><svg width="2em" height="2em" viewBox="0 0 16 16"
                            class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                        </svg></center>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="container-fluid">
                    <form action="/agregarequipo">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre Cliente</label>
                                    <div class="input-group-append">
                                        <select class="form-control" id="id_cliente" name="id_cliente" required>
                                            @foreach ($Usuario as $user)
                                            @if($user->rol=='cliente')
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <a href="" data-toggle="modal" data-target="#modalagregar"><span
                                                class="input-group-text">Agregar Cliente</span></a>
                                    </div>
                                </div>
                                <input type="hidden" name="id_sucursal" id="id_sucursal"
                                    value="{{Auth::user()->id_sucursal}}">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre Tecnico</label>
                                    <select class="form-control" id="id_user" name="id_user" required>
                                        @foreach ($Usuario as $user)
                                        @if($user->rol=="tecnico")
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">IMEI</label>
                                        <input class="form-control" type="text" name="imei" id="imei"
                                            placeholder="IMEI">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">SERIAL</label>
                                        <input class="form-control" type="text" name="serial" id="serial"
                                            placeholder="Serial">
                                    </div>
                                </div>

                                <div class="col-4-md">
                                    <label for="descripcion">Marca</label>
                                    <select class="form-control" id="id_servicio" name="id_servicio" required>
                                        @foreach ($Marca as $marca)
                                        <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion <br>(En caso de tener Contraseña el equipo
                                            escribir aqui junto con los detalles por que motivo se ingresa el
                                            equipo)</label><br>
                                        <textarea class="form-control" name="descripcion" id="descripcion" cols="20"
                                            rows="10"
                                            placeholder="Describe el problema que tiene el equipo en caso de ser necesario aqui o deja comentarios en caso de ser necesario"></textarea>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <div class="card text-left">
                                            <div class="card-body">
                                                <p class="card-title">Revision de componentes</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Tiene_Camara"
                                                        name="Tiene_Camara" value="Tiene_Camara">
                                                    <label class="form-check-label" for="inlineCheckbox1">Camara</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Centro_Carga"
                                                        name="Centro_Carga" value="Centro_Carga">
                                                    <label class="form-check-label" for="inlineCheckbox2">Centro
                                                        Carga</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Señal"
                                                        name="Señal" value="Señal">
                                                    <label class="form-check-label" for="inlineCheckbox3">Señal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="LectorSD"
                                                        name="LectorSD" value="LectorSD">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">LectorSD</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="AltaVoz"
                                                        name="AltaVoz" value="AltaVoz">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">AltaVoz</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="BotonHome"
                                                        name="BotonHome" value="BotonHome">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">BotonHome</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Microfono"
                                                        name="Microfono" value="Microfono">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Microfono</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Lector_SIM"
                                                        name="Lector_SIM" value="Lector_SIM">
                                                    <label class="form-check-label" for="inlineCheckbox3">Lector
                                                        SIM</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Volumenplus"
                                                        name="Volumenplus" value="volumenplus">
                                                    <label class="form-check-label" for="inlineCheckbox3">Volumen
                                                        +</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Volumenless"
                                                        name="Volumenless" value="Volumenless">
                                                    <label class="form-check-label" for="inlineCheckbox3">Volumen
                                                        -</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Encendido"
                                                        name="Encendido" value="Encendido">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Encendido</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Auricular"
                                                        name="Auricular" value="Auricular">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Auricular</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Touch"
                                                        name="Touch" value="Touch">
                                                    <label class="form-check-label" for="inlineCheckbox3">Touch</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Bateria"
                                                        name="Bateria" value="Bateria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Bateria</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <div class="card text-left">
                                            <div class="card-body">
                                                <p class="card-title">Detalles del equipo</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Enciende"
                                                        name="Enciende" value="Enciende">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Enciende?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Memoria"
                                                        name="Memoria" value="Memoria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Memoria?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="SIM" name="SIM"
                                                        value="SIM">
                                                    <label class="form-check-label" for="inlineCheckbox3">SIM?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Golpes"
                                                        name="Golpes" value="golpes">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Golpes?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Bateria"
                                                        name="Bateria" value="Tiene_Bateria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Bateria?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4-md mb-1">
                                    <label for="descripcion">Sucursal</label>
                                    <select class="form-control" id="id_sucursal" name="id_sucursal" required>
                                        @foreach ($Sucursal as $sucursal)
                                        <option value="{{$sucursal->id}}">[{{$sucursal->nombre}}]</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="card text-left  border border-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="marca">Anticipo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                            <input class="form-control" type="text" name="pago"
                                                                id="pago" placeholder="Anticipo" value="0">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="presupuesto">Presupuesto</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="presupuesto"
                                                        id="presupuesto" placeholder="(Cuanto puede Costar)" value="0">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="inversion">Inversion</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="inversion"
                                                        id="inversion"
                                                        placeholder=" (Cuanto es lo maximo que se puede invertir)"
                                                        value="0">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Dia de Equipo Recibido</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_recibido" id="fecha_recibido"
                                            value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Dia Entrega Aproximado</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_entrega" id="fecha_entrega">
                                    </div>
                                </div>
                                <select name="listaDeDispositivos" id="listaDeDispositivos"></select>
                                <p id="estado"></p>
                                <br>
                            </div>
                            <video muted="muted" id="video"></video>
                            <canvas id="canvas" style="display: none;"></canvas>
                            <input type="hidden" name="status" id="status" value="0">
                            <input type="hidden" name="id_captura" id="id_captura" value="">
                            <button type="button" class="btn btn-primary" id="boton">
                                <i class="fas fa-camera-retro"></i></button>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="boton">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Taller-->
<div class="modal fade" id="modaledittaller" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white">Reparar<center><svg width="2em" height="2em" viewBox="0 0 16 16"
                            class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z" />
                        </svg></center>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="container-fluid">
                    <form name="editequipo" id="editequipo" action="/editequipo">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">

                                <div class="col-4-md">
                                    <label for="nombre">Nombre Cliente</label>
                                    <select class="form-control" id="id_cliente2" name="id_cliente2" required>
                                        @foreach ($Usuario as $user)
                                        @if($user->rol=='cliente')
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <input type="hidden" name="id_sucursal2" id="id_sucursal2"
                                    value="{{Auth::user()->id_sucursal}}">

                                <div class="col-4-md">
                                    <label for="nombre">Nombre Tecnico</label>
                                    <select class="form-control" id="id_user2" name="id_user2" required>
                                        @foreach ($Usuario as $user)
                                        @if($user->rol=="tecnico")
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">IMEI</label>
                                        <input class="form-control" type="text" name="imei2" id="imei2">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">SERIAL</label>
                                        <input class="form-control" type="text" name="serial2" id="serial2">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="descripcion">Descripcion</label><br>
                                        <textarea class="form-control" name="descripcion2" id="descripcion2" cols="20"
                                            rows="10"
                                            placeholder="Describe el problema que tiene el equipo en caso de ser necesario aqui o deja comentarios en caso de ser necesario"></textarea>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <div class="card text-left">
                                            <div class="card-body">
                                                <p class="card-title">Revision de componentes</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Tiene_Camara2"
                                                        name="Tiene_Camara2" value="Tiene_Camara">
                                                    <label class="form-check-label" for="inlineCheckbox1">Camara</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Centro_Carga2"
                                                        name="Centro_Carga2" value="Centro_Carga">
                                                    <label class="form-check-label" for="inlineCheckbox2">Centro
                                                        Carga</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Señal2"
                                                        name="Señal2" value="Señal">
                                                    <label class="form-check-label" for="inlineCheckbox3">Señal</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="AltaVoz2"
                                                        name="AltaVoz2" value="AltaVoz">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">AltaVoz</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="BotonHome2"
                                                        name="BotonHome2" value="BotonHome">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">BotonHome</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Microfono2"
                                                        name="Microfono2" value="Microfono">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Microfono</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Lector_SIM2"
                                                        name="Lector_SIM2" value="Lector_SIM">
                                                    <label class="form-check-label" for="inlineCheckbox3">Lector
                                                        SIM</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Volumenplus2"
                                                        name="Volumenplus2" value="volumenplus">
                                                    <label class="form-check-label" for="inlineCheckbox3">Volumen
                                                        +</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Volumenless2"
                                                        name="Volumenless2" value="Volumenless">
                                                    <label class="form-check-label" for="inlineCheckbox3">Volumen
                                                        -</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Encendido2"
                                                        name="Encendido2" value="Encendido">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Encendido</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="LectorSD2"
                                                        name="LectorSD2" value="LectorSD">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">LectorSD</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Auricular2"
                                                        name="Auricular2" value="Auricular">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Auricular</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Touch2"
                                                        name="Touch2" value="Touch">
                                                    <label class="form-check-label" for="inlineCheckbox3">Touch</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Bateria2"
                                                        name="Bateria2" value="Bateria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Bateria</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <div class="card text-left">
                                            <div class="card-body">
                                                <p class="card-title">Detalles del equipo</p>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Enciende2"
                                                        name="Enciende2" value="Enciende">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Enciende?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Memoria2"
                                                        name="Memoria2" value="Memoria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Memoria?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="SIM2"
                                                        name="SIM2" value="SIM">
                                                    <label class="form-check-label" for="inlineCheckbox3">SIM?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Golpes2"
                                                        name="Golpes2" value="Golpes">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Golpes?</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="Tiene_Bateria2"
                                                        name="Tiene_Bateria2" value="Tiene_Bateria">
                                                    <label class="form-check-label"
                                                        for="inlineCheckbox3">Bateria?</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="status2">Status</label>
                                        <select class="form-control" name="status2" id="status2">
                                            <option value="0">Recibido</option>
                                            <option value="1">En Revision</option>
                                            <option value="2">Cancelado</option>
                                            <option value="3">Espera</option>
                                            <option value="4">A espera de Cliente(Contactarse a Sucursal)</option>
                                            <option value="5">Listo(Para entregar)</option>
                                            <option value="6">Entregado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4-md mb-1">
                                    <label for="descripcion">Sucursal</label>
                                    <select class="form-control" id="id_sucursal2" name="id_sucursal2"
                                        value="{{Auth::user()->id_sucursal}}" required>
                                        @foreach ($Sucursal as $sucursal)
                                        <option value="{{$sucursal->id}}">[{{$sucursal->nombre}}]</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="card text-left  border border-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="marca">Anticipo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                            <input class="form-control" type="text" name="pago2"
                                                                id="pago2" placeholder="Anticipo">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="presupuesto">Presupuesto</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="presupuesto2"
                                                        id="presupuesto2" placeholder="(Cuanto puede Costar)">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="inversion">Inversion</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="inversion2"
                                                        id="inversion2"
                                                        placeholder=" (Cuanto es lo maximo que se puede invertir)">

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Tiempo Recibido</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_recibido2" id="fecha_recibido2"
                                            value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Tiempo Entrega</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_entrega2" id="fecha_entrega2">
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="boton">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Agregar Sucursal -->
<div class="modal fade" id="modalagregarsucursal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarsucursal">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="descripcion">Direccion</label>
                                    <textarea class="form-control" rows="10" cols="50" name="direccion" id="direccion"
                                        required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="telefono">Telefono</label>
                                    <input type="telephone" class="form-control" name="telefono" id="telefono" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="telegram">Telegram</label>
                                    <input type="text" class="form-control" name="telegram" id="telegram" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="">
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Editar Sucursal -->
<div class="modal fade" id="modaleditarsucursal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Editar Sucursal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" name="editarsucursal" id="editarsucursal">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="descripcion">Direccion</label>
                                    <textarea class="form-control" rows="10" cols="50" name="direccion1" id="direccion1"
                                        required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email1" id="email1" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="telefono">Telefono</label>
                                    <input type="telephone" class="form-control" name="telefono1" id="telefono1"
                                        value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="telegram">Telegram</label>
                                    <input type="text" class="form-control" name="telegram1" id="telegram1" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp1" id="whatsapp1" value="">
                                </div>
                            </div>

                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Agregar Categoria-->
<div class="modal fade" id="modal_categoria" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Agregar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarcategoria">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre Categoria</label>
                                    <input type="text" class="form-control" name="nombre_categoria"
                                        id="nombre_categoria" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Categoria -->
<div class="modal fade" id="modal_editarcategoria" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="editarcategoria" id="editarcategoria" action=" ">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre Categoria</label>
                                    <input type="text" class="form-control" name="nombre_categoria1"
                                        id="nombre_categoria1" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Foto -->
<div class="modal fade" id="modal_foto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <center>
                    <h5 class="modal-title text-white"><svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-camera" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                            <path fill-rule="evenodd"
                                d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg></h5>
                </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarcaptura">
                        <select name="listaDeDispositivos1" id="listaDeDispositivos1"></select>
                        <p id="estado1"></p>
                        <br>
                </div>
                <video muted="muted" id="video1"></video>
                <canvas id="canvas1" style="display: none;"></canvas>
                <input type="hidden" name="status1" id="status1" value="Pendiente">
                <input type="hidden" name="id_equipo1" id="id_equipo1" value="">
                <input type="hidden" name="id_captura1" id="id_captura1" value="">
                <input type="hidden" name="id_user1" id="id_user1" value="{{Auth::user()->id}}">
                <label for="id_descripcion1">Inserte Descripcion de la Foto</label>
                <textarea class="border border-danger mt-2" name="id_descripcion1" id="id_descripcion1" cols="30"
                    rows="10" placeholder="Inserte la descripcion de la foto aqui"></textarea>

                <button type="button" class="btn btn-primary" id="boton1"><svg width="1em" height="1em"
                        viewBox="0 0 16 16" class="bi bi-camera" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M15 12V6a1 1 0 0 0-1-1h-1.172a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 9.173 3H6.828a1 1 0 0 0-.707.293l-.828.828A3 3 0 0 1 3.172 5H2a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                        <path fill-rule="evenodd"
                            d="M8 11a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                        <path d="M3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                    </svg></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Modal Notificacion -->
<div class="modal fade" id="modal_notificacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    style="border-radius:12%;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Notificacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @if (session('success'))
                    <div class="alert alert-success m-3">
                        <?php echo '<html>'.session('success').'</html>' ?>
                    </div>
                    @endif </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal  Taller Galleria -->
<div class="modal fade" id="modal-taller-galleria" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ">Galleria y Comentarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <FRAMESET>
                        <FRAME name="galeria" id="galeria" src="">
                    </FRAMESET>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Status -->
<div class="modal fade" id="modal_status" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Cambiar Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <label for="status">Status</label>
                    <form name="cambio_status" id="cambio_status" action="">
                        <select name="status3" id="status3">
                            <option value="0">Recibido</option>
                            <option value="1">En Revision</option>
                            <option value="2">Cancelado</option>
                            <option value="3">Espera</option>
                            <option value="4">A espera de Cliente(Contactarse a Sucursal)</option>
                            <option value="5">Listo(Para entregar)</option>
                            <option value="6">Entregado
                        </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>

        </div>
    </div>
</div>
<!-- Modal Pago -->
<div class="modal fade" id="modal_pago" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Pagar Equipo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form name="pagoform" id="pagoform" action="">
                        @csrf
                        @method('POST')
                        <div class="card text-left">
                            <div class="card-body">
                                <label for="total">Total a Pagar</label>
                                <input type="text" class="form-control" name="total4" id="total4" disabled>
                                <label for="status">Anticipo</label>
                                <input type="text" class="form-control" name="pago4" id="pago4" disabled>
                                <label for="status">Pendiente</label>
                                <input type="text" class="form-control" name="pendiente4" id="pendiente4" value=""
                                    disabled>
                            </div>
                        </div>
                        <label for="metodo">Metodo de Pago</label>
                        <select class="form-control" name="pago_id4" id="pago_id4">
                            <option value="1">Efectivo</option>
                            <option value="2">Paypal</option>
                            <option value="3">Tarjeta Debito/Credito (Paypal)</option>
                        </select>
                        <label for="status">Pago</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" name="final4" id="final4">
                        </div>

                        <input type="hidden" class="form-control" name="id_user4" id="id_user4" value="">
                        <input type="hidden" class="form-control" name="id_cliente4" id="id_cliente4" value="">
                        <input type="hidden" class="form-control" name="id_sucursal4" id="id_sucursal4" value="">
                        <input type="hidden" class="form-control" name="id_equipo4" id="id_equipo4" value="">
                        <input type="hidden" class="form-control" name="adelanto4" id="adelanto4" value="">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="iva">IVA</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">%</span>
                                        <input disabled type="text" name="iva" max="2" class="form-control" id="iva"
                                            value="@if($Settings->isEmpty())@else{{$setting->setting_iva}}" @endif>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <label for="status">Cambio</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <input disabled type="text" class="form-control" name="subtotal" id="subtotal">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="status">Total</label>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <input disabled type="text" class="form-control" name="total_final"
                                            id="total_final">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card text-left">
                                        <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="setting_descuento_1"
                                                    name="setting_descuento_1" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    1</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="setting_descuento_2"
                                                    name="setting_descuento_2" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    2</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="setting_descuento_3"
                                                    name="setting_descuento_3" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    3</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="setting_descuento_4"
                                                    name="setting_descuento_4" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    4</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Servicio -->
<div class="modal fade" id="modal_servicio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title text-white">Servicio</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="col-4-md">
                        <form name="cambio_servicio" id="cambio_servicio" action="">
                            <label for="descripcion">Servicio</label>
                            <select class="form-control" id="id_servicio5" name="id_servicio5" required>
                                @foreach ($Servicio as $servicio)
                                <option value="{{$servicio->id}}">[{{$servicio->nombre}}]
                                    [Tiempo:{{$servicio->tiempo}}] [${{$servicio->precio}}]</option>
                                @endforeach
                            </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Caja -->
<div class="modal fade" id="modal_caja" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title text-white">Caja: @foreach($Sucursal as $suc)@if(Auth::user()->id_sucursal ==
                    $suc->id) {{$suc->nombre}}@endif @endforeach<br> Cajero: {{Auth::user()->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/agregarpagocaja">
                        @csrf
                        @method('POST')
                        <div class="col-6-md">
                            <label for="monto">Monto</label>
                            <input class="form-control" type="number" name="monto6" id="monto6" placeholder="0.0">
                        </div>
                        <input type="hidden" name="id_user6" id="id_user6" value="{{Auth::user()->id}}">
                        <input type="hidden" name="id_sucursal6" id="id_sucursal6"
                            value="{{Auth::user()->id_sucursal}}">
                        <input type="hidden" name="id_cliente6" id="id_cliente6" value="0">
                        <input type="hidden" name="id_equipo6" id="id_equipo6" value="0">
                        @foreach($Sucursal as $sucursal)
                        @foreach($Caja as $caja)
                        @if(Auth::user()->id_sucursal==$caja->id_sucursal)
                        <input type="hidden" name="id_caja6" id="id_caja6" value="{{$caja->id}}">
                        @endif
                        @endforeach
                        @endforeach
                        <div class="col-6-md">
                            <label for="motivo">Motivo</label>
                            <textarea name="descripcion6" class="form-control" id="descripcion6" cols="10"
                                rows="10"></textarea>
                        </div>

                        <div class="col-6-md">
                            <select class="form-control mt-2" name="status6" id="status6">
                                <option value="deposito">Deposito +</option>
                                <option value="retiro">Retiro -</option>
                            </select>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Ok</button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Scripts Status-->
<script>
    $('#modal_status').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id3').val(id);
        $("#cambio_status").attr("action", '/cambio_status/' + id);
        var id = $(e.relatedTarget).data().status;
        $(e.currentTarget).find('#status3').val(id);
    });
</script>
<!-- Scripts Pago-->
<script>
    $('#modal_pago').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id_equipo4').val(id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id').val(id);
        $("#pagoform").attr("action", '/agregarpago/' + id);
        var id = $(e.relatedTarget).data().id_cliente;
        $(e.currentTarget).find('#id_cliente4').val(id);
        var id = $(e.relatedTarget).data().id_sucursal;
        $(e.currentTarget).find('#id_sucursal4').val(id);
        var id = $(e.relatedTarget).data().pago;
        $(e.currentTarget).find('#pago4').val(id);
        var id = $(e.relatedTarget).data().total;
        $(e.currentTarget).find('#total4').val(id);
        var id = $(e.relatedTarget).data().monto;
        $(e.currentTarget).find('#monto4').val(id);
        var id = $(e.relatedTarget).data().iva;
        $(e.currentTarget).find('#iva4').val(id);
        var id = $(e.relatedTarget).data().adelanto;
        $(e.currentTarget).find('#adelanto4').val(id);
        var id = $(e.relatedTarget).data().fecha_recibido;
        $(e.currentTarget).find('#fecha_recibido4').val(id);
        var id = $(e.relatedTarget).data().fecha_entrega;
        $(e.currentTarget).find('#fecha_entrega4').val(id);
        $("#cambio_pago").attr("action", '/agregarpago/' + id);
        var id = $(e.relatedTarget).data().pago;
        anticipo = id;
        if (id == 0) {
            $(e.currentTarget).find('#pago4').val(0);
        } else {
            $(e.currentTarget).find('#pago4').val(id);
        }
        precio = $(e.relatedTarget).data().presupuesto;
        temporal = precio - anticipo;
        total = precio;
        $(e.currentTarget).find('#pendiente4').val(temporal);
        $(e.currentTarget).find('#total').val(total);
        var id = $(e.relatedTarget).data().status;
        $(e.currentTarget).find('#status4').val(id);
        $('#final4').on('input', function(e) {
            iva = document.getElementById("iva").value;
            pago = document.getElementById("final4").value;
            var tasa = iva;
            var monto = $("input[name=total]").val();
            var anticipo = $("input[name=pendiente4]").val();
            if (anticipo != 0) {
                cambio = pago - anticipo;
            } else {
                cambio = pago - precio;
            }
            if (tasa == 0.0) {
                $("input[name=subtotal]").val(parseInt(cambio));
                $("input[name=total_final]").val(parseInt(monto));
            } else {
                var iva = (monto * tasa) / 100;
                $("input[name=subtotal]").val(parseInt(cambio));
                $("input[name=total_final]").val(parseInt(monto) + parseInt(iva));
            }
            if (tasa == null) {
                var monto = $("input[name=total]").val();
                document.getElementById("total_final").monto;
                $("input[name=subtotal]").val(parseInt(cambio));
            }
        });
    });
</script>
<!-- Scripts Servisio-->
<script>
    $('#modal_servicio').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id5').val(id);
        $("#cambio_servicio").attr("action", '/cambio_servicio/' + id);
        var id = $(e.relatedTarget).data().id_servicio;
        $(e.currentTarget).find('#id_servicio5').val(id);
    });
</script>
<!-- Scripts Editar Usuario-->
<script>
    $('#modaleditar').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#modaledit").attr("action", '/editusuario/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().name;
        $(e.currentTarget).find('#name1').val(id);
        var id = $(e.relatedTarget).data().email;
        $(e.currentTarget).find('#email1').val(id);
        var id = $(e.relatedTarget).data().password;
        $(e.currentTarget).find('#password1').val(id);
        var id = $(e.relatedTarget).data().rol;
        $(e.currentTarget).find('#rol1').val(id);
        var id = $(e.relatedTarget).data().id_sucursal;
        $(e.currentTarget).find('#id_sucursal1').val(id);
    });
</script>
<!-- Scripr Editar Categoria-->
<script>
    $('#modal_editarcategoria').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarcategoria").attr("action", '/editarcategoria/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre_categoria;
        $(e.currentTarget).find('#nombre_categoria1').val(id);
    });
</script>
<!-- Scripts Editar sucursal-->
<script>
    ////////////////modal editar sucursal
    $('#modaleditarsucursal').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarsucursal").attr("action", '/editsucursal/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().email;
        $(e.currentTarget).find('#email1').val(id);
        var id = $(e.relatedTarget).data().telefono;
        $(e.currentTarget).find('#telefono1').val(id);
        var id = $(e.relatedTarget).data().whatsapp;
        $(e.currentTarget).find('#whatsapp1').val(id);
        var id = $(e.relatedTarget).data().telegram;
        $(e.currentTarget).find('#telegram1').val(id);
        var id = $(e.relatedTarget).data().direccion;
        $(e.currentTarget).find('#direccion1').val(id);
    });
</script>
<!-- Scripts Editar Servicio-->
<script>
    $('#modaleditarservicio').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editarservicio").attr("action", '/editservicio/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().descripcion;
        $(e.currentTarget).find('#descripcion1').val(id);
        var id = $(e.relatedTarget).data().precio;
        $(e.currentTarget).find('#precio1').val(id);
        var id = $(e.relatedTarget).data().tiempo;
        $(e.currentTarget).find('#tiempo1').val(id);
    });
</script>
<!-- Script editar articulo -->
<script>
    $('#modaleditararticulo').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editararticulo").attr("action", '/editararticulo/' + id);
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        var id = $(e.relatedTarget).data().nombre;
        $(e.currentTarget).find('#nombre1').val(id);
        var id = $(e.relatedTarget).data().descripcion;
        $(e.currentTarget).find('#descripcion1').val(id);
        var id = $(e.relatedTarget).data().precio;
        $(e.currentTarget).find('#precio1').val(id);
        var id = $(e.relatedTarget).data().descuento;
        $(e.currentTarget).find('#descuento1').val(id);
        var id = $(e.relatedTarget).data().IDlocal;
        $(e.currentTarget).find('#IDlocal1').val(id);
        var id = $(e.relatedTarget).data().categoria;
        $(e.currentTarget).find('#categoria1').val(id);
        var id = $(e.relatedTarget).data().talla;
        $(e.currentTarget).find('#talla1').val(id);
        if (id == 0) {
            $("#precio1").prop("disabled", false);
        } else {
            $("#precio1").prop("disabled", true);
        }
        var id = $(e.relatedTarget).data().id_marca;
        $(e.currentTarget).find('#id_marca1').val(id);
        var id = $(e.relatedTarget).data().calificacion;
        $(e.currentTarget).find('#calificacion1').val(id);
        var id = $(e.relatedTarget).data().existencia;
        $(e.currentTarget).find('#existencia1').val(id);
    });
</script>
<!-- Script Camara Taller Equipo -->
<script>
    $(document).ready(function() {
        //$('#smartcart').smartCart();
        $('#modal_foto').on('show.bs.modal', function(e) {
            var id = $(e.relatedTarget).data().id;
            $(e.currentTarget).find('#id_equipo1').val(id);
            const tieneSoporteUserMedia = () =>
                !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
            const _getUserMedia = (...arguments) =>
                (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(
                    navigator, arguments);
            // Declaramos elementos del DOM
            const $video = document.querySelector("#video1"),
                $canvas = document.querySelector("#canvas1"),
                $estado = document.querySelector("#estado1"),
                $boton = document.querySelector("#boton1"),
                $listaDeDispositivos = document.querySelector("#listaDeDispositivos1");
            const limpiarSelect = () => {
                for (let x = $listaDeDispositivos.options.length - 1; x >= 0; x--)
                    $listaDeDispositivos.remove(x);
            };
            const obtenerDispositivos = () => navigator
                .mediaDevices
                .enumerateDevices();
            // La funciÃ³n que es llamada despuÃ©s de que ya se dieron los permisos
            // Lo que hace es llenar el select con los dispositivos obtenidos
            const llenarSelectConDispositivosDisponibles = () => {
                    limpiarSelect();
                    obtenerDispositivos()
                        .then(dispositivos => {
                            const dispositivosDeVideo = [];
                            dispositivos.forEach(dispositivo => {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            if (dispositivosDeVideo.length > 0) {
                                // Llenar el select
                                dispositivosDeVideo.forEach(dispositivo => {
                                    const option = document.createElement('option');
                                    option.value = dispositivo.deviceId;
                                    option.text = dispositivo.label;
                                    $listaDeDispositivos.appendChild(option);
                                });
                            }
                        });
                }
                (function() {
                    // Comenzamos viendo si tiene soporte, si no, nos detenemos
                    if (!tieneSoporteUserMedia()) {
                        alert("Lo siento. Tu navegador no soporta esta caracterÃ­stica");
                        $estado.innerHTML =
                            "Parece que tu navegador no soporta esta caracterÃ­stica. Intenta actualizarlo.";
                        return;
                    }
                    //AquÃ­ guardaremos el stream globalmente
                    let stream;
                    // Comenzamos pidiendo los dispositivos
                    obtenerDispositivos()
                        .then(dispositivos => {
                            // Vamos a filtrarlos y guardar aquÃ­ los de vÃ­deo
                            const dispositivosDeVideo = [];
                            // Recorrer y filtrar
                            dispositivos.forEach(function(dispositivo) {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            // y le pasamos el id de dispositivo
                            if (dispositivosDeVideo.length > 0) {
                                // Mostrar stream con el ID del primer dispositivo, luego el usuario puede cambiar
                                mostrarStream(dispositivosDeVideo[0].deviceId);
                            }
                        });
                    const mostrarStream = idDeDispositivo => {
                        _getUserMedia({
                                video: {
                                    // Justo aquÃ­ indicamos cuÃ¡l dispositivo usar
                                    deviceId: idDeDispositivo,
                                }
                            },
                            (streamObtenido) => {
                                // AquÃ­ ya tenemos permisos, ahora sÃ­ llenamos el select,
                                // pues si no, no nos darÃ­a el nombre de los dispositivos
                                llenarSelectConDispositivosDisponibles();
                                // Escuchar cuando seleccionen otra opciÃ³n y entonces llamar a esta funciÃ³n
                                $listaDeDispositivos.onchange = () => {
                                    // Detener el stream
                                    if (stream) {
                                        stream.getTracks().forEach(function(track) {
                                            track.stop();
                                        });
                                    }
                                    // Mostrar el nuevo stream con el dispositivo seleccionado
                                    mostrarStream($listaDeDispositivos.value);
                                }
                                // Simple asignaciÃ³n
                                stream = streamObtenido;
                                // Mandamos el stream de la cÃ¡mara al elemento de vÃ­deo
                                $video.srcObject = stream;
                                $video.play();
                                //Escuchar el click del botÃ³n para tomar la foto
                                //Escuchar el click del botÃ³n para tomar la foto
                                $boton.addEventListener("click", function() {
                                    //Pausar reproducciÃ³n
                                    $video.pause();
                                    //Obtener contexto del canvas y dibujar sobre Ã©l
                                    let contexto = $canvas.getContext("2d");
                                    $canvas.width = $video.videoWidth;
                                    $canvas.height = $video.videoHeight;
                                    contexto.drawImage($video, 0, 0, $canvas.width,
                                        $canvas.height);
                                    let foto = $canvas
                                        .toDataURL(); //Esta es la foto, en base 64
                                    $estado.innerHTML =
                                        "Enviando foto. Por favor, espera...";
                                    fetch("./fotos/foto.php", {
                                            method: "POST",
                                            body: encodeURIComponent(foto),
                                            headers: {
                                                "Content-type": "application/x-www-form-urlencoded",
                                            }
                                        })
                                        .then(resultado => {
                                            // A los datos los decodificamos como texto plano
                                            return resultado.text()
                                        })
                                        .then(nombreDeLaFoto => {
                                            $('#id_captura1').attr('value',
                                                nombreDeLaFoto);
                                            // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
                                            console.log(
                                                "La foto fue enviada correctamente"
                                            );
                                            $estado.innerHTML =
                                                `Foto guardada con Exito. Puedes verla <a target='_blank' href='./foto/${nombreDeLaFoto}'> aquÃ­</a>`;
                                        })
                                    //Reanudar reproducciÃ³n
                                    $video.play();
                                });
                            }, (error) => {
                                console.log("Permiso denegado o error: ", error);
                                $estado.innerHTML =
                                    "No se puede acceder a la cÃ¡mara, o no diste permiso.";
                            });
                    }
                })();
        });
        $('#modaltaller').on('show.bs.modal', function(e) {
            const tieneSoporteUserMedia = () =>
                !!(navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia)
            const _getUserMedia = (...arguments) =>
                (navigator.getUserMedia || (navigator.mozGetUserMedia || navigator.mediaDevices
                    .getUserMedia) || navigator.webkitGetUserMedia || navigator.msGetUserMedia).apply(
                    navigator, arguments);
            // Declaramos elementos del DOM
            const $video = document.querySelector("#video"),
                $canvas = document.querySelector("#canvas"),
                $estado = document.querySelector("#estado"),
                $boton = document.querySelector("#boton"),
                $listaDeDispositivos = document.querySelector("#listaDeDispositivos");
            const limpiarSelect = () => {
                for (let x = $listaDeDispositivos.options.length - 1; x >= 0; x--)
                    $listaDeDispositivos.remove(x);
            };
            const obtenerDispositivos = () => navigator
                .mediaDevices
                .enumerateDevices();
            // La funciÃ³n que es llamada despuÃ©s de que ya se dieron los permisos
            // Lo que hace es llenar el select con los dispositivos obtenidos
            const llenarSelectConDispositivosDisponibles = () => {
                    limpiarSelect();
                    obtenerDispositivos()
                        .then(dispositivos => {
                            const dispositivosDeVideo = [];
                            dispositivos.forEach(dispositivo => {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            if (dispositivosDeVideo.length > 0) {
                                // Llenar el select
                                dispositivosDeVideo.forEach(dispositivo => {
                                    const option = document.createElement('option');
                                    option.value = dispositivo.deviceId;
                                    option.text = dispositivo.label;
                                    $listaDeDispositivos.appendChild(option);
                                });
                            }
                        });
                }
                (function() {
                    // Comenzamos viendo si tiene soporte, si no, nos detenemos
                    if (!tieneSoporteUserMedia()) {
                        alert("Lo siento. Tu navegador no soporta esta caracterÃ­stica");
                        $estado.innerHTML =
                            "Parece que tu navegador no soporta esta caracterÃ­stica. Intenta actualizarlo.";
                        return;
                    }
                    //AquÃ­ guardaremos el stream globalmente
                    let stream;
                    // Comenzamos pidiendo los dispositivos
                    obtenerDispositivos()
                        .then(dispositivos => {
                            // Vamos a filtrarlos y guardar aquÃ­ los de vÃ­deo
                            const dispositivosDeVideo = [];
                            // Recorrer y filtrar
                            dispositivos.forEach(function(dispositivo) {
                                const tipo = dispositivo.kind;
                                if (tipo === "videoinput") {
                                    dispositivosDeVideo.push(dispositivo);
                                }
                            });
                            // Vemos si encontramos algÃºn dispositivo, y en caso de que si, entonces llamamos a la funciÃ³n
                            // y le pasamos el id de dispositivo
                            if (dispositivosDeVideo.length > 0) {
                                // Mostrar stream con el ID del primer dispositivo, luego el usuario puede cambiar
                                mostrarStream(dispositivosDeVideo[0].deviceId);
                            }
                        });
                    const mostrarStream = idDeDispositivo => {
                        _getUserMedia({
                                video: {
                                    // Justo aquÃ­ indicamos cuÃ¡l dispositivo usar
                                    deviceId: idDeDispositivo,
                                }
                            },
                            (streamObtenido) => {
                                // AquÃ­ ya tenemos permisos, ahora sÃ­ llenamos el select,
                                // pues si no, no nos darÃ­a el nombre de los dispositivos
                                llenarSelectConDispositivosDisponibles();
                                // Escuchar cuando seleccionen otra opciÃ³n y entonces llamar a esta funciÃ³n
                                $listaDeDispositivos.onchange = () => {
                                    // Detener el stream
                                    if (stream) {
                                        stream.getTracks().forEach(function(track) {
                                            track.stop();
                                        });
                                    }
                                    // Mostrar el nuevo stream con el dispositivo seleccionado
                                    mostrarStream($listaDeDispositivos.value);
                                }
                                // Simple asignaciÃ³n
                                stream = streamObtenido;
                                // Mandamos el stream de la cÃ¡mara al elemento de vÃ­deo
                                $video.srcObject = stream;
                                $video.play();
                                //Escuchar el click del botÃ³n para tomar la foto
                                //Escuchar el click del botÃ³n para tomar la foto
                                $boton.addEventListener("click", function() {
                                    //Pausar reproducciÃ³n
                                    $video.pause();
                                    //Obtener contexto del canvas y dibujar sobre Ã©l
                                    let contexto = $canvas.getContext("2d");
                                    $canvas.width = $video.videoWidth;
                                    $canvas.height = $video.videoHeight;
                                    contexto.drawImage($video, 0, 0, $canvas.width,
                                        $canvas.height);
                                    let foto = $canvas
                                        .toDataURL(); //Esta es la foto, en base 64
                                    $estado.innerHTML =
                                        "Enviando foto. Por favor, espera...";
                                    fetch("./fotos/foto.php", {
                                            method: "POST",
                                            body: encodeURIComponent(foto),
                                            headers: {
                                                "Content-type": "application/x-www-form-urlencoded",
                                            }
                                        })
                                        .then(resultado => {
                                            // A los datos los decodificamos como texto plano
                                            return resultado.text()
                                        })
                                        .then(nombreDeLaFoto => {
                                            $('#id_captura').attr('value',
                                                nombreDeLaFoto);
                                            // nombreDeLaFoto trae el nombre de la imagen que le dio PHP
                                            console.log(
                                                "La foto fue enviada correctamente"
                                            );
                                            $estado.innerHTML =
                                                `Foto guardada con Exito. Puedes verla <a target='_blank' href='./foto/${nombreDeLaFoto}'> aquÃ­</a>`;
                                        })
                                    //Reanudar reproducciÃ³n
                                    $video.play();
                                });
                            }, (error) => {
                                console.log("Permiso denegado o error: ", error);
                                $estado.innerHTML =
                                    "No se puede acceder a la cÃ¡mara, o no diste permiso.";
                            });
                    }
                })();
        });
    });
</script>

<!-- Scripts Editar Equipo Taller-->
<script>
    $('#modaledittaller').on('show.bs.modal', function(e) {
        $('#id1').html($(e.relatedTarget).data('id'));
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id1').val(id);
        $("#editequipo").attr("action", '/editequipo/' + id);
        var id = $(e.relatedTarget).data().id_user;
        $(e.currentTarget).find('#id_user2').val(id);
        var id = $(e.relatedTarget).data().id_sucursal;
        $(e.currentTarget).find('#id_sucursal2').val(id);
        var id = $(e.relatedTarget).data().id_servicio;
        $(e.currentTarget).find('#id_servicio2').val(id);
        var id = $(e.relatedTarget).data().pago;
        $(e.currentTarget).find('#pago2').val(id);
        var id = $(e.relatedTarget).data().anticipo;
        $(e.currentTarget).find('#anticipo2').val(id);
        var id = $(e.relatedTarget).data().presupuesto;
        $(e.currentTarget).find('#presupuesto2').val(id);
        var id = $(e.relatedTarget).data().inversion;
        $(e.currentTarget).find('#inversion2').val(id);
        var id = $(e.relatedTarget).data().id_cliente;
        $(e.currentTarget).find('#id_cliente2').val(id);
        var id = $(e.relatedTarget).data().serial;
        $(e.currentTarget).find('#serial2').val(id);
        var id = $(e.relatedTarget).data().imei;
        $(e.currentTarget).find('#imei2').val(id);
        var id = $(e.relatedTarget).data().id_captura;
        $(e.currentTarget).find('#id_captura2').val(id);
        var id = $(e.relatedTarget).data().id_comentario;
        $(e.currentTarget).find('#descripcion2').val(id);
        var id = $(e.relatedTarget).data().fecha_recibido;
        $(e.currentTarget).find('#fecha_recibido2').val(id);
        var id = $(e.relatedTarget).data().fecha_entrega;
        $(e.currentTarget).find('#fecha_entrega2').val(id);
        var id = $(e.relatedTarget).data().status;
        $(e.currentTarget).find('#status2').val(id);
        var id = $(e.relatedTarget).data().tiene_camara;
        $(e.currentTarget).find('Tiene_Camara2').val(id);
        if (id == 'Tiene_Camara') {
            document.getElementById("Tiene_Camara2").checked = true;
        }
        var id = $(e.relatedTarget).data().centro_carga;
        $(e.currentTarget).find('Centro_Carga2').val(id);
        if (id == 'Centro_Carga') {
            document.getElementById("Centro_Carga2").checked = true;
        }
        var id = $(e.relatedTarget).data().señal;
        $(e.currentTarget).find('Señal2').val(id);
        if (id == 'Señal') {
            document.getElementById("Señal2").checked = true;
        }
        var id = $(e.relatedTarget).data().lectorsd;
        $(e.currentTarget).find('LectorSD2').val(id);
        if (id == 'LectorSD') {
            document.getElementById("LectorSD2").checked = true;
        }
        var id = $(e.relatedTarget).data().altavoz;
        $(e.currentTarget).find('AltaVoz2').val(id);
        if (id == 'AltaVoz') {
            document.getElementById("AltaVoz2").checked = true;
        }
        var id = $(e.relatedTarget).data().botonhome;
        $(e.currentTarget).find('BotonHome2').val(id);
        if (id == 'BotonHome') {
            document.getElementById("BotonHome2").checked = true;
        }
        var id = $(e.relatedTarget).data().microfono;
        $(e.currentTarget).find('Microfono2').val(id);
        if (id == 'Microfono') {
            document.getElementById("Microfono2").checked = true;
        }
        var id = $(e.relatedTarget).data().lector_sim;
        $(e.currentTarget).find('Lector_SIM2').val(id);
        if (id == 'Lector_SIM') {
            document.getElementById("Lector_SIM2").checked = true;
        }
        var id = $(e.relatedTarget).data().volumenplus;
        $(e.currentTarget).find('Volumenplus2').val(id);
        if (id == 'volumenplus') {
            document.getElementById("Volumenplus2").checked = true;
        }
        var id = $(e.relatedTarget).data().volumenless;
        $(e.currentTarget).find('Volumenless2').val(id);
        if (id == 'Volumenless') {
            document.getElementById("Volumenless2").checked = true;
        }
        var id = $(e.relatedTarget).data().encendido;
        $(e.currentTarget).find('Encendido2').val(id);
        if (id == 'Encendido') {
            document.getElementById("Encendido2").checked = true;
        }
        var id = $(e.relatedTarget).data().auricular;
        $(e.currentTarget).find('Auricular2').val(id);
        if (id == 'Auricular') {
            document.getElementById("Auricular2").checked = true;
        }
        var id = $(e.relatedTarget).data().touch;
        $(e.currentTarget).find('Touch2').val(id);
        if (id == 'Touch') {
            document.getElementById("Touch2").checked = true;
        }
        var id = $(e.relatedTarget).data().bateria;
        $(e.currentTarget).find('Bateria2').val(id);
        if (id == 'Bateria') {
            document.getElementById("Bateria2").checked = true;
        }
        var id = $(e.relatedTarget).data().enciende;
        $(e.currentTarget).find('Enciende2').val(id);
        if (id == 'Enciende') {
            document.getElementById("Enciende2").checked = true;
        }
        var id = $(e.relatedTarget).data().memoria;
        $(e.currentTarget).find('Memoria2').val(id);
        if (id == 'Memoria') {
            document.getElementById("Memoria2").checked = true;
        }
        var id = $(e.relatedTarget).data().sim;
        $(e.currentTarget).find('SIM2').val(id);
        if (id == 'SIM') {
            document.getElementById("SIM2").checked = true;
        }
        var id = $(e.relatedTarget).data().golpes;
        $(e.currentTarget).find('Golpes2').val(id);
        if (id == "Golpes") {
            document.getElementById("Golpes2").checked = true;
        }
        var id = $(e.relatedTarget).data().tiene_bateria;
        $(e.currentTarget).find('Tiene_Bateria2').val(id);
        if (id == "Tiene_Bateria") {
            document.getElementById("Tiene_Bateria2").checked = true;
        }
    });
</script>
<!-- Script Tabs -->
<script>
    $(document).ready(function() {
        // Initialize the leaveStep event
        $("#smartcart").on("cartEmpty", function(e) {
            // alert("Cart is empty");
        });
        // Initialize Smart Cart
        $('#smartcart').smartCart();

        function flash(e) {
            $('.flash')
                .show()
                .animate({
                    opacity: 0.5
                }, 300)
                .fadeOut(300)
                .css({
                    'opacity': 1
                });
        }
        $(document).ready(function() {
            $('.flash').hide();
            $(document).mouseup(function(e) {
                flash(e);
            });
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
        });
    });
</script>
<!-- Script Notificaciones -->
@if(session('success'))
<script>
    $('#modal_notificacion').modal('show');
</script>
@endif

@if($Sucursal->isEmpty()||$Caja->isEmpty()||$Settings->isEmpty()||$Caja->isEmpty())
<script>
    $('#modal_configurar').modal('show');
</script>
@endif

<script>
    $('#modal-taller-galleria').on('show.bs.modal', function(e) {
        var id = $(e.relatedTarget).data().id;
        $(e.currentTarget).find('#id_equipo1').val(id);
        $('#galeria').attr('src', 'galleria/' + id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: 'galleria/' + id,
            data: {
                'id': id,
                '_method': 'POST',
            },
            type: 'POST',
            success: function(response) {
                //alert(response);
                //location.reload();
            },
            statusCode: {
                404: function() {
                    //alert('web not found');
                }
            },
            error: function(x, xs, xt) {
                //window.open(JSON.stringify(x));
                //  alert('error: ' + JSON.stringify(x) +"\n error string: "+ xs + "\n error throwed: " + xt);
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(".se-pre-con").fadeOut("slow");
    });
</script>

@if(session('pago_equipo'))
<script>
    $('.toast').toast('show');
</script>
@endif
