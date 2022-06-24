@extends('layouts.main')

@section('title', $event->title)

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city">
                    <i style="color: #0d6efd" class="fa-solid fa-building-circle-check"></i> &nbsp; {{ $event->city }}
                </p>
                <p class="events-participants">
                    <i style="color: #0d6efd" class="fa-solid fa-person"></i> &nbsp; {{ count($event->users) }}
                    Participantes
                </p>
                <p class="event-owmer">
                    <i style="color: #0d6efd" class="fa-solid fa-star"></i> &nbsp; {{ $eventOwner->name }}
                </p>
                @if ($hasUserJoined == false)
                    <form action="/events/join/{{ $event->id }}" method="POST">
                        @csrf
                        <a href="/events/join/{{ $event->id }}" class="btn btn-outline-primary" id="event-submit"
                            onclick="event.preventDefault();this.closest('form').submit();">Confirmar Presença</a>
                    </form>
                @else
                <p style="color:green;padding: 5px 0"><b>Presença confirmada!</b>  
                    </p>
                @endif
                @if (!empty($event->items))
                    <h3>O evento conta com:</h3>
                    <ul id="items-list">
                        @foreach ($event->items as $item)
                            <li>
                                <i style="color: #0d6efd" class="fa-solid fa-play"></i> &nbsp; {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                @else
                    <h3>Nenhuma Infraestrutura</h3>
                @endif
            </div>
            <div style="padding: 20px" class="col-md-12" id="description-container">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection
