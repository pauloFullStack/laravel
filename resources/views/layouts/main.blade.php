<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- arquivo personalizado -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Icones  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Muda o conteudo da titulo dinamicamente -->
    <title>@yield('title')</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/"><i class="fa-solid fa-calendar-check"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/events/create">Criar Eventos</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" href="/dashboard">Meus eventos</a>
                            </li>
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link"
                                        onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth
                        @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="/login">Entrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/register">Cadastrar</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="dashboard" class="overlay">
        <i style="color: #8C52FF;" class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
    </div>

    <!-- Muda o conteudo da pagina dinamicamente -->
    <div style="padding: 20px 0 0 0" class="container">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @else
                @if (session('msg_error'))
                    <p class="msg_error">{{ session('msg_error') }}</p>
                @endif
            @endif
            @yield('content')
        </div>
    </div>

    <footer>
        <p>Teste footer &copy; 2022</p>
    </footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>
