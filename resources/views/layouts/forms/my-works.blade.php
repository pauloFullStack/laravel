{{-- Td table Meus trabalhos --}}
@if ($typeForm == 'work_status_iniciado')
    <i id="status_work_iniciado-{{ $valDatal->id }}" style="color: {{ $colorIniciado }}" class="my-works fas fa-play"
        not-form-type-request="put" not-form-value="4" not-form-paramenter="{{ $valDatal->id }}"
        not-form-route="/api/systems/erp/my-works-status" not-form-method-redirect="updateWorkStatus"></i>
@endif


{{-- Td table Meus trabalhos --}}
@if ($typeForm == 'work_status_parado')
    <i id="status_work_parado-{{ $valDatal->id }}" style="color: {{ $colorParado }}" class="my-works fas fa-pause"
        not-form-type-request="put" not-form-value="5" not-form-paramenter="{{ $valDatal->id }}"
        not-form-route="/api/systems/erp/my-works-status" not-form-method-redirect="updateWorkStatus"></i>
@endif


{{-- Td table Meus trabalhos --}}
@if ($typeForm == 'work_status_concluido')
    <i id="status_work_concluido-{{ $valDatal->id }}" style="color: {{ $colorConcluido }}" not-form-type-request="put"
        not-form-value="2" not-form-paramenter="{{ $valDatal->id }}" not-form-route="/api/systems/erp/my-works-status"
        not-form-method-redirect="updateWorkStatus" class="my-works fas fa-check-circle"></i>
@endif
