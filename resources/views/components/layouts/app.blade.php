{{-- resources/views/components/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'saxomike.ro' }}</title>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
    <meta name="apple-mobile-web-app-title" content="SaxoMike" />
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body class="min-h-screen bg-gray-100">
    <livewire:navigation />

    {{ $slot }}

    <x-footer />

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
