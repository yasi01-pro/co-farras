<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

                <!-- LOGO -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong style="font-size:24px;">PCR</strong>
                </a>

                <!-- TOGGLER -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>

                <!-- MENU -->
                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ request()->is('kunjungan') ? 'active' : '' }}"
                                href="{{ route('kunjungan.form') }}">
                                Kunjungan
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Services</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Portfolio</a>
                        </li>

                        <li class="nav-item">
                            <a href="#">Contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- ===== CONTENT AREA ===== -->
    @yield('content')

    <!-- ===== FOOTER ===== -->
    <footer class="footer text-center mt-5">
        <div class="container">
            <p class="mb-0">
                © {{ date('Y') }} Politeknik Caltex Riau |
                Company Orientation Project
            </p>
        </div>
    </footer>

    <!-- ===== JS TEMPLATE ===== -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
