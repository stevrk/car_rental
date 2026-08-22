<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('meta_description', 'Car Rental Services in Malawi and South Africa')">
    <title>@yield('title', 'Petersons car rental')</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Styles -->
    <style>
        .transition-smooth {
            transition: all 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.02);
        }
        .bg-primary {
            background-color: #2563EB;
        }
        .bg-primary-dark {
            background-color: #1D4ED8;
        }
        .text-primary {
            color: #2563EB;
        }
        .border-primary {
            border-color: #2563EB;
        }
        .bg-accent {
            background-color: #F59E0B;
        }
        .hover-bg-accent:hover {
            background-color: #D97706;
        }
        .text-accent {
            color: #F59E0B;
        }

        /* Loading Screen Styles */
        #loading-screen {
            transition: opacity 0.5s ease-in-out;
        }
        #loading-screen.fade-out {
            opacity: 0;
            pointer-events: none;
        }
        
        /* Pulsing animation for logo */
        @keyframes pulse-logo {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.05);
                opacity: 0.7;
            }
        }
        
        .pulse-logo {
            animation: pulse-logo 1.5s ease-in-out infinite;
        }
        
        /* Bouncing dots animation */
        @keyframes bounce-dot {
            0%, 80%, 100% {
                transform: scale(0);
                opacity: 0.3;
            }
            40% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        .bounce-dot {
            animation: bounce-dot 1.4s infinite ease-in-out both;
        }
        
        /* Pulsing animation for loading text */
        @keyframes pulse-text {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.3;
            }
        }
        
        .pulse-text {
            animation: pulse-text 1.5s ease-in-out infinite;
        }
    </style>

    <!-- Google Fonts (Optional) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-gray-50 antialiased">
    
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed inset-0 z-[9999] bg-white flex flex-col items-center justify-center">
        <div class="flex flex-col items-center space-y-4">
            <!-- Logo - Smaller and Pulsing -->
            <img src="{{ asset('images/logo.jpeg') }}" 
                 alt="Peterson's Car Rental" 
                 class="h-12 w-auto object-contain pulse-logo">
            
            <!-- Loading Text - Pulsing -->
            <p class="text-gray-600 font-medium text-sm pulse-text">Loading</p>
            
            <!-- Bouncing Dots -->
            <div class="flex items-center space-x-1">
                <span class="bounce-dot text-gray-600 text-2xl" style="animation-delay: 0s">.</span>
                <span class="bounce-dot text-gray-600 text-2xl" style="animation-delay: 0.2s">.</span>
                <span class="bounce-dot text-gray-600 text-2xl" style="animation-delay: 0.4s">.</span>
            </div>
        </div>
    </div>

    <!-- Include Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>
 
    @include('partials.chat-widget')

    <!-- Include Footer -->
    @include('partials.footer')


    <!-- Mobile Menu JavaScript -->
    <script>
        // Loading Screen
        document.addEventListener('DOMContentLoaded', function() {
            const loadingScreen = document.getElementById('loading-screen');
            
            // Hide loading screen after page is fully loaded
            window.addEventListener('load', function() {
                setTimeout(function() {
                    loadingScreen.classList.add('fade-out');
                    setTimeout(function() {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }, 1000);
            });

            // Fallback: Hide loading screen after 3 seconds
            setTimeout(function() {
                if (loadingScreen.style.display !== 'none') {
                    loadingScreen.classList.add('fade-out');
                    setTimeout(function() {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }
            }, 3000);
        });

        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>