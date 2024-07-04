{{-- Modal de atualização de postagem de estudos --}}
@if ($typeModal == 'editor')
    <div class="modal fade" id="update-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Atualizar Post</h3>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="form_update">
                    <div class="modal-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="div-perso">
                            <label for="title_update">Título</label>
                            <input type="text" name="title" id="title_update" class="form-control">
                        </div>

                        <div class="div-perso">
                            <label for="code_update">Código</label>
                            <input type="text" name="code" id="code_update" class="form-control">
                        </div>

                        <div class="div-perso">
                            <label for="position_update">Posição Post</label>
                            <input type="number" name="position" id="position_update" class="form-control">
                        </div>

                        <div class="div-perso">
                            <label for="description_update">Descrição</label>
                            <textarea type="text" name="description" id="description_update" rows="5" class="form-control"></textarea>
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

