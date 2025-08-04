import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import './bootstrap';

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