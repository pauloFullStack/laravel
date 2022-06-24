@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


    

    <div style="-webkit-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    -moz-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);border-radius:5px;padding:20px" class="col-md-10 offset-md-1 dashboard-events-container">
        <h3>Meus eventos</h3>
        @if (count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $item)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $item->id }}"> {{ $item->title }}</a></td>
                            <td>{{ count($item->users) }}</td>
                            <td>
                                <a href="/events/edit/{{ $item->id }}" class="btn btn-info edit-btn">Editar</a>
                                <form action="/events/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn">Deletar</button>
                                </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
        @endif
    </div>
    <div style="margin-top:30px" ></div>
    <div style="-webkit-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    -moz-box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);
    box-shadow: 0px 10px 39px 10px rgba(62, 66, 66, 0.22);border-radius:5px;padding:20px" class="col-md-10 offset-md-1 dashboard-events-container">
        <h3>Eventos que estou participando</h3>
        @if (count($eventsAsParticipant) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventsAsParticipant as $item)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $item->id }}"> {{ $item->title }}</a></td>
                            <td>{{ count($item->users) }}</td>
                            <td>
                                <form action="/events/leave/{{ $item->id }}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn" ><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>                                
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não está participando de nenhum evento, <a href="/">Veja todos os eventos</a></p>
        @endif

    </div>
@endsection
