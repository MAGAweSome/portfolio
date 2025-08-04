<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>
        
        @yield('head')
        <link rel="icon" type="image/png" href="{{ asset('Marcus.png') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-animated-gradient font-sans antialiased text-gray-200">
        <div class="cursor-dot"></div>

        <div id="parallax-container" class="parallax-bg"></div>

        <div class="social-floating fixed top-1/2 right-2 md:right-8 transform -translate-y-1/2 z-50 flex-col space-y-6 hidden md:flex">
            <a href="mailto:marcus@matrek.com" class="text-gray-300 hover:text-purple-400 transition-colors duration-200 text-3xl interactive-element" aria-label="Email">
                <i class="fa-solid fa-envelope"></i>
            </a>
            <a href="https://www.linkedin.com/in/marcus-grau/" target="_blank" class="text-gray-300 hover:text-purple-400 transition-colors duration-200 text-3xl interactive-element" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/MAGAweSome" target="_blank" class="text-gray-300 hover:text-purple-400 transition-colors duration-200 text-3xl interactive-element" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
        </div>

        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                @include('layouts.navigation')
                
                <main class="">
                    @yield('content')
                </main>
    
                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    &#169; {{ date('Y') }} Marcus Grau
                </footer>
            </div>
        </div>
    </body>
</html>