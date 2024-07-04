{{-- Form editor de postagem de estudos --}}
@if ($typeForm == 'editor')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <form class="form">
                    <div class="card-body">

                        @include('layouts.parameter', ['dataRequest' => $dataRequest])

                        <h4 class="card-title">Criar Post</h4>
                        <div class="row">
                            <div class="col-lg-4 div-p10">
                                <input type="text" onfocus="clearBorder(this)" onblur="onblurFocus(this)"
                                    class="form-control" name="title" id="title" placeholder="Título post">
                            </div>
                            <div class="col-lg-4 div-p10">
                                <input type="text" class="form-control" name="code" id="code"
                                    placeholder="Código a ser executado">
                            </div>
                            <div class="col-lg-4 div-p10">
                                <input type="number" onfocus="clearBorder(this)" onblur="onblurFocus(this)"
                                    min="1" class="form-control" name="position" id="position"
                                    placeholder="Posição do post">
                            </div>
                            <div class="col-lg-12 div-p10">
                                <textarea class="form-control" onfocus="clearBorder(this)" onblur="onblurFocus(this)" placeholder="Descrição do post"
                                    name="description" id="description" rows="8"></textarea>
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
@endif

