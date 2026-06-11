import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// Menu Sidebar Toggle
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menuBtn');
    const menuSidebar = document.getElementById('menuSidebar');
    const closeMenu = document.getElementById('closeMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    
    if (menuBtn && menuSidebar) {
        menuBtn.addEventListener('click', () => {
            menuSidebar.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    }
    
    if (closeMenu && menuSidebar) {
        closeMenu.addEventListener('click', () => {
            menuSidebar.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    if (menuOverlay && menuSidebar) {
        menuOverlay.addEventListener('click', () => {
            menuSidebar.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    // Close menu when clicking nav links
    const sidebarLinks = menuSidebar?.querySelectorAll('.sidebar-nav a');
    sidebarLinks?.forEach(link => {
        link.addEventListener('click', () => {
            menuSidebar.classList.remove('active');
            document.body.style.overflow = '';
        });
    });
});

// Scroll spy for right nav
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section[id]');
    const navItems = document.querySelectorAll('.right-nav .nav-item');
    
    const observerOptions = {
        root: null,
        rootMargin: '-50% 0px -50% 0px',
        threshold: 0
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href') === `#${id}`) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }, observerOptions);
    
    sections.forEach(section => observer.observe(section));
});

// Smooth scroll for all anchor links
document.addEventListener('click', (e) => {
    const link = e.target.closest('a[href^="#"]');
    if (link) {
        e.preventDefault();
        const targetId = link.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth' });
        }
    }
});

// Smooth scroll function (global)
function scrollToSection(id) {
    const element = document.getElementById(id);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
}

window.scrollToSection = scrollToSection;