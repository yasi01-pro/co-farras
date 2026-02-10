<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Home')</title>

    <!-- ===== CSS TEMPLATE BLISS ===== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-5.0.0-beta2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

<!-- ===== NAVBAR BLISS ===== -->
<header class="header navbar-area">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                <strong style="font-size:24px;">BLISS</strong>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="active" href="#">Home</a></li>
                    <li class="nav-item"><a href="#">About</a></li>
                    <li class="nav-item"><a href="#">Services</a></li>
                    <li class="nav-item"><a href="#">Portfolio</a></li>
                    <li class="nav-item"><a href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<!-- ===== CONTENT ===== -->
@yield('content')

<!-- ===== JS ===== -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
