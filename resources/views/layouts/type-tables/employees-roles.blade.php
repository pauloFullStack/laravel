<input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal['id'] }}" value="{{ $valDatal['id'] }}">
<tr id="line-{{ $valDatal['id'] }}">
    <td value="{{ $valDatal['id'] }}" id="index-{{ $valDatal['id'] }}">
        {!! $valDatal['id'] !!}</td>
    <td value="{{ $valDatal['name'] }}" id="name-{{ $valDatal['id'] }}">
        {!! $valDatal['name'] !!}</td>
    <td><i columns-update="index-.name-.update_employee_roles_id" onclick="updateModal({{ $valDatal['id'] }}, event)"
            class="far fa-edit  update-icon"></i>
    </td>
    <td><i delete-route-modal="/api/erp/select/employee-roles-destroy/{{ $valDatal['id'] }}" size-colspan="0"
            name-id="name-{{ $valDatal['id'] }}" message-notification="Função deletada com sucesso!"
            message-modal="Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?"
            title-modal="Deletar Função" onclick="modalDelete(event)" class="fas fa-trash  trash-icon"></i>

    </td>
</tr>
