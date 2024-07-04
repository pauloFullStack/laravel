{{-- Modal customer service update --}}
@if ($typeModal == 'modal_customer_service_update')
    <div class="modal fade" id="update-customer-service" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="div-p10">
                                    <label for="name-service" class="form-label">Criação</label>
                                    <input class="form-control" disabled="true" id="create-customer-update"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <label for="value-service" class="form-label">Telefone</label>
                                    <input class="form-control" disabled="true" id="telephone-customer-update"
                                        type="text">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <div class="form-group text-left">
                                        {!! Form::label('select-service-name', 'Serviço', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'serviceNameId',
                                                [],
                                                [],
                                                [
                                                    'id' => 'select-service-name',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'data-placeholder' => 'Nenhum serviço selecionado',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/services',
                                                ],
                                            ) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">Valor do Serviço</label>
                                    <input class="form-control mask-moeda"  maxlength="15"
                                     name="valueService" id="valueService_update"
                                     type="text">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">
                                        <h6> Data Conclusão Serviço</h6>
                                    </label>
                                    <input class="form-control mask-date" id="service-delivery-date-customer-update"
                                        name="serviceDeliveryDate" placeholder="dd / mm / yyyy" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <label for="note-service" class="form-label">
                                        <h6>Data do Pagamento</h6>
                                    </label>
                                    <input class="form-control mask-date" name="paymentDateCustomer" placeholder="dd / mm / yyyy"
                                        id="payment-date-customer-update" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <div class="form-group text-left">
                                        {!! Form::label('select-status-service-customer-update', 'Status do Serviço', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'statusServiceCustomer',
                                                [],
                                                [],
                                                [
                                                    'id' => 'select-status-service-customer-update',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'data-placeholder' => 'Nenhum status selecionado',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/status-service',
                                                ],
                                            ) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="div-p10">
                                    <div class="form-group text-left">
                                        {!! Form::label('select-payment-status-customer-update', 'Status Pagamento', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'paymentstatusCustomer',
                                                [],
                                                [],
                                                [
                                                    'id' => 'select-payment-status-customer-update',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'data-placeholder' => 'Nenhum status selecionado',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/status-payment',
                                                ],
                                            ) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <div class="form-group text-left">
                                        {!! Form::label('select-payment-status-customer-create', 'Colaborador Responsável', ['class' => 'control-label']) !!}
                                        <div class="input-group">
                                            {!! Form::select(
                                                'responsible_collaborator',
                                                [],
                                                [],
                                                [
                                                    'id' => 'responsible_collaborator_update',
                                                    'data-method' => 'GET',
                                                    'data-type' => 'select2',
                                                    'data-placeholder' => 'Selecione o responsável',
                                                    'style' => 'width: 100%;',
                                                    'data-ajax--url' => '/api/erp/select/users',
                                                ],
                                            ) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
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
