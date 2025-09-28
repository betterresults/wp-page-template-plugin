<?php
/**
 * Template Name: ESN Homepage Template
 * Description: Complete homepage template with all sections
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Get page meta values
$page_id = get_the_ID();

get_header('esn'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap');
        
        :root {
            --primary: 180 63% 36%;
            --primary-light: 180 45% 40%;
            --primary-dark: 203 55% 25%;
            --primary-foreground: 0 0% 100%;
            --primary-glow: 180 63% 56%;
            --secondary: 210 40% 96%;
            --secondary-foreground: 210 11% 15%;
            --accent: 180 63% 36%;
            --accent-foreground: 0 0% 100%;
            --background: 0 0% 100%;
            --foreground: 203 55% 25%;
            --muted: 210 40% 96%;
            --muted-foreground: 210 11% 22%;
            --card: 0 0% 100%;
            --card-foreground: 210 11% 15%;
            --border: 210 40% 90%;
            --input: 210 40% 95%;
            --ring: 180 63% 36%;
            --gradient-surface: linear-gradient(135deg, hsl(0 0% 100%), hsl(200 15% 98%));
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: hsl(var(--background));
            color: hsl(var(--foreground));
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
        }

        .btn-primary {
            background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-light)));
            color: hsl(var(--primary-foreground));
            padding: 1rem 2rem;
            border-radius: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(24, 165, 165, 0.3);
        }

        /* Hero-style gradient button */
        .btn-hero {
            background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-light)));
            color: hsl(var(--primary-foreground));
            padding: 1rem 2rem;
            border-radius: 1rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            box-shadow: 0 20px 40px rgba(24, 165, 165, 0.25);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-hero:hover { transform: translateY(-2px) scale(1.02); box-shadow: 0 30px 60px rgba(24,165,165,0.35);}        

        .card-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
        }

        .section-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .section-padding {
            padding: 5rem 0;
        }

        .font-heading {
            font-family: 'Poppins', sans-serif;
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-slide-up {
            animation: slideUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        .animate-fade-in-delayed {
            animation: fadeInDelayed 1s ease-out forwards;
            animation-delay: 0.3s;
            opacity: 0;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDelayed {
            to {
                opacity: 1;
            }
        }

        .bg-gradient-surface {
            background: var(--gradient-surface);
        }

        @media (max-width: 768px) {
            .section-padding {
                padding: 3rem 0;
            }
        }
    </style>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': 'hsl(var(--primary))',
                        'primary-light': 'hsl(var(--primary-light))',
                        'primary-dark': 'hsl(var(--primary-dark))',
                        'primary-foreground': 'hsl(var(--primary-foreground))',
                        'secondary': 'hsl(var(--secondary))',
                        'secondary-foreground': 'hsl(var(--secondary-foreground))',
                        'accent': 'hsl(var(--accent))',
                        'accent-foreground': 'hsl(var(--accent-foreground))',
                        'background': 'hsl(var(--background))',
                        'foreground': 'hsl(var(--foreground))',
                        'muted': 'hsl(var(--muted))',
                        'muted-foreground': 'hsl(var(--muted-foreground))',
                        'card': 'hsl(var(--card))',
                        'card-foreground': 'hsl(var(--card-foreground))',
                        'border': 'hsl(var(--border))',
                        'input': 'hsl(var(--input))'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'heading': ['Poppins', 'system-ui', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site min-h-screen bg-background">
    
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0" style="background-image: linear-gradient(135deg, rgba(28, 60, 80, 0.9), rgba(24, 81, 102, 0.85)), url(<?php echo ESN_TEMPLATES_PLUGIN_URL; ?>../src/assets/hero-kitchen.jpg); background-size: cover; background-position: center center; background-attachment: fixed;"></div>
        
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-10">
            <div class="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-float"></div>
            <div class="absolute bottom-32 right-20 w-24 h-24 bg-accent/20 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-primary-light/20 rounded-full blur-md animate-float" style="animation-delay: 4s;"></div>
        </div>

        <div class="section-container relative z-20 section-padding">
            <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">
                <!-- Hero Content -->
                <div class="lg:col-span-3 text-white space-y-8 animate-slide-up">
                    <div class="space-y-6">
                        <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold font-heading leading-tight text-center lg:text-left">
                            <span class="block">Best Cleaners</span>
                            <span class="block">In Your <span class="text-primary">Area</span></span>
                        </h1>
                        
                        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-semibold text-accent leading-relaxed text-center lg:text-left">
                            Professional Cleaning Services
                        </h2>
                        
                        <p class="text-lg sm:text-xl lg:text-2xl text-white/90 leading-relaxed max-w-2xl text-center lg:text-left mx-auto lg:mx-0">
                            Experience reliable & professional cleaning services. 
                            <span class="font-semibold text-accent"> Book online today</span> and enjoy a spotless home or office.
                        </p>
                    </div>

                    <!-- Trust Badges -->
                    <div class="grid grid-cols-2 lg:flex lg:flex-wrap gap-3 lg:gap-4 pt-4 max-w-md lg:max-w-none">
                        <div class="flex items-center gap-2 lg:gap-3 bg-white/20 backdrop-blur-sm px-3 lg:px-4 py-2 rounded-full">
                            <span class="font-semibold text-xs lg:text-sm">🛡️ Fully Insured</span>
                        </div>
                        <div class="flex items-center gap-2 lg:gap-3 bg-white/20 backdrop-blur-sm px-3 lg:px-4 py-2 rounded-full">
                            <span class="font-semibold text-xs lg:text-sm">⭐ 5-Star Rated</span>
                        </div>
                        <div class="flex items-center gap-2 lg:gap-3 bg-white/20 backdrop-blur-sm px-3 lg:px-4 py-2 rounded-full">
                            <span class="font-semibold text-xs lg:text-sm">✅ Same-Day Service</span>
                        </div>
                        <div class="flex items-center gap-2 lg:gap-3 bg-white/20 backdrop-blur-sm px-3 lg:px-4 py-2 rounded-full">
                            <span class="font-semibold text-xs lg:text-sm">📍 Local Experts</span>
                        </div>
                    </div>
                </div>

                <!-- Quote Form -->
                <div class="lg:col-span-2 animate-fade-in-delayed">
                    <!-- Desktop Form -->
                    <div class="hidden lg:block card-glass p-6 lg:p-8 max-w-md mx-auto lg:ml-auto lg:mr-0">
                        <div class="text-center mb-6">
                            <h3 class="text-3xl font-bold font-heading text-foreground mb-3">
                                Get Your Instant Quote
                            </h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center bg-background rounded-xl border-2 border-input shadow-sm px-4 py-3">
                                <span class="mr-3">📍</span>
                                <input type="text" placeholder="Enter a postcode here" class="border-0 bg-transparent text-lg placeholder:text-gray-400 p-0 font-medium w-full" />
                            </div>
                            
                            <a href="#quote" class="btn-primary w-full h-14 text-lg flex items-center justify-center">
                                Get A Quote
                                <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Mobile Form -->
                    <div class="lg:hidden w-full max-w-2xl mx-auto">
                        <div class="bg-background rounded-2xl p-3 shadow-xl border border-input">
                            <div class="flex items-center px-4 py-3">
                                <span class="mr-3">📍</span>
                                <input type="text" placeholder="Enter a postcode here" class="border-0 bg-transparent text-lg placeholder:text-gray-400 p-0 font-medium w-full" />
                            </div>
                            <a href="#quote" class="btn-primary w-full h-12 text-base mt-2 flex items-center justify-center">
                                Get A Quote
                                <span class="ml-2">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Types Section -->
    <section class="section-padding bg-gradient-surface">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                    Our Cleaning Services
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    Professional cleaning solutions tailored to your needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- End of Tenancy -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">End of Tenancy Cleaning</h3>
                    <p class="text-muted-foreground">Comprehensive deep cleaning service designed to help you get your full deposit back.</p>
                </div>

                <!-- Domestic Cleaning -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">Domestic Cleaning</h3>
                    <p class="text-muted-foreground">Regular house cleaning services to keep your home spotless and comfortable.</p>
                </div>

                <!-- Office Cleaning -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">Office Cleaning</h3>
                    <p class="text-muted-foreground">Professional commercial cleaning for offices, schools, and business premises.</p>
                </div>

                <!-- After Builders -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">After Builders Cleaning</h3>
                    <p class="text-muted-foreground">Specialized cleaning to remove dust, debris, and construction residue.</p>
                </div>

                <!-- Carpet Cleaning -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">Carpet Cleaning</h3>
                    <p class="text-muted-foreground">Deep carpet cleaning using professional equipment and eco-friendly products.</p>
                </div>

                <!-- Airbnb Cleaning -->
                <div class="bg-card rounded-2xl p-6 shadow-lg border border-border hover:shadow-xl transition-all duration-300">
                    <h3 class="text-2xl font-bold text-foreground mb-4">Airbnb Cleaning</h3>
                    <p class="text-muted-foreground">Quick turnaround cleaning services for short-term rental properties.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-padding bg-background">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                    Why Choose Us?
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2">Fully Insured</h3>
                    <p class="text-muted-foreground">Complete peace of mind with comprehensive insurance coverage</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2">5-Star Rated</h3>
                    <p class="text-muted-foreground">Consistently excellent service rated by our customers</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🌱</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2">Eco-Friendly</h3>
                    <p class="text-muted-foreground">Safe, non-toxic cleaning products for your family and pets</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground mb-2">Fast Response</h3>
                    <p class="text-muted-foreground">Quick quotes and same-day booking available</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="section-padding bg-gradient-to-b from-background to-muted/30">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">Simple Booking Process</h2>
                <p class="text-xl text-muted-foreground max-w-2xl mx-auto">Getting your space cleaned is easier than ever</p>
            </div>

            <!-- Process Flow Container -->
            <div class="bg-background rounded-3xl border border-border/50 shadow-xl p-8 lg:p-12 mb-16">
                <div class="flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
                    <!-- Step 1 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary/80 rounded-3xl flex items-center justify-center mx-auto shadow-lg"><span class="text-3xl text-white">🔍</span></div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-white border-4 border-primary rounded-full flex items-center justify-center text-sm font-bold text-primary shadow-lg">1</div>
                            </div>
                            <h3 class="text-2xl font-bold text-foreground mb-3">Choose Service</h3>
                            <p class="text-muted-foreground max-w-xs">Select your cleaning requirements</p>
                        </div>
                        <div class="hidden md:block"><svg class="w-8 h-8 text-primary/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></div>
                        <div class="md:hidden rotate-90"><svg class="w-6 h-6 text-primary/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary/80 rounded-3xl flex items-center justify-center mx-auto shadow-lg"><span class="text-3xl text-white">📝</span></div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-white border-4 border-primary rounded-full flex items-center justify-center text-sm font-bold text-primary shadow-lg">2</div>
                            </div>
                            <h3 class="text-2xl font-bold text-foreground mb-3">Fill the Form</h3>
                            <p class="text-muted-foreground max-w-xs">Provide your details and preferences</p>
                        </div>
                        <div class="hidden md:block"><svg class="w-8 h-8 text-primary/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></div>
                        <div class="md:hidden rotate-90"><svg class="w-6 h-6 text-primary/60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg></div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary/80 rounded-3xl flex items-center justify-center mx-auto shadow-lg"><span class="text-3xl text-white">📅</span></div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-white border-4 border-primary rounded-full flex items-center justify-center text-sm font-bold text-primary shadow-lg">3</div>
                            </div>
                            <h3 class="text-2xl font-bold text-foreground mb-3">Book Online</h3>
                            <p class="text-muted-foreground max-w-xs">Select your preferred date and time</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#quote" class="btn-hero text-xl sm:text-2xl px-8 sm:px-12 py-4 sm:py-6 rounded-2xl w-full sm:w-auto">Get Quote & Book Online<span class="ml-2">→</span></a>
                </div>
                <p class="text-sm text-muted-foreground mt-4">Free instant quotes • No hidden fees • Quick response</p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding bg-gradient-to-br from-muted/20 to-background">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">What Our <span class="text-primary">Customers Say</span></h2>
            </div>
            <div class="card-glass p-8 mb-12">
                <div class="fbl_w_dcWK51Qwf6A51i8gEolc"></div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function(){
                var s = document.createElement('script');
                s.src = 'https://fbl.embedwidgets.com/dcWK51Qwf6A51i8gEolc.js';
                document.body.appendChild(s);
            });
        </script>
    </section>

    <!-- Service Areas -->
    <section class="section-padding bg-gradient-surface">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                    Service Areas Across <span class="text-primary">London & Essex</span>
                </h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                    Professional cleaning services covering Greater London and Essex regions with fast response times
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <!-- Mobile Layout - Stacked Cards -->
                <div class="block lg:hidden space-y-6">
                    <!-- London Coverage Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-4 h-4 bg-primary rounded-full animate-pulse"></div>
                            <h3 class="text-xl font-bold text-foreground">London Coverage</h3>
                        </div>
                        <p class="text-lg font-semibold text-primary mb-2">All London areas within M25</p>
                        <p class="text-sm text-muted-foreground">Complete coverage of Greater London</p>
                    </div>

                    <!-- Essex Coverage Card -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-4 h-4 bg-accent rounded-full animate-pulse delay-500"></div>
                            <h3 class="text-xl font-bold text-foreground">Essex Coverage</h3>
                        </div>
                        <p class="text-lg font-semibold text-accent mb-2">Essex areas</p>
                        <p class="text-sm text-muted-foreground">Major towns and surrounding areas</p>
                    </div>
                </div>

                <!-- Desktop Map Layout -->
                <div class="hidden lg:block relative bg-white rounded-3xl p-8 shadow-lg overflow-hidden">
                    <div class="relative h-96 bg-gradient-to-br from-blue-50 to-green-50 rounded-2xl overflow-hidden border-2 border-slate-200">
                        <!-- London Coverage Area -->
                        <div class="absolute left-8 top-1/2 transform -translate-y-1/2">
                            <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border max-w-xs">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-4 h-4 bg-primary rounded-full animate-pulse"></div>
                                    <h3 class="text-xl font-bold text-foreground">London Coverage</h3>
                                </div>
                                <p class="text-lg font-semibold text-primary mb-2">All London areas within M25</p>
                                <p class="text-sm text-muted-foreground">Complete coverage of Greater London</p>
                            </div>
                        </div>

                        <!-- Essex Coverage Area -->
                        <div class="absolute right-8 top-1/3 transform -translate-y-1/2">
                            <div class="bg-white/95 backdrop-blur-sm rounded-2xl p-6 shadow-lg border max-w-xs">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-4 h-4 bg-accent rounded-full animate-pulse delay-500"></div>
                                    <h3 class="text-xl font-bold text-foreground">Essex Coverage</h3>
                                </div>
                                <p class="text-lg font-semibold text-accent mb-2">Essex areas</p>
                                <p class="text-sm text-muted-foreground">Major towns and surrounding areas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Blog Posts Section -->
    <section class="section-padding bg-background">
        <div class="section-container">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">Latest <span class="text-primary">Cleaning Tips</span> & Insights</h2>
                <p class="text-xl text-muted-foreground max-w-3xl mx-auto">Stay updated with expert cleaning advice, industry insights, and helpful tips from our professional team</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                <!-- Post 1 -->
                <article class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all">
                    <div class="w-full h-48 bg-gradient-to-br from-primary/10 to-accent/5 rounded-xl mb-6"></div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between text-sm text-muted-foreground">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-medium">Guides</span>
                            <div class="flex items-center gap-4">
                                <span>March 15, 2024</span>
                                <span>• 5 min read</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-foreground">Ultimate End of Tenancy Cleaning Checklist</h3>
                        <p class="text-muted-foreground">Everything you need to know to get your full deposit back. Our comprehensive guide covers every room and essential cleaning task.</p>
                        <div class="text-primary font-medium">Read More →</div>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all">
                    <div class="w-full h-48 bg-gradient-to-br from-primary/10 to-accent/5 rounded-xl mb-6"></div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between text-sm text-muted-foreground">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-medium">Tips</span>
                            <div class="flex items-center gap-4">
                                <span>March 10, 2024</span>
                                <span>• 3 min read</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-foreground">Spring Cleaning Tips from Professional Cleaners</h3>
                        <p class="text-muted-foreground">Transform your home with expert tips and tricks from our professional cleaning team. Make your spring cleaning efficient and thorough.</p>
                        <div class="text-primary font-medium">Read More →</div>
                    </div>
                </article>

                <!-- Post 3 -->
                <article class="bg-white rounded-2xl p-6 shadow-md hover:shadow-lg transition-all">
                    <div class="w-full h-48 bg-gradient-to-br from-primary/10 to-accent/5 rounded-xl mb-6"></div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between text-sm text-muted-foreground">
                            <span class="bg-primary/10 text-primary px-3 py-1 rounded-full font-medium">Advice</span>
                            <div class="flex items-center gap-4">
                                <span>March 5, 2024</span>
                                <span>• 4 min read</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-foreground">How to Choose the Right Cleaning Service</h3>
                        <p class="text-muted-foreground">Key factors to consider when selecting a professional cleaning service. Learn what questions to ask and red flags to avoid.</p>
                        <div class="text-primary font-medium">Read More →</div>
                    </div>
                </article>
            </div>

            <div class="text-center">
                <a href="#" class="inline-flex items-center justify-center border border-primary text-primary hover:bg-primary hover:text-white transition-colors rounded-xl px-6 py-3">View All Blog Posts <span class="ml-2">→</span></a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="section-padding bg-gradient-to-br from-primary via-primary-dark to-primary/80 text-white relative overflow-hidden">
        <div class="section-container relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-12">
                    <h2 class="text-4xl lg:text-6xl font-bold font-heading mb-6">
                        Ready for a <span class="bg-gradient-to-r from-white to-primary-glow bg-clip-text text-transparent">Spotless</span> Clean?
                    </h2>
                    <p class="text-xl lg:text-2xl text-white/95 max-w-3xl mx-auto leading-relaxed">
                        Join thousands of satisfied customers across London & Essex. Get your instant quote today and experience the difference professional cleaning makes.
                    </p>
                </div>

                <!-- Benefits Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-16">
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">Free, no-obligation quotes</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">Same-day booking available</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">100% satisfaction guaranteed</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">Fully insured & bonded</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">Professional team</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/15 backdrop-blur-md rounded-2xl p-5 hover:bg-white/25 hover:scale-105 transition-all duration-300 border border-white/20">
                        <span>✅</span>
                        <span class="text-white font-medium">Eco-friendly products</span>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="mb-16 flex justify-center">
                    <a href="#quote" class="bg-gradient-to-r from-white via-primary-glow/10 to-white text-primary hover:from-primary-glow hover:via-white hover:to-primary-glow hover:text-primary-dark text-lg sm:text-xl px-8 sm:px-12 py-4 sm:py-6 rounded-3xl font-bold shadow-2xl transform hover:scale-110 transition-all duration-500 flex items-center gap-3 sm:gap-4 w-full sm:w-auto max-w-md sm:max-w-none border-2 border-white/20 hover:border-primary-glow/50 text-decoration-none">
                        <span class="text-xl sm:text-2xl font-extrabold">Get Instant Quote</span>
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section-padding bg-gradient-surface">
        <div class="section-container">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                    Got questions? We've got answers. Here are the most common questions about our professional cleaning services.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <details class="bg-card border border-border rounded-lg px-6">
                    <summary class="py-6 font-semibold text-foreground cursor-pointer">Which areas of London and Essex do you cover?</summary>
                    <div class="pb-6 text-muted-foreground leading-relaxed">
                        Our service area is extensive, covering all London boroughs within the M25 and a wide range of towns across Essex. Our dedicated local teams are positioned throughout the capital to provide a fast and reliable service, whether you are in North, South, East, West, or Central London. Essentially, if your property is within the M25 motorway or our key Essex regions, we have you covered. For a detailed list of postcodes, please see our Areas We Serve page.
                    </div>
                </details>

                <details class="bg-card border border-border rounded-lg px-6">
                    <summary class="py-6 font-semibold text-foreground cursor-pointer">What's included in a standard professional cleaning service?</summary>
                    <div class="pb-6 text-muted-foreground leading-relaxed">
                        <p>Our standard cleaning services (such as Domestic Cleaning and Deep Cleaning) are designed to be thorough and comprehensive. While every home is unique, our service always includes a detailed clean of all rooms. We don't just tidy; we deep clean. This includes:</p>
                        <ul class="list-disc list-inside mt-4 space-y-2">
                            <li><strong>Kitchen:</strong> Wiping all surfaces and cabinet fronts, cleaning the hob and extractor fan, cleaning the microwave inside and out, scrubbing the sink and taps, and vacuuming/mopping the floor.</li>
                            <li><strong>Bathrooms:</strong> Fully sanitising the toilet, shower, and bath, descaling taps and showerheads, cleaning all mirrors and glass, and washing the floor.</li>
                            <li><strong>Bedrooms & Living Areas:</strong> Dusting all surfaces (including skirting boards and light fittings), polishing any wooden furniture, cleaning internal windows, and thoroughly vacuuming all carpets and mopping hard floors.</li>
                        </ul>
                    </div>
                </details>

                <details class="bg-card border border-border rounded-lg px-6">
                    <summary class="py-6 font-semibold text-foreground cursor-pointer">Are your cleaners insured, background-checked, and employed by you?</summary>
                    <div class="pb-6 text-muted-foreground leading-relaxed">
                        Yes, and we believe this is one of the most important factors in choosing a cleaning service. For your peace of mind, every member of our team is a direct employee, not a temporary contractor. They each undergo a rigorous vetting process which includes identity verification, background checks, and reference checks. Furthermore, we are fully covered by comprehensive public liability insurance, protecting your home and belongings against any accidental damage.
                    </div>
                </details>

                <details class="bg-card border border-border rounded-lg px-6">
                    <summary class="py-6 font-semibold text-foreground cursor-pointer">Do I need to provide any cleaning equipment or supplies?</summary>
                    <div class="pb-6 text-muted-foreground leading-relaxed">
                        No, you don't need to provide a thing. Our professional cleaners arrive at your property fully equipped with all the necessary high-quality equipment, from professional-grade vacuum cleaners to specialised tools. We also bring our own range of effective, safe, and eco-friendly cleaning products to ensure a perfect finish every time.
                    </div>
                </details>
            </div>
        </div>
    </section>

</div>

<?php get_footer('esn'); ?>

</body>
</html>