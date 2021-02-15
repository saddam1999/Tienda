<div class="tab-pane fade show " id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Productos</h4>
                        <table class="table table-striped table-inverse table-responsive" id="tablearticulos">
                            <thead class="thead-inverse">
                                <tr>
                                    <th><button type="button" data-toggle="modal" data-target="#modal_agregararticulo"
                                            data-backdrop="static" data-keyboard="false"
                                            class="btn btn-success btn-lg btn-block">
                                            <i class="fas fa-cart-plus"></i>
                                        </button></th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Marca</th>
                                    <th>Categoria</th>
                                    <th>Talla</th>
                                    <th>ID Local</th>
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
                                    <td>
                                        <textarea class="form-control" name="" id="" cols="100%"
                                            rows="100%">{{$articulo->descripcion}}</textarea>
                                    </td>
                                    @foreach($Marca as $marca)
                                    @if($articulo->id_marca ==$marca->id)
                                    <td>{{$marca->nombre}}</td>
                                    @endif
                                    @endforeach
                                    <td>{{$articulo->categoria}}</td>
                                    <td>{{$articulo->talla}}</td>
                                    <td>{{$articulo->IDlocal}}</td>
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
                                            data-categoria="{{$articulo->categoria}}" data-talla="{{$articulo->talla}}"
                                            data-local="{{$articulo->IDlocal}}" data-precio="{{$articulo->precio}}"
                                            data-descuento="{{$articulo->descuento}}"
                                            data-descripcion="{{$articulo->descripcion}}"
                                            data-existencia="{{$articulo->existencia}}"
                                            data-calificacion="{{$articulo->calificacion}}">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-pencil-square" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg></a>
                                        <a href="/deletearticulo/{{$articulo->id}}"><i class="fa fa-trash"></i></a>
                                    </td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
