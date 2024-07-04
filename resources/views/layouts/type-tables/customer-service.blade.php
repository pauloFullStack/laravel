{{-- Setar cor no status do serviço --}}
@if ($valDatal->statusService->id == 1)
    @php($corlorStatusService = '#FFA500')
@endif

@if ($valDatal->statusService->id == 2)
    @php($corlorStatusService = '#32CD32')
@endif

@if ($valDatal->statusService->id == 3)
    @php($corlorStatusService = '#FF0000')
@endif

@if ($valDatal->statusService->id == 4)
    @php($corlorStatusService = '#0000ff')
@endif

@if ($valDatal->statusService->id == 5)
    @php($corlorStatusService = '#000')
@endif

{{-- Setar cor no status de pagamento --}}
@if ($valDatal->paymentStatus->id == 1)
    @php($corlorStatusPayment = '#FFA500')
@endif

@if ($valDatal->paymentStatus->id == 2)
    @php($corlorStatusPayment = '#32CD32')
@endif

@if ($valDatal->paymentStatus->id == 3)
    @php($corlorStatusPayment = '#FF0000')
@endif

<input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal->id }}" value="{{ $valDatal['id'] }}">
{{-- variaveil para ataulizacao do serviço --}}
<input type="hidden" id="created_at-{{ $valDatal->id }}" value="{{ $valDatal->created_at->format('d/m/Y') }}">

<input type="hidden" id="telephone-{{ $valDatal->id }}" value="{{ $valDatal->customer->telephone }}">

@php($paymentDate = isset($valDatal->payment_date) ? $valDatal->payment_date->format('d/m/Y') : 'Não Informado')
<input type="hidden" id="payment_date-{{ $valDatal->id }}" value="{{ $paymentDate }}">

@php($serviceDeliveryDate = isset($valDatal->service_delivery_date) ? $valDatal->service_delivery_date->format('d/m/Y') : 'Não Informado')
<input type="hidden" id="service_delivery_date-{{ $valDatal->id }}" value="{{ $serviceDeliveryDate }}">

<input type="hidden" id="services_id-{{ $valDatal->id }}" value="{{ $valDatal->service->id }}">

<input type="hidden" id="status_service_id-{{ $valDatal->id }}" value="{{ $valDatal->statusService->id }}">

<input type="hidden" id="payment_status_id-{{ $valDatal->id }}" value="{{ $valDatal->paymentStatus->id }}">

<input type="hidden" id="responsible_collaborator_id-{{ $valDatal->id }}" value="{{ $valDatal->responsible->id }}">

<input type="hidden" id="service_add_id-{{ $valDatal->id }}" value="{{ $valDatal->id }}">
{{-- Fim variaveis --}}


<tr id="line-{{ $valDatal->id }}">
    <td value="{{ $valDatal->service->name_service }}" id="name_service-{{ $valDatal->id }}">
        {!! $valDatal->service->name_service !!}</td>
    <td style="color: {{ $corlorStatusService }};font-weight: bold;" value="{{ $valDatal->statusService->name }}"
        id="name_service_status-{{ $valDatal->id }}">
        {!! $valDatal->statusService->name !!}</td>
    <td value="{{ $valDatal->valor_service }}" id="valor_service-{{ $valDatal->id }}">
        {!! $valDatal->valor_service !!}</td>
    <td style="color: {{ $corlorStatusPayment }};font-weight: bold;" value="{{ $valDatal->paymentStatus->name }}"
        id="name_payment_status-{{ $valDatal->id }}">
        {!! $valDatal->paymentStatus->name !!}</td>
    <td value="{{ $valDatal->responsible->name }}" id="responsible_collaborator_name-{{ $valDatal->id }}">
        {!! $valDatal->responsible->name !!}</td>
    <td><i id-modal-open="{{ $valDatal->id }}" class="modal-open-perso far fa-edit  update-icon"></i>
    </td>
    <td><i delete-route-modal="/api/systems/erp/customer-service-destroy/{{ $valDatal->id }}" size-colspan="7"
        message-notification="Serviço deletado com sucesso!" name-id="name_service-{{ $valDatal->id }}" message-modal="Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?" title-modal="Deletar Serviço"
            class="modal-open-delete fas fa-trash  trash-icon"></i></td>
</tr>
