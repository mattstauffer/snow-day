<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $broadcast->school_district . ' - Snow Day Broadcast' }}</title>

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
    <body class="font-sans text-gray-900 antialiased bg-[#000] md:bg-[#c2bcb3] dark:md:bg-[#000]">
        <div class="min-h-screen flex flex-col items-center md:pt-6">
            <div class="md:bg-[url('/tv.png')] dark:md:bg-[url('/tv-black.png')] bg-center bg-contain bg-no-repeat w-full md:w-[1024px] md:h-[924px] flex flex-col items-center ">
                <div class="md:w-[735px] md:mt-[205px] overflow-hidden relative mx-auto my-auto">
                    <video class="w-full" autoplay muted loop playsinline>
                        <source src="/video/news-desk.mp4" type="video/mp4">
                    </video>

                    <marquee class="select-none bg-red-700 text-white px-3 py-1 absolute bottom-4">
                        {{ strtoupper($broadcast->school_district) }} UPDATE:
                        @if ($broadcast->canceled)
                            School has been canceled because of snow for {{ $broadcast->date->format('F j, Y')}}! Turn on the cartoons!
                        @else
                            Sorry, kids, school has <strong>not</strong> been canceled for {{ $broadcast->date->format('F j, Y')}}.
                        @endif
                    </marquee>
                </div>
            </div>
        </div>
    </body>
</html>
