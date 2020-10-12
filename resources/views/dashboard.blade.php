<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <link href="../dist/css/smart_cart.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="../dist/js/jquery.smartCart.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link" id="articulos-tab" data-toggle="tab" href="#articulos" role="tab"
                aria-controls="articulos" aria-selected="true">Articulos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab" aria-controls="marcas"
                aria-selected="false">Marcas
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="modelos-tab" data-toggle="tab" href="#modelos" role="tab" aria-controls="modelos"
                aria-selected="false">Modelos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="servicios-tab" data-toggle="tab" href="#servicios" role="tab"
                aria-controls="servicios" aria-selected="false">Servicios
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas"
                aria-selected="false">Ventas
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="usuarios-tab" data-toggle="tab"
                href="#usuarios" role="tab" aria-controls="usuarios" aria-selected="false">Usuarios
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="sucursal-tab" data-toggle="tab"
                href="#sucursal" role="tab" aria-controls="sucursal" aria-selected="false">Sucursal
            </a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <button type="button" data-toggle="modal" data-target="#modalvender" data-backdrop="static"
            data-keyboard="false" class="btn btn-success btn-lg btn-block"><svg width="1em" height="1em"
                viewBox="0 0 16 16" class="bi bi-bag-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5H2z" />
                <path fill-rule="evenodd"
                    d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
            </svg>Punto de Venta</button>

        <div class="tab-pane fade show active" id="articulos" role="tabpanel" aria-labelledby="articulos-tab">
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
                                            <th>Descuento(individual)</th>
                                            <th>Precio(MXN)</th>
                                            <th>Existencia</th>
                                            <th>Opciones</th>
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
                                                    data-precio="{{$articulo->precio}}"
                                                    data-descuento="{{$articulo->descuento}}"
                                                    data-descripcion="{{$articulo->descripcion}}"
                                                    data-existencia="{{$articulo->existencia}}"
                                                    data-calificacion="{{$articulo->calificacion}}">
                                                    <i class="fas fa-edit"></i></a>
                                                <a href="/deletearticulo/{{$articulo->id}}"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
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
        <div class="tab-pane fade" id="marcas" role="tabpanel" aria-labelledby="marcas-tab">

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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Marca as $marca)
                                        <tr>
                                            <td>{{$marca->id}}</td>
                                            <td>{{$marca->nombre}}</td>
                                            <td>{{$marca->descripcion}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditar"
                                                    data-id="{{$marca->id}}" data-nombre="{{$marca->nombre}}"
                                                    data-descripcion="{{$marca->descripcion}}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="/deletemarca/{{$marca->id}}"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
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
                                            <th>Status</th>
                                            <th>Fecha Agregado</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Usuario as $usuario)
                                        <tr>

                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->rol}}</td>
                                            <td>{{$usuario->status}}</td>
                                            <td>{{$usuario->created_at}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditar"
                                                    data-id="{{$usuario->id}}" data-name="{{$usuario->name}}"
                                                    data-email="{{$usuario->email}}" data-rol="{{$usuario->rol}}"
                                                    data-estatus="{{$usuario->status}}"><i class="fas fa-edit"></i></a>
                                                <a href="/deleteusuario/{{$usuario->id}}"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
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

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
                                                    <i class="fas fa-edit"></i></a>
                                                <a href="/deleteservicio/{{$servicio->id}}"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
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
                                                    <i class="fas fa-edit"></i></a>
                                                <a href="/deletesucursal/{{$sucursal->id}}"><i
                                                        class="fas fa-trash-alt text-danger"></i></a>
                                            </td>
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
</x-app-layout>

<!-- Modal Agregar Articulo -->
<div class="modal fade" id="modal_agregararticulo" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Articulo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/store">
                        <div class="row">
                            <div class="container">
                                <div class="col-6-md">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" rows="10" cols="50" name="descripcion"
                                        id="descripcion" required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="precio">Precio Neto</label>

                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">$</span>
                                        <input type="text" class="form-control" name="precio" id="precio" value="">
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <label for="existencia">Existencia</label>
                                    <input type="text" class="form-control" name="existencia" id="existencia" value="">
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
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="imagena" name="imagena">
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
                                            <input type="file" class="custom-file-input" id="imagenb" name="imagenb">
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
                                            <input type="file" class="custom-file-input" id="imagenc" name="imagenc">
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
                                            <input type="file" class="custom-file-input" id="imagend" name="imagend">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
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
            <div class="modal-header">
                <h5 class="modal-title">Editar Articulo</h5>
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
            <div class="modal-header">
                <h5 class="modal-title">Agregar Marca</h5>
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
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>
            </div>
            <div class="modal-body">
                <form name="modaledit" id="modaledit" action="">
                    @method('POST')
                    @csrf
                    <div class="col-md-4">
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
                    <div class="col-md-4">
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

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="estatus1" id="estatus1">
                                <option value="1">Active</option>
                                <option value="0" selected>No Active</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Rol</label>
                            <select class="form-control" name="rol1" id="rol1">
                                <option value="admin">Admin</option>
                                <option value="tecnico" selected>Tecnico</option>
                                <option value="cliente">Cliente</option>
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
<!-- Modal  Agregar usuario-->
<div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Usuario</h5>
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

                        <input type="hidden" name="estatus" id="estatus" value="1">
                        <input type="hidden" name="panic" id="panic" value="no">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Rol</label>
                                <select class="form-control" name="rol">
                                    <option value="admin">Admin</option>
                                    <option value="tecnico">Tecnico</option>
                                    <option value="cliente">Cliente</option>
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
            <div class="modal-header">
                <h5 class="modal-title">Editar Servicio</h5>
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
            <div class="modal-header">
                <h5 class="modal-title">Agregar Servicio</h5>
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
<!-- Modal Vender-->
<div class="modal fade" id="modalvender" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-white">Punto de Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <div class="container-fluid">
                    <form action="/agregarservicio">
                        <div class="row">
                            <div class="container">
                                <div class="col-4-md">
                                    <label for="nombre">Nombre Cliente</label>
                                    <select class="form-control" id="nombre" name="nombre" required>
                                        @foreach ($Usuario as $user)
                                        @if($user->rol=='cliente')
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-4-md">
                                    <label for="nombre">Nombre Tecnico</label>
                                    <select class="form-control" id="nombre" name="nombre" required>
                                        @foreach ($Usuario as $user)
                                        @if($user->rol=="tecnico")
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4-md">
                                    <label for="descripcion">Servicio</label>
                                    <select class="form-control" id="servicio" name="servicio" required>
                                        @foreach ($Servicio as $servicio)
                                        <option value="{{$servicio->id}}">[{{$servicio->nombre}}]
                                            [Tiempo:{{$servicio->tiempo}}] [${{$servicio->precio}}]</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4-md">
                                    <label for="descripcion">Sucursal</label>
                                    <select class="form-control" id="servicio" name="servicio" required>
                                        @foreach ($Sucursal as $sucursal)
                                        <option value="{{$sucursal->id}}">[{{$sucursal->nombre}}]</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Tiempo Recibido</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_recibido" id="fecha_recibido" value="<?php echo date('Y-m-d'); ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-6-md">
                                    <div class="form-group">
                                        <label for="marca">Tiempo Entrega</label>
                                        <input class="form-control" data-provide="datepicker" type="date"
                                            name="fecha_entrega" id="fecha_entrega">
                                    </div>
                                </div>
                                <input type="hidden" name="status" id="status" value="Pendiente">
                                <input type="hidden" name="pago" id="pago" value="0">

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

<!-- Modal Agregar Sucursal -->
<div class="modal fade" id="modalagregarsucursal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar Sucursal</h5>
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
            <div class="modal-header">
                <h5 class="modal-title">Editar Sucursal</h5>
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
<!-- Scripts-->
<script>
    ////////////////modal editar usuario
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
        var id = $(e.relatedTarget).data().creditos;
        $(e.currentTarget).find('#creditos1').val(id);
        $("#creditos1").attr("placeholder", id);
    });
</script>

<!-- Scripts sucursal-->
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
<!-- Scripts Editar-->
<script>
    ////////////////modal editar Servicio
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

<script>
    ////////////////modal editar articulo
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
<script>
    $(document).ready(function() {
        $('#smartcart').smartCart();
    });
</script>
<script>
    $(document).ready(function(){

        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if(activeTab){
            $('#myTab a[href="' + activeTab + '"]').tab('show');
        }
    });
    </script>
