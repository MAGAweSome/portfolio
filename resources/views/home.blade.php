@extends('layouts.app')

@section('title', 'Marcus Grau')

@section('head')
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #0d0d0d;
            cursor: none; /* Hide the default cursor */
            overflow: hidden;
        }

        /* The custom cursor dot */
        .cursor-dot {
            width: 12px;
            height: 12px;
            background-color: white;
            border-radius: 50%;
            position: fixed; /* Use fixed positioning for better alignment */
            transform: translate(-50%, -50%);
            pointer-events: none; /* Ignore clicks on the cursor */
            z-index: 1000;
            transition: width 0.2s, height 0.2s, background-color 0.2s; /* Smooth follow and hover effect */
            opacity: 0.8;
            mix-blend-mode: difference;
        }

        /* Custom cursor style when hovering over a clickable element */
        .cursor-dot.active {
            width: 24px;
            height: 24px;
            background-color: #8B5CF6;
        }

        /* The SVG logo animation using clip-path */
        #logo-m-text, #logo-g-text {
            opacity: 0;
            clip-path: inset(0 100% 0 0);
            animation: clip-text-logo 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        #logo-m-text {
            opacity: 0;
            clip-path: inset(0 50% 0 0); /* Start with half revealed */
            animation: clip-text-half-m 1.2s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }

        @keyframes clip-text-half-m {
            0% {
                clip-path: inset(0 100% 0 0); /* Fully hidden */
                opacity: 0;
            }
            1% {
                opacity: 1;
            }
            100% {
                clip-path: inset(0 50% 0 0); /* Stop at halfway */
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
            background: linear-gradient(135deg, #4F46E5, #8B5CF6); /* A nice gradient color */
            transition: transform 0.1s ease-out; /* Add transition for parallax */
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

            // Add click event listeners and hover effect to the bubbles
            parallaxItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.stopPropagation(); // Prevent event from bubbling up to the window
                    popAndRevert(item);
                });
                
                item.addEventListener('mouseover', () => {
                    cursor.classList.add('active');
                });
                
                item.addEventListener('mouseout', () => {
                    cursor.classList.remove('active');
                });
            });
        };
    </script>
@endsection

@section('content')
    <div class="relative min-h-screen flex flex-col items-center justify-start pt-20 overflow-hidden">

        <!-- Custom Mouse Cursor -->
        <div class="cursor-dot"></div>

        <!-- Parallax Background Layer (animated by JS) -->
        <div id="parallax-container" class="parallax-bg">
            <div class="parallax-item w-40 h-40 top-[5%] left-[10%]" data-speed="25"></div>
            <div class="parallax-item w-60 h-60 bottom-[15%] right-[15%]" data-speed="40"></div>
            <div class="parallax-item w-32 h-32 top-[35%] right-[30%]" data-speed="50"></div>
            <div class="parallax-item w-52 h-52 bottom-[0%] left-[40%]" data-speed="35"></div>
            <div class="parallax-item w-24 h-24 top-[55%] left-[5%]" data-speed="60"></div>
        </div>

        <!-- Main Content (SVG Logo and Text) -->
        <div class="relative z-10 flex flex-col items-center justify-center px-4">
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
                <span class="clip-reveal" style="animation-delay: 3s;">Web Developer</span>
            </p>
        </div>

    </div>
@endsection
