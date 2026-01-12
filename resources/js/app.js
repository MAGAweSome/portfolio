import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import './bootstrap';

// Ensure reload/refresh doesn't restore previous scroll position
if ('scrollRestoration' in window.history) {
    window.history.scrollRestoration = 'manual';
}

function syncScrollToTop() {
    // Synchronous scroll-to-top for unload events
    window.scrollTo(0, 0);
    if (document.documentElement) document.documentElement.scrollTop = 0;
    if (document.body) document.body.scrollTop = 0;
}

// On refresh/reload, some browsers restore the last scroll position.
// Scrolling to top during unload makes the saved position the top.
window.addEventListener('beforeunload', () => {
    syncScrollToTop();
});

window.addEventListener('pagehide', () => {
    syncScrollToTop();
});

function forceScrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (!section) return;

    const fixedNav = document.querySelector('nav');
    const navOffset = fixedNav ? Math.ceil(fixedNav.getBoundingClientRect().height) : 0;
    const extraPadding = 12;
    const top = window.scrollY + section.getBoundingClientRect().top - navOffset - extraPadding;

    // Clean any hash so the URL never shows /#home (or others)
    if (window.location.hash && window.location.hash !== '#') {
        const cleanUrl = window.location.pathname + window.location.search;
        window.history.replaceState(null, document.title, cleanUrl);
    }

    // Force scroll multiple times (some browsers restore scroll after load)
    window.scrollTo({ top, left: 0, behavior: 'auto' });
    requestAnimationFrame(() => window.scrollTo({ top, left: 0, behavior: 'auto' }));
    setTimeout(() => window.scrollTo({ top, left: 0, behavior: 'auto' }), 50);
    setTimeout(() => window.scrollTo({ top, left: 0, behavior: 'auto' }), 200);
}

