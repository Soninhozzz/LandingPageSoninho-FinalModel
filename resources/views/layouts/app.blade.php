<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Soninho')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Montserrat:wght@400;
    600&display=swap" rel="stylesheet">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Soninho</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#problema">O Problema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#solucao">A Solução</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeria">O App</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#FAQ">FAQ</a>
                    </li>
                </ul>
            </div>
    </nav>

    <main>
        @yield('content')
    </main>
    
</body>
</html>