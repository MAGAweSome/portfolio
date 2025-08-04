<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcus Grau</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Inter font from Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

        /* Custom cursor styling */
        body {
            cursor: none; /* Hide the default cursor */
            font-family: 'Inter', sans-serif;
            background-color: #0d0d0d;
        }

        /* Hide scrollbars */
        html, body {
            overflow-x: hidden;
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
        html::-webkit-scrollbar, body::-webkit-scrollbar {
            display: none; /* Chrome, Safari, and Opera */
        }

        .cursor-dot {
            width: 12px;
            height: 12px;
            background-color: white;
            border-radius: 50%;
            position: fixed;
            transform: translate(-50%, -50%);
            pointer-events: none;
            z-index: 1000;
            transition: width 0.2s, height 0.2s, background-color 0.2s, opacity 0.2s;
            opacity: 0.8;
            mix-blend-mode: difference;
        }

        .cursor-dot.active {
            width: 32px;
            height: 32px;
            background-color: #8B5CF6;
        }

        /* Prevent default cursor on interactive elements, letting the custom cursor take over */
        a, button, .interactive-element {
            cursor: none;
        }

        /* SVG logo animation using clip-path */
        #hero-logo-m, #hero-logo-g {
            opacity: 0;
        }

        #hero-logo-m {
            clip-path: inset(0 100% 0 0);
            animation: clip-text-half-m 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        @keyframes clip-text-half-m {
            0% {
                clip-path: inset(0 100% 0 0);
                opacity: 0;
            }
            1% {
                opacity: 1;
            }
            100% {
                clip-path: inset(0 50% 0 0);
                opacity: 1;
            }
        }

        #hero-logo-g {
            animation-delay: 0.8s;
            clip-path: inset(0 100% 0 0);
            animation: clip-text-logo 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        @keyframes clip-text-logo {
            0% {
                clip-path: inset(0 100% 0 0);
                opacity: 0;
            }
            1% {
                opacity: 1;
            }
            100% {
                clip-path: inset(0 0 0 0);
                opacity: 1;
            }
        }
        
        /* Text reveal animation using clip-path */
        .clip-reveal {
            opacity: 0;
            animation: clip-text 1.5s cubic-bezier(0.65, 0, 0.35, 1) forwards;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            clip-path: inset(0 100% 0 0);
        }
        
        .clip-reveal.full-width {
            white-space: normal;
        }

        @keyframes clip-text {
            0% {
                clip-path: inset(0 100% 0 0);
                opacity: 0;
            }
            1% {
                opacity: 1;
            }
            100% {
                clip-path: inset(0 0 0 0);
                opacity: 1;
            }
        }

        /* Parallax shapes */
        .parallax-bg {
            /* Changed to fixed position to always cover the viewport */
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }
        
        .parallax-bg .parallax-item {
            pointer-events: auto; /* Allow clicks on the bubbles */
            cursor: none;
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            background: linear-gradient(135deg, #4F46E5, #8B5CF6);
            /* Add a blur effect to the bubbles */
            filter: blur(2px); 
        }

        /* Animation for the "popping" bubbles */
        .pop-animation {
            animation: pop-bubble 0.5s ease-out forwards;
        }

        @keyframes pop-bubble {
            0% {
                transform: scale(1);
                opacity: 0.15;
            }
            100% {
                transform: scale(2);
                opacity: 0;
            }
        }

        /* Updated animation for the hamburger menu */
        .hamburger-menu-button.is-active .menu-icon-line.line-1 {
            transform: translateY(8px) rotate(45deg);
        }
        .hamburger-menu-button.is-active .menu-icon-line.line-2 {
            opacity: 0;
        }
        .hamburger-menu-button.is-active .menu-icon-line.line-3 {
            transform: translateY(-8px) rotate(-45deg);
        }

        .menu-icon-line {
            transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55), opacity 0.4s ease-in-out;
            transform-origin: center;
        }
        
        /* Mobile menu styling */
        .mobile-nav-menu {
            transform: translateX(100%);
            transition: transform 0.4s ease-in-out;
        }
        .mobile-nav-menu.is-active {
            transform: translateX(0);
        }

        /* Add a subtle hover effect to the projects and contact cards */
        .project-card, .contact-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .project-card:hover, .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
            background-color: #1f2937;
        }

        /* Custom scroll-snapping effect for sections */
        .scroll-container {
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            height: 100vh;
        }

        .scroll-section {
            scroll-snap-align: start;
        }
    </style>
    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="antialiased">
    <!-- Custom Mouse Cursor -->
    <div class="cursor-dot"></div>

    <!-- Parallax Background Layer (Dynamically populated by JS) -->
    <!-- Moved the parallax container to be a direct child of the body and fixed to the viewport -->
    <div id="parallax-container" class="parallax-bg"></div>

    <!-- Navigation Bar - Updated to use the logo and new responsive menu structure -->
    <nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-sm bg-gray-900/50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <!-- Logo/Name - Replaced "Marcus Grau" text with the SVG logo -->
            <a href="#home" class="text-white text-2xl font-bold font-serif interactive-element">
                <!-- SVG Logo for the nav bar -->
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
            
            <!-- Hamburger Menu Button for mobile -->
            <button id="hamburger-menu-button" class="hamburger-menu-button md:hidden p-2 rounded-lg focus:outline-none interactive-element">
                <svg class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path class="menu-icon-line line-1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                    <path class="menu-icon-line line-2" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                    <path class="menu-icon-line line-3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
                </svg>
            </button>a
            
            <!-- Navigation Links (visible on desktop) -->
            <ul class="hidden md:flex space-x-8 text-xl main-nav-links">
                <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">About</a></li>
                <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">Projects</a></li>
                <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200 font-serif interactive-element">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Mobile Navigation Menu - Updated to the new structure with a close button -->
    <div id="mobile-nav-menu" class="mobile-nav-menu fixed inset-0 bg-gray-900 bg-opacity-95 z-40 md:hidden">
        <div class="p-4 flex flex-col h-full relative">
            <!-- Close button for mobile menu -->
            <button id="close-menu-button" class="absolute top-4 right-4 text-white text-4xl font-bold p-2 rounded-full z-50 focus:outline-none interactive-element">
                &times;
            </button>
            <!-- Mobile Menu Links -->
            <ul class="flex flex-col space-y-8 text-4xl text-center items-center justify-center h-full">
                <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">About</a></li>
                <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">Projects</a></li>
                <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200 interactive-element">Contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Floating Social Media Bar -->
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

    <!-- Main Content -->
    <main class="relative z-10 flex flex-col items-center justify-center pt-40">
        <!-- Hero Section -->
        <section id="home" class="min-h-screen relative flex flex-col items-center justify-center px-4 scroll-section">
            <!-- SVG Logo "MG" -->
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

            <!-- Animated Name and Profession -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold tracking-tighter text-white text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 2s;">Marcus&nbsp;</span>
                <span class="clip-reveal" style="animation-delay: 2.5s;">Grau</span>
            </h1>
            <p class="mt-4 text-2xl md:text-3xl lg:text-4xl font-light text-gray-300 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 3s;">Software Developer</span>
            </p>
        </section>

        <!-- About Section -->
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

        <!-- Projects Section -->
        <section id="projects" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center scroll-section">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center font-serif">
                <span class="clip-reveal" style="animation-delay: 6s;">Projects</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full max-w-5xl">
                <!-- Project 1: Pickuppuck -->
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
                <!-- Project 2: NAC-Chatechism Saver -->
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
                <!-- Project 3: JordansMobileFleetService -->
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

        <!-- Contact Section -->
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
            
            <div class="flex flex-col md:flex-row space-y-6 md:space-y-0 md:space-x-8 w-full max-w-3xl">
                <!-- Email Card -->
                <a href="mailto:marcus@matrek.com" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-solid fa-envelope text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">Email</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">marcus@matrek.com</p>
                </a>
                
                <!-- LinkedIn Card -->
                <a href="https://www.linkedin.com/in/marcus-grau/" target="_blank" rel="noopener noreferrer" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-brands fa-linkedin-in text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">LinkedIn</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">/in/marcus-grau</p>
                </a>

                <!-- GitHub Card -->
                <a href="https://github.com/MAGAweSome" target="_blank" rel="noopener noreferrer" class="contact-card p-6 md:p-8 rounded-xl shadow-lg flex flex-col items-center text-center flex-1 bg-gray-800 border border-gray-700 interactive-element">
                    <i class="fa-brands fa-github text-purple-400 text-4xl mb-4"></i>
                    <h3 class="text-xl md:text-2xl font-bold text-white mb-2 font-serif">GitHub</h3>
                    <p class="text-gray-400 text-base md:text-lg font-serif">/MAGAweSome</p>
                </a>
            </div>
        </section>

        <!-- Footer Section -->
        <footer class="w-full text-center py-10 text-gray-500 font-serif">
            <p class="text-sm md:text-base">
                <span class="clip-reveal full-width" style="animation-delay: 10s;">
                    <span id="current-year"></span> &copy; Marcus Grau
                </span>
            </p>
        </footer>
    </main>

    <script>
        window.onload = function() {
            // Get all necessary elements
            const cursor = document.querySelector('.cursor-dot');
            const parallaxContainer = document.getElementById('parallax-container');
            const hamburgerButton = document.getElementById('hamburger-menu-button');
            const mobileMenu = document.getElementById('mobile-nav-menu');
            const closeMenuButton = document.getElementById('close-menu-button');
            const mobileLinks = document.querySelectorAll('#mobile-nav-menu a');
            const interactiveElements = document.querySelectorAll('.interactive-element');
            const currentYearSpan = document.getElementById('current-year');

            // Set the current year in the footer
            if (currentYearSpan) {
                currentYearSpan.textContent = new Date().getFullYear();
            }

            // Custom cursor functionality
            if (cursor) {
                window.addEventListener('mousemove', (e) => {
                    cursor.style.left = `${e.clientX}px`;
                    cursor.style.top = `${e.clientY}px`;
                });

                interactiveElements.forEach(element => {
                    element.addEventListener('mouseover', () => {
                        cursor.classList.add('active');
                    });
                    element.addEventListener('mouseout', () => {
                        cursor.classList.remove('active');
                    });
                });
            }

            // --- Dynamic Floating Bubbles and Parallax Functionality ---
            
            // Function to create a new floating bubble element
            function createFloatingBubble(initialPlacement = 'bottom') {
                const item = document.createElement('div');
                item.classList.add('parallax-item');

                const size = Math.random() * 80 + 20; // Random size between 20px and 100px
                item.style.width = `${size}px`;
                item.style.height = `${size}px`;
                
                // Set initial position based on the requested placement
                if (initialPlacement === 'random') {
                    // Place bubbles randomly on the screen at the start
                    item.dataset.yPos = Math.random() * window.innerHeight;
                } else {
                    // Place new bubbles at the bottom to float up
                    item.dataset.yPos = window.innerHeight + Math.random() * 100;
                }

                item.dataset.initialX = Math.random() * window.innerWidth;
                item.dataset.speed = Math.random() * 0.4 + 0.1; // Float speed

                item.style.left = `${item.dataset.initialX}px`;
                item.style.top = `${item.dataset.yPos}px`;
                
                // Add a hover effect to the bubbles themselves to activate the custom cursor
                item.addEventListener('mouseover', () => cursor.classList.add('active'));
                item.addEventListener('mouseout', () => cursor.classList.remove('active'));

                // Add click listener for the pop effect, which now resets the bubble
                item.addEventListener('click', (e) => {
                    e.stopPropagation();
                    // Call the function to pop and reset the bubble
                    popAndReset(item);
                });

                parallaxContainer.appendChild(item);
            }

            // Function to handle the bubble pop animation and reset it to its original state
            function popAndReset(item) {
                // Prevent multiple animations from running at once
                if (item.classList.contains('pop-animation')) {
                    return; 
                }

                // Add the animation class to trigger the pop animation
                item.classList.add('pop-animation');
                
                // Listen for the animation to finish
                item.addEventListener('animationend', () => {
                    // Reset position and properties to restart the floating animation
                    item.classList.remove('pop-animation');
                    item.dataset.yPos = window.innerHeight + Math.random() * 100;
                    item.dataset.initialX = Math.random() * window.innerWidth;
                    item.style.left = `${item.dataset.initialX}px`;
                    item.style.width = `${Math.random() * 80 + 20}px`;
                    item.style.height = `${parseFloat(item.style.width)}px`;
                }, { once: true });
            }

            // Initially populate the background with bubbles at random positions
            for (let i = 0; i < 20; i++) {
                createFloatingBubble('random');
            }

            // Use requestAnimationFrame for smoother parallax and floating
            let mouseX = window.innerWidth / 2;
            let mouseY = window.innerHeight / 2;

            window.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
            });
            
            // Animation loop for floating bubbles and mouse parallax
            function animate() {
                const parallaxItems = document.querySelectorAll('.parallax-item');
                
                parallaxItems.forEach(item => {
                    // Only update position if not currently popping
                    if (!item.classList.contains('pop-animation')) {
                        const speed = parseFloat(item.dataset.speed);
                        
                        // Vertical floating motion (bubble moves up)
                        item.dataset.yPos -= speed; 
                        
                        // If the bubble has floated off the top of the screen, reset its position to the bottom
                        if (item.dataset.yPos < -item.offsetHeight) {
                            item.dataset.yPos = window.innerHeight + Math.random() * 100;
                            item.dataset.initialX = Math.random() * window.innerWidth;
                            item.style.left = `${item.dataset.initialX}px`;
                            item.style.width = `${Math.random() * 80 + 20}px`;
                            item.style.height = `${parseFloat(item.style.width)}px`;
                        }
                        
                        // Parallax effect from mouse position
                        const mouseParallaxX = (window.innerWidth / 2 - mouseX) / 100 * speed * 2;
                        const mouseParallaxY = (window.innerHeight / 2 - mouseY) / 100 * speed * 2;
                        
                        // Apply position and parallax using transform for better performance
                        item.style.transform = `translate(${mouseParallaxX}px, ${mouseParallaxY}px)`;
                        item.style.top = `${item.dataset.yPos}px`;
                    }
                });
                
                requestAnimationFrame(animate);
            }

            // Initial call to start the animation loop
            animate();

            // Mobile menu toggle functionality
            if (hamburgerButton && mobileMenu && closeMenuButton) {
                // Function to toggle the menu's open/close state
                function toggleMenu() {
                    mobileMenu.classList.toggle('is-active');
                    hamburgerButton.classList.toggle('is-active');
                    // Toggle overflow on the body to prevent scrolling when menu is open
                    document.body.style.overflow = mobileMenu.classList.contains('is-active') ? 'hidden' : 'auto';
                }

                // Event listener to open the menu
                hamburgerButton.addEventListener('click', toggleMenu);

                // Event listener to close the menu
                closeMenuButton.addEventListener('click', toggleMenu);

                // Add event listeners to mobile links to close menu on click
                mobileLinks.forEach(link => {
                    link.addEventListener('click', toggleMenu);
                });
            }
        };
    </script>
</body>
</html>