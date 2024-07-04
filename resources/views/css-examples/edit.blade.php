@extends('menu')

{{-- Colocar essa edição para usar o crud do form que criei padrao, depois limpar o arquiv script.js, depois colocar o form o
modal o breadcrumb cada no seu layout que criei... fazer essa ideia de com a parte de sistema, pode ate criar uma pasta
dentro de cada layout e separar por segmento... ex: forms/sistemas/erp form/editor form/exemplos_css... --}}
@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <ol class="breadcrumb">
                        <li route="dashboard" class="redirect breadcrumb-item cursor">Início</li>
                    </ol>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>/</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @isset($name)
                        <h4 class="page-title">{{ $name }}</h4>
                    @endisset
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        {{-- <form id="form"
                            enctype="multipart/form-data"> --}}
                        <form class="form">

                            @php(
                            $dataRequest = [
                                'route' => '/api/css-example-store',
                                'method' => 'post_img',
                                'message_success' => 'Css Adicionado com sucesso!',
                                'custom_method' => 'updateModal',
                                'route_delete' => '/api/css-example-delete/',
                                'update_fields' => 'code_image-.title-.position-.update_examples_css_id',
                                'colspan' => '5',
                            ]
                            )


                            @include('layouts.parameter', ['dataRequest' => $dataRequest])

                            <div class="card-body">
                                <h4 class="card-title">Adicionar CSS</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div style="padding: 30px 0 0 0">
                                            <input type="text" onblur="onblurFocus(this)" onfocus="clearBorder(this)" class="form-control" id="title" name="title"
                                                aria-describedby="emailHelp" placeholder="Titulo do css">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div style="padding: 30px 0 0 0">
                                            <input type="number" onblur="onblurFocus(this)" onfocus="clearBorder(this)" class="form-control" id="position" name="position"
                                                aria-describedby="emailHelp" placeholder="Posição do css">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div style="padding: 30px 0 0 0">
                                            <input type="file" class="form-control-file" id="image" name="image">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div style="padding: 30px 0 0 0">
                                            <textarea class="form-control" onblur="onblurFocus(this)" onfocus="clearBorder(this)" id="code_image" name="code_image" placeholder="Insira o codigo" rows="20"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="loading-request" class="text-center"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            </div>
                            <div class="border-top">
                                <div style="text-align: center" class="card-body">
                                    <button type="submit" class="btn  btn-outline-success">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Tabela de Post's</h5>
                </div>

                @include('layouts.table', ['data' => $data, 'th' => $th, 'collapse' => $collapse, 'typeOfRequest' => $typeOfRequest])
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="update-modal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <input type="hidden" id="update-id-css-examples">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">Atualizar Post</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form_update">
                    <div class="modal-body">

                        @php($dataRequest = [
                                    'route' => '/api/css-example-update',
                                    'method' => 'put_img',
                                    'message_success' => 'Css Atualizado com sucesso!',
                                    'custom_method' => 'updateDom',
                                    'id' => 'update_examples_css_id',
                                    'colspan' => '0',
                                ])


                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <label for="title-modal">Título</label>
                                    <input type="text" name="title" id="title_update" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <label for="position-modal">Posição Post</label>
                                    <input type="number" name="position" id="position_update" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="div-p10">
                                    <label for="position-modal">Alterar Imagem</label>
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                        </div>

                        <div class="div-p10">
                            <label for="code-modal">Código</label>
                            <label for="description-modal">Código</label>
                            <textarea type="text" name="code_image" id="code_image_update" rows="20" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


