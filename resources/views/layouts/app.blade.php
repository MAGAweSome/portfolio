<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Marcus Grau - Software Developer & Computer Science Graduate from Sheridan College. 8 years of coding background in full-stack web, APIs, and systems engineering.">
        
        <title>@yield('title', 'Marcus Grau | Software Developer & CS Graduate')</title>
        
        @yield('head')
        <link rel="icon" type="image/png" href="{{ asset('Marcus.png') }}">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Google Fonts: Inter & JetBrains Mono -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-[#07090e] font-sans antialiased text-slate-200 min-h-screen flex flex-col relative">
        <!-- Ambient radial background glow -->
        <div class="ambient-glow"></div>

        <!-- Floating Quick-Contact Dock (Desktop) -->
        <aside aria-label="Social links" class="fixed bottom-8 right-6 z-40 hidden lg:flex flex-col items-center space-y-3 p-2 rounded-2xl bg-slate-900/70 backdrop-blur-md border border-slate-800/80 shadow-xl shadow-black/40">
            <a href="https://linkedin.com/in/marcus-grau" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:bg-violet-600/30 transition-all duration-200" title="LinkedIn Profile" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin-in text-lg"></i>
            </a>
            <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:bg-violet-600/30 transition-all duration-200" title="GitHub Profile" aria-label="GitHub">
                <i class="fa-brands fa-github text-lg"></i>
            </a>
            <button onclick="copyToClipboard('graum@sheridancollege.ca', 'Email copied!')" class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-400 hover:text-white hover:bg-violet-600/30 transition-all duration-200" title="Copy Email (graum@sheridancollege.ca)" aria-label="Copy Email">
                <i class="fa-solid fa-envelope text-lg"></i>
            </button>
            <div class="w-4 h-px bg-slate-800 my-1"></div>
            <a href="#home" class="w-10 h-10 rounded-xl flex items-center justify-center text-slate-500 hover:text-violet-400 hover:bg-slate-800/60 transition-all duration-200" title="Scroll to Top" aria-label="Scroll to top">
                <i class="fa-solid fa-arrow-up text-sm"></i>
            </a>
        </aside>

        <!-- Navigation Bar -->
        @include('layouts.navigation')

        <!-- Main Page Content -->
        <div class="flex-grow relative z-10">
            @yield('content')
        </div>

        <!-- Global Toast Container -->
        <div id="copy-toast" class="copy-toast"></div>

        <!-- Footer -->
        <footer class="relative z-10 border-t border-slate-800/80 bg-slate-950/60 backdrop-blur-md py-12 mt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center space-x-3">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-violet-600 to-indigo-600 flex items-center justify-center font-bold text-white text-sm shadow-md shadow-violet-900/30">
                        MG
                    </div>
                    <div>
                        <p class="font-semibold text-white text-sm">Marcus Grau</p>
                        <p class="text-xs text-slate-400">Software Developer &bull; Woodstock, ON</p>
                    </div>
                </div>

                <p class="text-xs text-slate-400 text-center">
                    &copy; {{ date('Y') }} Marcus Grau. Built with Laravel, Tailwind CSS & Vite.
                </p>

                <div class="flex items-center space-x-4">
                    <a href="https://linkedin.com/in/marcus-grau" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-violet-400 transition-colors text-sm" aria-label="LinkedIn">
                        <i class="fa-brands fa-linkedin text-base"></i>
                    </a>
                    <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-violet-400 transition-colors text-sm" aria-label="GitHub">
                        <i class="fa-brands fa-github text-base"></i>
                    </a>
                    <a href="mailto:graum@sheridancollege.ca" class="text-slate-400 hover:text-violet-400 transition-colors text-sm" aria-label="Email">
                        <i class="fa-solid fa-envelope text-base"></i>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>