@extends('menu')

@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
                <div class="div-login col-md-6 col-lg-4 col-xlg-3 card-hover">
                    <div class="div-p10">
                        <div class="card-header" style="background-color: #7460ee;color:#fff"><b>{{ __('Resetar senha') }}</b>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('reset.password.post') }}">
                        @csrf
                        @if (isset($msg))
                            {!! $msg !!}
                        @endif
                        <div class="div-p10">
                            <label for="email">{{ __('Digite seu email de cadastro') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="div-p10 text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>

                    </form>
                </div>
                <div class="col-md-6 col-lg-4 col-xlg-3">

                </div>
            </div>
        </div>
    </div>
@endsection
