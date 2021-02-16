@include('header2')@foreach ($Settings as $setting)@endforeach
@foreach ($Promocion as $promocion)@endforeach
@php
date_default_timezone_set('UTC');
$contador=0;
@endphp
@php
$fecha = new DateTime("now");
$pendiente=0;
$revision=0;
$cancelado=0;
$espera=0;
$cliente=0;
$listo=0;
$entregado=0;
@endphp
@foreach($Equipo as $contador)
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==0&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$pendiente++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==1&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$revision++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==2&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$cancelado++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==3&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$espera++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==4&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$cliente++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==5&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$listo++;
@endphp
@endif
@if($contador->id_sucursal==Auth::user()->id_sucursal&&$contador->status==6&&$fecha->format("Y-m-d")==$contador->fecha_entrega)
@php
$entregado++;
@endphp
@endif
@endforeach
<body>
    <div class="wrapper ">
        @include('sidebar2')
        <div class="main-panel">
            <!-- Navbar -->
            @include('menu2')

            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-globe text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Equipos Listos</p>
                                            <p class="card-title">{{$listo}}
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    Update Now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-money-coins text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Venta Diaria</p>
                                            <p class="card-title"><small>
                                                    @foreach ($Caja as $caja)
                                                    @if(Auth::user()->id_sucursal==$caja->id_sucursal)
                                                    $ @if($Caja->isEmpty()) @else {{$caja->corte}} @endif
                                                    @endif
                                                    @endforeach</small>
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar-o"></i>
                                    Last day
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-vector text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Venta Producto</p>
                                            <p class="card-title">23 <small>@if($Settings->isEmpty()) @else
                                                    {{ $setting->setting_moneda }}@endif</small>
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i>
                                    In the last hour
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Followers</p>
                                            <p class="card-title">+45K<p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i>
                                    Update now
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Users Behavior</h5>
                                <p class="card-category">24 Hours performance</p>
                            </div>
                            <div class="card-body ">
                                <canvas id=chartHours width="400" height="100"></canvas>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Updated 3 minutes ago
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header ">
                                <h5 class="card-title">Email Statistics</h5>
                                <p class="card-category">Last Campaign Performance</p>
                            </div>
                            <div class="card-body ">
                                <canvas id="chartEmail"></canvas>
                            </div>
                            <div class="card-footer ">
                                <div class="legend">
                                    <i class="fa fa-circle text-primary"></i> Opened
                                    <i class="fa fa-circle text-warning"></i> Read
                                    <i class="fa fa-circle text-danger"></i> Deleted
                                    <i class="fa fa-circle text-gray"></i> Unopened
                                </div>
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar"></i> Number of emails sent
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-title">NASDAQ: AAPL</h5>
                                <p class="card-category">Line Chart with Points</p>
                            </div>
                            <div class="card-body">
                                <canvas id="speedChart" width="400" height="100"></canvas>
                            </div>
                            <div class="card-footer">
                                <div class="chart-legend">
                                    <i class="fa fa-circle text-info"></i> Tesla Model S
                                    <i class="fa fa-circle text-warning"></i> BMW 5 Series
                                </div>
                                <hr />
                                <div class="card-stats">
                                    <i class="fa fa-check"></i> Data information certified
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer2')
        </div>
    </div>
    @include('modal')
    @include('scripts2')
</body>

</html>
