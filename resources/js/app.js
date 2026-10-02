import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Utility for 1-click clipboard copy with visual feedback toast
window.copyToClipboard = function(text, label = 'Copied to clipboard!') {
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(() => showToast(label));
    } else {
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        textArea.style.top = '-999999px';
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
            document.execCommand('copy');
            showToast(label);
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
        document.body.removeChild(textArea);
    }
};

function showToast(message) {
    let toast = document.getElementById('copy-toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'copy-toast';
        toast.className = 'copy-toast';
        document.body.appendChild(toast);
    }
    toast.innerHTML = `<svg class="w-4 h-4 text-violet-400 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> <span>${message}</span>`;
    toast.classList.add('show');
    clearTimeout(toast._timeout);
    toast._timeout = setTimeout(() => {
        toast.classList.remove('show');
    }, 2400);
}

document.addEventListener('DOMContentLoaded', () => {
    // --- Mobile Menu Toggle ---
    const hamburgerBtn = document.getElementById('hamburger-menu-button');
    const mobileMenu = document.getElementById('mobile-nav-menu');
    const closeBtn = document.getElementById('close-menu-button');
    const mobileLinks = document.querySelectorAll('.mobile-nav-link');

    function toggleMenu(open) {
        if (!mobileMenu) return;
        const isOpen = open !== undefined ? open : !mobileMenu.classList.contains('is-active');
        if (isOpen) {
            mobileMenu.classList.add('is-active');
            hamburgerBtn && hamburgerBtn.classList.add('is-active');
            document.body.style.overflow = 'hidden';
        } else {
            mobileMenu.classList.remove('is-active');
            hamburgerBtn && hamburgerBtn.classList.remove('is-active');
            document.body.style.overflow = '';
        }
    }

    if (hamburgerBtn) {
        hamburgerBtn.addEventListener('click', () => toggleMenu());
    }
    if (closeBtn) {
        closeBtn.addEventListener('click', () => toggleMenu(false));
    }
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });

    // --- Smooth Scroll with Nav Offset ---
    const nav = document.querySelector('nav');
    const getNavHeight = () => (nav ? Math.ceil(nav.getBoundingClientRect().height) : 70);

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href').slice(1);
            if (!targetId) return;
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                e.preventDefault();
                const elementPosition = targetElement.getBoundingClientRect().top + window.scrollY;
                const offsetPosition = elementPosition - getNavHeight() - 16;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // --- Snappy Reveal On Scroll (Intersection Observer) ---
    const revealItems = document.querySelectorAll('.reveal-item');
    if ('IntersectionObserver' in window && revealItems.length) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        revealItems.forEach(item => revealObserver.observe(item));
    } else {
        revealItems.forEach(item => item.classList.add('is-revealed'));
    }

    // --- Active Nav Link Spy on Scroll ---
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    if (sections.length && navLinks.length) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY + getNavHeight() + 80;
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('text-violet-400', 'font-semibold');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('text-violet-400', 'font-semibold');
                        }
                    });
                }
            });
        }, { passive: true });
    }
});