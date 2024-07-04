{{-- Form serviço do cliente --}}
@if ($typeForm == 'customer_service')
    <div class="row">
        <div class="col-lg-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-outline-dark btn-block" data-toggle="collapse"
                                data-target="#collapse-add-service" aria-expanded="true" aria-controls="collapseOne">
                                Adicionar
                                Serviço
                            </button>
                        </h5>
                    </div>
                    <div class="div-p10">
                        <div id="collapse-add-service" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordion">
                            <div class="card-body text-center">
                                <form class="form">

                                    @include('layouts.parameter', ['dataRequest' => $dataRequest])

                                    <input type="hidden" name="customers_id" id="id-customer"
                                        value="{{ $id }}">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="div-p10">
                                                <div id="services_id_div"
                                                    class="form-group text-left">
                                                    {!! Form::label('services_id', 'Serviço', ['class' => 'control-label']) !!}
                                                    <div class="input-group">
                                                        {!! Form::select(
                                                            'services_id',
                                                            [],
                                                            [],
                                                            [
                                                                'id' => 'services_id',
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
                                        <div class="col-lg-4">
                                            <div class="div-p10 text-left">
                                                <label for="valor_service" class="form-label text-right">Valor
                                                    do
                                                    Serviço</label>
                                                <input class="form-control mask-moeda" name="valor_service" placeholder="Digite o valor do serviço" maxlength="15"
                                                    id="valor_service" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="div-p10 text-left">
                                                <label for="service-delivery-date-customer-create" class="form-label">
                                                    Data Conclusão Serviço
                                                </label>
                                                <input class="form-control mask-date" name="service_delivery_date" placeholder="dd / mm / yyyy"
                                                    id="service-delivery-date-customer-create" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="div-p10 text-left">
                                                <label for="payment-date-customer-create" class="form-label">
                                                    <h6>Data do Pagamento</h6>
                                                </label>
                                                <input class="form-control mask-date" placeholder="dd / mm / yyyy" name="payment_date"
                                                    id="payment-date-customer-create" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="div-p10">
                                                <div class="form-group text-left">
                                                    {!! Form::label('select-status-service-customer-create', 'Status Serviços', ['class' => 'control-label']) !!}
                                                    <div class="input-group">
                                                        {!! Form::select(
                                                            'status_service_id',
                                                            [],
                                                            [],
                                                            [
                                                                'id' => 'select-status-service-customer-create',
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
                                        <div class="col-lg-4">
                                            <div class="div-p10">
                                                <div class="form-group text-left">
                                                    {!! Form::label('select-payment-status-customer-create', 'Status Pagamento', ['class' => 'control-label']) !!}
                                                    <div class="input-group">
                                                        {!! Form::select(
                                                            'payment_status_id',
                                                            [],
                                                            [],
                                                            [
                                                                'id' => 'select-payment-status-customer-create',
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
                                                                'id' => 'responsible_collaborator',
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
                                    <div class="div-p10 text-right">
                                        <div id="loading-request" class="text-center"><i
                                                class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
