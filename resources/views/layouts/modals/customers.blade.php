{{-- Modal customer update --}}
@if ($typeModal == 'modal_customer_update')
    <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Atualizar Cliente</h3>
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
                                name="name" id="name_update" type="text">
                        </div>

                        <div class="div-p10">
                            <label for="value-service" class="form-label mask-phone">Telefone</label>
                            <input class="form-control"
                                name="telephone" id="telephone_update" type="text">
                        </div>

                        <div class="div-p10">
                            <label for="note-service" class="form-label">E-mail</label>
                            <input class="form-control"
                                name="email" id="email_update" type="email">
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

