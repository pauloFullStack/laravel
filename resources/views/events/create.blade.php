@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')

    <div style="-webkit-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    -moz-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);border-radius: 5px"
        id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            <!-- Diretiva @csrf que permite o envio do formulario no LARAVEL -->
            @csrf
            <div class="form-group">
                <label for="image">Imagem do evento</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento: </label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="city">Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado? </label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Adicione itens de Infraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-outline-primary" value="Criar evento">
        </form>
    </div>

@endsection
