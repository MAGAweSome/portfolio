@extends('layouts.app')

@section('title', 'Marcus Grau')

@section('head')
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* General page setup */
        html, body {
            font-family: 'Times New Roman', serif;
            background-color: #0d0d0d;
            scroll-behavior: smooth; /* Smooth scrolling for navigation links */
        }
        
        /* Hide the vertical scrollbar across all major browsers */
        html, body {
            overflow-x: hidden; /* Prevent horizontal overflow */
            -ms-overflow-style: none; /* IE and Edge */
            scrollbar-width: none; /* Firefox */
        }
        html::-webkit-scrollbar, body::-webkit-scrollbar {
            display: none; /* Chrome, Safari, and Opera */
        }

        /* Custom cursor styling */
        body {
            cursor: none; /* Hide the default cursor */
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

        /* Custom cursor style on hover */
        .cursor-dot.active {
            width: 24px;
            height: 24px;
            background-color: #8B5CF6;
        }

        /* Hide the default cursor pointer on navigation links */
        nav a {
            cursor: none;
        }

        /* The SVG logo animation using clip-path */
        #logo-m-text, #logo-g-text {
            opacity: 0;
            clip-path: inset(0 100% 0 0);
            animation: clip-text-logo 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        #logo-m-text {
            opacity: 0;
            clip-path: inset(0 50% 0 0);
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


        #logo-g-text {
            animation-delay: 0.8s;
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

        /* Background parallax shapes */
        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }
        
        /* Make parallax items clickable again and hide the default cursor */
        .parallax-bg .parallax-item {
            pointer-events: auto;
            cursor: none;
        }

        .parallax-item {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            background: linear-gradient(135deg, #4F46E5, #8B5CF6);
            transition: transform 0.1s ease-out;
        }

        /* New animation for the "popping" bubbles */
        .pop-animation {
            animation: pop-bubble 0.8s cubic-bezier(0.25, 1, 0.5, 1) forwards;
        }

        @keyframes pop-bubble {
            0% {
                transform: scale(1);
                opacity: 0.15;
            }
            100% {
                transform: scale(3);
                opacity: 0;
            }
        }
    </style>

    <script>
        window.onload = function() {
            // Log to console to confirm the script is running
            console.log('Script has loaded and is ready to execute.');

            const cursor = document.querySelector('.cursor-dot');
            const parallaxItems = document.querySelectorAll('.parallax-item');
            const navLinks = document.querySelectorAll('nav a');
            
            // Set up a custom cursor
            if (cursor) {
                console.log('Cursor dot element found.');
                // Update the cursor's position directly on mousemove
                window.addEventListener('mousemove', (e) => {
                    cursor.style.left = `${e.clientX}px`;
                    cursor.style.top = `${e.clientY}px`;
                });
            } else {
                console.error('Cursor dot element not found. Please check your HTML.');
            }

            // Remove the active class toggle for nav links to keep the cursor style consistent
            if (navLinks.length > 0 && cursor) {
                console.log('Nav links found. Adding hover listeners.');
                navLinks.forEach(link => {
                    link.addEventListener('mouseover', () => {
                        // The custom cursor dot will not change size or color on hover
                    });
                    link.addEventListener('mouseout', () => {
                        // The custom cursor dot will not change size or color on hover
                    });
                });
            }

            // Parallax effect on mouse move
            if (parallaxItems.length > 0) {
                console.log('Parallax items found.');
                window.addEventListener('mousemove', (e) => {
                    const x = (window.innerWidth / 2 - e.clientX) / 50;
                    const y = (window.innerHeight / 2 - e.clientY) / 50;
                    
                    parallaxItems.forEach(item => {
                        const speed = item.dataset.speed;
                        const translateX = x * speed / 10;
                        const translateY = y * speed / 10;
                        
                        // Let the pop-animation's transform property take precedence
                        if (!item.classList.contains('pop-animation')) {
                             item.style.transform = `translate(${translateX}px, ${translateY}px)`;
                        }
                    });
                });
            } else {
                console.error('Parallax items not found. Please check your HTML.');
            }
            
            // Function to handle the bubble pop animation
            function popAndRevert(item) {
                // Ensure the animation is not already running
                if (item.classList.contains('pop-animation')) {
                    return;
                }
                
                // Add an event listener to listen for the end of the animation
                // This listener will only fire once thanks to the 'once: true' option
                item.addEventListener('animationend', () => {
                    // When the animation finishes, remove the class
                    // This allows the element to revert to its original CSS properties
                    item.classList.remove('pop-animation');
                }, { once: true }); // Important: 'once' ensures the listener is removed automatically

                // Trigger the animation
                item.classList.add('pop-animation');
            }

            // Animate the bubbles to "pop" on initial page load
            parallaxItems.forEach((item, index) => {
                // Trigger the initial pop animation after the main text animation is done
                setTimeout(() => {
                    popAndRevert(item);
                }, 5000 + (index * 150)); // Stagger the initial animation
            });

            // Remove the active class toggle for parallax items to keep the cursor style consistent
            parallaxItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent event from bubbling up to the window
                    popAndRevert(item);
                });
                
                item.addEventListener('mouseover', () => {
                    // The custom cursor dot will not change size or color on hover
                });
                
                item.addEventListener('mouseout', () => {
                    // The custom cursor dot will not change size or color on hover
                });
            });
        };
    </script>
