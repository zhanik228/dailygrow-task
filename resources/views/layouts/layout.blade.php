<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <header class="primary-header">
        <div class="primary-header__left">
{{--            <div class="sidebar-toggle-btn">--}}
{{--                <span class="bar"></span>--}}
{{--                <span class="bar"></span>--}}
{{--                <span class="bar"></span>--}}
{{--            </div>--}}
            <select class="primary-header__select best-select">
                <option selected disabled value="">Лучший и точка</option>
            </select>
        </div>
        <div class="primary-header__right">
            <div class="primary-header__tariff tariff">
                <p class="tariff__type">Тариф: Базовый</p>
                <p class="tariff__price">10 020 P (32 дня)</p>
            </div>
            <nav class="primary-header__icons icons-wrapper">
                <ul class="icon-list">
                    <li class="icon-list__item">
                        <a href="#" class="icon-list__link">
                            <img class="icon-list__img" src="{{ asset('assets/icons/bell.svg') }}" alt="notification">
                        </a>
                    </li>
                    <li class="icon-list__item">
                        <a href="#" class="icon-list__link">
                            <img class="icon-list__img" src="{{ asset('assets/icons/setting.svg') }}" alt="notification">
                        </a>
                    </li>
                    <li class="icon-list__item">
                        <form action="{{ action([\App\Http\Controllers\AuthController::class, 'logout']) }}" method="POST">
                            @csrf
                            @method('POST')
                            <button type="submit" class="icon-list__link">
                                <img class="icon-list__img" src="{{ asset('assets/icons/logout.svg') }}" alt="notification">
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <aside class="primary-sidebar">
        <div class="primary-sidebar--header">
            <div class="logo">
                <img src="{{ asset('assets/icons/logo-icon.png') }}" alt="logo">
                <h2 class="primary-sidebar__title">Daily Grow</h2>
            </div>
            <h2 class="primary-sidebar__username">{{ auth()->user()->username }}</h2>
        </div>
        <div class="primary-sidebar__body">
            <div class="sidebar-menu">
                <h2 class="sidebar-menu__title"><span class="sidebar-menu__icon"><img src="{{ asset('assets/icons/Repair Tool.png') }}" alt=""></span>Рассылки</h2>
                <nav class="sidebar-menu-nav">
                    <ul class="sidebar-menu-nav__list">
                        <li class="sidebar-menu-nav__item" data-active="active">
                            <a href="/">Аналитика</a>
                        </li>
                        <li class="sidebar-menu-nav__item">
                            <a href="#">Клиенты</a>
                        </li>
                        <li class="sidebar-menu-nav__item">
                            <a href="#">Рассылки</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </aside>
    <main class="main">
        @yield('content')
    </main>
</body>

</html>
