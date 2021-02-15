<div class="tab-pane fade show " id="categoria" role="tabpanel" aria-labelledby="categoria-tab">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"
                style=" border: none; border-radius: 40px 10px;">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title">Marcas</h4>
                        <table class="table table-striped table-inverse table-responsive" id="tablemarcas">
                            <thead class="thead-inverse">
                                <tr>

                                    <th><button type="button" data-toggle="modal" data-target="#modal_agregarmarca"
                                            data-backdrop="static" data-keyboard="false"
                                            class="btn btn-success btn-lg btn-block"><i class="fas fa-plus-square"></i>
                                        </button></th>

                                    <th>Marca</th>
                                    <th>Descripcion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Marca as $marca)
                                <tr>
                                    <td>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-marca{{$marca->id}}"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">Opciones
                                                    </button>
                                                </h2>
                                                <div id="flush-marca{{$marca->id}}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <a href="/deletemarca/{{$marca->id}}"><svg width="1em" height="1em"
                                                            viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                        </svg></a> </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td>{{$marca->nombre}}</td>
                                    <td>{{$marca->descripcion}}</td>

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
