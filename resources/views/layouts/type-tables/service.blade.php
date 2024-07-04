<input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal['id'] }}" value="{{ $valDatal['id'] }}">
<tr id="line-{{ $valDatal['id'] }}">
    <td value="{{ $valDatal['name_service'] }}" id="name_service-{{ $valDatal['id'] }}">
        {!! $valDatal['name_service'] !!}</td>
    <td value="{{ $valDatal['valor_service'] }}" id="valor_service-{{ $valDatal['id'] }}">
        {!! $valDatal['valor_service'] !!}</td>
    <td value="{{ $valDatal['note_service'] }}" id="note_service-{{ $valDatal['id'] }}">
        {!! $valDatal['note_service'] !!}</td>
    <td><i columns-update="name_service-.valor_service-.note_service-.update_service_id"
        id-modal-open="{{ $valDatal['id'] }}" class="modal-open far fa-edit  update-icon"></i>
    </td>
    <td><i delete-route-modal="/api/systems/erp/services-destroy/{{ $valDatal['id'] }}" size-colspan="0" name-id="name_service-{{ $valDatal['id'] }}"
            message-notification="Serviço deletado com sucesso!" message-modal="Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?" title-modal="Deletar Serviço"
            class="modal-open-delete fas fa-trash  trash-icon"></i>

    </td>
</tr>
