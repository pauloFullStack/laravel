<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-div {
            max-width: 430px;
            padding: 35px;
            box-shadow: 0 0 1em #000;
            border-radius: 8px;
        }

        .logo {
            background-image: url(./circle-cropped\ \(1\).png);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
        }
        
        .waves-light{
            background-color: #8a51fc !important
        }

        .text-center {
            text-align: center;
        }
    </style>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Criar Senha PhpGold</title>
</head>

<body>
    <div class="login-div">
        <div class="row">
            <div class="text-center">
                <img src="{{ URL::asset('/assets/images/image-php-white.png') }}" alt="homepage"
                                />
            </div>
        </div>
        <div class="row center">
            <h6>Crie sua senha</h6>
        </div>
        @if (isset($msg))
            {!! $msg !!}
        @endif
        <form action="{{ route('create.password.post') }}" method="post">
            @csrf
            <input type="hidden" name="id_user" value="{{ $id }}">
            <input type="hidden" name="email_user" value="{{ $email }}">
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="password" id="password" class="validate" />
                    <label for="password">Senha</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <input type="password" name="confirm_password" id="confirm_password" class="validade" />
                    <label for="confirm_password">Confirmar Senha</label>
                </div>
                <div class="row"></div>
                <div class="text-center">
                    <button type="submit" class="waves-effect waves-light btn">Criar Senha</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
