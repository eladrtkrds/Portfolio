<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    @vite(['resources/js/app.tsx', 'resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('portfolio/resources/css/app.css') }}">


</head>
<body>
<header>
    <nav class="navbar">
        <div class="left-section">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/homepage-icon.png') }}" alt="Home" class="nav-icon">
            </a>
            <a href="#" class="nav-link">Projects</a>
            <a href="#" class="nav-link">Contact</a>
        </div>
        <div class="center-section">
            <h1 class="name">Elif Dortkardes</h1>
            <p class="subtitle">Software Developer</p>
        </div>
        <div class="right-section">
            <a href="mailto:elifdortkardes12@gmail.com">
                <img src="{{ asset('images/email-icon.png') }}" alt="Email" class="nav-icon">
            </a>
            <a href="https://www.linkedin.com/in/elif-dortkardes">
                <img src="{{ asset('images/linkedin-icon.png') }}" alt="LinkedIn" class="nav-icon">
            </a>
            <a href="https://github.com/yourprofile">
                <img src="{{ asset('images/github-icon.png') }}" alt="GitHub" class="nav-icon">
            </a>
        </div>
    </nav>
</header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
