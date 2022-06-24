@extends('layouts.main')

@section('title', 'Bem-vindo')

@section('content')


    <div  id="search-container" class="col-md-6 mx-auto div-title">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p>Veja os eventos dos próximos dias</p>
        @endif
        <form style="padding: 0 0 20px 0" action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

     <div style="padding: 30px 0 0 0" ></div>   
    
    <div class="row">
        @foreach ($dadosBd as $event)        
            <div style="padding: 10px" class="col-lg-3 col-md-3 col-sm-12">
                <div class="card">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">{{ count($event->users) }} Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-outline-primary">Saber mais</a>
                    </div>
                </div>
            </div>
        @endforeach
        @if (count($dadosBd) == 0 && $search)
            <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos!</a> </p>
        @elseif(count($dadosBd) == 0)
            <p>Não há eventos disponiveis</p>
        @endif
    </div>


@endsection
