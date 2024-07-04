@extends('menu')

@section('content')
    <div class="page-wrapper">
        
        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'system_erp_start', 'segmentType' => $segmentType])
        
        <div class="container-fluid">
            
            @php($dataRequest = [
                        'route' => '/api/systems/erp/employee-store',
                        'method' => 'post',
                        'message_success' => 'Colaborador Adicionado com sucesso, enviado link para o email de cadastro, para criar a senha de acesso!',
                        'custom_method' => 'updateModal',
                        'route_delete' => '/api/systems/erp/employee-destroy/',
                        'update_fields' => 'name-collaborator-.email-.telephone-.employee_roles_select-.permissions_select-.update_employee_id.modal-update-collaborator-basic',
                        'colspan' => '7',
                        'message_notification' => 'Colaborador deletado com sucesso!',
                        'check_database' => '/api/systems/erp/check-services-responsible-collaborator/',
                        'title_modal' => 'Deletar Colaborador',
                        'add_column' => 'employee',
                        'tbody' => 'tbody-employee',
                                ])

            {{-- Form store --}}
            @include('layouts.forms.employees',['typeForm' => 'employees', 'dataRequest' => $dataRequest])
                        
        </div>
    </div>

            
            @php($dataRequest = [
                        'route' => '/api/erp/select/employee-roles-update',
                        'method' => 'put',
                        'message_success' => 'Função Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_employee_roles_id',
                        'colspan' => '0',
                    ])

            {{-- Modals update employee roles --}}
            @include('layouts.modals.employees', ['typeModal' => 'modal_update_employee_roles', 'dataRequest' => $dataRequest])

                            {{-- ************************************************ --}}

            @php($dataRequest = [
                        'route' => '/api/systems/erp/employee-update-basic',
                        'method' => 'put',
                        'message_success' => 'Colaborador Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_employee_id',
                        'colspan' => '0',
                    ])

            {{-- Modal update data basic employee --}}
            @include('layouts.modals.employees', ['typeModal' => 'modal_update_employee_basic', 'dataRequest' => $dataRequest])

                           {{-- ************************************************ --}} 

            @php($dataRequest = [
                        'route' => '/api/systems/erp/employee-update-address',
                        'method' => 'put',
                        'message_success' => 'Endereço Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_employee_address_id',
                        'colspan' => '0',
                    ])

            {{-- Modal update data address employee --}}
            @include('layouts.modals.employees', ['typeModal' => 'modal_update_employee_address', 'dataRequest' => $dataRequest])

                         {{-- ************************************************ --}}   

            @php($dataRequest = [
                        'route' => '/api/systems/erp/employee-update-bank',
                        'method' => 'put',
                        'message_success' => 'Conta Atualizado com sucesso!',
                        'custom_method' => 'updateDom',
                        'id' => 'update_employee_bank_id',
                        'colspan' => '0',
                    ])

            {{-- Modal update data bank employee --}}
            @include('layouts.modals.employees', ['typeModal' => 'modal_update_employee_bank', 'dataRequest' => $dataRequest])


            
@endsection

