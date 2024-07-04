{{-- Modal service store --}}
@if ($typeModal == 'modal_service_store')
    <div class="modal fade" id="add-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Adicionar Serviço</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form">
                    <div class="modal-body">


                        @include('layouts.parameter', ['dataRequest' => $dataRequest])


                        <div class="div-p10">
                            <input class="form-control"
                                name="name_service" placeholder="Nome" id="name_service" type="text">
                        </div>

                        <div class="div-p10">
                            <input class="form-control mask-moeda"
                                name="valor_service"  placeholder="Valor" maxlength="15" id="valor_service" type="text">
                        </div>

                        <div class="div-p10">
                            <textarea class="form-control" name="note_service" placeholder="Descrição" id="note_service" rows="3"></textarea>
                        </div>

                    </div>
                    <div id="loading-request" class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif


{{-- Modal service update --}}
@if ($typeModal == 'modal_service_update')
    <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Atualizar Serviço</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form_update">
                    <div class="modal-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="div-p10">
                            <label for="name-service" class="form-label">Nome</label>
                            <input class="form-control"
                                name="name_service" id="name_service_update" type="text">
                        </div>

                        <div class="div-p10">
                            <label for="value-service" class="form-label">Valor</label>
                            <input class="form-control mask-moeda" maxlength="15"
                             name="valor_service" id="valor_service_update" type="text">
                        </div>

                        <div class="div-p10">
                            <label for="note-service" class="form-label">Observação</label>
                            <textarea class="form-control" name="note_service" id="note_service_update" rows="3"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

