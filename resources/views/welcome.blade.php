<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- JS, Popper.js, and jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<header>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color:white; opacity:95%;">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <form action="results.php" method="POST">
                <div class="sidebar-header text-dark" style="background-color:white; color:dark;" id="smartcart">
                    <h3 class="text-dark">Carrito de Compras</h3>
                    <!-- SmartCart element -->
            </form>
        </nav>
    </div>
    <!-- Page Content  -->
    <div id="content mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="https://i.pinimg.com/736x/89/10/8e/89108e533640fd9d0731e0623699c57c.jpg" width="30"
                    height="30" class="d-inline-block align-top" alt="">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="container">
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <x-jet-dropdown-link href="{{ route('dashboard') }}">
                                    {{ Auth::user()->name }}
                                </x-jet-dropdown-link>
                                <div class="border-t border-blue-100"></div>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                </svg>
            </button>
        </nav>

</header>

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#777" /></svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#777" /></svg>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                    <rect width="100%" height="100%" fill="#777" /></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta
                            gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Marketing messaging and featurettes
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div class="row">
            <!-- BEGIN PRODUCTS -->
            @foreach ($Articulo as $producto)
            <div class="col-md-4">
                <!-- bbb_deals -->
                <div class="bbb_deals sc-product-item">
                    @if($producto->descuento!=0)
                    <div class="ribbon ribbon-top-right"><span> {{$producto->descuento}}%</span></div>
                    @endif
                    <div class="bbb_deals_title" data-name="product_name">{{$producto->nombre}}</div>
                    <div class="bbb_deals_slider_container">
                        <div class=" bbb_deals_item">
                            <div class="bbb_deals_image"><img data-name="product_image"
                                    src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1562074043/234.png"
                                    alt=""></div>
                            <div class="bbb_deals_content">
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    @foreach ($Marca as $marca)
                                    @if($marca->id==$producto->id_marca)
                                    <div class="bbb_deals_item_category"><a href="#">{{$marca->nombre}}</a></div>
                                    @endif
                                    @endforeach

                                    <div class="bbb_deals_item_price_a ml-auto">${{$producto->precioOriginal}}</div>
                                </div>
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="form-group">
                                        <textarea class="form-control bbb_deals_item_name" disabled
                                            data-name="product_desc" rows="8">{{$producto->descripcion}}</textarea>
                                    </div>

                                    <div class="bbb_deals_item_price ml-auto">${{$producto->precio}}</div>
                                    <input name="product_price" value="{{$producto->precio}}" type="hidden" />
                                    <input name="product_id" value="{{$producto->id}}" type="hidden" />
                                </div>
                                <div class="available">
                                    <div class="available_line d-flex flex-row justify-content-start">
                                        <div class="available_title">Disponible:
                                            <span>{{$producto->existencia}}</span></div>
                                        <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                    </div>
                                    <button class="sc-add-to-cart btn btn-success">Agregar Carrito</button>
                                    <div class="available_bar"><span style="width:17%"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

        <!-- /.row -->

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">

            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your
                        mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>

            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for
                        yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis
                    euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,
                    tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-label="Placeholder: 500x500">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                        dy=".3em">500x500</text>
                </svg>
            </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2020 HollyDev Jose Isaias Briano Jasso. &middot; <a href="#">Privacy</a> &middot; <a
                href="#">Terms</a></p>
    </footer>
</main>

<div class="overlay"></div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });
        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
    // $('#smartcart').smartCart();
</script>
<script type="text/javascript">
    $('#smartcart').smartCart();
</script>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
</script>
<!-- jQuery Custom Scroller CDN -->
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });
        $('#dismiss, .overlay').on('click', function() {
            // hide sidebar
            $('#sidebar').removeClass('active');
            // hide overlay
            $('.overlay').removeClass('active');
        });
        $('#sidebarCollapse').on('click', function() {
            // open sidebar
            $('#sidebar').addClass('active');
            // fade in the overlay
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
</body>

</html>
