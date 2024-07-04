@extends('menu')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
                <div  class="div-login col-md-6 col-lg-4 col-xlg-3 card-hover">
                    <div class="div-p10">
                        <div class="card-header" style="background-color: #7460ee;color:#fff"><b>{{ __('Login') }}</b></div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="div-p10">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="div-p10">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- Remember Me  --}}
                        {{-- <div class="div-p10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div> --}}

                        <div class="div-p10 text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Esqueceu a senha?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
            </div>
        </div>
    </div>
@endsection
