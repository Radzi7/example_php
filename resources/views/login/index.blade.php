@extends('layouts.base')

@section('page.title', "Страница входа")

@section('content')
    <section>
        <x-container>
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <x-card>
                        <x-card-header> 
                            <x-card-title>
                                {{__('Вход')}}
                            </x-card-title> 
                        </x-card-header>

                        <x-card-body>
                            <x-form action="{{route('login.store')}}" method="POST">
                                <div class="mb-3">
                                    <label class="required"> {{__('Email')}} </label>
                                    <input type="email" name="email" class="form-control" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="required"> {{__('Пароль')}} </label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">

                                        <label class="form-check-label" for="remember">
                                          {{ __('Запомнить меня')}}
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Войти')}}
                                </button>
                            </x-form>
                        </x-card-body>
                    </x-card>
                </div>
            </div>
        </x-container>
    </section>
@endsection
