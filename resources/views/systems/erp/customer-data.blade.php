@extends('menu')

@section('content')
    <input type="hidden" id="idCustomerCreate">
    <div class="page-wrapper">   

        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'customers_service'])

        <div class="container-fluid">

            @php($dataRequest = [
                        'route' => '/api/systems/erp/customer-service-store',
                        'method' => 'post',
                        'message_success' => 'Serviço Adicionado com sucesso!',
                        'custom_method' => 'updateCustomerServiceDom',
                        'route_delete' => '/api/systems/erp/customer-service-destroy/',
                        'colspan' => '7',
                        'message_notification' => 'Serviço deletado com sucesso!',
                        'message_modal' => "Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?",
                        'title_modal' => 'Deletar Serviço',
                            ])

            {{-- Form store --}}
            @include('layouts.forms.customer-service',['typeForm' => 'customer_service', 'dataRequest' => $dataRequest])                         


            <div class="row">
                <div class="col-lg-12">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-info btn-block" data-toggle="collapse"
                                        data-target="#collapse-filter" aria-expanded="true" aria-controls="collapseOne">
                                        Filtro <i class=" fas fa-filter"></i>
                                    </button>
                                </h5>
                            </div>
                            <div class="div-p10">
                                <div id="collapse-filter" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="div-p10">
                                                    <div class="form-group text-left">
                                                        {!! Form::label('filter_payment_status', 'Status Pagamento', ['class' => 'control-label']) !!}
                                                        <div class="input-group">
                                                            {!! Form::select(
                                                                'filter_payment_status',
                                                                [],
                                                                [],
                                                                [
                                                                    'id' => 'filter_payment_status',
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
                                            <div class="col-lg-4">
                                                <div class="div-p10">
                                                    <div class="form-group text-left">
                                                        {!! Form::label('filter_service_status', 'Status Serviços', ['class' => 'control-label']) !!}
                                                        <div class="input-group">
                                                            {!! Form::select(
                                                                'filter_service_status',
                                                                [],
                                                                [],
                                                                [
                                                                    'id' => 'filter_service_status',
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
                                                        {!! Form::label('filter_service_type', 'Tipo de Serviço', ['class' => 'control-label']) !!}
                                                        <div class="input-group">
                                                            {!! Form::select(
                                                                'filter_service_type',
                                                                [],
                                                                [],
                                                                [
                                                                    'id' => 'filter_service_type',
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
                                        </div>


                                        <div class="div-p10 text-right">
                                            <button class="clear-filter btn btn-outline-dark ">Limpar
                                                Filtro</button>
                                            <button filter-all="all_data" filter="ok"
                                                class="filter btn btn-outline-dark ">Todos</button>
                                            <button filter="ok" class="filter btn btn-info ">Filtrar</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layouts.table')

        </div>
    </div>

    @php($dataRequest = [
                'route' => '/api/systems/erp/customer-service-update',
                'method' => 'put',
                'message_success' => 'Serviço Atualizado com sucesso!',
                'custom_method' => 'postUpdateCustomerServiceDom',
                'id' => 'id-service-customer-update',
                'colspan' => '0',
                    ])

    {{-- Modal update --}}
    @include('layouts.modals.customer-service', ['typeModal' => 'modal_customer_service_update', 'dataRequest' => $dataRequest])

@endsection

