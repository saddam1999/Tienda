@php

$date1 = new DateTime("now", new DateTimeZone('America/New_York'))@endphp
@php
$dia1=$date1->format("d");
$mes=$date1->format("m");
$ano=$date1->format("Y");

if($mes==1){
$mes1= 'Enero';
}elseif($mes==2){
$mes1= 'Febrero';

}elseif($mes==3){
$mes1= 'Marzo';

}elseif($mes==4){
$mes1= 'Abril';

}elseif($mes==5){
$mes1= 'Mayo';

}elseif($mes==6){
$mes1= 'Junio';

}elseif($mes==7){
$mes1= 'Julio';

}elseif($mes==8){
$mes1= 'Agosto';

}elseif($mes==9){
$mes1= 'Septiembre';

}elseif($mes==10){
$mes1= 'Octubre';

}elseif($mes==11){
$mes1= 'Noviembre';

}elseif($mes==12){
$mes1= 'Diciembre';

}

@endphp

<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid fixed-top">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end bg-white" id="navigation" style="border-radius: 10px;">
            <a class="navbar-brand ml-auto mr-auto" href="javascript:;">
                <p class="text-footer">
                    Sucursal @foreach ($Sucursal as
                    $sucursal)@if($sucursal->id==Auth::user()->id_sucursal)
                    {{$sucursal->nombre}} @endif @endforeach</p>
            </a><br>
            <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="nc-icon nc-zoom-split"></i>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="" data-toggle="modal" data-target="#modaltaller">
                        <i class="nc-icon nc-settings"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Reparar</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn-magnify" href="" data-toggle="modal" data-target="#modal_caja">
                        <i class="nc-icon nc-bank"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Caja</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item btn-rotate" style="margin-right: 80px;">
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <a type="button" class="btn btn-ligth dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="nc-icon nc-single-02"></i>

                        </a>
                        <ul class="dropdown-menu">
                            <small>
                                <div>
                                    <div class="font-small text-base text-gray-800 ml-auto mr-auto">
                                        <p class="card-footer">{{ Auth::user()->name }}</p>
                                        @php

                                        $date1 = new DateTime("now", new DateTimeZone('America/New_York'))@endphp
                                        @php
                                        $dia1=$date1->format("d");
                                        $mes=$date1->format("m");
                                        $ano=$date1->format("Y");

                                        if($mes==1){
                                        $mes1= 'Enero';
                                        }elseif($mes==2){
                                        $mes1= 'Febrero';

                                        }elseif($mes==3){
                                        $mes1= 'Marzo';

                                        }elseif($mes==4){
                                        $mes1= 'Abril';

                                        }elseif($mes==5){
                                        $mes1= 'Mayo';

                                        }elseif($mes==6){
                                        $mes1= 'Junio';

                                        }elseif($mes==7){
                                        $mes1= 'Julio';

                                        }elseif($mes==8){
                                        $mes1= 'Agosto';

                                        }elseif($mes==9){
                                        $mes1= 'Septiembre';

                                        }elseif($mes==10){
                                        $mes1= 'Octubre';

                                        }elseif($mes==11){
                                        $mes1= 'Noviembre';

                                        }elseif($mes==12){
                                        $mes1= 'Diciembre';

                                        }

                                        @endphp
                                        <br>
                                        {{$dia1}} de {{$mes1}} del {{$ano}}

                                    </div>
                                </div>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/perfil">Perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit();">{{ __('Logout') }}</a></form>
                                </li>
                            </small>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
