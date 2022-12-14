<header class="bg-light">
    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('/')}}"><img width="80px" src="resources/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
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
