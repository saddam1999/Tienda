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
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Equipos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                aria-selected="false">Ventas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($Articulo as $articulo)
                                            <td>{{$articulo->nombre}}</td>
                                            <td>{{$articulo->descripcion}}</td>
                                            <td>{{$articulo->marca}}</td>
                                            <td>{{$articulo->descuento}}</td>
                                            <td>{{$articulo->precio}}</td>
                                            <td>{{$articulo->existencia}}</td>
                                            <td>{{$articulo->calificacion}}</td>
                                            @endforeach
                                        </tr>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($Marca as $marca)
                                        <tr>
                                            <td>{{$marca->id}}</td>
                                            <td>{{$marca->nombre}}</td>
                                            <td>{{$marca->descripcion}}</td>
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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</x-app-layout>

<!-- Modal Articulo -->
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
                                    <textarea name="textarea" class="form-control" rows="10" cols="50"
                                        name="descripcion" id="descripcion" required></textarea>

                                </div>
                                <div class="col-6-md">
                                    <label for="precio">Precio</label>
                                    <input type="text" class="form-control" name="precio" id="precio" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="existencia">Existencia</label>
                                    <input type="text" class="form-control" name="existencia" id="existencia" value="">
                                </div>
                                <div class="col-6-md">
                                    <label for="descuento">Descuento</label>
                                    <div class="inputDiv">
                                        <div id="etiqueta"></div>
                                        <input id="input" type="range" value="0" min="0" max="100" autocomplete="off">
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
                                        <select class="form-control" id="marca">
                                            <option value="NA" required>Seleciona una Marca</option>
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

<!-- Modal -->
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
