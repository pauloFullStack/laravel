@if ($valDatal->userKey->id != 1)
    <input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal['id'] }}" value="{{ $valDatal['id'] }}">
    <tr id="line-{{ $valDatal['id'] }}">

        <input type="hidden" id="street-{{ $valDatal['id'] }}" value="{{ $valDatal['street'] }}">
        <input type="hidden" id="district-{{ $valDatal['id'] }}" value="{{ $valDatal['district'] }}">
        <input type="hidden" id="number-{{ $valDatal['id'] }}" value="{{ $valDatal['number'] }}">
        <input type="hidden" id="city-{{ $valDatal['id'] }}" value="{{ $valDatal['city'] }}">
        <input type="hidden" id="state-{{ $valDatal['id'] }}" value="{{ $valDatal['state'] }}">
        <input type="hidden" id="cpf-{{ $valDatal['id'] }}" value="{{ $valDatal['cpf'] }}">
        <input type="hidden" id="bill-{{ $valDatal['id'] }}" value="{{ $valDatal['bill'] }}">
        <input type="hidden" id="agency-{{ $valDatal['id'] }}" value="{{ $valDatal['agency'] }}">
        <input type="hidden" id="operation-{{ $valDatal['id'] }}" value="{{ $valDatal['operation'] }}">
        <input type="hidden" id="permissions_select-{{ $valDatal['id'] }}"
            value="{{ json_encode($valDatal['permissions'], true) }}">

        <td value="{{ $valDatal->userKey->name }}" id="name-collaborator-{{ $valDatal['id'] }}">
            {!! $valDatal->userKey->name !!}</td>
        <td value="{{ $valDatal['telephone'] }}" id="telephone-{{ $valDatal['id'] }}">
            {!! $valDatal['telephone'] !!}</td>
        <td value="{{ $valDatal->userKey->email }}" id="email-{{ $valDatal['id'] }}">
            {!! $valDatal->userKey->email !!}</td>
        <td value="{{ $valDatal->employeeRoles->id }}/{{ $valDatal->employeeRoles->name }}"
            id="employee_roles_select-{{ $valDatal['id'] }}">{!! $valDatal->employeeRoles->name !!}</td>

        <td><i columns-update="street-.district-.number-.city-.state-.update_employee_address_id.modal-update-collaborator-address"
                id-modal-open="{{ $valDatal['id'] }}" class="modal-open fas fa-address-book"></i>
        </td>
        <td><i columns-update="cpf-.bill-.agency-.operation-.update_employee_bank_id.modal-update-collaborator-bank"
                id-modal-open="{{ $valDatal['id'] }}" class="modal-open far fa-money-bill-alt"></i>
        </td>
        <td><i columns-update="name-collaborator-.email-.telephone-.permissions_select-.employee_roles_select-.update_employee_id.modal-update-collaborator-basic"
                id-modal-open="{{ $valDatal['id'] }}" class="modal-open far fa-edit update-icon"></i>
        </td>
        <td><i delete-route-modal="/api/systems/erp/employee-destroy/{{ $valDatal['id'] }}" size-colspan="8"
            message-notification="Colaborador deletado com sucesso!" name-id="name-collaborator-{{ $valDatal['id'] }}" check-database="/api/systems/erp/check-services-responsible-collaborator/{{ $valDatal->userKey->id }}" message-modal="{{ $valDatal->userKey->name }}" title-modal="Deletar Colaborador" 
                class="modal-open-delete fas fa-trash  trash-icon"></i>

        </td>
    </tr>
@endif
