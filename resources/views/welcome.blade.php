@extends('layouts.app')

@section('title', 'Home - DriveRent Car Rental')
@section('meta_description', 'Rent quality cars in Blantyre, Malawi and Johannesburg, South Africa. Best car rental services with affordable rates.')

@section('content')
<section class="relative bg-gradient-to-r from-blue-600 to-blue-800 text-white overflow-hidden">
    <!-- Carousel Container -->
    <div class="relative h-[500px] sm:h-[600px] md:h-[700px] carousel-wrapper">

        <!-- Carousel Slides -->
        <div id="carousel-slides" class="relative w-full h-full">

            <!-- Slide 1 - Fleet Options -->
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="w-full h-full bg-cover bg-center bg-no-repeat"
                     style="background-image: url('{{ asset('images/carousel/cars2.jpg') }}');
                            background-size: cover;
                            background-position: center;">
                </div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl animate-slide-up">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 sm:mb-6">
                                Explore Our <span class="text-blue-600">Extensive Fleet</span>
                            </h1>
                            <p class="text-base sm:text-lg md:text-xl text-blue-100 mb-6 sm:mb-8 leading-relaxed">
                                Choose from a wide range of vehicles to suit your needs. From compact cars to luxury SUVs, we have the perfect ride for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 - Professional Drivers -->
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="w-full h-full bg-cover bg-center bg-no-repeat"
                     style="background-image: url('{{ asset('images/carousel/3.jpg') }}');
                            background-size: cover;
                            background-position: center;">
                </div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl animate-slide-up">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 sm:mb-6">
                                Professional <span class="text-blue-600">Drivers</span> at Your Service
                            </h1>
                            <p class="text-base sm:text-lg md:text-xl text-blue-100 mb-6 sm:mb-8 leading-relaxed">
                                Experienced and reliable drivers to take you to your destination safely and comfortably. Sit back, relax, and enjoy the journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 - Family Road Trip -->
            <div class="carousel-slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0 bg-black/50"></div>
                <div class="w-full h-full bg-cover bg-center bg-no-repeat"
                     style="background-image: url('{{ asset('images/carousel/2.jpg') }}');
                            background-size: cover;
                            background-position: center;">
                </div>
                <div class="absolute inset-0 flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="max-w-3xl animate-slide-up">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight mb-4 sm:mb-6">
                                Perfect for <span class="text-blue-600">Family Road Trips</span>
                            </h1>
                            <p class="text-base sm:text-lg md:text-xl text-blue-100 mb-6 sm:mb-8 leading-relaxed">
                                Spacious vehicles designed for comfort and safety. Create unforgettable memories with your loved ones on the road.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel Controls - Hidden on mobile -->
        <button id="prev-slide" class="hidden sm:flex absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 sm:p-3 rounded-full transition-all duration-300 z-20 hover:scale-110 items-center justify-center">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        <button id="next-slide" class="hidden sm:flex absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white p-2 sm:p-3 rounded-full transition-all duration-300 z-20 hover:scale-110 items-center justify-center">
            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>

        <!-- Dots Indicator -->
        <div class="absolute bottom-4 sm:bottom-8 left-1/2 -translate-x-1/2 flex space-x-2 sm:space-x-3 z-20">
            <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300" data-index="0"></button>
            <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300" data-index="1"></button>
            <button class="carousel-dot w-2 h-2 sm:w-3 sm:h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300" data-index="2"></button>
        </div>
    </div>
