<div class="tab-pane fade show " id="sucursal" role="tabpanel" aria-labelledby="sucursal-tab">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none;border-radius: 40px 10px;">
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
                                    <th><button type="button" data-toggle="modal" data-target="#modalagregarsucursal"
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
                                            data-email="{{$sucursal->email}}" data-direccion="{{$sucursal->direccion}}"
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
                                        <a href="/deletesucursal/{{$sucursal->id}}"><svg width="1em" height="1em"
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
                <div class="card text-left mt-2">
                    <div class="card-body" style=" border: none;
                            border-radius: 40px 10px;">
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
                                    <th><button type="button" data-toggle="modal" data-target="#modalagregarcaja"
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
                                            data-id_corte="{{$caja->id_corte}}" data-status="{{$caja->status}}" <svg
                                            width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
