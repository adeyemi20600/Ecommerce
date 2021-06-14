<!DOCTYPE html>
<html>

<head>
    @include('layouts.template.head')
    <title>
        {{config('app.name')}} - @yield('title')
    </title>
    @yield('css')
</head>

<body>
    <header class="header--container">
        <div class="header--head">
            <ul class="header--head__list-items">
                <li class="header--head__list-item"><a href="#"><i class="fa fa-phone-square"></i>+234 8171318907</a>
                </li>
                <li class="header--head__list-item"><a href="#"><i
                            class="fa fa-envelope"></i>idrisadeyemi4@gmail.com</a></li>
            </ul>
            <ul class="header--head__list-items">
                <li class="header--head__list-item"><a href="/registration"><i class="fa fa-user-edit"></i>Register</a>
                </li>
                <li class="header--head__list-item"><a href="/login"><i class="fa fa-sign-in-alt"></i>Login</a></li>
            </ul>
        </div>
        <div class="header--menu">
            <div class="header--logo">
                <a href="/home">Spon<span class="header--logo-span">ge</span></a>
            </div>
            <div class="header--search">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <button class="btn btn-outline-primary">Search</button>

                    </div>
                </form>
            </div>
            <div class="header--activities">
                <div class="header--activities-contain">
                    <a href="#"><i class="fa fa-heart"></i>2</a>
                    <a href="#"><i class="fa fa-shopping-bag"></i>2</a>
                    <a href="#"><i class="fa fa-money-bill-wave"></i>100</a>
                </div>
            </div>
        </div>
        <div class="header--categories">
            <i class="fa fa-bars toggle-design"></i>
            <ul class="navbar-nav toggle">
                <li class="nav-item active"><a class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="shirts" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Shirts</a>
                    <div class="dropdown-menu" aria-labelledby="shirts">
                        <ul class="p-0 b-0">
                            <li><a href="#" class="dropdown-item">Ladies shirt</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            <li>
                            <li><a href="#" class="dropdown-item">guys shirt</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            <li>
                            <li><a href="#" class="dropdown-item">sleeky shirt</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a href="#" class="nav-link">Jean</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="shirts" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">Shirts</a>
                    <div class="dropdown-menu" aria-labelledby="shirts">
                        <ul class="p-0 b-0">
                            <li><a href="#" class="dropdown-item">Ladies shirt</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            <li>
                            <li><a href="#" class="dropdown-item">guys shirt</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            <li>
                            <li><a href="#" class="dropdown-item">sleeky shirt</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    @yield('content')
    @include('layouts.footer')
    <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/jquery1.js')}}"></script>
    <script>
    var toggleIcon = document.querySelector('.toggle-design');
    var toggleItems = document.querySelector('.toggle');
    var allListToggle = document.querySelectorAll('.navbar-nav > li');
    toggleIcon.addEventListener('click', () => {
        toggleItems.classList.toggle('toggle');
        allListToggle.forEach(link => link.classList.toggle('fade'));
    });
    </script>


</body>