</section>
<!-- Carousel Styles -->
<style>
    .carousel-slide {
        opacity: 0;
        z-index: 1;
        transition: opacity 1s ease-in-out;
    }

    .carousel-slide.active {
        opacity: 1 !important;
        z-index: 10;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-up {
        opacity: 0;
        animation: slideUp 1s ease-out forwards;
    }

    .carousel-dot.active {
        background-color: #60A5FA !important;
        width: 1.5rem !important;
        border-radius: 9999px;
    }

    @media (min-width: 640px) {
        .carousel-dot.active {
            width: 2rem !important;
        }
    }

    /* Background image styling */
    .bg-cover {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Mobile specific image positioning */
    @media (max-width: 640px) {
        .carousel-slide .bg-cover {
            background-size: contain;
            background-position: center;
            background-color: #1e3a8a;
        }
    }

    /* Tablet specific adjustments */
    @media (min-width: 641px) and (max-width: 1024px) {
        .carousel-slide .bg-cover {
            background-size: cover;
            background-position: center 30%;
        }
    }
</style>
<!-- Carousel JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.getElementById('prev-slide');
        const nextBtn = document.getElementById('next-slide');
        let currentSlide = 0;
        let slideInterval;

        // Function to show a specific slide
        function showSlide(index) {
            // Remove active class from all slides
            slides.forEach(slide => {
                slide.classList.remove('active');
            });

            // Remove active class from all dots
            dots.forEach(dot => {
                dot.classList.remove('active');
            });

            // Add active class to current slide and dot
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        // Function to go to next slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Function to go to previous slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        }

        // Start auto-sliding
        function startAutoSlide() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Stop auto-sliding
        function stopAutoSlide() {
            if (slideInterval) {
                clearInterval(slideInterval);
                slideInterval = null;
            }
        }

        // Initialize FIRST — this must run no matter what happens below.
        // (Previously, an invalid querySelector further down threw an error
        // before this line ever executed, which is why the carousel never appeared.)
        showSlide(0);
        setTimeout(function() {
            startAutoSlide();
        }, 100);

        // Event listeners for controls
        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });
        }

        // Event listeners for dots
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                stopAutoSlide();
                currentSlide = index;
                showSlide(currentSlide);
                startAutoSlide();
            });
        });

        // Pause auto-slide on hover
        // FIXED: was document.querySelector('.relative.h-[500px]') — the square
        // brackets from the Tailwind arbitrary-value class are invalid in a CSS
        // selector unless escaped, so this threw a SyntaxError and killed the
        // rest of the script. Using a plain class name instead.
        const carousel = document.querySelector('.carousel-wrapper');
        if (carousel) {
            carousel.addEventListener('mouseenter', stopAutoSlide);
            carousel.addEventListener('mouseleave', startAutoSlide);
        }
    });
</script>
<!-- Facts Section with Icons -->
<section class="py-16 md:py-20 bg-gradient-to-r from-blue-600 to-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            
            <!-- Fact 1: Fleet -->
            <div class="text-center">
                <div class="flex justify-center mb-3">
                    <svg class="w-10 h-10 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17h14M5 17a2 2 0 01-2-2v-4a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 17v2a2 2 0 002 2h10a2 2 0 002-2v-2"/>
                        <circle cx="7" cy="11" r="1"/>
                        <circle cx="17" cy="11" r="1"/>
                        <path d="M5 9V7a2 2 0 012-2h10a2 2 0 012 2v2"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-extrabold mb-2">
                    <span class="counter" data-target="50">0</span>+
                </div>
                <p class="text-blue-200 text-sm md:text-base font-medium">Vehicles in Fleet</p>
            </div>

            <!-- Fact 2: Clients -->
            <div class="text-center">
                <div class="flex justify-center mb-3">
                    <svg class="w-10 h-10 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-extrabold mb-2">
                    <span class="counter" data-target="1000">0</span>+
                </div>
                <p class="text-blue-200 text-sm md:text-base font-medium">Happy Clients</p>
            </div>

            <!-- Fact 3: Locations -->
            <div class="text-center">
                <div class="flex justify-center mb-3">
                    <svg class="w-10 h-10 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-extrabold mb-2">
                    <span class="counter" data-target="2">0</span>
                </div>
                <p class="text-blue-200 text-sm md:text-base font-medium">Convenient Locations</p>
            </div>

            <!-- Fact 4: Years -->
            <div class="text-center">
                <div class="flex justify-center mb-3">
                    <svg class="w-10 h-10 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl md:text-5xl font-extrabold mb-2">
                    <span class="counter" data-target="5">0</span>+
                </div>
                <p class="text-blue-200 text-sm md:text-base font-medium">Years of Experience</p>
            </div>

        </div>
    </div>
</section>

<!-- Counter Animation JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function animateCounters() {
            const counters = document.querySelectorAll('.counter');
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const duration = 2000;
                const step = Math.max(1, Math.floor(target / (duration / 16)));
                let current = 0;
                
                const updateCounter = () => {
                    current += step;
                    if (current >= target) {
                        counter.textContent = target;
                        return;
                    }
                    counter.textContent = current;
                    requestAnimationFrame(updateCounter);
                };
                
                updateCounter();
            });
        }

        const section = document.querySelector('.bg-gradient-to-r.from-blue-600');
        
        if (section) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            
            observer.observe(section);
        } else {
            animateCounters();
        }
    });
