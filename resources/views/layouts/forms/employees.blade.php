{{-- Form clientes --}}
@if ($typeForm == 'employees')
    <div id="accordion">

        {{-- area add collaborator --}}
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-outline-dark btn-block" data-toggle="collapse"
                        data-target="#add-customer-accordion" aria-expanded="true" aria-controls="#add-customer-accordion">
                        Adicionar Novo Colaborador
                    </button>
                </h5>
            </div>

            <div class="div-p10">
                <div id="add-customer-accordion" class="collapse" aria-labelledby="headingOne"
                    data-parent="#add-customer-accordion">
                    <div class="card-body">
                        <form class="form">

                            @include('layouts.parameter', ['dataRequest' => $dataRequest])

                            <div class="div-p10">
                                <h5>Informações Basicas</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Nome" id="name" name="name"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Email" id="email"
                                            name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="div-p10">
                                        <input class="form-control mask-phone" placeholder="Telefone" id="telephone" name="telephone" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="div-p10">
                                        <div class="form-group text-left">
                                            <div class="input-group">
                                                {!! Form::label('employee_roles_id', 'Selecione a função', ['class' => 'control-label']) !!}
                                                {!! Form::select(
                                                    'employee_roles_id',
                                                    [],
                                                    [],
                                                    [
                                                        'id' => 'employee_roles_id',
                                                        'data-method' => 'GET',
                                                        'data-type' => 'select2',
                                                        'data-placeholder' => 'Selecione a Função Colaborador',
                                                        'style' => 'width: 100%;',
                                                        'data-ajax--url' => '/api/erp/select/employee-roles',
                                                    ],
                                                ) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="div-p10">
                                        <div id="permissions_div" class="form-group text-left">
                                            <div class="input-group">
                                                {!! Form::label('permissions', 'Área de acesso permissões', ['class' => 'control-label']) !!}
                                                {!! Form::select(
                                                    'permissions',
                                                    [],
                                                    [],
                                                    [
                                                        'id' => 'permissions',
                                                        'class' => 'select2 m-t-15',
                                                        'data-method' => 'GET',
                                                        'data-type' => 'select2',
                                                        'multiple'=> 'multiple',
                                                        'style' => 'width: 100%;',
                                                        'data-ajax--url' => '/api/erp/select/permissions',
                                                    ],
                                                ) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="div-p10">
                                <h5>Endereço</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Rua" id="street" name="street"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Bairro" id="district"
                                            name="district" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Numero" id="number" name="number" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Cidade" id="city" name="city" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Estado" id="state" name="state" type="text">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="div-p10">
                                <h5>Dados Bancários</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="div-p10">
                                        <input class="form-control mask-cpf" placeholder="CPF" id="cpf" name="cpf" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Conta" id="bill"
                                            name="bill" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Agencia" id="agency" name="agency"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Operação" id="operation" name="operation"
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div id="loading-request" class="text-center"><i
                                    class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            </div>
                            <div class="div-p10 text-right">
                                <button type="submit" class="btn btn-outline-primary">Salvar</button>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- area add and edit function --}}
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-outline-dark btn-block" data-toggle="collapse"
                        data-target="#function-roles" aria-expanded="true" aria-controls="#function-roles">
                        Funções Colaboradores
                    </button>
                </h5>
            </div>

            <div class="div-p10">
                <div id="function-roles" class="collapse" aria-labelledby="headingOne"
                    data-parent="#function-roles">
                    <div class="card-body">
                        <form class="form_employee_roles">

                            @php(
                                $dataRequest = [
                                    'route' => '/api/erp/select/employee-roles-store',
                                    'method' => 'post',
                                    'message_success' => 'Função Adicionado com sucesso!',
                                    'custom_method' => 'updateModal',
                                    'route_delete' => '/api/erp/select/employee-roles-destroy/',
                                    'update_fields' => 'index-.name-.update_employee_roles_id',
                                    'colspan' => '4',
                                    'message_notification' => 'Função deletada com sucesso!',
                                    'message_modal' => "Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?",
                                    'title_modal' => 'Deletar Função',
                                ])

                            @include('layouts.parameter', ['dataRequest' => $dataRequest])

                            <div class="div-p10">
                                <h5>Adicionar Nova Função</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Nome Função"
                                            id="name_function_roles" name="name_function_roles" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <div class="text-left">
                                            <button form-type="form_employee_roles"
                                                generates-form-data="employees_roles" onclick="genericFetch(event)"
                                                type="button" class="btn btn-outline-primary">Salvar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="div-p10">
                                <h5>Tabela de Funções</h5>
                            </div>

                            @php($th = [
                                    'employees_roles' => [
                                        'id' => 'Numero da Função',
                                        'nome' => 'Nome Função',
                                        'editar' => 'Editar',
                                        'deletar' => 'Deletar',
                                    ],
                                ])

                            {{-- Tabela function roles --}}
                            @include('layouts.table', [
                                'typeOfRequest' => 'employee_roles',
                                'data' => $dataEmployeeRoles,
                            ])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php($th = [
        'employees' => [
            'nome' => 'Nome',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'function' => 'Função',
            'endereco' => 'Endereço',
            'dados_bancarios' => 'Dados Bancarios',
            'editar' => 'Editar',
            'deletar' => 'Deletar',
        ],
    ])

    {{-- Tabela employees --}} 
    @include('layouts.table', ['typeOfRequest' => 'employee', 'th' => $th, 'data' => $data, 'tbody' => 'tbody-employee',])
@endif
