@extends('layouts.main')

@section('title', 'Bem-vindo')

@section('content')

<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div style="margin-top:150px">
        <div class="row">
            <div style="-webkit-box-shadow:0px 10px 39px 10px rgba(62,66,66,0.22);
            -moz-box-shadow: 0px 10px 39px 10px rgba(62,66,66,0.22);
            box-shadow: 0px 10px 39px 10px rgba(62,66,66,0.22);padding: 50px;border-radius: 5px"
                class="col-lg-4 col-md-6 mx-auto">
                <x-slot name="logo">
                    <img src="/img/logoevent.png" alt="">
                </x-slot>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div style="padding: 0 0 30px 0">
                        <div>
                            <x-jet-label for="email" value="{{ __('Usuário') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Senha') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="current-password" />
                        </div>
                    </div>
                    <!-- <div style="padding: 10px 10px 10px 0" class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar') }}</span>
                        </label>
                    </div> -->

                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-primary">
                            {{ __('Entrar') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div style="padding: 10px 10px 10px 0">
                            <a href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        </div>
                    @endif

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>


@endsection