</script>
<!-- Book Section -->
<section class="py-16 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Heading - Centered at Top -->
        <div class="text-center mb-12">
            <span class="inline-block bg-blue-100 text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">
                Quick Booking
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">
                Reserve a <span class="text-primary">Car</span> Now
            </h2>
            <p class="text-gray-600 text-lg mt-2">
                Fill in your details and we'll get back to you within 24 hours.
            </p>
        </div>
        
        <!-- Flex container with reversed order on mobile -->
        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            
            <!-- Image Side (Right on Desktop, First on Mobile) -->
            <div class="w-full md:w-1/2 order-first md:order-last">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('images/carousel/cars2.jpg') }}" 
                         alt="Book Your Car" 
                         class="w-full h-[250px] sm:h-[300px] md:h-[500px] object-cover hover:scale-105 transition-transform duration-500">
                </div>
                
                <!-- Quick Info -->
                <div class="mt-4 grid grid-cols-2 gap-3">
                    <div class="bg-blue-50 rounded-xl p-3 text-center">
                        <p class="text-xs text-gray-500">Available in</p>
                        <p class="text-sm font-semibold text-gray-800">🇲🇼 Malawi & 🇿🇦 SA</p>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-3 text-center">
                        <p class="text-xs text-gray-500">Response Time</p>
                        <p class="text-sm font-semibold text-gray-800">Within 24 hours</p>
                    </div>
                </div>
            </div>
            
            <!-- Form Side (Left on Desktop, Second on Mobile) -->
            <div class="w-full md:w-1/2 order-last md:order-first">
                <div class="bg-gray-50 rounded-2xl p-6 md:p-8 shadow-lg">
                    
                    <!-- Booking Form -->
                    <form id="quick-booking-form" class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label for="full-name" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Full Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="full-name" name="full-name" placeholder="Enter your full name" required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Email Address <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        </div>
                        
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Phone Number <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        </div>
                        
                        <!-- Location Selection -->
                        <div>
                            <label for="location" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Select Location <span class="text-red-500">*</span>
                            </label>
                            <select id="location" name="location" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm appearance-none bg-white">
                                <option value="">Choose a location</option>
                                <option value="malawi">🇲🇼 Blantyre, Malawi</option>
                                <option value="south-africa">🇿🇦 Johannesburg, South Africa</option>
                            </select>
                        </div>
                        
                        <!-- Car Selection Dropdown -->
                        <div>
                            <label for="car-model" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Select Vehicle <span class="text-red-500">*</span>
                            </label>
                            <select id="car-model" name="car-model" required
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm appearance-none bg-white">
                                <option value="">Choose a vehicle</option>
                                <option value="toyota-fortuner">🚙 Toyota Fortuner</option>
                                <option value="toyota-corolla">🚗 Toyota Corolla</option>
                                <option value="rav4">🚙 RAV4</option>
                                <option value="toyota-ractis">🚗 Toyota Ractis</option>
                                <option value="mitsubishi-mirage">🚗 Mitsubishi Mirage</option>
                                <option value="mazda-verisa">🚗 Mazda Verisa</option>
                                <option value="suzuki-swift">🚗 Suzuki Swift</option>
                                <option value="honda-fit">🚗 Honda Fit</option>
                                <option value="mazda-demio">🚗 Mazda Demio</option>
                            </select>
                        </div>
                        
                        <!-- Preferred Date -->
                        <div>
                            <label for="preferred-date" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Preferred Date <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="preferred-date" name="preferred-date" required
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" 
                                class="w-full bg-primary hover:bg-primary-dark text-white px-8 py-3 rounded-lg font-semibold transition-smooth hover-scale shadow-md mt-2">
                            Send Booking Request
                        </button>
                    </form>
                    
                    <!-- Success Message -->
                    <div id="quick-success" class="hidden mt-4 bg-green-50 border border-green-200 rounded-lg p-3 text-center">
                        <div class="flex items-center justify-center gap-2 text-green-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-semibold text-sm">Booking Request Sent!</span>
                        </div>
                        <p class="text-xs text-green-600 mt-1">We'll contact you within 24 hours.</p>
                    </div>
                    
                    <p class="text-xs text-gray-500 mt-3 text-center">
                        <span class="text-red-500">*</span> Required fields
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Booking Form JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('quick-booking-form');
        const successMessage = document.getElementById('quick-success');
        const dateInput = document.getElementById('preferred-date');

        // Set min date to today
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }

        // Handle form submission
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form data
                const formData = new FormData(form);
                const data = {
                    name: formData.get('full-name'),
                    email: formData.get('email'),
                    phone: formData.get('phone'),
                    location: formData.get('location'),
                    car: formData.get('car-model'),
                    date: formData.get('preferred-date')
                };

                // Log the booking data (for demo purposes)
                console.log('Booking Request Submitted:', data);

                // Show success message
                successMessage.classList.remove('hidden');
                
                // Reset form
                form.reset();

                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });

                // Hide success message after 5 seconds
                setTimeout(function() {
                    successMessage.classList.add('hidden');
                }, 5000);
            });
        }
    });