window.onload = function() {
    // On reload/refresh always bring user to the Home section
    forceScrollToSection('home');

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

    // Custom cursor functionality (use rAF for smooth & immediate updates)
    if (cursor) {
        let cursorX = window.innerWidth / 2;
        let cursorY = window.innerHeight / 2;
        let targetCursorX = cursorX;
        let targetCursorY = cursorY;

        // Update target on mousemove (passive listener for performance)
        window.addEventListener('mousemove', (e) => {
            targetCursorX = e.clientX;
            targetCursorY = e.clientY;
        }, { passive: true });

        // rAF-driven loop to apply position using transform (GPU-accelerated)
        function updateCursorPosition() {
            // Set directly to target for immediate responsiveness
            cursorX = targetCursorX;
            cursorY = targetCursorY;
            cursor.style.transform = `translate3d(${cursorX}px, ${cursorY}px, 0) translate(-50%, -50%)`;
            requestAnimationFrame(updateCursorPosition);
        }

        requestAnimationFrame(updateCursorPosition);

        interactiveElements.forEach(element => {
            element.addEventListener('mouseover', () => {
                cursor.classList.add('active');
            });
            element.addEventListener('mouseout', () => {
                cursor.classList.remove('active');
            });
        });
    }

    // --- Dynamic Floating Bubbles (cursor-interactive) ---

    // Maintain an in-memory array of parallax items to avoid querying DOM each frame
    const parallaxItems = [];

    // Function to create a new floating bubble element
    function createFloatingBubble(initialPlacement = 'bottom') {
        const item = document.createElement('div');
        item.classList.add('parallax-item');

        const size = Math.random() * 80 + 20; // Random size between 20px and 100px
        item.style.width = `${size}px`;
        item.style.height = `${size}px`;

        // Numeric positions used for transform-only updates
        let yPos;
        if (initialPlacement === 'random') {
            yPos = Math.random() * window.innerHeight;
        } else {
            yPos = window.innerHeight + Math.random() * 100;
        }

        const initialX = Math.random() * window.innerWidth;
        const speed = Math.random() * 0.5 + 0.15; // Float speed

        // Gentle horizontal drift so bubbles don't feel "grid-like"
        const drift = (Math.random() * 0.25 + 0.05) * (Math.random() < 0.5 ? -1 : 1);
        const wobbleSeed = Math.random() * Math.PI * 2;

        // Store position and speed directly on the element
        item._yPos = yPos;
        item._xPos = initialX;
        item._speed = speed;
        item._drift = drift;
        item._wobbleSeed = wobbleSeed;

        // Position via transform only (left kept at 0)
        item.style.left = '0px';
        item.style.top = '0px';
        item.style.position = 'absolute';
        item.style.pointerEvents = 'auto';

        // Optional: if the custom cursor is enabled later, still support the hover state.
        if (cursor) {
            item.addEventListener('mouseover', () => cursor.classList.add('active'));
            item.addEventListener('mouseout', () => cursor.classList.remove('active'));
        }

        // Click to pop and reset
        item.addEventListener('click', (e) => {
            e.stopPropagation();
            popAndReset(item);
        });

        parallaxContainer.appendChild(item);
        parallaxItems.push(item);
    }

    function popAndReset(item) {
        if (item.classList.contains('pop-animation')) return;
        item.classList.add('pop-animation');
        item.addEventListener('animationend', () => {
            item.classList.remove('pop-animation');
            item._yPos = window.innerHeight + Math.random() * 100;
            item._xPos = Math.random() * window.innerWidth;
            item.style.width = `${Math.random() * 80 + 20}px`;
            item.style.height = `${parseFloat(item.style.width)}px`;
        }, { once: true });
    }

    // Initially populate the background with bubbles at random positions
    for (let i = 0; i < 20; i++) {
        createFloatingBubble('random');
    }

    // Use rAF for smooth floating; maintain mouse position
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
    }, { passive: true });

    // Cursor interaction tuning
    const interactionRadius = 170; // px
    const maxRepel = 55; // px

    function animateBubbles(now = 0) {
        const time = now / 1000;

        for (let i = 0, len = parallaxItems.length; i < len; i++) {
            const item = parallaxItems[i];
            if (item.classList.contains('pop-animation')) continue;

            const speed = item._speed;
            item._yPos -= speed;

            // Subtle drift + wobble
            item._xPos += item._drift;
            item._xPos += Math.sin(time + item._wobbleSeed) * 0.05;

            if (item._yPos < -parseFloat(item.style.height || 0)) {
                item._yPos = window.innerHeight + Math.random() * 100;
                item._xPos = Math.random() * window.innerWidth;
                item.style.width = `${Math.random() * 80 + 20}px`;
                item.style.height = `${parseFloat(item.style.width)}px`;
            }

            // Wrap horizontally so drift doesn't permanently push bubbles off-screen
            const bubbleWidth = parseFloat(item.style.width || 0);
            if (item._xPos < -bubbleWidth) item._xPos = window.innerWidth + bubbleWidth;
            if (item._xPos > window.innerWidth + bubbleWidth) item._xPos = -bubbleWidth;

            // Cursor repulsion ("interaction")
            const dx = item._xPos - mouseX;
            const dy = item._yPos - mouseY;
            const dist = Math.hypot(dx, dy) || 0.0001;
            let repelX = 0;
            let repelY = 0;
            let scale = 1;

            if (dist < interactionRadius) {
                const strength = (interactionRadius - dist) / interactionRadius;
                const push = strength * strength * maxRepel;
                repelX = (dx / dist) * push;
                repelY = (dy / dist) * push;
                scale = 1 + strength * 0.22;
            }

            const translateX = item._xPos + repelX;
            const translateY = item._yPos + repelY;
            item.style.transform = `translate3d(${translateX}px, ${translateY}px, 0) scale(${scale})`;
        }

        requestAnimationFrame(animateBubbles);
    }

    requestAnimationFrame(animateBubbles);

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

    // --- Smooth in-page navigation without showing #hash in URL ---
    const fixedNav = document.querySelector('nav');

    function getFixedNavOffset() {
        if (!fixedNav) return 0;
        const rect = fixedNav.getBoundingClientRect();
        return Math.ceil(rect.height);
    }

    function scrollToHashTarget(hash) {
        if (!hash || hash === '#') return;
        const targetId = hash.startsWith('#') ? hash.slice(1) : hash;
        const target = document.getElementById(targetId);
        if (!target) return;

        const navOffset = getFixedNavOffset();
        const extraPadding = 12;
        const top = window.scrollY + target.getBoundingClientRect().top - navOffset - extraPadding;

        window.scrollTo({ top, behavior: 'smooth' });

        // Remove the hash from the URL without adding a new history entry
        const cleanUrl = window.location.pathname + window.location.search;
        window.history.replaceState(null, document.title, cleanUrl);
    }

    // Intercept clicks on same-page hash links
    document.addEventListener('click', (e) => {
        const link = e.target && e.target.closest ? e.target.closest('a[href^="#"]') : null;
        if (!link) return;

        const href = link.getAttribute('href');
        if (!href || href === '#') return;

        e.preventDefault();
        scrollToHashTarget(href);
    });

};

// Also handle bfcache restores (back/forward) where scroll can come back unexpectedly.
window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}