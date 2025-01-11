<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Snow Day') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (app()->environment() === 'production')
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="{{ config('services.fathom.id') }}" defer></script>
        <!-- / Fathom -->
        @endif
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-mint-300 dark:bg-gray-900">
            <div class="w-full sm:max-w-lg mt-6">
                <div class="">
                    <a href="/" wire:navigate>
                        <img src="/snow-hill-sledders.png" alt="Snow Day">
                    </a>
                </div>
                <div class="px-6 py-6 bg-white dark:bg-gray-100 shadow-md overflow-hidden">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
