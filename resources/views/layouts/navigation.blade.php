<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-sm bg-gray-900/50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#home" class="text-white text-2xl font-bold font-serif interactive-element">
            <svg width="60" height="30" viewBox="0 0 250 150" class="h-8">
                <defs>
                    <linearGradient id="logo-gradient-nav" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(80,60,110); stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(160,120,100); stop-opacity:1" />
                    </linearGradient>
                </defs>
                <text id="hero-logo-m" x="50" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="white">M</text>
                <text id="hero-logo-g" x="100" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="url(#logo-gradient-nav)">G</text>
            </svg>
        </a>

        <button id="hamburger-menu-button" class="hamburger-menu-button md:hidden p-2 rounded-lg focus:outline-none interactive-element">
            <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path class="menu-icon-line line-1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                <path class="menu-icon-line line-2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                <path class="menu-icon-line line-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
            </svg>
        </button>

        <ul class="hidden md:flex space-x-8 text-xl main-nav-links">
            <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">About</a></li>
            <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">Projects</a></li>
            <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">Contact</a></li>
        </ul>
    </div>
</nav>

<div id="mobile-nav-menu" class="mobile-nav-menu fixed inset-0 bg-gray-900 bg-opacity-95 z-40 md:hidden">
    <div class="p-4 flex flex-col h-full relative">
        <button id="close-menu-button" class="absolute top-4 right-4 text-white text-4xl font-bold p-2 rounded-full z-50 focus:outline-none interactive-element">
            &times;
        </button>
        <ul class="flex flex-col space-y-8 text-4xl text-center items-center justify-center h-full">
            <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">About</a></li>
            <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">Projects</a></li>
            <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">Contact</a></li>
        </ul>
    </div>
</div>

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