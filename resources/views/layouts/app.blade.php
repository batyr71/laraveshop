<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Magazin') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Magazin') }}
                    <br><small>Лучшие продукты для вас</small>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('8-495-212-85-06') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Время работы: Пн-Вс 10-19') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Корзина') }}</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <ul class="nav">
                    <?php 
                    $categories = App\Category::all();
                    ?>
                    @foreach($categories as $category)
                        <li class="nav-item"><a class="nav-link" href="">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bg-dark text-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h3>{{ config('app.name', 'Magazin') }}</h3>
                        <ul>
                            <li><a href="">Обувь</a></li>
                            <li><a href="">Платья</a></li>
                            <li><a href="">Штаны</a></li>
                            <li><a href="">Нижнее белье</a></li>
                            <li><a href="">Футболки</a></li>
                            <li><a href="">Спортивная Одежда</a></li>
                            <li><a href="">Аксессуары</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h3>КАТАЛОГ ТОВАРОВ</h2>
                        <ul>
                            <li><a href="">Обувь</a></li>
                            <li><a href="">Платья</a></li>
                            <li><a href="">Штаны</a></li>
                            <li><a href="">Нижнее белье</a></li>
                            <li><a href="">Футболки</a></li>
                            <li><a href="">Спортивная Одежда</a></li>
                            <li><a href="">Аксессуары</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h3>Категории</h2>
                        <ul>
                        @foreach($categories as $category)
                            <li><a href="">{{$category->name}}</a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
