<?php
/**
 * Template Name: End of Tenancy Cleaning Borough Templates
 * Template Post Type: page
 * Description: Complete template for end of tenancy cleaning service pages
 */

get_header(); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo esc_html(esn_get_field('page_title', get_the_title())); ?></title>
    <meta name="description" content="<?php echo esc_attr(esn_get_field('meta_description')); ?>">
    <?php wp_head(); ?>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS matching React template -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&display=swap');
        
        :root {
            --primary: hsl(180, 63%, 36%);
            --primary-light: hsl(180, 45%, 40%);
            --primary-dark: hsl(203, 55%, 25%);
            --primary-foreground: hsl(0, 0%, 100%);
            --background: hsl(0, 0%, 100%);
            --foreground: hsl(203, 55%, 25%);
            --muted: hsl(210, 40%, 96%);
            --muted-foreground: hsl(210, 11%, 22%);
            --card: hsl(0, 0%, 100%);
            --border: hsl(210, 40%, 90%);
            --success: hsl(180, 63%, 36%);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--background);
            color: var(--foreground);
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif;
            font-weight: 600;
        }
        
        .btn-hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: var(--primary-foreground);
            padding: 1rem 2rem;
            border-radius: 1rem;
            font-weight: 600;
            font-size: 1.125rem;
            box-shadow: 0 20px 50px rgba(24, 165, 165, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .btn-hero:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(24, 165, 165, 0.3);
        }
        
        .card-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 1rem;
            box-shadow: 0 8px 25px rgba(24, 165, 165, 0.15);
        }
        
        .section-container {
            max-width: 80rem;
            margin: 0 auto;
            padding: 0 1.5rem;
        }
        
        .section-padding {
            padding: 5rem 0;
        }
        
        .bg-gradient-surface {
            background: linear-gradient(135deg, hsl(0, 0%, 100%), hsl(200, 15%, 98%));
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
        
        .highlight-placeholder {
            background: rgba(59, 130, 246, 0.3);
            padding: 0.5rem;
            border-radius: 0.25rem;
            display: inline-block;
        }
    </style>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: 'hsl(180, 63%, 36%)',
                        'primary-light': 'hsl(180, 45%, 40%)',
                        'primary-dark': 'hsl(203, 55%, 25%)',
                        'primary-foreground': 'hsl(0, 0%, 100%)',
                        background: 'hsl(0, 0%, 100%)',
                        foreground: 'hsl(203, 55%, 25%)',
                        muted: 'hsl(210, 40%, 96%)',
                        'muted-foreground': 'hsl(210, 11%, 22%)',
                        card: 'hsl(0, 0%, 100%)',
                        border: 'hsl(210, 40%, 90%)',
                        success: 'hsl(180, 63%, 36%)'
                    },
                    fontFamily: {
                        'heading': ['Poppins', 'sans-serif'],
                        'sans': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-background">

<!-- Hero Section - Exact copy of TemplateHeroSection -->
<section class="relative min-h-screen flex items-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0" style="
        background-image: linear-gradient(135deg, rgba(28, 60, 80, 0.9), rgba(24, 81, 102, 0.85)), url('<?php echo esc_url(esn_get_field('hero_image', ESN_TEMPLATES_PLUGIN_URL . 'assets/hero-kitchen.jpg')); ?>');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    "></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-10">
        <div class="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-float"></div>
        <div class="absolute bottom-32 right-20 w-24 h-24 bg-primary/20 rounded-full blur-lg animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-primary-light/20 rounded-full blur-md animate-float" style="animation-delay: 4s;"></div>
    </div>

    <div class="section-container relative z-20 section-padding">
        <div class="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">
            <!-- Hero Content -->
            <div class="lg:col-span-3 text-white space-y-8 animate-slide-up">
                <div class="space-y-6">
                    <h1 class="text-5xl lg:text-7xl font-bold font-heading leading-tight text-center lg:text-left">
                        <span class="block highlight-placeholder"><?php esn_the_field('page_h1', 'End of Tenancy Cleaning in ' . esn_get_field('page_area', 'Your Area')); ?></span>
                    </h1>
                    
                    <p class="text-xl lg:text-2xl text-white/90 leading-relaxed max-w-2xl">
                        <span class="highlight-placeholder"><?php esn_the_field('under_heading', 'Get your deposit back with our professional end of tenancy cleaning service'); ?></span>
                    </p>
                </div>

                <!-- Trust Badges -->
                <div class="flex flex-wrap gap-6 pt-4">
                    <div class="flex items-center gap-3 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11H9.2V10C9.2,8.6 10.6,7 12,7M8.8,11H15.2V16.5H8.8V11M12,13.2C12.77,13.2 13.4,13.83 13.4,14.6S12.77,16 12,16C11.23,16 10.6,15.37 10.6,14.6S11.23,13.2 12,13.2Z"/>
                        </svg>
                        <span class="font-semibold">100% Deposit Guarantee</span>
                    </div>
                    <div class="flex items-center gap-3 bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z"/>
                        </svg>
                        <span class="font-semibold">5-Star Local Rating</span>
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
                        <!-- Desktop input -->
                        <div class="flex items-center bg-background rounded-xl border-2 border-border shadow-sm px-4 py-3">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                            </svg>
                            <input
                                type="text"
                                placeholder="Enter a postcode here"
                                class="border-0 bg-transparent text-lg placeholder-gray-400 focus:outline-none p-0 font-medium w-full"
                            />
                        </div>
                        
                        <!-- Button -->
                        <button class="btn-hero w-full h-14 text-lg">
                            Check Prices & Availability
                        </button>
                    </div>
                </div>

                <!-- Mobile Form -->
                <div class="lg:hidden w-full max-w-2xl mx-auto">
                    <div class="bg-background rounded-2xl p-3 shadow-xl border border-border">
                        <div class="flex items-center px-4 py-3">
                            <svg class="w-6 h-6 text-primary mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z"/>
                            </svg>
                            <input
                                type="text"
                                placeholder="Enter a postcode here"
                                class="border-0 bg-transparent text-lg placeholder-gray-400 focus:outline-none p-0 font-medium w-full"
                            />
                        </div>
                        <button class="btn-hero w-full h-12 text-base mt-2">
                            Check Prices & Availability
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- H2 Section - Exact copy of TemplateH2Section -->
<section class="section-padding bg-background">
    <div class="section-container">
        <div class="max-w-4xl mx-auto text-center space-y-12">
            <div class="space-y-6">
                <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground leading-tight">
                    <span class="highlight-placeholder"><?php esn_the_field('page_subheading', 'Your Trusted Local Cleaning Experts in ' . esn_get_field('page_area', 'Your Area')); ?></span>
                </h2>
                
                <p class="text-lg text-muted-foreground leading-relaxed highlight-placeholder">
                    <?php esn_the_field('page_subheading_description', 'We provide professional end of tenancy cleaning services with attention to detail, ensuring you get your full deposit back.'); ?>
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gradient-surface rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.46,13.97L5.82,21L12,17.27Z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">8,000+</div>
                    <div class="text-muted-foreground font-medium">Happy Customers</div>
                </div>
                
                <div class="text-center p-6 bg-gradient-surface rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5,16L3,14L14,3L16,5L5,16M12.94,13.5L16.5,17.06L15.06,18.5L11.5,14.94L12.94,13.5M15,9L13,7L15,5L17,7L15,9M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18Z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">99.8%</div>
                    <div class="text-muted-foreground font-medium">Success Rate</div>
                </div>
                
                <div class="text-center p-6 bg-gradient-surface rounded-2xl">
                    <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M16,4C18.11,4 20,5.89 20,8A4,4 0 0,1 16,12A4,4 0 0,1 12,8A4,4 0 0,1 16,4M16,6A2,2 0 0,0 14,8A2,2 0 0,0 16,10A2,2 0 0,0 18,8A2,2 0 0,0 16,6M8,6C9.11,6 10,6.89 10,8A2,2 0 0,1 8,10A2,2 0 0,1 6,8A2,2 0 0,1 8,6M8,8A0,0 0 0,0 8,8A0,0 0 0,0 8,8M21,17V19H1V17C1,14.79 4.69,13 8,13C8.64,13 9.63,13.16 10.14,13.34C9.41,14.22 9,15.08 9,16H21M17.5,13.5A0.5,0.5 0 0,0 17,14A0.5,0.5 0 0,0 17.5,14.5A0.5,0.5 0 0,0 18,14A0.5,0.5 0 0,0 17.5,13.5Z"/>
                        </svg>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">49</div>
                    <div class="text-muted-foreground font-medium">Expert Cleaners</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section - Static -->
<section class="section-padding bg-background">
    <div class="section-container">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                Our Simple <span class="text-primary">3-Step Process</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                From booking to deposit back, we make the process seamless and stress-free
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">1</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">Book Your Clean</h3>
                <p class="text-muted-foreground">Quick online booking with instant confirmation. Choose your preferred date and time slot.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">2</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">We Deep Clean</h3>
                <p class="text-muted-foreground">Our professional team arrives fully equipped and follows our comprehensive checklist.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">3</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">Get Deposit Back</h3>
                <p class="text-muted-foreground">Pass your inspection with confidence and get your full deposit returned.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Us Section - Exact copy of TemplateWhyUsSection -->
<section class="section-padding" style="background: linear-gradient(135deg, hsl(203, 55%, 25%), hsl(203, 55%, 25%) 50%, hsl(203, 55%, 25%));">
    <div class="section-container">
        <div class="space-y-16">
            <!-- Dynamic H3 Title -->
            <div class="text-center">
                <h3 class="text-4xl lg:text-5xl font-bold font-heading text-white leading-tight mb-6">
                    <span class="highlight-placeholder"><?php esn_the_field('page_h3', 'Why Choose Our End of Tenancy Cleaning?'); ?></span>
                </h3>
            </div>

            <!-- Two-column layout: Image + Dynamic Paragraph -->
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Left: Image -->
                <div class="relative">
                    <div class="relative overflow-hidden rounded-3xl">
                        <!-- Background decoration -->
                        <div class="absolute -top-8 -left-8 w-full h-full rounded-3xl opacity-20 z-0" style="background: linear-gradient(135deg, var(--primary), var(--primary-light));"></div>
                        
                        <!-- Main image -->
                        <div class="relative z-10 bg-white p-4 rounded-3xl" style="box-shadow: 0 8px 25px rgba(24, 165, 165, 0.15);">
                            <?php 
                            $page_image = esn_get_field('page_image');
                            if ($page_image): ?>
                                <img
                                    src="<?php echo esc_url($page_image); ?>"
                                    alt="<?php echo esc_attr(esn_get_field('page_image_alt', 'Professional cleaner in ' . esn_get_field('page_area', 'your area'))); ?>"
                                    class="w-full h-96 object-cover rounded-2xl"
                                />
                            <?php else: ?>
                                <div class="w-full h-96 bg-gradient-to-br from-primary/20 to-primary/40 rounded-2xl flex items-center justify-center">
                                    <span class="text-primary font-bold text-2xl">Professional Cleaner</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <!-- Floating badge -->
                        <div class="absolute bottom-4 right-4 bg-white rounded-2xl p-4 shadow-lg z-20">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 bg-success rounded-full animate-pulse"></div>
                                <span class="text-sm font-semibold text-slate-800">Licensed & Insured</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Dynamic Paragraph -->
                <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20">
                    <p class="text-lg text-slate-300 leading-relaxed highlight-placeholder">
                        <?php esn_the_field('page_h3_paragraph', 'We understand the stress of moving out. Our professional cleaning team ensures every detail meets the highest standards, giving you peace of mind and helping you secure your deposit return.'); ?>
                    </p>
                </div>
            </div>

            <!-- Three features in horizontal row below -->
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20">
                    <div class="flex flex-col items-center text-center space-y-4">
                        <div class="w-12 h-12 rounded-lg bg-primary/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11H9.2V10C9.2,8.6 10.6,7 12,7M8.8,11H15.2V16.5H8.8V11M12,13.2C12.77,13.2 13.4,13.83 13.4,14.6S12.77,16 12,16C11.23,16 10.6,15.37 10.6,14.6S11.23,13.2 12,13.2Z"/>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-semibold font-heading text-white">
                                Deposit Back Guarantee
                            </h4>
                            <p class="text-slate-300 leading-relaxed">
                                Our 72-hour re-clean guarantee means if there's an issue, we return and fix it, free of charge. Your deposit is safe with us.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20">
                    <div class="flex flex-col items-center text-center space-y-4">
                        <div class="w-12 h-12 rounded-lg bg-primary/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16,4C18.11,4 20,5.89 20,8A4,4 0 0,1 16,12A4,4 0 0,1 12,8A4,4 0 0,1 16,4M16,6A2,2 0 0,0 14,8A2,2 0 0,0 16,10A2,2 0 0,0 18,8A2,2 0 0,0 16,6M8,6C9.11,6 10,6.89 10,8A2,2 0 0,1 8,10A2,2 0 0,1 6,8A2,2 0 0,1 8,6M8,8A0,0 0 0,0 8,8A0,0 0 0,0 8,8M21,17V19H1V17C1,14.79 4.69,13 8,13C8.64,13 9.63,13.16 10.14,13.34C9.41,14.22 9,15.08 9,16H21M17.5,13.5A0.5,0.5 0 0,0 17,14A0.5,0.5 0 0,0 17.5,14.5A0.5,0.5 0 0,0 18,14A0.5,0.5 0 0,0 17.5,13.5Z"/>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-semibold font-heading text-white">
                                Professionally Trained Team
                            </h4>
                            <p class="text-slate-300 leading-relaxed">
                                Our full-time employees are vetted, insured, and rigorously trained on an agency-approved checklist for unmatched quality.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="p-6 bg-white/10 backdrop-blur-sm rounded-2xl shadow-xl border border-white/20">
                    <div class="flex flex-col items-center text-center space-y-4">
                        <div class="w-12 h-12 rounded-lg bg-primary/20 flex items-center justify-center">
                            <svg class="w-6 h-6 text-primary" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2M11,16.5L18,9.5L16.59,8.09L11,13.67L7.91,10.59L6.5,12L11,16.5Z"/>
                            </svg>
                        </div>
                        <div class="space-y-2">
                            <h4 class="text-xl font-semibold font-heading text-white">
                                Agency-Approved Standards
                            </h4>
                            <p class="text-slate-300 leading-relaxed">
                                We follow strict protocols that satisfy even the most demanding letting agents and property managers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Continue with remaining sections... -->
<section class="section-padding bg-muted/20">
    <div class="section-container">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                What Our <span class="text-primary">Customers Say</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Real reviews from real customers who got their deposits back
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-card border border-border rounded-2xl p-8 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-muted-foreground mb-6 leading-relaxed">
                    "Absolutely fantastic service! They cleaned every corner of my flat and I got my full deposit back. The team was professional and thorough."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                        <span class="text-primary font-bold">SJ</span>
                    </div>
                    <div>
                        <div class="font-semibold text-foreground">Sarah Johnson</div>
                        <div class="text-sm text-muted-foreground">London</div>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-2xl p-8 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-muted-foreground mb-6 leading-relaxed">
                    "Perfect cleaning service for end of tenancy. They arrived on time, worked efficiently, and the landlord was impressed with the results."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                        <span class="text-primary font-bold">MD</span>
                    </div>
                    <div>
                        <div class="font-semibold text-foreground">Michael Davis</div>
                        <div class="text-sm text-muted-foreground">Manchester</div>
                    </div>
                </div>
            </div>

            <div class="bg-card border border-border rounded-2xl p-8 shadow-sm">
                <div class="flex items-center gap-1 mb-4">
                    <span class="text-yellow-400">★★★★★</span>
                </div>
                <p class="text-muted-foreground mb-6 leading-relaxed">
                    "Highly recommend! The checklist they follow is comprehensive and they don't miss anything. Great value for money and stress-free experience."
                </p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-primary/10 rounded-full flex items-center justify-center">
                        <span class="text-primary font-bold">EP</span>
                    </div>
                    <div>
                        <div class="font-semibold text-foreground">Emma Parker</div>
                        <div class="text-sm text-muted-foreground">Birmingham</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>