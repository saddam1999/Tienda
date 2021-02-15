<div class="tab-pane fade show " id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none; border-radius: 40px 10px;">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Categorias</h4>
                        <table class="table table-striped table-inverse table-responsive" id="tablecategoria">
                            <thead class="thead-inverse">
                                <tr>
                                    <th><button type="button" data-toggle="modal" data-target="#modal_categoria"
                                            data-backdrop="static" data-keyboard="false"
                                            class="btn btn-success btn-lg btn-block">
                                            <i class="fas fa-plus-square"></i>
                                        </button></th>
                                        <th>ID</th>

                                    <th>Nombre</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Categoria as $categoria)
                                <tr>
                                    <td>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-categoria{{$categoria->id}}"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Opciones </button>
                                                </h2>
                                                <div id="flush-categoria{{$categoria->id}}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <a href="" data-toggle="modal" data-target="#modal_editarcategoria"
                                                        data-id="{{$categoria->id}}"
                                                        data-nombre_categoria="{{$categoria->nombre_categoria}}">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-pencil-square" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                        </svg></a>
                                                    <a href="/deletecategoria/{{$categoria->id}}"><svg width="1em"
                                                            height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg></a> </div>
                                            </div>

                                        </div>

                                    </td>
                                    <td>{{$categoria->id}}</td>
                                    <td>{{$categoria->nombre_categoria}}</td>

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
