<div class="tab-pane fade show" id="ventas" role="tabpanel" aria-labelledby="ventas-tab">
    <div class="">
        <div class="">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none;border-radius: 40px 10px;">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Ventas Sucursal @foreach ($Sucursal as
                            $sucursal)@if($sucursal->id==Auth::user()->id_sucursal)
                            {{$sucursal->nombre}} @endif @endforeach</h4>
                        <table class="table table-striped table-inverse table-responsive" id="tableventas">
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
                                @if($pago_equipo->id_sucursal==Auth::user()->id_sucursal)
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
                                    <td class="price">${{$pago_equipo->total}} +
                                        {{$pago_equipo->iva}} IVA </td>
                                    @elseif($pago_equipo->iva!=''&&$pago_equipo->total==0)
                                    <td class="price">${{$pago_equipo->total}}</td>
                                    @endif

                                    @if($pago_equipo->iva=='')
                                    <td class="price">${{$pago_equipo->total}}</td>
                                    @elseif($pago_equipo->iva!=''&&$pago_equipo->total!=0)
                                    <td class="price">${{$pago_equipo->total}} +
                                        {{$pago_equipo->iva}} IVA </td>
                                    @elseif($pago_equipo->iva!=''&&$pago_equipo->total==0)
                                    <td class="price">${{$pago_equipo->totals}}</td>
                                    @endif

                                    <td class="price">{{$pago_equipo->created_at->format('d/m/y')}}
                                    </td>
                                    <td>{{$pago_equipo->status}}</td>

                                </tr>
                                @endif
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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none; border-radius: 40px 10px;">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Movimientos Caja Sucursal @foreach ($Sucursal as
                            $sucursal)@if($sucursal->id==Auth::user()->id_sucursal)
                            {{$sucursal->nombre}} @endif @endforeach</h4>
                        <table class="table table-striped table-inverse table-responsive" id="tablemovimientos">
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
                                            <center><svg width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-clipboard-data" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    <path
                                                        d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                                </svg></center>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($MovimientoCaja as $MovimientoCaja)
                                @if($MovimientoCaja->id_sucursal==Auth::user()->id_sucursal)
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

                                    <td><textarea name="" id="" cols="auto" rows="4"
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
                                @endif
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
