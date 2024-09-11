<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    {{-- Font type --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="bg-light">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#about">Background</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    {{-- Footer Section with Social Media Links --}}
    <footer class="footer py-4">
        <div class="container text-center">
            <div class="social-links mt-3 d-flex justify-content-center align-items-center flex-wrap">
                <a href="https://linkedin.com/in/luke-kenny-1992abc" target="_blank" class="social-link m-2">
                    <img src="{{ asset('images/logos/linkedin-logo-black.png') }}" alt="LinkedIn" class="social-icon">
                </a>
                <a href="https://github.com/lukenny17" target="_blank" class="social-link m-2">
                    <img src="{{ asset('images/logos/github-logo.png') }}" alt="GitHub" class="social-icon">
                </a>
                <a href="https://www.instagram.com/lukenny17/" target="_blank" class="social-link m-2">
                    <img src="{{ asset('images/logos/instagram-logo.png') }}" alt="Instagram" class="social-icon">
                </a>
            </div>
            <p>© 2024 {{ env('APP_NAME') }}. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/portfolio.js') }}"></script>
</body>

</html>
