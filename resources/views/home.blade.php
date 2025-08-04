@extends('layouts.app')

@section('title', 'Marcus Grau')

@section('content')
    <main class="relative z-10 flex flex-col items-center justify-center">
        <section id="home" class="min-h-screen relative flex flex-col items-center justify-center px-4 scroll-section">
            <svg width="250" height="150" viewBox="0 0 250 150" class="mb-8">
                <defs>
                    <linearGradient id="logo-gradient" x1="0%" y1="0%" y2="100%">
                        <stop offset="0%" style="stop-color:rgb(80,60,110); stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(160,120,100); stop-opacity:1" />
                    </linearGradient>
                </defs>
                <text id="hero-logo-m" x="50" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="white">M</text>
                <text id="hero-logo-g" x="100" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="url(#logo-gradient)">G</text>
            </svg>

            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold tracking-tighter text-white text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 2s;">Marcus&nbsp;</span>
                <span class="clip-reveal" style="animation-delay: 2.5s;">Grau</span>
            </h1>
            <p class="mt-4 text-2xl md:text-3xl lg:text-4xl font-light text-gray-300 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 3s;">Software Developer</span>
            </p>
        </section>

        <section id="about" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center scroll-section">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 4s;">About Me</span>
            </h2>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl text-center mb-8 font-serif">
                <span class="clip-reveal full-width" style="animation-delay: 4.5s;">
                    With a strong foundation in programming, I am a dedicated software developer who thrives on turning complex challenges into elegant solutions. My expertise spans a variety of languages and technologies, allowing me to build robust and efficient applications from the ground up. I am constantly expanding my knowledge, staying current with industry trends and new technologies to ensure my work is innovative and forward-thinking.
                </span>
            </p>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl text-center mb-8 font-serif">
                <span class="clip-reveal full-width" style="animation-delay: 5s;">
                    My approach to development is defined by a meticulous attention to detail. I believe that the quality of code lies in the small things—a clean architecture, clear documentation, and thorough testing. This focus on precision not only results in more reliable software but also makes for a better user experience. I am highly organized and excel at coordination, managing tasks and resources to ensure projects are delivered on time and to the highest standard.
                </span>
            </p>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl text-center font-serif">
                <span class="clip-reveal full-width" style="animation-delay: 5.5s;">
                    I am a firm believer in the power of good teamwork. I am a collaborative and communicative professional who enjoys working closely with colleagues to achieve a shared vision. I am adept at giving and receiving constructive feedback, and I find that the best projects are built through a collective effort of diverse skills and perspectives. Whether working on a small team or a large-scale project, my goal is to foster a positive and productive environment where everyone can contribute their best work.
                </span>
            </p>
        </section>

        <section id="projects" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center scroll-section">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 6s;">Projects</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-5xl">
                <a href="#" class="project-card p-8 rounded-lg shadow-lg block text-left bg-gray-800 border border-gray-700 interactive-element">
                    <h3 class="text-3xl font-bold text-white mb-2 font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 6.5s;">Pickuppuck</span>
                    </h3>
                    <p class="text-gray-400 mb-4 text-base md:text-lg font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 6.8s;">
                            A comprehensive full-stack web application designed to streamline the management of a pickup hockey league. This platform automates the tracking of attendance, ice time, ice locations, and player payments, replacing cumbersome manual processes with a user-friendly and efficient digital solution.
                        </span>
                    </p>
                    <p class="text-purple-400 font-bold text-sm md:text-base font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 7.1s;">
                            Tech Stack: PHP, Laravel, MySQL, JavaScript
                        </span>
                    </p>
                </a>
                <a href="#" class="project-card p-8 rounded-lg shadow-lg block text-left bg-gray-800 border border-gray-700 interactive-element">
                    <h3 class="text-3xl font-bold text-white mb-2 font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 7.4s;">NAC-Chatechism Saver</span>
                    </h3>
                    <p class="text-gray-400 mb-4 text-base md:text-lg font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 7.7s;">
                            A powerful Python bot engineered to automate the process of scraping and downloading all MP3 files from a specific website. The bot meticulously organizes the downloaded content into a neatly structured and intelligently named file system, demonstrating a strong command of automation and data management.
                        </span>
                    </p>
                    <p class="text-purple-400 font-bold text-sm md:text-base font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 8.0s;">
                            Tech Stack: Python, BeautifulSoup, Requests
                        </span>
                    </p>
                </a>
                <a href="#" class="project-card p-8 rounded-lg shadow-lg block text-left bg-gray-800 border border-gray-700 interactive-element">
                    <h3 class="text-3xl font-bold text-white mb-2 font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 8.3s;">Jordans Mobile Fleet Service</span>
                    </h3>
                    <p class="text-gray-400 mb-4 text-base md:text-lg font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 8.6s;">
                            A professional and responsive website developed for a mobile truck mechanic business. This site serves as a digital storefront, detailing the services offered and providing a straightforward contact section for client inquiries. It significantly enhances the business's online presence and professional image.
                        </span>
                    </p>
                    <p class="text-purple-400 font-bold text-sm md:text-base font-serif">
                        <span class="clip-reveal full-width" style="animation-delay: 8.9s;">
                            Tech Stack: HTML, CSS (Tailwind CSS), JavaScript
                        </span>
                    </p>
                </a>
            </div>
        </section>

        <section id="contact" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center scroll-section">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 9.2s;">Contact</span>
            </h2>
            <div class="text-center mb-12">
                <p class="text-xl md:text-2xl text-gray-300 font-serif">
                    <span class="clip-reveal full-width" style="animation-delay: 9.5s;">
                        Feel free to reach out to me!
                    </span>
                </p>
            </div>
            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8 w-full max-w-3xl md:mr-32 lg:mr-0">
                <a href="mailto:marcus@matrek.com" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-solid fa-envelope text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">Email</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">marcus@matrek.com</p>
                </a>

                <a href="https://www.linkedin.com/in/marcus-grau/" target="_blank" rel="noopener noreferrer" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-brands fa-linkedin-in text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">LinkedIn</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">/in/marcus-grau</p>
                </a>

                <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-brands fa-github text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">GitHub</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">/MAGAweSome</p>
                </a>
            </div>
        </section>
    </main>
@endsection