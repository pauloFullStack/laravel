@php($serviceDeliveryDate = isset($valDatal->service_delivery_date) ? $valDatal->service_delivery_date->format('d/m/Y') : 'Não Informado')
<input type="hidden" id="service_delivery_date-{{ $valDatal->id }}" value="{{ $serviceDeliveryDate }}">
{{-- Fazer a regra de quando clicar em inciar atualizar o status serviço e a coluna status_works, e muda a cor do icone --}}
@php($colorIniciado = '#a39999')
@php($colorParado = '#a39999')
@php($colorConcluido = '#a39999')

@if (isset($valDatal->work_status) && $valDatal->work_status == 4)
    @php($colorIniciado = '#0000ff !important')
@endif

@if (isset($valDatal->work_status) && ($valDatal->work_status == 5 || $valDatal->work_status == 3))
    @php($colorParado = '#ff0000 !important')
@endif

@if (isset($valDatal->work_status) && $valDatal->work_status == 2)
    @php($colorConcluido = '#00ff00 !important')
@endif


<tr id="line-{{ $valDatal->id }}">
    <td id="title-{{ $valDatal->id }}" value="{{ $valDatal->service->name_service }}">
        {!! $valDatal->service->name_service !!}</td>
    <td id="code-{{ $valDatal->id }}" value="{{ $valDatal->statusService->name }}">
        {!! $valDatal->statusService->name !!}</td>
    <td id="service_delivery_date-{{ $valDatal->id }}" value="{{ $serviceDeliveryDate }}">
        {!! $serviceDeliveryDate !!}</td>
    <td>                
        @include('layouts.forms.my-works',['typeForm' => 'work_status_iniciado'])

    </td>
    <td>        
        @include('layouts.forms.my-works',['typeForm' => 'work_status_parado'])

    </td>
    <td>        
        @include('layouts.forms.my-works',['typeForm' => 'work_status_concluido'])

    </td>

</tr>
