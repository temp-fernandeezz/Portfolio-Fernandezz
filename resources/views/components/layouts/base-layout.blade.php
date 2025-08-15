<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- SEO META TAGS --}}
    <meta name="description" content="Portfólio de Fernanda Fernandes, desenvolvedora Full Stack com experiência em Front-end e Back-end. Confira meus projetos e habilidades.">
    <meta name="keywords" content="Portfolio, Fernanda Fernandes, Desenvolvedora, Front-end, Back-end, Full Stack, Web Developer">
    <meta name="author" content="Fernanda Fernandes">
    {{-- <meta name="robots" content="index, follow"> --}}

    {{-- OPEN GRAPH (compartilhamento em redes sociais) --}}
    {{-- <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description"
        content="A Experiência Local é uma solução inovadora que conecta empresas locais e consumidores através de uma estratégia integrada entre o mundo físico e digital.">
    <meta property="og:image" content="{{ asset('build/images/og-image.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website"> --}}

    {{-- FAVICON --}}
    <link rel="icon" href="{{ Vite::asset('resources/images/icons8-star-windows-11-color-16.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ Vite::asset('resources/images/icons8-star-windows-11-color-16.png') }}">

    {{-- TÍTULO DINÂMICO --}}
    <title>Portfólio - @yield('title', 'Home')</title>
    {{-- <title>Portfólio Fernanda Fernandes</title> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>

    {{-- Google Fonts --}}

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body class="vinheta">
    <x-parts.header />

    <main>
        {{ $slot }}
    </main>

    <x-parts.footer />

    @vite('resources/js/app.js')
</body>
<script async src="//www.instagram.com/embed.js"></script>
</html>
