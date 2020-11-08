
    <!-- Modal Bienvenida-->
    <div class="modal fade" id="modal_configurar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
                        @csrf

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
                        @csrf

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
                        @csrf

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

                                <div class="card text-left  border border-info">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="marca">Anticipo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                            <input class="form-control" name="pago"
                                                                id="pago" placeholder="Anticipo" pattern="[0-9]" type="number" min="0" value="0">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="presupuesto">Presupuesto</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" pattern="[0-9]" type="number" min="0" name="presupuesto"
                                                        id="presupuesto" placeholder="(Cuanto puede Costar)" value="0">
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <label for="inversion">Inversion</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" pattern="[0-9]" type="number" min="0" name="inversion"
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
                                        <select class="form-control"  name="status2" id="status2">
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
                                                                id="pago2" placeholder="Anticipo" disabled>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="presupuesto">Presupuesto</label>
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                    <input class="form-control" type="text" name="presupuesto2"
                                                        id="presupuesto2" placeholder="(Cuanto puede Costar)" disabled>
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
            <div class="modal-header bg-info text-white"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
                <circle cx="8" cy="4.5" r="1"/>
              </svg>
                <h5 class="modal-title text-white" width="2em" height="2em"> Notificacion</h5>
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
<div class="modal fade" id="modal_warning" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    style="border-radius:12%;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <svg width="2em" height="2em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                  </svg>
                <h5 class="modal-title text-white" width="2em" height="2em" >Atencion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    @if (session('warning'))
                    <div class="alert alert-warning m-3">
                        <?php echo '<html>'.session('warning').'</html>' ?>
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
                        @csrf
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
                    <form name="agregarpago" id="agregarpago" action="">
                        @csrf
                        @method('POST')
                        <div class="card text-left">
                            <div class="card-body">
                                <label for="total">Total a Pagar</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control" name="presupuesto4" id="presupuesto4" disabled>
                                </div> 
                                <label for="status">Anticipo</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control" name="adelanto4" id="adelanto4" disabled>
                                </div>
                                <label for="status">Pendiente</label>
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control" name="pendiente4" id="pendiente4" value=""
                                    disabled></div>
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
                            <input type="number" class="form-control" name="final4" id="final4"  pattern="[0-9]" type="number" min="0" required>
                        </div>

                    <input type="hidden" class="form-control" name="id_user4" id="id_user4" value="{{Auth::user()->id}}">
                        <input type="hidden" class="form-control" name="id_cliente4" id="id_cliente4" value="">
                        <input type="hidden" class="form-control" name="id_sucursal4" id="id_sucursal4" value="">
                        <input type="hidden" class="form-control" name="id_equipo4" id="id_equipo4" value="">
                        <input type="hidden" class="form-control" name="adelanto44" id="adelanto44" value="">
                        <input type="hidden" class="form-control" name="pago44" id="pago44" value="">

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
                                                <input class="form-check-input" type="checkbox" disabled id="setting_descuento_1"
                                                    name="setting_descuento_1" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    1</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" disabled id="setting_descuento_2"
                                                    name="setting_descuento_2" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    2</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" disabled id="setting_descuento_3"
                                                    name="setting_descuento_3" value="setting_descuento_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Descuento
                                                    3</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" disabled id="setting_descuento_4"
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
                            @csrf

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
                            <input class="form-control" pattern="[0-9]" type="number" min="0" name="monto6" id="monto6" placeholder="0.0" required>
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
@section('modal')
