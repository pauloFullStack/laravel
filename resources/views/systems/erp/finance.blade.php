@extends('menu')

@section('content')

    <input type="hidden" id="idCustomerCreate">
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <ol class="breadcrumb">
                        <li route="systems/erp" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($segmentType)
                        <h4 class="page-title">{{ $segmentType }}</h4>
                    @endisset
                </div>
            </div>
            <form style="text-align: right;" id="logout-form" action="{{ route('logout') }}" method="POST">
                <a onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="btn btn-outline-dark" >Sair</a>
                @csrf
            </form>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
                <!-- Column -->
                <div data-toggle="modal" data-target="#add-customers" class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-purple text-center">
                            <h1><i class="fas fa-filter"></i></h1>
                            <h6>Filtrar</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
            </div>
            {{-- variaveis de atualização de dados do cliente --}}
            <input type="hidden" id="update-name-customers">
            <input type="hidden" id="update-telephone-customers">
            <input type="hidden" id="update-email-customers">
            <input type="hidden" id="update-id-customers">

            {{-- variaveis de atualização da tabela de clientes --}}
            <input type="hidden" id="new-name-customers">
            <input type="hidden" id="new-telephone-customers">
            <input type="hidden" id="new-email-customers">
            <input type="hidden" id="new-id-customers">

            @if (isset($data[0]['id']))
                <div class="table-responsive">
                    <table id="table-customers" class="table table-striped">
                        <thead class="bg-primary">
                            <tr>
                                <th class="color-white">Nome</th>
                                <th class="color-white">Telefone</th>
                                <th class="color-white">Email</th>
                                <th class="color-white">Serviços/Pagamentos</th>
                                <th class="color-white">Editar</th>
                                <th class="color-white">Deletar</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-table-customers">
                            @if (isset($data))
                                @foreach ($data as $valDatal)
                                    <tr id="line-{{ $valDatal['id'] }}">
                                        <td value="{{ $valDatal['name'] }}" id="name-customer-{{ $valDatal['id'] }}">
                                            {!! $valDatal['name'] !!}</td>
                                        <td value="{{ $valDatal['telephone'] }}"
                                            id="telephone-customer-{{ $valDatal['id'] }}">
                                            {!! $valDatal['telephone'] !!}</td>
                                        <td value="{{ $valDatal['email'] }}" id="email-customer-{{ $valDatal['id'] }}">
                                            {!! $valDatal['email'] !!}</td>
                                        <td>
                                            <a href="{{ route('system.erp.customer.index', ['id' => $valDatal['id']]) }}"
                                                class="btn btn-outline-primary"><i class=" fas fa-briefcase"></i> <i
                                                    class="fas fa-dollar-sign"></i></a>
                                        </td>
                                        <td><i onclick="updateCustomerDom('{{ $valDatal['id'] }}')"
                                                class="far fa-edit  update-icon"></i>
                                        </td>
                                        <td><i onclick="fetchGeneric('/erp/customers/{{ $valDatal['id'] }}','delete','removeElementCustomDom')"
                                                class="fas fa-trash  trash-icon"></i></td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div id="notification-void-table-delete" class="div-p20 text-center">
                    <h4>Nenhum Cliente Adicionado</h4>
                </div>
            @else
                <div class="table-responsive">
                    <table id="table-customers" class="table table-striped">
                        <thead class="bg-primary">
                            <tr>
                                <th class="color-white">Nome</th>
                                <th class="color-white">Telefone</th>
                                <th class="color-white">Email</th>
                                <th class="color-white">Serviços/Pagamentos</th>
                                <th class="color-white">Editar</th>
                                <th class="color-white">Deletar</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-table-customers">

                        </tbody>
                    </table>
                </div>
                <div id="notification-void-table" class="div-p20 text-center">
                    <h4>Nenhum Cliente Adicionado</h4>
                </div>
            @endif
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="add-customers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Adicionar Cliente</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="div-p10">
                        <label for="name-service" class="form-label">Nome</label>
                        <input class="form-control" id="name-customers" type="text">
                    </div>

                    <div class="div-p10">
                        <label for="value-service" class="form-label">Telefone</label>
                        <input class="form-control" id="telephone-customers" type="text">
                    </div>

                    <div class="div-p10">
                        <label for="value-service" class="form-label">Email</label>
                        <input class="form-control" id="email-customers" type="email">
                    </div>

                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-outline-dark btn-block" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Adicionar Serviço
                                    </button>
                                </h5>
                            </div>

                            <div class="div-p10">
                                <div style="border: 1px solid #000;border-radius:5px" id="collapseOne" class="collapse"
                                    aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-12 div-p10">
                                                <label for="select-customers-service-name" class="form-label">
                                                    <h6>Selecione o
                                                        Serviço</h6>
                                                </label>
                                                <select id="select-customers-service-name" style="width: 100%;"
                                                    name="state">
                                                </select>
                                            </div>

                                            <div id="div-service1" class="col-lg-6 div-p10">
                                                <h6>Status do Serviço</h6>
                                                <select id="select-status-service-customer-update" style="width: 100%;"
                                                    name="serviceStatus">
                                                </select>
                                            </div>
                                            <div id="div-service2" class="col-lg-6 div-p10">
                                                <h6>Data/Serviço<h6>
                                                        <input class="form-control" id="date-customers-service"
                                                            type="date">
                                            </div>

                                        </div>

                                        <div id="div-service3">
                                            <div style="padding: 20px 0 0 0;">
                                                <hr>
                                                <div class="row">
                                                    <div class="col div-p10">
                                                        <label for="value-customers-service" class="form-label">
                                                            <h6>Valor
                                                                Serviço</h6>
                                                        </label>
                                                        <input class="form-control" id="value-customers-service"
                                                            value="0" type="text">
                                                    </div>
                                                    <div class="col div-p10">
                                                        <label for="date-payment-service" class="form-label">
                                                            <h6>Data
                                                                Pagamento</h6>
                                                        </label>
                                                        <input class="form-control" id="date-payment-service"
                                                            type="date">
                                                    </div>
                                                    <div class="col div-p10">
                                                        <label for="select-payment-status-customer-update"
                                                            class="form-label">
                                                            <h6>Status/Pagamento</h6>
                                                        </label>
                                                        <select id="select-payment-status-customer-update"
                                                            style="width: 100%;" name="paymentStatus">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button onclick="fetchGeneric('/erp/customers','post','createCustomer')" type="button"
                        class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Update-->
    <div class="modal fade" id="update-customers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Atualizar Cliente</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- adaptar a service para atualizar a tabela serviços, mudar os nomes da coluna-->
                    <input type="hidden" id="idDataServiceUpdate">

                    <div class="div-p10">
                        <label for="name-service" class="form-label">Nome</label>
                        <input class="form-control" id="name_update" type="text">
                    </div>

                    <div class="div-p10">
                        <label for="value-service" class="form-label">Telefone</label>
                        <input class="form-control" id="telephone_update" type="text">
                    </div>

                    <div class="div-p10">
                        <label for="note-service" class="form-label">E-mail</label>
                        <input class="form-control" id="email_update" type="text">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button onclick="fetchGeneric('/erp/customers','put','updateCustomer')" type="button"
                        class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>

@endsection
