<header class="ap-header-area" id="ap-header-sticky">
    <div class="ap-header-inner">
        <div class="ap-header-logo">
            @if($profile?->photo)
            <img src="{{ Storage::url($profile->photo) }}" alt="{{ $profile->name }}">
            @else
            <div class="ap-header-logo-placeholder">{{ substr($profile?->name ?? 'P', 0, 1) }}</div>
            @endif
            <span>{{ $profile?->name ?? 'Portfolio' }}</span>
        </div>

        <nav class="ap-header-menu">
            <ul>
                <li><a href="#home" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                @if($testimonials->count() > 0)
                <li><a href="#testimonial">Testimonial</a></li>
                @endif
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <div class="ap-header-right">
            <button class="ap-theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
                <svg class="ap-icon-sun" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                <svg class="ap-icon-moon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
            </button>
            <div class="ap-header-hamburger" onclick="toggleMenu()">
                <div class="ap-sidebar-toggle-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
.ap-theme-toggle {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    border: 1px solid var(--border-default);
    background: transparent;
    color: var(--text-nav);
    cursor: pointer;
    transition: var(--transition);
    flex-shrink: 0;
}
.ap-theme-toggle:hover {
    color: var(--color-doctor);
    border-color: var(--color-doctor);
    background: rgba(25,162,208,0.1);
}
.ap-icon-sun,
.ap-icon-moon {
    position: absolute;
    transition: opacity 0.3s ease, transform 0.3s ease;
}
[data-theme="dark"] .ap-icon-sun,
:root:not([data-theme="light"]) .ap-icon-sun {
    opacity: 1;
    transform: rotate(0deg);
}
[data-theme="dark"] .ap-icon-moon,
:root:not([data-theme="light"]) .ap-icon-moon {
    opacity: 0;
    transform: rotate(90deg);
}
[data-theme="light"] .ap-icon-sun {
    opacity: 0;
    transform: rotate(-90deg);
}
[data-theme="light"] .ap-icon-moon {
    opacity: 1;
    transform: rotate(0deg);
}

@media (max-width: 1024px) {
    .ap-header-menu {
        display: block !important;
        position: fixed;
        top: 80px;
        left: 0;
        right: 0;
        background: var(--bg-scrolled-header);
        backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--border-default);
        padding: 20px;
        transform: translateY(-110%);
        opacity: 0;
        visibility: hidden;
        transition: transform 0.35s ease, opacity 0.35s ease, visibility 0.35s ease;
    }
    .ap-header-menu.open {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
    }
    .ap-header-menu ul { flex-direction: column; }
    .ap-header-menu ul li a { width: 100%; padding: 12px 18px; }
}

@media (min-width: 1025px) {
    .ap-header-hamburger { display: none; }
}
</style>

<script>
function toggleMenu() {
    document.querySelector('.ap-header-menu').classList.toggle('open');
}

function toggleTheme() {
    var html = document.documentElement;
    var current = html.getAttribute('data-theme');
    var next = current === 'light' ? 'dark' : 'light';
    html.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
}

document.addEventListener('DOMContentLoaded', function() {
    var header = document.getElementById('ap-header-sticky');
    var menu = document.querySelector('.ap-header-menu');
    var saved = localStorage.getItem('theme');
    if (saved) {
        document.documentElement.setAttribute('data-theme', saved);
    } else {
        document.documentElement.setAttribute('data-theme', 'dark');
    }

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    menu.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function() {
            menu.classList.remove('open');
        });
    });

    document.addEventListener('click', function(e) {
        if (!header.contains(e.target)) {
            menu.classList.remove('open');
        }
    });
});
</script>
