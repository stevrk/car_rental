<!-- Navbar -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Logo Section -->
            <div class="flex items-center space-x-2">
                <a href="/" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.jpeg') }}" 
                         alt="Peterson's Car Rental" 
                         class="h-12 w-auto object-contain"
                         onerror="this.style.display='none'">
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('/') ? 'text-primary' : '' }}">
                    Home
                </a>
                <a href="" class="text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('cars') ? 'text-primary' : '' }}">
                    Our Fleet
                </a>
                
                <!-- Locations Dropdown -->
                

                <a href="" class="text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('events') ? 'text-primary' : '' }}">
                    Gallery
                </a>
                <a href="" class="text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('about') ? 'text-primary' : '' }}">
                    About
                </a>
                <a href="" class="text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('contact') ? 'text-primary' : '' }}">
                    Contact
                </a>
            </div>

            <!-- Right Section - CTA Button & Phone -->
            <div class="hidden md:flex items-center space-x-4">
                <div class="flex items-center space-x-2 text-gray-600">
                    <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <span class="text-sm font-medium">+265 888 123 456</span>
                </div>
                <a href="/booking" class="bg-primary hover:bg-primary-dark text-white px-6 py-2.5 rounded-lg font-semibold transition-smooth hover-scale shadow-md">
                    Book Now
                </a>
            </div>

            <!-- Mobile Menu Button (Hamburger/X Toggle) -->
            <div class="md:hidden">
                <button
                    type="button"
                    id="mobile-menu-button"
                    class="text-gray-700 hover:text-primary focus:outline-none transition-smooth p-2 relative z-50"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                >
                    <!-- Hamburger Icon -->
                    <svg
                        id="hamburger-icon"
                        class="h-8 w-8 transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>

                    <!-- Close Icon -->
                    <svg
                        id="close-icon"
                        class="h-8 w-8 hidden transition-transform duration-300"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu - Fixed z-index and styling -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl fixed inset-x-0 top-20 z-40 max-h-[calc(100vh-5rem)] overflow-y-auto">
        <div class="px-4 py-3 space-y-2">
            <a href="/" class="block py-2.5 text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('/') ? 'text-primary' : '' }}">
                Home
            </a>
            <a href="/cars" class="block py-2.5 text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('cars') ? 'text-primary' : '' }}">
                Our Fleet
            </a>
            
            <!-- Mobile Locations -->
         
            
            <a href="/events" class="block py-2.5 text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('events') ? 'text-primary' : '' }}">
                Gallery
            </a>
            <a href="/about" class="block py-2.5 text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('about') ? 'text-primary' : '' }}">
                About
            </a>
            <a href="/contact" class="block py-2.5 text-gray-700 hover:text-primary font-medium transition-smooth {{ request()->is('contact') ? 'text-primary' : '' }}">
                Contact
            </a>
            
            <!-- Mobile CTA -->
            <div class="pt-3 space-y-3 border-t border-gray-200">
                <a href="/booking" class="block bg-primary hover:bg-primary-dark text-white text-center px-6 py-3 rounded-lg font-semibold transition-smooth shadow-md">
                    Book Now
                </a>
                <div class="flex flex-col items-center space-y-1 text-gray-600">
                    <div class="flex items-center gap-2 text-sm">
                        <span>🇲🇼</span>
                        <span>0997979011 / 0882797900</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <span>🇿🇦</span>
                        <span>069756 8942 / 071102317</span>
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="truncate">petersonscarrental@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu JavaScript - Fixed Version -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    let isMenuOpen = false;

    // Function to toggle menu
    function toggleMenu(event) {
        if (event) {
            event.preventDefault();
            event.stopPropagation();
        }

        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            // Open menu
            mobileMenu.classList.remove('hidden');
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
            menuButton.setAttribute('aria-expanded', 'true');
            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        } else {
            // Close menu
            mobileMenu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            menuButton.setAttribute('aria-expanded', 'false');
            // Restore body scroll
            document.body.style.overflow = '';
        }
    }

    // Toggle button click
    if (menuButton) {
        menuButton.addEventListener('click', toggleMenu);
        // Also support touch events for mobile
        menuButton.addEventListener('touchstart', function(e) {
            e.preventDefault();
            toggleMenu(e);
        });
    }

    // Close menu when clicking a link
    if (mobileMenu) {
        const links = mobileMenu.querySelectorAll('a');
        links.forEach(function(link) {
            link.addEventListener('click', function() {
                if (isMenuOpen) {
                    toggleMenu();
                }
            });
        });
    }

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const nav = document.querySelector('nav');
        if (isMenuOpen && nav && !nav.contains(event.target)) {
            toggleMenu();
        }
    });

    // Handle escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && isMenuOpen) {
            toggleMenu();
        }
    });

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth >= 768 && isMenuOpen) {
                toggleMenu();
            }
        }, 250);
    });

    // Ensure the menu works if there are conflicting scripts
    console.log('Mobile menu initialized successfully');
});
</script>

<!-- Add this CSS to fix any conflicts -->
<style>
    /* Ensure mobile menu has proper z-index */
    #mobile-menu {
        z-index: 40;
    }
    
    /* Fix for carousel z-index conflicts */
    .carousel-slide.active {
        z-index: 10;
    }
    
    /* Smooth transitions */
    #mobile-menu {
        transition: all 0.3s ease-in-out;
    }
    
    /* Fix for body scroll when menu is open */
    body.menu-open {
        overflow: hidden;
    }
    
    /* Ensure hamburger button is clickable */
    #mobile-menu-button {
        cursor: pointer;
        touch-action: manipulation;
    }
    
    /* Fix for iOS Safari */
    @supports (-webkit-touch-callout: none) {
        #mobile-menu {
            -webkit-overflow-scrolling: touch;
        }
    }
</style>