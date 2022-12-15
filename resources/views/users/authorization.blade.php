@extends('welcome')
@section('title', 'Страница авторизации')
@section('content')
    <form class="container" method="post">
    @csrf
        <div class="d-flex justify-content-center row">
            <div class="col-6 mt-5">
                @auth()
                    <div class="alert alert-primary mt-3">Вы уже авторизованы. Авторизация невозможна!</div>
                @endauth
                @guest()
                @if(session()->has('errorAuth'))
                    <div class="alert alert-danger">{{session()->get('errorAuth')}}</div>
                @endif
                @if(session()->has('successReg'))
                    <div class="alert alert-success">{{session()->get('successReg')}}</div>
                @endif
                <h2 class="text-center">Страница авторизации</h2>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input name="login" type="text" class="form-control @error('login') is-invalid @enderror" id="login">
                    @error('login')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    @error('password')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
                @endguest
            </div>
        </div>
    </form>
@endsection
