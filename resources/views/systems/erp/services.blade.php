@extends('menu')

@section('content')
    <div class="page-wrapper">
        
        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'system_erp_start', 'segmentType' => $segmentType])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
                <!-- Column -->
                <div data-toggle="modal" data-target="#add-service" class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-purple text-center">
                            <h1><i class="fas fa-medkit"></i></h1>
                            <h6>Adicionar Serviço</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
            </div>

            {{-- Tabela --}}
            @include('layouts.table')
        </div>
    </div>

            
            @php($dataRequest = [
                        'route' => '/api/systems/erp/services-store',
                        'method' => 'post',
                        'message_success' => 'Serviço Adicionado com sucesso!',
                        'custom_method' => 'updateModal',
                        'route_delete' => '/api/systems/erp/services-destroy/',
                        'update_fields' => 'name_service-.valor_service-.note_service-.update_service_id',
                        'colspan' => '0',
                        'message_notification' => 'Serviço deletado com sucesso!',
                        'message_modal' => "Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?",
                        'title_modal' => 'Deletar Serviço',    
                    ])

            {{-- Modals store --}}
            @include('layouts.modals.service', ['typeModal' => 'modal_service_store', 'dataRequest' => $dataRequest])


            @php($dataRequest = [
                        'route' => '/api/systems/erp/services-update',
                        'method' => 'put',
                        'message_success' => 'Serviço Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_service_id',
                        'colspan' => '0',
                    ])

            {{-- Modal update --}}
            @include('layouts.modals.service', ['typeModal' => 'modal_service_update', 'dataRequest' => $dataRequest])

@endsection

