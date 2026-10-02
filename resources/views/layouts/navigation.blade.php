<header class="fixed top-0 left-0 w-full z-50 transition-all duration-300 backdrop-blur-md bg-slate-950/75 border-b border-slate-800/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!-- Logo / Monogram -->
        <a href="#home" class="flex items-center space-x-3 group" aria-label="Marcus Grau Home">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-violet-600 via-indigo-600 to-purple-500 p-px shadow-lg shadow-violet-950/40 group-hover:shadow-violet-700/50 transition-all duration-300">
                <div class="w-full h-full bg-[#090d16] rounded-[11px] flex items-center justify-center font-bold text-white tracking-tighter text-base group-hover:bg-transparent transition-colors">
                    MG
                </div>
            </div>
            <div class="flex flex-col">
                <span class="font-bold text-white text-base tracking-tight leading-tight group-hover:text-violet-300 transition-colors">
                    Marcus Grau
                </span>
                <span class="text-[11px] text-slate-400 font-mono leading-tight">
                    Software Developer
                </span>
            </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center space-x-1" aria-label="Primary Navigation">
            <a href="#about" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">About</a>
            <a href="#experience" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">Experience</a>
            <a href="#projects" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">Projects</a>
            <a href="#skills" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">Skills</a>
            <a href="#education" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">Education</a>
            <a href="#contact" class="nav-link px-3.5 py-2 text-sm font-medium text-slate-300 hover:text-white hover:bg-slate-800/40 rounded-lg transition-all duration-150">Contact</a>
        </nav>

        <!-- Header Actions -->
        <div class="hidden sm:flex items-center space-x-3">
            <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800/60 rounded-lg transition-colors" title="GitHub Profile">
                <i class="fa-brands fa-github text-lg"></i>
            </a>
            <a href="https://linkedin.com/in/marcus-grau" target="_blank" rel="noopener noreferrer" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800/60 rounded-lg transition-colors" title="LinkedIn Profile">
                <i class="fa-brands fa-linkedin text-lg"></i>
            </a>
            <a href="#contact" class="btn-primary text-xs py-2 px-4 shadow-sm">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Get In Touch</span>
            </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button id="hamburger-menu-button" type="button" aria-label="Toggle navigation menu" class="lg:hidden p-2 rounded-lg text-slate-300 hover:text-white hover:bg-slate-800/60 focus:outline-none">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path class="menu-line-open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div id="mobile-nav-menu" class="mobile-nav-menu fixed inset-0 z-50 lg:hidden pointer-events-none transition-opacity duration-300 opacity-0 [&.is-active]:pointer-events-auto [&.is-active]:opacity-100">
    <!-- Backdrop overlay -->
    <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-md"></div>
    
    <!-- Drawer content -->
    <div class="relative w-full max-w-sm h-full ml-auto bg-[#090d16] border-l border-slate-800/80 shadow-2xl p-6 flex flex-col justify-between overflow-y-auto">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-slate-800">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-lg bg-gradient-to-tr from-violet-600 to-indigo-600 flex items-center justify-center font-bold text-white text-sm">
                        MG
                    </div>
                    <span class="font-bold text-white">Marcus Grau</span>
                </div>
                <button id="close-menu-button" type="button" class="p-2 text-slate-400 hover:text-white hover:bg-slate-800 rounded-lg">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <nav class="flex flex-col space-y-1.5 mt-6" aria-label="Mobile Navigation">
                <a href="#home" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-house w-5 text-slate-400"></i>
                    <span>Home</span>
                </a>
                <a href="#about" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-user w-5 text-slate-400"></i>
                    <span>About Me</span>
                </a>
                <a href="#experience" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-briefcase w-5 text-slate-400"></i>
                    <span>Experience</span>
                </a>
                <a href="#projects" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-folder-open w-5 text-slate-400"></i>
                    <span>Projects</span>
                </a>
                <a href="#skills" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-code w-5 text-slate-400"></i>
                    <span>Skills</span>
                </a>
                <a href="#education" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-graduation-cap w-5 text-slate-400"></i>
                    <span>Education</span>
                </a>
                <a href="#contact" class="mobile-nav-link flex items-center space-x-3 px-3 py-2.5 rounded-lg text-slate-200 hover:bg-slate-800/60 hover:text-violet-400 font-medium">
                    <i class="fa-solid fa-envelope w-5 text-slate-400"></i>
                    <span>Contact</span>
                </a>
            </nav>
        </div>

        <div class="pt-6 border-t border-slate-800 space-y-4">
            <a href="#contact" class="mobile-nav-link btn-primary w-full justify-center text-sm py-2.5">
                <i class="fa-solid fa-paper-plane text-xs"></i>
                <span>Get In Touch</span>
            </a>
            <div class="flex items-center justify-around pt-2">
                <a href="https://linkedin.com/in/marcus-grau" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white p-2">
                    <i class="fa-brands fa-linkedin text-xl"></i>
                </a>
                <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white p-2">
                    <i class="fa-brands fa-github text-xl"></i>
                </a>
                <a href="mailto:graum@sheridancollege.ca" class="text-slate-400 hover:text-white p-2">
                    <i class="fa-solid fa-envelope text-xl"></i>
                </a>
            </div>
        </div>
    </div>
</div>