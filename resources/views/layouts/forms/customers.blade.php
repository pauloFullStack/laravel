{{-- Form clientes --}}
@if ($typeForm == 'customers')
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-outline-dark btn-block" data-toggle="collapse"
                        data-target="#add-customer-accordion" aria-expanded="true"
                        aria-controls="#add-customer-accordion">
                        Adicionar Cliente
                    </button>
                </h5>
            </div>

            <div class="div-p10">
                <div id="add-customer-accordion" class="collapse" aria-labelledby="headingOne"
                    data-parent="#add-customer-accordion">
                    <div class="card-body">
                        <form class="form">

                            @include('layouts.parameter', ['dataRequest' => $dataRequest])


                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Nome" id="name" name="name"
                                            type="text">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="div-p10">
                                        <input class="form-control" placeholder="Email" id="email"
                                            name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="div-p10">
                                        <input class="form-control mask-phone" placeholder="Telefone" id="telephone" name="telephone" type="text">
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div id="loading-request" class="text-center"><i
                                    class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                            </div>
                            <div class="div-p10 text-right">
                                <button type="submit" class="btn btn-outline-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

