<div class="row">

    @php $count=0; $numero=0; $total=0;@endphp
    @if($Equipo->isEmpty()) @php $numero=1; @endphp  @else
    @foreach ($Equipo as $equipo)
    @php
    $numero++;
    if($equipo->status != 5&&$equipo->status != 2 && $equipo->status != 6 && $equipo->id_sucursal ==
    Auth::user()->id_sucursal)
    {
    $count++;
    }
    @endphp
    @endforeach
    @endif

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="" data-toggle="modal" data-target="#modal_ganancias">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Ganancias (Dia)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                @foreach ($Caja as $caja)
                                @if(Auth::user()->id_sucursal==$caja->id_sucursal)
                                $ @if($Caja->isEmpty()) @else {{$caja->corte}} @if($Settings->isEmpty()) 0 @else {{$setting->setting_moneda}} @endif @endif
                                @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div></a>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Ganancias (Mes)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000 @if($Settings->isEmpty()) @else  {{ $setting->setting_moneda }}@endif</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="#" class=" face" id="taller-tab" data-toggle="tab" href="#taller">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pendientes
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$count}}</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: {{$total=$count/$numero*100}}%" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div></a>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <a href="" data-toggle="modal" data-target="#modal_sms">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                SMS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$contador}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
    </div></a>
</div>

<!--
<ul class="nav nav-tabs bg-ligth shadow-lg border border-secondary fixed-position" id="myTab" role="tablist" id="blurrMe"
    style=" border: none;  border-radius: 10px;" data-backdrop="static" data-keyboard="false">
    <li class="nav-item rounded face">
        <a class="nav-link" id="taller-tab" data-toggle="tab" href="#taller" role="tab" aria-controls="taller"
            aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                <path fill-rule="evenodd"
                    d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
            </svg>Equipos a Reparars
        </a>
    </li>
    <li class="nav-item rounded face">
        <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas"
            aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart4"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
            </svg>Reportes
        </a>
    </li>
    <li class="nav-item face ">
        <a class="nav-link" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios"
            aria-selected="false"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
            </svg>Usuarios
        </a>
    </li>
    <li class="nav-item face">
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

    <li class="nav-item face">
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
</ul>
-->
