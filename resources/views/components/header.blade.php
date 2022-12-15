<header class="bg-light">
    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('/')}}"><img width="80px" src="resources/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @auth()
                        @if(\Illuminate\Support\Facades\Auth::user()->role == 'user')
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('acc')}}">Мои заказы</a>
                                <a class="nav-link" href="{{route('acc')}}">Мой аккаунт</a>
                            </li>
                        @elseif(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Управление сайтом
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.product.create')}}">Добавление товара</a></li>
                                    <li><a class="dropdown-item" href="{{route('admin.product.index')}}">Все товары товара</a></li>
                                    <li><a class="dropdown-item" href="#">Просмотр заказов</a></li>
                                    <li><a class="dropdown-item" href="#">Пользователи</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="{{route('admin')}}">Панель администратора</a></li>
                                </ul>
                            </li>
                        @endif
                    @endauth
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 gap-2">
                    @guest()
                        <li class="nav-item">
                            <a class="btn btn-outline-primary" href="{{route('auth')}}">Авторизация</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{route('reg')}}">Регистрация</a>
                        </li>
                    @endguest
                    @auth()
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{route('logout')}}">Выйти</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</header>
