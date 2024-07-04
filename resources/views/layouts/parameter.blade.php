{{-- Parametros requisição inicio --}}
<input type="hidden" name="route" value="{{ $dataRequest['route'] }}">
<input type="hidden" name="method" value="{{ $dataRequest['method'] }}">
<input type="hidden" name="message_success" value="{{ $dataRequest['message_success'] }}">
<input type="hidden" name="custom_method" value="{{ $dataRequest['custom_method'] }}">

@isset($dataRequest['route_delete'])
    <input type="hidden" name="route_delete" value="{{ $dataRequest['route_delete'] }}">
@endisset

@isset($dataRequest['update_fields'])
    <input type="hidden" name="update-fields" value="{{ $dataRequest['update_fields'] }}">
@endisset

<input type="hidden" name="colspan" value="{{ $dataRequest['colspan'] }}">

@isset($dataRequest['id'])
    <input type="hidden" name="id" id="{{ $dataRequest['id'] }}">
@endisset

@isset($dataRequest['add_column'])
    <input type="hidden" name="add_column" value="{{ $dataRequest['add_column'] }}">
@endisset

@isset($dataRequest['tbody'])
    <input type="hidden" name="tbody" value="{{ $dataRequest['tbody'] }}">
@endisset

@isset($dataRequest['message_notification'])
    <input type="hidden" name="message_notification" value="{{ $dataRequest['message_notification'] }}">
@endisset

@isset($dataRequest['check_database'])
    <input type="hidden" name="check_database" value="{{ $dataRequest['check_database'] }}">
@endisset

@isset($dataRequest['message_modal'])
    <input type="hidden" name="message_modal" value="{{ $dataRequest['message_modal'] }}">
@endisset

@isset($dataRequest['title_modal'])
    <input type="hidden" name="title_modal" value="{{ $dataRequest['title_modal'] }}">
@endisset
{{-- Parametros requisição fim --}}
