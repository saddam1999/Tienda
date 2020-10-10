<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="articulos-tab" data-toggle="tab" href="#articulos" role="tab"
                aria-controls="articulos" aria-selected="true">Articulos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="marcas-tab" data-toggle="tab" href="#marcas" role="tab" aria-controls="marcas"
                aria-selected="false">Marcas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="servicios-tab" data-toggle="tab" href="#servicios" role="tab"
                aria-controls="servicios" aria-selected="false">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="equipos-tab" data-toggle="tab" href="#equipos" role="tab" aria-controls="equipos"
                aria-selected="false">Equipos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ventas-tab" data-toggle="tab" href="#ventas" role="tab" aria-controls="ventas"
                aria-selected="false">Ventas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="usuarios-tab" data-toggle="tab" href="#usuarios" role="tab" aria-controls="usuarios"
                aria-selected="false">Usuarios</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="articulos" role="tabpanel" aria-labelledby="articulos-tab">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="card text-left">
                            <center><img style="border-radius: 10%; width:20%; heigth:20%;" class="card-img-top"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT1vs60mbPD8PHWNVhG5IPFx9vhbgvj4816Ww&usqp=CAU"
                                    alt="tienda"></center>
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
                                            <th>Calificacion</th>
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
                                            @if($articulo->id_marca == $marca->id)
                                            <td>{{$marca->nombre}}</td>
                                            @else
                                            <td>N/A</td>
                                            @endif
                                            @endforeach
                                            @if($articulo->descuento==0)
                                            <td> 0% </td>
                                            @else
                                            <td class="text-warning">{{$articulo->descuento}}%</td>
                                            @endif
                                            <td>${{$articulo->precio}}</td>
                                            @if($articulo->existencia>0)
                                            <td>{{$articulo->existencia}}</td>
                                            @else
                                            <td class="text-danger">{{$articulo->existencia}}</td>
                                            @endif
                                            <td>{{$articulo->calificacion}}</td>
                                            <td><a href="" data-toggle="modal" data-target="#modaleditar"
                                                    data-id={{$articulo->id}} data-nombre={{$articulo->nombre}}
                                                    data-id_marca={{$articulo->id_marca}}
                                                    data-precio={{$articulo->precio}}
                                                    data-descuento={{$articulo->descuento}}
                                                    data-descripcion={{$articulo->descripcion}}
                                                    data-existencia={{$articulo->existencia}}
                                                    data-calificacion={{$articulo->calificacion}}>
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
                            <center><img style="border-radius: 10%; width:20%; heigth:20%;" class="card-img-top"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQpv-dlwvpHhmFS_g7sblKdHxnh5ePOFub-fg&usqp=CAU"
                                    alt="tienda"></center>
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
                                                    data-id={{$marca->id}} data-nombre={{$marca->nombre}}
                                                    data-descripcion={{$marca->descripcion}}><i
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
                            <center><img style="border-radius: 10%; width:20%; heigth:20%;" class="card-img-top"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT1vs60mbPD8PHWNVhG5IPFx9vhbgvj4816Ww&usqp=CAU"
                                    alt="tienda"></center>
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
                                                    data-id={{$usuario->id}} data-name={{$usuario->name}}
                                                    data-email={{$usuario->email}} data-rol={{$usuario->rol}}
                                                    data-estatus={{$usuario->status}}><i class="fas fa-edit"></i></a>
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
                                <option value="customer">Cliente</option>
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
                                    <option value="customer" selected>Customer</option>
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
<script>
    var elInput = document.querySelector('#input');
    if (elInput) {
        var etiqueta = document.querySelector('#etiqueta');
        if (etiqueta) {
            etiqueta.innerHTML = elInput.value + "%";
            elInput.addEventListener('input', function() {
                etiqueta.innerHTML = elInput.value + "%";
            }, false);
        }
    }
</script>
