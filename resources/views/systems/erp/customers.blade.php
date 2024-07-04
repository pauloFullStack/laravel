@extends('menu')

@section('content')
    <input type="hidden" id="idCustomerCreate">
    <div class="page-wrapper">
    
        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'customers', 'segmentType' => $segmentType])

        <div class="container-fluid">


            @php($dataRequest = [
                            'route' => '/api/systems/erp/customer-store',
                            'method' => 'post',
                            'message_success' => 'Cliente Adicionado com sucesso!',
                            'custom_method' => 'updateModal',
                            'route_delete' => '/api/systems/erp/customer-destroy/',
                            'update_fields' => 'name-.telephone-.email-.update_customer_id',
                            'colspan' => '6',
                            'message_notification' => 'Cliente deletado com sucesso!',
                            'check_database' => '/api/systems/erp/check-services-customer/',
                            'title_modal' => 'Deletar Cliente',
                            'add_column' => 'customer',
                            ])

            {{-- Form store --}}
            @include('layouts.forms.customers',['typeForm' => 'customers', 'dataRequest' => $dataRequest])


            @include('layouts.table')

        </div>
    </div>

            @php($dataRequest = [
                        'route' => '/api/systems/erp/customer-update',
                        'method' => 'put',
                        'message_success' => 'Cliente Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_customer_id',
                        'colspan' => '0',
                                ])

                                
            {{-- Modal update --}}
            @include('layouts.modals.customers', ['typeModal' => 'modal_customer_update', 'dataRequest' => $dataRequest])


@endsection

<script src="/js/script-systems-erp-customers.js"></script>
