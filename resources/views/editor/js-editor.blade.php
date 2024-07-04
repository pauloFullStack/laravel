@extends('menu')

@section('content')
    <div class="page-wrapper">
                
        {{-- breadcrumbs --}}
        @include('layouts.breadcrumbs',['typeBreadcrumbs' => 'editor', 'segmentType' => $segmentType])

        <div class="container-fluid">

        {{-- dados request store     --}}
        @php(
            $dataRequest = [
                'route' => '/api/editor-js-store',
                'method' => 'post',
                'message_success' => 'Post Adicionado com sucesso!',
                'custom_method' => 'updateModal',
                'route_delete' => '/api/editor-js-delete/',
                'update_fields' => 'title-.code-.position-.description-.update_editor_id',
                'colspan' => '6',
                'message_notification' => 'Post deletado com sucesso!',
                'message_modal' => "Deseja realmente deletar <span style='color:#000' ><b>%cliente%</b></span>?",
                'title_modal' => 'Deletar Post',
            ])

            {{-- Form store --}}
            @include('layouts.forms.editor',['typeForm' => 'editor', 'dataRequest' => $dataRequest])            

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Tabela de Post's</h5>
                </div>

                {{-- Table --}}
                @include('layouts.table', ['routeDelete' => $dataRequest['route_delete']])
            </div>
        </div>
    </div>

    {{-- Dados request update --}}
    @php(
        $dataRequest = [
            'route' => '/api/editor-js-update',
            'method' => 'put',
            'message_success' => 'Post Atualizado com sucesso!',
            'custom_method' => 'updateDom',
            'id' => 'update_editor_id',
            'colspan' => '0',
        ])

    {{-- Modal update --}}
    @include('layouts.modals.editor', ['typeModal' => 'editor', 'dataRequest' => $dataRequest])
    
@endsection