</script>

<!-- Fleet Section -->
<section class="py-16 md:py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-12">
            <span class="inline-block bg-blue-100 text-primary text-xs font-semibold px-3 py-1 rounded-full mb-3">
                Our Fleet
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900">
                Choose Your <span class="text-primary">Ride</span>
            </h2>
            <p class="text-gray-600 text-lg mt-2">
                Select from our wide range of well-maintained vehicles
            </p>
        </div>
        
        <!-- Filters -->
        <div class="bg-white rounded-2xl shadow-lg p-6 mb-10">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                <!-- Car Type Filter -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Car Type
                    </label>
                    <select id="filter-type" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        <option value="all">All Types</option>
                        <option value="suv">SUV</option>
                        <option value="sedan">Sedan</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="pickup">Pickup</option>
                    </select>
                </div>
                
                <!-- Seat Capacity Filter -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Seat Capacity
                    </label>
                    <select id="filter-seats" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        <option value="all">All Seats</option>
                        <option value="4">4 Seats</option>
                        <option value="5">5 Seats</option>
                        <option value="7">7 Seats</option>
                        <option value="8">8+ Seats</option>
                    </select>
                </div>
                
                <!-- Location Filter -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Location
                    </label>
                    <select id="filter-location" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        <option value="all">All Locations</option>
                        <option value="malawi">🇲🇼 Malawi</option>
                        <option value="south-africa">🇿🇦 South Africa</option>
                    </select>
                </div>
                
                <!-- Availability Filter -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Availability
                    </label>
                    <select id="filter-availability" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        <option value="all">All Cars</option>
                        <option value="available">Available</option>
                        <option value="booked">Currently Booked</option>
                    </select>
                </div>
                
                <!-- Currency Selector -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1.5">
                        Currency
                    </label>
                    <select id="filter-currency" class="w-full px-4 py-2.5 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-primary transition-colors text-sm bg-white">
                        <option value="mwk">🇲🇼 MWK (Kwacha)</option>
                        <option value="zar">🇿🇦 ZAR (Rand)</option>
                        <option value="usd">💵 USD (Dollar)</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Cars Grid -->
        <div id="cars-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
    <!-- Car Card 1 - Toyota Fortuner (SUV, 7 Seats, Available) -->
    <div class="car-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-smooth" data-type="suv" data-seats="7" data-available="true" data-location="all">
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cars/fortuner.jpg') }}" 
                 alt="Toyota Fortuner" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                 onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(to right, #3b82f6, #2563eb)'">
            <!-- Fallback gradient if image fails to load -->
            <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-blue-600 -z-10"></div>
            <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                Available
            </span>
        </div>
        <div class="p-5">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-900">Toyota Fortuner</h3>
                <span class="text-sm font-semibold text-primary price-display" data-base-mwk="100000" data-base-zar="850" data-base-usd="50">
                    K100,000/day
                </span>
            </div>
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    7 Seats
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    SUV
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Auto
                </span>
            </div>
            <a href="/booking" class="block w-full bg-primary hover:bg-primary-dark text-white text-center px-4 py-2.5 rounded-lg font-semibold transition-smooth text-sm">
                Book Now
            </a>
        </div>
    </div>
    
    <!-- Car Card 2 - Toyota Corolla (Sedan, 5 Seats, Booked) -->
    <div class="car-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-smooth" data-type="sedan" data-seats="5" data-available="false" data-location="all">
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cars/corolla.jpg') }}" 
                 alt="Toyota Corolla" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                 onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(to right, #22c55e, #16a34a)'">
            <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-green-600 -z-10"></div>
            <span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                Booked
            </span>
        </div>
        <div class="p-5">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-900">Toyota Corolla</h3>
                <span class="text-sm font-semibold text-primary price-display" data-base-mwk="40000" data-base-zar="340" data-base-usd="20">
                    K40,000/day
                </span>
            </div>
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    5 Seats
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Sedan
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Auto
                </span>
            </div>
            <button disabled class="block w-full bg-gray-300 text-gray-500 text-center px-4 py-2.5 rounded-lg font-semibold text-sm cursor-not-allowed">
                Currently Booked
            </button>
        </div>
    </div>
    
    <!-- Car Card 3 - RAV4 (SUV, 5 Seats, Available) -->
    <div class="car-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-smooth" data-type="suv" data-seats="5" data-available="true" data-location="all">
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cars/rav.jpg') }}" 
                 alt="RAV4" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                 onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(to right, #a855f7, #7c3aed)'">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-400 to-purple-600 -z-10"></div>
            <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                Available
            </span>
        </div>
        <div class="p-5">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-900">Toyota RAV4</h3>
                <span class="text-sm font-semibold text-primary price-display" data-base-mwk="80000" data-base-zar="680" data-base-usd="40">
                    K80,000/day
                </span>
            </div>
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    5 Seats
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    SUV
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Auto
                </span>
            </div>
            <a href="/booking" class="block w-full bg-primary hover:bg-primary-dark text-white text-center px-4 py-2.5 rounded-lg font-semibold transition-smooth text-sm">
                Book Now
            </a>
        </div>
    </div>
    
    <!-- Car Card 4 - Suzuki Swift (Hatchback, 4 Seats, Available) -->
    <div class="car-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-smooth" data-type="hatchback" data-seats="4" data-available="true" data-location="all">
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cars/swift.jpg') }}" 
                 alt="Suzuki Swift" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                 onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(to right, #eab308, #ca8a04)'">
            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 -z-10"></div>
            <span class="absolute top-3 right-3 bg-green-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                Available
            </span>
        </div>
        <div class="p-5">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-900">Suzuki Swift</h3>
                <span class="text-sm font-semibold text-primary price-display" data-base-mwk="40000" data-base-zar="340" data-base-usd="20">
                    K40,000/day
                </span>
            </div>
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    4 Seats
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Hatchback
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Manual
                </span>
            </div>
            <a href="/booking" class="block w-full bg-primary hover:bg-primary-dark text-white text-center px-4 py-2.5 rounded-lg font-semibold transition-smooth text-sm">
                Book Now
            </a>
        </div>
    </div>
    
    <!-- Car Card 5 - Mazda Demio (Hatchback, 5 Seats, Booked) -->
    <div class="car-card bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-smooth" data-type="hatchback" data-seats="5" data-available="false" data-location="all">
        <div class="relative h-48 overflow-hidden">
            <img src="{{ asset('images/cars/demio.jpg') }}" 
                 alt="Mazda Demio" 
                 class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                 onerror="this.style.display='none'; this.parentElement.style.background='linear-gradient(to right, #ec4899, #db2777)'">
            <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-pink-600 -z-10"></div>
            <span class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full z-10">
                Booked
            </span>
        </div>
        <div class="p-5">
            <div class="flex justify-between items-start mb-2">
                <h3 class="text-xl font-bold text-gray-900">Mazda Demio</h3>
                <span class="text-sm font-semibold text-primary price-display" data-base-mwk="40000" data-base-zar="340" data-base-usd="20">
                    K40,000/day
                </span>
            </div>
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    5 Seats
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    Hatchback
                </span>
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    Auto
                </span>
            </div>
            <button disabled class="block w-full bg-gray-300 text-gray-500 text-center px-4 py-2.5 rounded-lg font-semibold text-sm cursor-not-allowed">
                Currently Booked
            </button>
        </div>
    </div>
    
</div>
       
        
        <!-- No Results Message -->
        <div id="no-results" class="hidden text-center py-12">
            <p class="text-gray-500 text-lg">No cars match your filters. Try adjusting your search.</p>
        </div>
        
    </div>
</section>

<!-- Fleet Filter JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const carCards = document.querySelectorAll('.car-card');
        const filterType = document.getElementById('filter-type');
        const filterSeats = document.getElementById('filter-seats');
        const filterLocation = document.getElementById('filter-location');
        const filterAvailability = document.getElementById('filter-availability');
        const filterCurrency = document.getElementById('filter-currency');
        const noResults = document.getElementById('no-results');
        
        // Currency symbols and formatting
        const currencyFormat = {
            'mwk': { symbol: 'K', rate: 1, locale: 'en-MW', format: 'K{value}/day' },
            'zar': { symbol: 'R', rate: 0.0085, locale: 'en-ZA', format: 'R{value}/day' },
            'usd': { symbol: '$', rate: 0.0005, locale: 'en-US', format: '${value}/day' }
        };
        
        function updatePrices(currency) {
            const priceElements = document.querySelectorAll('.price-display');
            const format = currencyFormat[currency];
            
            priceElements.forEach(el => {
                const baseMwk = parseFloat(el.dataset.baseMwk);
                let convertedValue;
                let displaySymbol;
                
                if (currency === 'mwk') {
                    convertedValue = baseMwk;
                    displaySymbol = 'K';
                } else if (currency === 'zar') {
                    convertedValue = baseMwk * 0.0085;
                    displaySymbol = 'R';
                } else {
                    convertedValue = baseMwk * 0.0005;
                    displaySymbol = '$';
                }
                
                // Format the value
                let formattedValue;
                if (currency === 'mwk') {
                    formattedValue = Math.round(convertedValue).toLocaleString('en-MW');
                } else if (currency === 'zar') {
                    formattedValue = Math.round(convertedValue).toLocaleString('en-ZA');
                } else {
                    formattedValue = Math.round(convertedValue * 100) / 100;
                    if (formattedValue % 1 === 0) {
                        formattedValue = formattedValue.toFixed(0);
                    } else {
                        formattedValue = formattedValue.toFixed(2);
                    }
                }
                
                el.textContent = `${displaySymbol}${formattedValue}/day`;
            });
        }
        
        function filterCars() {
            const type = filterType.value;
            const seats = filterSeats.value;
            const location = filterLocation.value;
            const availability = filterAvailability.value;
            
            let visibleCount = 0;
            
            carCards.forEach(card => {
                const cardType = card.dataset.type;
                const cardSeats = card.dataset.seats;
                const cardAvailable = card.dataset.available === 'true';
                const cardLocation = card.dataset.location;
                const carName = card.querySelector('h3').textContent.toLowerCase();
                const search = document.getElementById('filter-search')?.value?.toLowerCase() || '';
                
                let show = true;
                
                // Filter by type
                if (type !== 'all' && cardType !== type) {
                    show = false;
                }
                
                // Filter by seats
                if (show && seats !== 'all') {
                    if (seats === '8' && parseInt(cardSeats) < 8) {
                        show = false;
                    } else if (seats !== '8' && cardSeats !== seats) {
                        show = false;
                    }
                }
                
                // Filter by location (shows all cards since location filter is for demo)
                if (show && location !== 'all') {
                    // For demo purposes, show all cards regardless of location
                    // This will be used when you add location-specific cars
                    show = true;
                }
                
                // Filter by availability
                if (show && availability !== 'all') {
                    if (availability === 'available' && !cardAvailable) {
                        show = false;
                    } else if (availability === 'booked' && cardAvailable) {
                        show = false;
                    }
                }
                
                // Filter by search
                if (show && search !== '') {
                    if (!carName.includes(search)) {
                        show = false;
                    }
                }
                
                if (show) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Show/hide no results message
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }
        }
        
        // Currency change handler
        filterCurrency.addEventListener('change', function() {
            updatePrices(this.value);
        });
        
        // Add event listeners to all filters
        filterType.addEventListener('change', filterCars);
        filterSeats.addEventListener('change', filterCars);
        filterLocation.addEventListener('change', filterCars);
        filterAvailability.addEventListener('change', filterCars);
        
        // Search input
        const searchInput = document.getElementById('filter-search');
        if (searchInput) {
            searchInput.addEventListener('input', filterCars);
        }
        
        // Initialize with default currency
        updatePrices('mwk');
    });
</script>






@endsection