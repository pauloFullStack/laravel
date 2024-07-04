{{-- Modal employee roles update --}}
@if ($typeModal == 'modal_update_employee_roles')
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
                            <label for="title_update">Numero Fução</label>
                            <input type="text" id="index_update" class="form-control" disabled>
                        </div>

                        <div class="div-perso">
                            <label for="code_update">Nome da Função</label>
                            <input type="text" name="name" id="name_update" class="form-control">
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

{{-- Modal update employee data basic --}}
@if ($typeModal == 'modal_update_employee_basic')
    <div class="modal fade" id="modal-update-collaborator-basic" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Dados Basicos</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form_update_employee_basic">
                    <div class="modal-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="name-service" class="form-label">Nome</label>
                                    <input class="form-control"
                                        name="name" id="name-collaborator_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="value-service" class="form-label">Telefone</label>
                                    <input class="form-control mask-phone"
                                         name="telephone"
                                        id="telephone_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Email</label>
                                    <input class="form-control" name="email" id="email_update" type="email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <div class="form-group">
                                        {!! Form::label('select-status-service-customer-create', 'Função do Colaborador', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'employee_roles_id',
                                                [],
                                                [],
                                                [
                                                    'id' => 'employee_roles_select_update',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'data-placeholder' => 'Selecione a Função',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/employee-roles',
                                                ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <div class="form-group text-left">
                                        {!! Form::label('permissions_select_update', 'Permissões', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'permissions',
                                                [],
                                                [],
                                                [
                                                    'id' => 'permissions_select_update',
                                                    'class' => 'select2 m-t-15',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'multiple' => 'multiple',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/permissions',
                                                ]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button form-type="form_update_employee_basic" generates-form-data="employees_roles"
                        type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

{{-- Modal update employee data address --}}
@if ($typeModal == 'modal_update_employee_address')
    <div class="modal fade" id="modal-update-collaborator-address" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Endereço</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form_update_employee_address">
                    <div class="modal-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="name-service" class="form-label">Rua</label>
                                    <input class="form-control" name="street" id="street_update"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <label for="value-service" class="form-label">Bairro</label>
                                    <input class="form-control" name="district" id="district_update"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Numero</label>
                                    <input class="form-control" name="number" id="number_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Cidade</label>
                                    <input class="form-control" name="city" id="city_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Estado</label>
                                    <input class="form-control" name="state" id="state_update" type="text">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" form-type="form_update_employee_address"
                            generates-form-data="employees_roles"
                            class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif

{{-- Modal update employee data bank --}}
@if ($typeModal == 'modal_update_employee_bank')
    <div class="modal fade" id="modal-update-collaborator-bank" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Dados Bancarios</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form_update_employee_bank">
                    <div class="modal-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="name-service" class="form-label">CPF</label>
                                    <input class="form-control mask-cpf" name="cpf" id="cpf_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="value-service" class="form-label">Conta</label>
                                    <input class="form-control" name="bill" id="bill_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Agencia</label>
                                    <input class="form-control" name="agency" id="agency_update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Operação</label>
                                    <input class="form-control" name="operation" id="operation_update"
                                        type="text">
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button form-type="form_update_employee_bank" generates-form-data="employees_roles"
                        type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