@endsection

@section('content')
    <div class="relative flex flex-col items-center justify-center">

        <!-- Custom Mouse Cursor -->
        <div class="cursor-dot"></div>

        <!-- Parallax Background Layer (animated by JS) -->
        <div id="parallax-container" class="parallax-bg">
            <div class="parallax-item w-40 h-40 top-[5%] left-[10%]" data-speed="25"></div>
            <div class="parallax-item w-60 h-60 bottom-[15%] right-[15%]" data-speed="40"></div>
            <div class="parallax-item w-32 h-32 top-[35%] right-[30%]" data-speed="50"></div>
            <div class="parallax-item w-52 h-52 bottom-[0%] left-[40%]" data-speed="35"></div>
            <div class="parallax-item w-24 h-24 top-[55%] left-[5%]" data-speed="60"></div>
            <!-- Added more bubbles to fill the space -->
            <div class="parallax-item w-20 h-20 top-[20%] left-[50%]" data-speed="20"></div>
            <div class="parallax-item w-48 h-48 bottom-[40%] left-[25%]" data-speed="45"></div>
            <div class="parallax-item w-36 h-36 top-[10%] right-[5%]" data-speed="30"></div>
            <div class="parallax-item w-28 h-28 bottom-[5%] left-[70%]" data-speed="55"></div>
            <div class="parallax-item w-44 h-44 top-[60%] right-[10%]" data-speed="28"></div>
        </div>

        <!-- Navigation Bar -->
        <nav class="fixed top-0 left-0 w-full z-20 backdrop-blur-sm bg-gray-900/50">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <!-- Logo/Name -->
                <a href="#">
                    <svg width="50" height="30" viewBox="0 0 250 150">
                        <defs>
                            <linearGradient id="logo-gradient-nav" x1="0%" y1="0%" y2="100%">
                                <stop offset="0%" style="stop-color:rgb(80,60,110); stop-opacity:1" />
                                <stop offset="100%" style="stop-color:rgb(160,120,100); stop-opacity:1" />
                            </linearGradient>
                        </defs>
                        <text x="10" y="110" id="logo-m-text" font-family="Times New Roman, Times, serif" font-size="150" fill="white">M</text>
                        <text x="85" y="110" id="logo-g-text" font-family="Times New Roman, Times, serif" font-size="150" fill="url(#logo-gradient-nav)">G</text>
                    </svg>
                </a>

                <!-- Navigation Links -->
                <ul class="flex space-x-8 text-xl">
                    <li><a href="#about" class="text-gray-300 hover:text-white transition-colors duration-200" style="font-family: 'Times New Roman', serif;">About</a></li>
                    <li><a href="#projects" class="text-gray-300 hover:text-white transition-colors duration-200" style="font-family: 'Times New Roman', serif;">Projects</a></li>
                    <li><a href="#contact" class="text-gray-300 hover:text-white transition-colors duration-200" style="font-family: 'Times New Roman', serif;">Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- Main Content (SVG Logo and Text) -->
        <div class="min-h-screen relative z-10 flex flex-col items-center justify-start px-4 pt-40">
            <!-- SVG Logo "MG" -->
            <svg width="250" height="150" viewBox="0 0 250 150" class="mb-8">
                <defs>
                    <linearGradient id="logo-gradient" x1="0%" y1="0%" y2="100%">
                        <stop offset="0%" style="stop-color:rgb(80,60,110); stop-opacity:1" />
                        <stop offset="100%" style="stop-color:rgb(160,120,100); stop-opacity:1" />
                    </linearGradient>
                </defs>

                <!-- Animated 'M' with half reveal -->
                <text id="logo-m-text" x="50" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="white">M</text>

                <!-- Animated 'G' with gradient -->
                <text id="logo-g-text" x="100" y="110" font-family="Times New Roman, Times, serif" font-size="100" fill="url(#logo-gradient)">G</text>
            </svg>


            <!-- Animated Name and Profession -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold tracking-tighter text-white text-center" style="font-family: 'Times New Roman', Times, serif;">
                <span class="clip-reveal" style="animation-delay: 2s;">Marcus&nbsp;</span>
                <span class="clip-reveal" style="animation-delay: 2.5s;">Grau</span>
            </h1>
            <p class="mt-4 text-2xl md:text-3xl lg:text-4xl font-light text-gray-300 text-center" style="font-family: 'Times New Roman', Times, serif;">
                <span class="clip-reveal" style="animation-delay: 3s;">Software Developer</span>
            </p>
        </div>

        <!-- About Section -->
        <section id="about" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center" style="font-family: 'Times New Roman', Times, serif;">About Me</h2>
            <p class="text-xl md:text-2xl text-gray-300 max-w-3xl text-center" style="font-family: 'Times New Roman', Times, serif;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center" style="font-family: 'Times New Roman', Times, serif;">Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                    <h3 class="text-3xl font-bold text-white mb-2" style="font-family: 'Times New Roman', Times, serif;">Project One</h3>
                    <p class="text-gray-400" style="font-family: 'Times New Roman', Times, serif;">A brief description of Project One. This project showcases my skills in front-end development and responsive design.</p>
                </div>
                <!-- Project 2 -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                    <h3 class="text-3xl font-bold text-white mb-2" style="font-family: 'Times New Roman', Times, serif;">Project Two</h3>
                    <p class="text-gray-400" style="font-family: 'Times New Roman', Times, serif;">An overview of Project Two, a full-stack application demonstrating my back-end and database knowledge.</p>
                </div>
                <!-- Project 3 -->
                <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                    <h3 class="text-3xl font-bold text-white mb-2" style="font-family: 'Times New Roman', Times, serif;">Project Three</h3>
                    <p class="text-gray-400" style="font-family: 'Times New Roman', Times, serif;">Details about Project Three, a personal side project focused on implementing a complex algorithm.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="container mx-auto px-4 py-20 min-h-screen flex flex-col items-center justify-center">
            <h2 class="text-6xl md:text-7xl lg:text-8xl font-bold text-white mb-10 text-center" style="font-family: 'Times New Roman', Times, serif;">Contact</h2>
            <div class="text-center">
                <p class="text-xl md:text-2xl text-gray-300 mb-4" style="font-family: 'Times New Roman', Times, serif;">
                    Feel free to reach out to me!
                </p>
                <ul class="text-lg md:text-xl text-white space-y-2">
                    <li>Email: <a href="mailto:marcus.grau@example.com" class="text-purple-400 hover:underline">marcus.grau@example.com</a></li>
                    <li>LinkedIn: <a href="https://www.linkedin.com/in/marcus-grau/" class="text-purple-400 hover:underline">linkedin.com/in/marcusgrau</a></li>
                    <li>GitHub: <a href="https://github.com/MAGAweSome" class="text-purple-400 hover:underline">github.com/marcusgrau</a></li>
                </ul>
            </div>
        </section>
    </div>
@endsection
