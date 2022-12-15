@extends('welcome')
@section('title', 'Страница регистрации')
@section('content')
    <form class="container" method="post">
        @csrf
        <div class="d-flex justify-content-center row">
            <div class="col-6 mt-5">
                <h2 class="text-center">Страница регистрации</h2>
                @auth()
                    <div class="alert alert-primary mt-3">Вы уже авторизованы. Регистрация невозможна!</div>
                @endauth
                @guest()
                <div class="mb-3">
                    <label for="name" class="form-label">ФИО</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name">
                    @error('name')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input name="login" type="text" class="form-control @error('login') is-invalid @enderror" value="{{old('login')}}" id="login">
                    @error('login')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                    @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Адрес</label>
                    <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" id="address">
                    @error('address')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="password">
                    @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Пароль повторно</label>
                    <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{old('password_confirmation')}}" id="password_confirmation">
                    @error('password_confirmation')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3 form-check">
                    <input name="check" type="checkbox" class="form-check-input @error('check') is-invalid @enderror" id="check">
                    <label class="form-check-label" for="check">Согласен на обработку данных</label>
                    @error('check')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
                @endguest
            </div>
        </div>
    </form>
@endsection
