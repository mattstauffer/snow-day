
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Not Found</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @if (app()->environment() === 'production')
        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://cdn.usefathom.com/script.js" data-site="{{ config('services.fathom.id') }}" defer></script>
        <!-- / Fathom -->
        @endif
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-mint-100 dark:bg-mint-900 sm:items-center sm:pt-0">
            <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
                <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
                    <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                        whoops!
                    </div>

                    <div class="ml-4 text-lg text-gray-500 tracking-wider">
                        That URL didn't match. Maybe it expired, or maybe you want to try typing it again?
                    </div>
                </div>
                <div class="text-lg text-center mt-8 text-gray-500">
                    <a href="{{ route('broadcasts.create' )}}" class="underline">Create a new broadcast</a>
                </div>
            </div>
        </div>
    </body>
</html>
