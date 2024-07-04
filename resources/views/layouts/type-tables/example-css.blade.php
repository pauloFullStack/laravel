<input type="hidden" id="there-is-data" class="there-is-data-{{ $valDatal->id }}" value="{{ $valDatal->id }}">
<input type="hidden" id="code_image-{{ $valDatal->id }}" value="{{ $valDatal->code_image }}">
<tr id="line-{{ $valDatal->id }}">
    <td id="title-{{ $valDatal->id }}" value="{{ $valDatal->title }}">
        {!! $valDatal->title !!}</td>
    <td id="position-{{ $valDatal->id }}" value="{{ $valDatal->position }}">
        {!! $valDatal->position !!}</td>
    <td><i id="update-{{ $valDatal->id }}" columns-update="code_image-.title-.position-.update_examples_css_id"
            onclick="updateModal('{{ $valDatal->id }}', event)" class="fa fa-edit update-icon"></i></td>
    <td><i delete-route="/api/css-example-delete/{{ $valDatal->id }}" size-colspan="5"
            message-notification="Css deletado com sucesso!" onclick="genericFetch(event)"
            class="fas fa-trash  trash-icon"></i></td>
    <td id="image-{{ $valDatal->id }}">
        <img width="70" height="70" src="{{ url("storage/{$valDatal->image}") }}" alt="">
    </td>
</tr>
