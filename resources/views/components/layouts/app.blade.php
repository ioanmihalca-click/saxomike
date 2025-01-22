<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>{{ $title ?? 'Mihai Stanciuc - Saxofonist Profesionist | SaxoMike' }}</title>
    <meta name="title" content="{{ $title ?? 'Mihai Stanciuc - Saxofonist Profesionist | SaxoMike' }}">
    <meta name="description" content="Saxofonist profesionist pentru evenimente private, cafe concert, jazz & blues. Mihai Stanciuc (SaxoMike) oferă performanțe live memorabile în Cluj-Napoca și împrejurimi.">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Mihai Stanciuc - Saxofonist Profesionist | SaxoMike' }}">
    <meta property="og:description" content="Saxofonist profesionist pentru evenimente private, cafe concert, jazz & blues. Mihai Stanciuc (SaxoMike) oferă performanțe live memorabile în Cluj-Napoca și împrejurimi.">
    <meta property="og:image" content="{{ asset('images/OG-saxomike.jpg') }}">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Mihai Stanciuc - Saxofonist Profesionist | SaxoMike' }}">
    <meta property="twitter:description" content="Saxofonist profesionist pentru evenimente private, cafe concert, jazz & blues. Mihai Stanciuc (SaxoMike) oferă performanțe live memorabile în Cluj-Napoca și împrejurimi.">
    <meta property="twitter:image" content="{{ asset('images/OG-saxomike.jpg') }}">

    <!-- Additional SEO Tags -->
    <meta name="author" content="Mihai Stanciuc">
    <meta name="keywords" content="saxofonist, evenimente private, jazz, blues, cafe concert, saxofon, muzică live, Cluj-Napoca, SaxoMike, Mihai Stanciuc">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Romanian">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="SaxoMike" />
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "MusicGroup",
        "name": "SaxoMike",
        "alternateName": "Mihai Stanciuc",
        "@id": "{{ url('/') }}",
        "image": "{{ asset('images/OG-saxomike.jpg') }}",
        "description": "Saxofonist profesionist pentru evenimente private, cafe concert, jazz & blues. Mihai Stanciuc (SaxoMike) oferă performanțe live memorabile în Cluj-Napoca și împrejurimi.",
        "url": "{{ url('/') }}",
        "telephone": "+40751458644",
        "email": "contact@saxomike.ro",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Cluj-Napoca",
            "addressCountry": "RO"
        },
        "genre": ["Jazz", "Blues", "Ambient Music"],
        "sameAs": [
            "https://facebook.com/saxomike",
            "https://instagram.com/saxomike"
        ]
    }
    </script>

    @livewireStyles
</head>

<body class="min-h-screen bg-gray-100">
    <livewire:navigation />

    {{ $slot }}

    <x-footer />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @livewireScripts
</body>

</html>
