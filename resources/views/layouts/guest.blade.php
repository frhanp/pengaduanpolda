<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased 
               min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 
               bg-gradient-to-br from-blue-50 to-blue-100">
    <div class="mb-6">
        <a href="/">
            <x-application-logo class="w-24 h-24 fill-current text-blue-600 drop-shadow-md" />
        </a>
    </div>

    <div class="w-full sm:max-w-md px-6 py-4 
                backdrop-blur-md bg-blue-50/60 
                shadow-2xl overflow-hidden sm:rounded-2xl 
                transform transition-all hover:shadow-blue-500/50">
        {{ $slot }}
    </div>
</body>
</html>
