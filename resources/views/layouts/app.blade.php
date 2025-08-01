<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>
        
        @yield('head')
        <link rel="icon" type="image/png" href="{{ asset('Marcus.png') }}">


        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            @keyframes move-background {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }

            .bg-animated-gradient {
                background: linear-gradient(-45deg, #0f172a, #1e293b, #0f172a);
                background-size: 400% 400%;
                animation: move-background 15s ease infinite;
            }
        </style>
    </head>

    <body class="bg-animated-gradient font-sans antialiased text-gray-200">
        <div class="relative min-h-screen flex items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    </header>

                <main class="mt-6">
                    @yield('content')
                </main>
    
                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    @cpyrt
                </footer>
            </div>
        </div>
    </body>
</html>