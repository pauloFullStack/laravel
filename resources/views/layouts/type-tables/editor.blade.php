@php($url = explode('/', $_SERVER['REQUEST_URI']))
@php($route = $url[2])
<tr id="line-{{ $valDatal['id'] }}">
    <td id="title-{{ $valDatal['id'] }}" value="{{ $valDatal['title'] }}">
        {!! $valDatal['title'] !!}</td>
    <td id="code-{{ $valDatal['id'] }}" value="{{ $valDatal['code'] }}">
        {!! $valDatal['code'] !!}</td>
    <td id="position-{{ $valDatal['id'] }}" value="{{ $valDatal['position'] }}">
        {!! $valDatal['position'] !!}</td>
    <td id="description-{{ $valDatal['id'] }}" value="{{ $valDatal['description'] }}">
        {!! $valDatal['description'] !!}</td>
    <td><i id="update-{{ $valDatal['id'] }}" columns-update="title-.code-.position-.description-.update_editor_id"
            onclick="updateModal('{{ $valDatal['id'] }}', event)" class="fa fa-edit update-icon"></i></td>
    <td><i delete-route-modal="/api/editor-{{ $route }}-delete/{{ $valDatal->id }}" size-colspan="0"
            name-id="title-{{ $valDatal->id }}" message-notification="Post deletado com sucesso!"
            message-modal="Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?"
            title-modal="Deletar Post" onclick="modalDelete(event)" class="fas fa-trash  trash-icon"></i></td>
</tr>
