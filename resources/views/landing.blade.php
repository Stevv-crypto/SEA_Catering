<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEA Catering — Healthy Meals, Anytime, Anywhere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 25%, #334155 50%, #475569 75%, #64748b 100%);
        }
        
        .blue-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
        }
        
        .card-hover {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-hover:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(59, 130, 246, 0.2);
        }
        
        .animate-fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        .animate-fade-in-left {
            opacity: 0;
            transform: translateX(-50px);
            animation: fadeInLeft 0.8s ease-out forwards;
        }
        
        .animate-fade-in-right {
            opacity: 0;
            transform: translateX(50px);
            animation: fadeInRight 0.8s ease-out forwards;
        }
        
        .animate-bounce-in {
            opacity: 0;
            transform: scale(0.3);
            animation: bounceIn 0.8s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
        }
        
        .animate-pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite alternate;
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInRight {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes bounceIn {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        @keyframes pulseGlow {
            0% {
                box-shadow: 0 0 20px rgba(59, 130, 246, 0.4);
            }
            100% {
                box-shadow: 0 0 40px rgba(59, 130, 246, 0.8);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .product-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .scroll-animate {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.6s ease-out;
        }
        
        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-gray-50 overflow-x-hidden">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-200">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="text-2xl font-bold blue-gradient bg-clip-text text-transparent animate-bounce-in">
                    SEA-Catering
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home_page') }}" class="text-black text-base font-medium">Home</a>
                    <a href="{{ route('contact') }}" class="text-black text-base font-medium">Contact</a>
                    <a href="{{ route('about') }}" class="text-black text-base font-medium">About</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <a href="{{ route('login') }}" class="hidden md:block px-6 py-2 text-blue-600 hover:text-blue-800 transition-colors font-medium">
                        Login
                    </a>
                    <a href="{{ route('dataRegister') }}" class="blue-gradient px-6 py-2 text-white rounded-full hover:shadow-lg transition-all duration-300 font-medium animate-pulse-glow">
                        Register
                    </a>
                    <button class="md:hidden">
                        <i class='bx bx-menu text-2xl'></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-gradient min-h-screen flex items-center relative overflow-hidden">
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-20 h-20 bg-blue-500/20 rounded-full float-animation"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-blue-400/30 rounded-full float-animation" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-blue-300/25 rounded-full float-animation" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-6 py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in-left">
                        The Most Convenient
                        <span class="blue-gradient bg-clip-text text-transparent">Healthy Meal Delivery</span>
                        in Indonesia
                    </h1>
                    <p class="text-xl text-gray-300 mb-8 animate-fade-in-left" style="animation-delay: 0.2s;">
                        Enjoy a variety of healthy meal plan options that can be customized and delivered throughout Indonesia.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 animate-fade-in-left" style="animation-delay: 0.4s;">
                        <a href="{{ route('products') }}" class="blue-gradient px-8 py-4 rounded-full text-white font-semibold hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                            <i class='bx bx-shopping-bag mr-2'></i>
                            Check your meal
                        </a>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-8 mt-12 animate-fade-in-left" style="animation-delay: 0.6s;">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-400">500K+</div>
                            <div class="text-gray-400">User</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-400">10K+</div>
                            <div class="text-gray-400">Product</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-400">4.9★</div>
                            <div class="text-gray-400">Rating</div>
                        </div>
                    </div>
                </div>
                
                <div class="relative animate-fade-in-right">
                    <!-- Phone Mockup -->
                    <div class="relative mx-auto w-80 h-96 bg-gray-800 rounded-3xl p-2 shadow-2xl">
                        <div class="w-full h-full bg-white rounded-2xl overflow-hidden">
                            <!-- Phone Screen Content -->
                            <img src="{{ asset('image/meal.jpg') }}" 
                                alt="Product Image" 
                                class="w-full h-full object-cover rounded-2xl">
                        </div>
                    </div>
                    
                    <!-- Floating Product Cards -->
                    <div class="absolute -top-10 -left-10 product-card p-4 rounded-xl float-animation">
                        <i class='bx bx-microwave text-2xl text-blue-400 mb-2'></i>
                        <div class="text-white text-sm font-semibold">Healthy Ingredients</div>
                        <div class="text-blue-300 text-xs">Guaranteed Protection</div>
                    </div>
                    
                    <div class="absolute -bottom-5 -right-10 product-card p-4 rounded-xl float-animation" style="animation-delay: 1.5s;">
                        <i class='bx bx-car text-2xl text-green-400 mb-2'></i>
                        <div class="text-white text-sm font-semibold">Nationwide Delivery</div>
                        <div class="text-green-300 text-xs">0% Delivery Cost</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 scroll-animate">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose SEA-Catering?</h2>
                <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                    We provide flexible, affordable, and customizable healthy catering services.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-8 rounded-2xl hover:shadow-xl transition-all duration-300 card-hover scroll-animate">
                    <div class="blue-gradient w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-certification text-2xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Custom Meal Plans</h3>
                    <p class="text-gray-600">Customers can choose their own meal plan.</p>
                </div>
                
                <div class="text-center p-8 rounded-2xl hover:shadow-xl transition-all duration-300 card-hover scroll-animate" style="animation-delay: 0.2s;">
                    <div class="bg-gradient-to-r from-green-500 to-emerald-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-package text-2xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Nationwide Delivery</h3>
                    <p class="text-gray-600">Delivery is available in major cities in Indonesia.</p>
                </div>
                
                <div class="text-center p-8 rounded-2xl hover:shadow-xl transition-all duration-300 card-hover scroll-animate" style="animation-delay: 0.4s;">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class='bx bx-headphone text-2xl text-white'></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Trusted by Thousands</h3>
                    <p class="text-gray-600">Show customer trust and satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all scroll-animate elements
        document.querySelectorAll('.scroll-animate').forEach(el => {
            observer.observe(el);
        });

        // Navbar background change on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('bg-white/95');
                nav.classList.remove('bg-white/80');
            } else {
                nav.classList.add('bg-white/80');
                nav.classList.remove('bg-white/95');
            }
        });
    </script>
</body>
</html>