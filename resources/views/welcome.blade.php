@foreach ($Settings as $setting)
@endforeach
@foreach ($Promocion as $promocion)
@endforeach
@if($Settings->isEmpty()) @else
@if($setting->setting_plantilla=='../images/template1.png')
@extends('modalwelcome')
@extends('scriptswelcome')
<!DOCTYPE HTML>
<html>
<head>
    <title>@if($Settings->isEmpty()) @else {{$setting->setting_nombre}}@endif</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!--Floating WhatsApp css-->
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--Floating WhatsApp javascript-->
    <script type="text/javascript"
        src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js">
    </script>

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <style>
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

    <style style="text/css">
        div.slide-left {
            width: 100%;
            overflow: hidden;
        }

        div.slide-left p {
            animation: slide-left 10s;
        }

        @keyframes slide-left {
            from {
                margin-left: 100%;
                width: 300%;
            }

            to {
                margin-left: 0%;
                width: 100%;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/carousel/carousel.css" rel="stylesheet">
    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="https://bootstrapious.com/tutorial/sidebar/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link href="/dist/css/smart_cart.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/dist/js/jquery.smartCart.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <style>
        .text-box {
            margin-left: 44vw;
            margin-top: 42vh;
        }

        .btn:link,
        .btn:visited {
            text-transform: uppercase;
            text-decoration: none;
            padding: 15px 40px;
            display: inline-block;
            border-radius: 100px;
            transition: all .2s;
            position: absolute;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-white {
            background-color: #fff;
            color: #777;
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all .4s;
        }

        .btn-white::after {
            background-color: #fff;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        .btn-animated {
            animation: moveInBottom 5s ease-out;
            animation-fill-mode: backwards;
        }

        @keyframes moveInBottom {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }
    </style>
</head>
<div class="se-pre-con"></div>
@extends('toast')
<body class="homepage is-preload">
    <div id="page-wrapper">
        <!-- Header -->
        <div id="header-wrapper"
            style="background-image: url('@if($Promocion->isEmpty()) @else{{$promocion->bannera}} @endif'); ">
            <div class="container">
                <!-- Header -->
                <header id="header">
                    <div class="container">
                        <div class="header-row py-2 bg-warning text-white" style="color:#fff; border-radius:10px 10px 0px 0px;">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top" >
                                        <ul class="nav nav-pills"  >
                                            <li class="nav-item ml-2 mr-2" >
                                                <a  class=" text-white strong" href="mailto:@if($Settings->isEmpty()) @else {{$setting->setting_contacto}} @endif"><i class="far fa-envelope text-white" style="top: 1px;"></i>:@if($Settings->isEmpty()) @else  {{$setting->setting_contacto}} @endif </a>
                                            </li>
                                            <li class="nav-item ml-2">
                                            <a class=" text-white strong" href="tel:@if($Settings->isEmpty()) @else {{$setting->setting_telefono}} @endif"><i class="fab fa-whatsapp  text-white" style="top: 0;"></i>:@if($Settings->isEmpty()) @else  {{$setting->setting_telefono}} @endif</a>
                                            </li>
                                            <li class="nav-item ml-2">
                                                <a class=" text-white strong" href="tel: @if($Settings->isEmpty()) @else {{$setting->setting_direccion}} @endif"><i class="fas fa-map-marker-alt"></i>: @if($Settings->isEmpty()) @else {{$setting->setting_direccion}} @endif</a>
                                             </li>
                                             <li class="nav-item ml-2">
                                                <a class=" text-white strong" href="tel:@if($Settings->isEmpty()) @else {{$setting->setting_abierto}}"@endif><i class="fab fa-algolia"></i>: @if($Settings->isEmpty()) @else {{$setting->setting_abierto}} @endif</a>
                                             </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end ">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                    <ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean social-icons-icon-light">
                                    </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="inner">

                        <!-- Logo -->
                        <h1><a href="/" id="logo">@if($Settings->isEmpty()) @else <h3
                                    style="font-family: 'Ubuntu', sans-serif;"> {{$setting->setting_nombre}}</h3></a>
                        </h1>
                        <a class="navbar-brand" href="/">
                            <img style="border-radius:70%;"
                                src=" @if($Settings->isEmpty()) @else {{$setting->setting_logo}}@endif" width="50"
                                height="50" class="d-inline-block align-top" alt="">
                            @endif
                        </a>
                        <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li class="current_page_item"><a href="/">Home</a></li>

                                <li>
                                    <a href="#">Revision</a>
                                    <ul>
                                        <li><a class="bg-dark text-white" href="#">Status de mi Equipo</a></li>
                                        <li><a class="bg-dark text-white" href="#">Pedir una Reparacion</a></li>
                                        <!--
                                        <li>
                                            <a href="#">Phasellus consequat</a>
                                            <ul>
                                                <li><a href="#">Lorem ipsum dolor</a></li>
                                                <li><a href="#">Phasellus consequat</a></li>
                                                <li><a href="#">Magna phasellus</a></li>
                                                <li><a href="#">Etiam dolore nisl</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Veroeros feugiat</a></li>-->
                                    </ul>
                                </li>
                                <!--
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>-->
                                <li>
                                    @if (Route::has('login'))
                                    @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 underline">Dashboard</a>
                                    @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 text-sm text-gray-700 underline">Register</a>
                                    @endif
                                    @endif
                                    @endif
                                </li>
                            </ul>
                            <div class="wrapper">
                                <!-- Sidebar  -->
                                <nav class="sticky-top shadow-lg " id="sidebar"
                                    style="background-color:white; opacity:95%; border-radius:20px;">
                                    <div id="dismiss" class="mt-5">
                                        <i class="fas fa-arrow-left"></i>
                                    </div>
                                    <form action="results.php" method="POST">
                                        <div class="sidebar-header text-dark"
                                            style="background-color:white; color:dark; border-radius:20px; "
                                            id="smartcart">
                                            <h3 class="text-dark"><br> Carrito</h3>
                                            <!-- SmartCart element -->
                                    </form>
                                </nav>
                            </div>
                        </nav>

                    </div>
                </header>

                <!-- Banner -->
                <div id="banner">
                    <h2><strong>@if($Settings->isEmpty()) @else {{$setting->setting_nombre}}@endif</strong>
                        <br />
                        <a href="#" class="button large icon solid fa-check-circle">Hola</a>
                </div>

            </div>
        </div>

        <!-- Main Wrapper -->
        <div id="main-wrapper">
            <div class="wrapper style1">
                <div class="inner">

                    <!-- Feature 1 -->
                    <section class="container box feature1">
                        <div class="row">
                            <div class="col-12">
                                <header class="first major">
                                    <h2>@if($Promocion->isEmpty()) @else {{$promocion->titulo}}@endif</h2>
                                    <strong> @if($Promocion->isEmpty()) @else{{$promocion->titulo_banner_principal}}
                                        @endif</strong>
                                </header>
                            </div>
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="#" class="image featured"><img
                                            src="@if($Promocion->isEmpty()) @else{{$promocion->bannera}} @endif"
                                            alt="" /></a>
                                    <h3>@if($Promocion->isEmpty()) @else{{$promocion->texto_bannera}} @endif</h3>
                                    <p>@if($Promocion->isEmpty()) @else @if($Promocion->isEmpty())
                                        {{$promocion->fecha_inicio}} a {{$promocion->fecha_final}} @endif @endif</p>
                                </section>
                            </div>
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="#" class="image featured"><img
                                            src="@if($Promocion->isEmpty()) @else{{$promocion->bannerb}} @endif"
                                            alt="" /></a>
                                    <h3>@if($Promocion->isEmpty()) @else{{$promocion->texto_bannerb}} @endif</h3>
                                    <p>@if($Promocion->isEmpty()) @else @if($Promocion->isEmpty())
                                        {{$promocion->fecha_inicio}} a {{$promocion->fecha_final}} @endif @endif</p>
                                </section>
                            </div>
                            <div class="col-4 col-12-medium">
                                <section>
                                    <a href="#" class="image featured"><img
                                            src="@if($Promocion->isEmpty()) @else{{$promocion->bannerc}} @endif"
                                            alt="" /></a>
                                    <h3>@if($Promocion->isEmpty()) @else{{$promocion->texto_bannerc}} @endif</h3>
                                    <p>@if($Promocion->isEmpty()) @else @if($Promocion->isEmpty())
                                        {{$promocion->fecha_inicio}} a {{$promocion->fecha_final}} @endif @endif</p>
                                </section>
                            </div>

                            <div class="row">
                                @foreach ($Articulo as $producto)
                                @if($producto->descuento==0)
                                <div class="col-4-md">
                                    <!-- bbb_deals -->
                                    <div class="bbb_deals sc-product-item mt-3" style="border-radius:40px;">
                                        @if($producto->descuento!=0)
                                        <div class="ribbon ribbon-top-right"><span>Oferta
                                                -{{$producto->descuento}}%</span></div>
                                        @endif
                                        <div class="bbb_deals_title" data-name="product_name">{{$producto->nombre}}
                                        </div>
                                        <div class="bbb_deals_slider_container">
                                            <div class=" bbb_deals_item">
                                                <div class="bbb_deals_image thumbnail zoom"><img
                                                        style="border-radius: 10px;" data-name="product_image"
                                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTg6HHrHAFf240zdYktXrN3b_eW0yuQ373dDoNA-QHeZzdpyhDLPoVPihBK0JA4gsP8itXsju2&usqp=CAc"
                                                        alt="">
                                                </div>
                                                <div class="bbb_deals_content">
                                                    <div
                                                        class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        @foreach ($Marca as $marca)
                                                        @if($marca->id===$producto->id_marca)
                                                        <div class="bbb_deals_item_category"><a
                                                                href="#">{{$marca->nombre}}</a></div>
                                                        @endif
                                                        @endforeach
                                                        <small class="text-muted">{{$producto->categoria}}</small>
                                                        <div class="bbb_deals_item_price_a ml-auto">
                                                            @if($producto->descuento!=0)
                                                            <del>${{$producto->precioOriginal}}</del>
                                                            @else
                                                            ${{$producto->precioOriginal}}
                                                            @endif
                                                            @if($Settings->isEmpty()) @else {{$setting->setting_moneda}}
                                                            @endif</div>
                                                    </div>
                                                    <div
                                                        class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                        <div class="form-group">
                                                            <textarea class="form-control bbb_deals_item_name" disabled
                                                                data-name="product_desc"
                                                                rows="8">{{$producto->descripcion}}</textarea>
                                                        </div>

                                                        <div class="bbb_deals_item_price ml-auto">${{$producto->precio}}
                                                            @if($Settings->isEmpty()) @else {{$setting->setting_moneda}}
                                                            @endif</div>
                                                        <input name="product_price" value="{{$producto->precio}}"
                                                            type="hidden" />
                                                        <input name="product_id" value="{{$producto->id}}"
                                                            type="hidden" />
                                                    </div>
                                                    <div class="available">
                                                        <div
                                                            class="available_line d-flex flex-row justify-content-start">
                                                            <div class="available_title">Disponible:
                                                                <span>{{$producto->existencia}}</span></div>
                                                            <div class="sold_title ml-auto">Already sold:
                                                                <span>28</span></div>
                                                        </div>
                                                        <button
                                                            class="sc-add-to-cart btn btn-success btn-animate">Agregar
                                                            Carrito</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="wrapper style2">
                <div class="inner">

                    <!-- Feature 2 -->
                    <section class="container box feature2">
                        <section>
                         <!-- Marketing messaging and featurettes
================================================== -->
                            <!-- Wrap the rest of the page in another container to center all the content. -->
                            <div class="container marketing">
                                <div class="row">
                                    <!-- BEGIN PRODUCTS -->
                                    @foreach ($Articulo as $producto)
                                    @if($producto->descuento!=0)
                                    <div class="col-md-4" style="border-radius:10px;">
                                        <div class="alert alert-warning" role="alert">
                                            <h4 class="alert-heading"> @if($Promocion->isEmpty()) @else
                                                {{$promocion->titulo}} @endif</h4>

                                        </div>
                                        <!-- bbb_deals -->
                                        <div class="bbb_deals sc-product-item" style="border-radius:40px;">
                                            @if($producto->descuento!=0)
                                            <div class="ribbon ribbon-top-right"><span>Oferta
                                                    -{{$producto->descuento}}%</span></div>
                                            @endif
                                            <div class="bbb_deals_title" data-name="product_name">
                                                {{$producto->nombre}}</div>
                                            <div class="bbb_deals_slider_container">
                                                <div class=" bbb_deals_item">
                                                    <div class="bbb_deals_image thumbnail zoom"><img
                                                            data-name="product_image"
                                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBFTrn1ikivYdtSkXv0JVfPSAb8944mWxN7J79cZTPMAJrzyFAW33PipVdSLICzm7By7oZSlA&usqp=CAc"
                                                            alt=""></div>
                                                    <div class="bbb_deals_content">
                                                        <div
                                                            class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                            @foreach ($Marca as $marca)
                                                            @if($marca->id===$producto->id_marca)
                                                            <div class="bbb_deals_item_category"><a
                                                                    href="#">{{$marca->nombre}}</a></div>
                                                            @endif
                                                            @endforeach
                                                            <small class="text-muted">{{$producto->categoria}}</small>
                                                            <div class="bbb_deals_item_price_a ml-auto">
                                                                @if($producto->descuento!=0)
                                                                <del>${{$producto->precioOriginal}}</del>
                                                                @else
                                                                ${{$producto->precioOriginal}}
                                                                @endif
                                                                @if($Settings->isEmpty()) @else
                                                                {{$setting->setting_moneda}} @endif</div>
                                                        </div>
                                                        <div
                                                            class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                                            <div class="form-group">
                                                                <textarea class="form-control bbb_deals_item_name"
                                                                    disabled data-name="product_desc"
                                                                    rows="8">{{$producto->descripcion}}</textarea>
                                                            </div>

                                                            <div class="bbb_deals_item_price ml-auto">
                                                                ${{$producto->precio}} @if($Settings->isEmpty())
                                                                @else {{$setting->setting_moneda}} @endif</div>
                                                            <input name="product_price" value="{{$producto->precio}}"
                                                                type="hidden" />
                                                            <input name="product_id" value="{{$producto->id}}"
                                                                type="hidden" />
                                                        </div>
                                                        <div class="available">
                                                            <div
                                                                class="available_line d-flex flex-row justify-content-start">
                                                                <div class="available_title">Disponible:
                                                                    <span>{{$producto->existencia}}</span></div>
                                                                <div class="sold_title ml-auto">Already sold:
                                                                    <span>28</span></div>
                                                            </div>
                                                            <button
                                                                class="sc-add-to-cart btn btn-success btn btn-success btn-animate">Agregar
                                                                Carrito</button>
                                                            <div class="available_bar"><span style="width:17%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach

                        </section>
                    </section>
                </div>
            </div>
            <div class="wrapper style3">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-8 col-12-medium">
                                <!-- Article list -->
                                <section class="box article-list">
                                    <h2 class="icon fa-file-alt">Publicaciones Recientes</h2>
                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img
                                                src="data:image/jpeg;base64,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"
                                                alt="" /></a>
                                        <div>
                                            <header>
                                                <span class="date">July 24</span>
                                                <h3><a href="#">Rembolso Garantizado</a></h3>
                                            </header>
                                            <p>Todos los servicios en nuestros sitios web están cubiertos por nuestro
                                                100% de devolución de dinero
                                                Garantía. Ofrecemos tal garantía para darles a los clientes honestos la
                                                la tranquilidad de que el servicio de desbloqueo que están solicitando
                                                se entregará
                                                de buena fe.</p>
                                        </div>
                                    </article>

                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img
                                                src="data:image/png;base64,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"
                                                alt="" /></a>
                                        <div>
                                            <header>
                                                <span class="date">July 18</span>
                                                <h3><a href="#">24/7 Soporte Fiable
                                                    </a></h3>
                                            </header>
                                            <p>
                                                Realmente marcamos la diferencia al brindar apoyo a nuestros clientes.
                                                Aseguramos la disponibilidad de nuestro personal, 24x7. Correo
                                                electrónico, chat en vivo o mensaje de texto, estamos aquí para ayudarlo
                                                ...</p>
                                        </div>
                                    </article>

                                    <!-- Excerpt -->
                                    <article class="box excerpt">
                                        <a href="#" class="image left"><img
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQksDWFlLPY9ecJsd-6GjNFcM5RjCNrvMdeQw&usqp=CAU"
                                                alt="" /></a>
                                        <div>
                                            <header>
                                                <span class="date">July 14</span>
                                                <h3><a href="#">Entrega inmediata o lo mas rapido posible
                                                    </a></h3>
                                            </header>
                                            <p>Todos los códigos de desbloqueo y las confirmaciones de desbloqueo se
                                                envían por correo electrónico al
                                                dirección de correo electrónico que el cliente proporciona en el
                                                formulario de pedido. Hacemos
                                                asegúrese de que la entrega de códigos de desbloqueo sea eficiente en el
                                                tiempo. Si se retrasa,
                                                informar a nuestros clientes / revendedores por correo electrónico.</p>
                                        </div>
                                    </article>

                                </section>
                            </div>
                            <div class="col-4 col-12-medium">

                                <!-- Spotlight -->
                                <section class="box spotlight">
                                    <h2 class="icon fa-file-alt">Nuestros Servicios</h2>
                                    <article>
                                        <a href="#" class="image featured"><img
                                                src="https://ep01.epimg.net/elpais/imagenes/2019/12/18/escaparate/1576671392_175444_1576753159_noticia_normal.jpg"
                                                alt=""></a>
                                        <header>
                                            <h3><a href="#">La mayoria de nuestros servicios son permanentes
                                                </a></h3>
                                        </header>
                                        <p>Desbloqueo oficial de fábrica para cualquier iPhone, independientemente de la
                                            versión de iOS, la versión de banda base o el modelo. Desbloqueo permanente
                                            de fábrica sin complicaciones de su iPhone sin anular la garantía o
                                            procedimientos difíciles. No es necesario ejecutar ningún software
                                            complicado.</p>
                                        <footer>
                                            <a href="#" class="button alt icon solid fa-file-alt">Mas</a>
                                        </footer>
                                    </article>
                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Wrapper -->
        <div class="bg-dark " id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="col-3 col-6-medium col-12-small">
                        <!-- Links -->
                        <section>
                            <h2>Filler Links</h2>
                            <ul class="divided">
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                                <li><a href="#">Amet ornare in hendrerit </a></li>
                                <li><a href="#">Semper mod quisturpis nisi</a></li>
                                <li><a href="#">Consequat etiam phasellus</a></li>
                                <li><a href="#">Amet turpis, feugiat et</a></li>
                                <li><a href="#">Ornare hendrerit lectus</a></li>
                                <li><a href="#">Semper mod quis et dolore</a></li>
                                <li><a href="#">Amet ornare in hendrerit</a></li>
                                <li><a href="#">Consequat lorem phasellus</a></li>
                                <li><a href="#">Amet turpis, feugiat amet</a></li>
                                <li><a href="#">Semper mod quisturpis</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-3 col-6-medium col-12-small">

                        <!-- Links -->
                        <section>
                            <h2>More Filler</h2>
                            <ul class="divided">
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                                <li><a href="#">Amet ornare in in lectus</a></li>
                                <li><a href="#">Semper mod sed tempus nisi</a></li>
                                <li><a href="#">Consequat etiam phasellus</a></li>
                            </ul>
                        </section>

                        <!-- Links -->
                        <section>
                            <h2>Even More Filler</h2>
                            <ul class="divided">
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                                <li><a href="#">Amet ornare hendrerit lectus</a></li>
                                <li><a href="#">Semper quisturpis nisi</a></li>
                                <li><a href="#">Consequat lorem phasellus</a></li>
                            </ul>
                        </section>

                    </div>
                    <div class="col-6 col-12-medium imp-medium">
                        <!-- About -->
                        <section>
                            <h2><strong>Politica de Privacidad</strong></h2>
                            <p>A menudo, clientes y usuarios confían su información personal a diferentes operadores de
                                sitios web. Si un proyecto online presta servicios que demandan información detallada
                                sobre sus usuarios será imprescindible contar con una política de protección de datos.
                                Para establecer una relación de confianza, los operadores de una página web deben
                                ofrecer a sus usuarios una política de privacidad web completa que informe sobre el tipo
                                de datos que serán recolectados, así como la forma en que se compilarán, y finalmente,
                                cuál será el uso que se les dará. Además, una política de privacidad completa
                                proporcionará información sobre las medidas de seguridad del proceso de recopilación de
                                datos.</p>
                            <a href="#" data-toggle="modal" data-target="#modal_privacidad"
                                class="button alt icon solid fa-arrow-circle-right">Mas</a>
                        </section>

                        <!-- Contact -->
                        <section>
                            <h2>Estamos en Contacto</h2>
                            <div>
                                <div class="row">
                                    <div class="col-6 col-12-small">
                                        <dl class="contact">
                                            <dt>Twitter</dt>
                                            <dd><a href="https://twitter.com/{{$setting->setting_twitter}}">@if($Settings->isEmpty())
                                                    @else
                                                    {{$setting->setting_twitter}} @endif</a></dd>
                                            <dt>Facebook</dt>
                                            <dd><a href="{{$setting->setting_facebook}}">@if($Settings->isEmpty()) @else
                                                    {{$setting->setting_nombre}} @endif</a></dd>
                                            <dt>WWW</dt>
                                            <dd><a href="#">@if($Settings->isEmpty()) @else
                                                    {{$setting->setting_url}} @endif</a></dd>
                                            <dt>Email</dt>
                                            <dd><a href="#">@if($Settings->isEmpty()) @else
                                                    {{$setting->setting_contacto}} @endif</a></dd>
                                            <dl class="contact">
                                                <dt>Direccion</dt>
                                                <dd class="text-white">@if($Settings->isEmpty()) @else
                                                    {{$setting->setting_direccion}} @endif
                                                </dd>
                                                <dt>Telefono</dt>
                                                <dd class="text-white">@if($Settings->isEmpty()) @else
                                                    {{$setting->setting_telefono}} @endif</dd>
                                            </dl>
                                        </dl>
                                    </div><br><br>
                                    <div class="col-6 col-12-small">

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-12">
                        <div id="copyright">
                            <div class="footer-copyright text-center py-1 text-white">©Holly Store Pro Copyright 2020 :
                                <a class="text-white" href="https://hollyrenew.website/"> Desarrollado por HollyDev</a>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
        </div>
        @section('scriptswelcome')
        @show
        @section('modalwelcome')
        @show
</body>
@else
@endif
@endif

</html>
