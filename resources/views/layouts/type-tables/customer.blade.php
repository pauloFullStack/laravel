<input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal['id'] }}" value="{{ $valDatal['id'] }}">

<tr id="line-{{ $valDatal['id'] }}">
    <td value="{{ $valDatal['name'] }}" id="name-{{ $valDatal['id'] }}">
        {!! $valDatal['name'] !!}</td>
    <td value="{{ $valDatal['telephone'] }}" id="telephone-{{ $valDatal['id'] }}">
        {!! $valDatal['telephone'] !!}</td>
    <td value="{{ $valDatal['email'] }}" id="email-{{ $valDatal['id'] }}">
        {!! $valDatal['email'] !!}</td>
    <td>
        <a href="{{ route('system.erp.customer.index', ['id' => $valDatal['id']]) }}" class="btn btn-outline-primary"><i
                class=" fas fa-briefcase"></i> <i class="fas fa-dollar-sign"></i></a>
    </td>
    <td><i columns-update="name-.telephone-.email-.update_customer_id"
            id-modal-open="{{$valDatal['id']}}" class="modal-open far fa-edit  update-icon"></i>
    </td>
    <td><i delete-route-modal="/api/systems/erp/customer-destroy/{{ $valDatal['id'] }}" size-colspan="6" name-id="name-{{ $valDatal['id'] }}"
        message-notification="Cliente deletado com sucesso!" check-database="/api/systems/erp/check-services-customer/{{ $valDatal['id'] }}" message-modal="{{ $valDatal['name'] }}" title-modal="Deletar Cliente"
            class="modal-open-delete fas fa-trash  trash-icon"></i></td>
</tr>
