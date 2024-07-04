{{-- table de cadastro de serviços --}}
@if ($segmentType == 'service')
    <th class="color-white">{{ $title['nome'] }}</th>
    <th class="color-white">{{ $title['valor'] }}</th>
    <th class="color-white">{{ $title['observacao'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
@endif

{{-- table serviço de cada cliente --}}
@if ($segmentType == 'service_customer')
    <th class="color-white">{{ $title['servico'] }}</th>
    <th class="color-white">{{ $title['status_service'] }}</th>
    <th class="color-white">{{ $title['value_service'] }}</th>
    <th class="color-white">{{ $title['status_pag'] }}</th>
    <th class="color-white">{{ $title['responsible'] }}</th>
    <th class="color-white">{{ $title['editor_service'] }}</th>
    <th class="color-white">{{ $title['delete_service'] }}</th>
@endif

{{-- table clientes --}}
@if ($segmentType == 'customer')
    <th class="color-white">{{ $title['nome'] }}</th>
    <th class="color-white">{{ $title['telefone'] }}</th>
    <th class="color-white">{{ $title['email'] }}</th>
    <th class="color-white">{{ $title['service_pagamentos'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
@endif

{{-- table editor de estudos --}}
@if ($segmentType == 'editor_studies')
    <th class="color-white">{{ $title['title'] }}</th>
    <th class="color-white">{{ $title['code'] }}</th>
    <th class="color-white">{{ $title['position'] }}</th>
    <th class="color-white">{{ $title['description'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
@endif

{{-- table exemplos css --}}
@if ($segmentType == 'examples_css')
    <th class="color-white">{{ $title['title'] }}</th>
    <th class="color-white">{{ $title['position'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
    <th class="color-white">{{ $title['capa'] }}</th>
@endif

{{-- table funcionarios --}}
@if ($segmentType == 'employees')
    <th class="color-white">{{ $title['nome'] }}</th>
    <th class="color-white">{{ $title['telefone'] }}</th>
    <th class="color-white">{{ $title['email'] }}</th>
    <th class="color-white">{{ $title['function'] }}</th>
    <th class="color-white">{{ $title['endereco'] }}</th>
    <th class="color-white">{{ $title['dados_bancarios'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
@endif

{{-- table funções de funcionarios --}}
@if ($segmentType == 'employees_roles')
    <th class="color-white">{{ $title['id'] }}</th>
    <th class="color-white">{{ $title['nome'] }}</th>
    <th class="color-white">{{ $title['editar'] }}</th>
    <th class="color-white">{{ $title['deletar'] }}</th>
@endif

{{-- table my works --}}
@if ($segmentType == 'my_works')
    <th class="color-white">{{ $title['service'] }}</th>
    <th class="color-white">{{ $title['status_service'] }}</th>
    <th class="color-white">{{ $title['data_entrega'] }}</th>
    <th class="color-white">{{ $title['start'] }}</th>
    <th class="color-white">{{ $title['pause'] }}</th>
    <th class="color-white">{{ $title['concluded'] }}</th>
@endif
