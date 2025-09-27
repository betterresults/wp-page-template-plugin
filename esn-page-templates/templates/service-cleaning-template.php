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
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0ea5e9',
                        'primary-dark': '#0284c7',
                        'primary-foreground': '#ffffff',
                        background: '#ffffff',
                        foreground: '#0f172a',
                        muted: '#f8fafc',
                        'muted-foreground': '#64748b',
                        card: '#ffffff',
                        border: '#e2e8f0'
                    }
                }
            }
        }
    </script>
</head>

<body <?php body_class(); ?>>

<!-- Hero Section - Dynamic -->
<section class="min-h-screen bg-gradient-to-br from-primary/10 via-background to-primary/5 relative overflow-hidden flex items-center">
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl lg:text-6xl font-bold text-foreground mb-6 leading-tight">
                    <?php esn_the_field('page_h1', 'End of Tenancy Cleaning in ' . esn_get_field('page_area', 'Your Area')); ?>
                </h1>
                <p class="text-xl text-muted-foreground mb-8 leading-relaxed">
                    <?php esn_the_field('under_heading', 'Get your deposit back with our professional end of tenancy cleaning service in ' . esn_get_field('page_area', 'your area')); ?>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <button class="bg-primary hover:bg-primary-dark text-primary-foreground px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                        Get Your Free Quote
                    </button>
                    <button class="border-2 border-primary text-primary hover:bg-primary hover:text-primary-foreground px-8 py-4 rounded-lg text-lg font-semibold transition-colors">
                        Call: 0123 456 789
                    </button>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-8 border-t border-border/50">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">100%</div>
                        <div class="text-sm text-muted-foreground">Deposit Back Guarantee</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">72h</div>
                        <div class="text-sm text-muted-foreground">Re-clean Promise</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">5★</div>
                        <div class="text-sm text-muted-foreground">Average Rating</div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <?php 
                $hero_image = esn_get_field('hero_image');
                $hero_alt = esn_get_field('hero_image_alt', 'Professional cleaning service in ' . esn_get_field('page_area', 'your area'));
                if ($hero_image): ?>
                <img 
                    src="<?php echo esc_url($hero_image); ?>" 
                    alt="<?php echo esc_attr($hero_alt); ?>" 
                    class="rounded-2xl shadow-2xl w-full"
                />
                <?php else: ?>
                <div class="bg-gradient-to-br from-primary/20 to-primary/40 rounded-2xl shadow-2xl w-full h-96 flex items-center justify-center">
                    <span class="text-primary font-bold text-2xl">Hero Image</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- H2 Section - Dynamic -->
<section class="py-20 bg-muted/30">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">8,000+</div>
                    <div class="text-sm text-muted-foreground">Happy Customers</div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">15+</div>
                    <div class="text-sm text-muted-foreground">Years Experience</div>
                </div>
                <div class="flex flex-col items-center">
                    <div class="w-16 h-16 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                        <span class="text-2xl">👥</span>
                    </div>
                    <div class="text-3xl font-bold text-primary mb-2">50+</div>
                    <div class="text-sm text-muted-foreground">Professional Cleaners</div>
                </div>
            </div>
            
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                <?php esn_the_field('page_subheading', 'Your Trusted Local Cleaning Experts in ' . esn_get_field('page_area', 'Your Area')); ?>
            </h2>
            <div class="text-lg text-muted-foreground leading-relaxed">
                <?php esn_the_field_html('page_subheading_description', 'We provide professional end of tenancy cleaning services with attention to detail, ensuring you get your full deposit back.'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Process Section - Static -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
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

<!-- Why Us Section - Dynamic H3 -->
<section class="py-20 bg-gradient-to-r from-muted/30 via-background to-muted/30 border-y border-border/50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                    <?php esn_the_field('page_h3', 'Why Choose Our End of Tenancy Cleaning?'); ?>
                </h3>
                <div class="text-lg text-muted-foreground leading-relaxed mb-8">
                    <?php esn_the_field_html('page_h3_paragraph', 'We understand the stress of moving out. Our professional cleaning team ensures every detail meets the highest standards, giving you peace of mind and helping you secure your deposit return.'); ?>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center mt-1">
                            <span class="text-primary text-sm">✓</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-foreground mb-1">Fully Insured</h4>
                            <p class="text-sm text-muted-foreground">Complete peace of mind with comprehensive insurance coverage</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center mt-1">
                            <span class="text-primary text-sm">✓</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-foreground mb-1">Eco-Friendly</h4>
                            <p class="text-sm text-muted-foreground">Safe, non-toxic cleaning products for your family and pets</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center mt-1">
                            <span class="text-primary text-sm">✓</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-foreground mb-1">Professional Team</h4>
                            <p class="text-sm text-muted-foreground">Experienced cleaners with attention to detail</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 bg-primary/10 rounded-full flex items-center justify-center mt-1">
                            <span class="text-primary text-sm">✓</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-foreground mb-1">Money Back Guarantee</h4>
                            <p class="text-sm text-muted-foreground">100% satisfaction or we'll make it right</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative">
                <?php 
                $page_image = esn_get_field('page_image');
                $page_image_alt = esn_get_field('page_image_alt', 'Professional cleaner in ' . esn_get_field('page_area', 'your area'));
                if ($page_image): ?>
                <img 
                    src="<?php echo esc_url($page_image); ?>" 
                    alt="<?php echo esc_attr($page_image_alt); ?>" 
                    class="rounded-2xl shadow-xl w-full"
                />
                <?php else: ?>
                <div class="bg-gradient-to-br from-primary/20 to-primary/40 rounded-2xl shadow-xl w-full h-96 flex items-center justify-center">
                    <span class="text-primary font-bold text-2xl">Professional Cleaner</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section - Static -->
<section class="py-20 bg-muted/20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
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

<!-- Checklist Section - Static -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                A Checklist That Leaves <span class="text-primary">Nothing to Chance</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Our comprehensive cleaning checklist ensures every area meets inspection standards
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
            <!-- Kitchen -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">🍽️</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">Kitchen Deep Clean</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Inside & outside of all appliances</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Oven, hob & extractor fan</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Inside all cupboards & drawers</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Worktops & splashbacks</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Sink & taps polished</li>
                </ul>
            </div>

            <!-- Bathroom -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">🚿</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">Bathroom Sanitization</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Toilet inside & outside</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Bath, shower & screen</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Tiles, grout & sealant</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Mirror & cabinet cleaning</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Floor mopping & disinfection</li>
                </ul>
            </div>

            <!-- Living Areas -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">🛋️</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">Living Areas</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Dusting all surfaces</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Vacuuming carpets</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Mopping hard floors</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Window sills & frames</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Light fittings & switches</li>
                </ul>
            </div>

            <!-- Bedrooms -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">🛏️</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">Bedrooms</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Inside wardrobes</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Under bed areas</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Carpet vacuuming</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Dust all surfaces</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Window cleaning</li>
                </ul>
            </div>

            <!-- Windows -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">🪟</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">Windows & Glass</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Internal window cleaning</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Window sills & frames</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Mirror polishing</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Glass doors & surfaces</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Streak-free finish</li>
                </ul>
            </div>

            <!-- General -->
            <div class="bg-card border border-border rounded-xl p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                        <span class="text-primary text-xl">✨</span>
                    </div>
                    <h3 class="text-xl font-bold text-foreground">General Areas</h3>
                </div>
                <ul class="space-y-2 text-sm text-muted-foreground">
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Door frames & handles</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Skirting boards</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Light switches & sockets</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Radiators cleaned</li>
                    <li class="flex items-center gap-2"><span class="text-primary">✓</span> Cobweb removal</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Content Section - Dynamic -->
<section class="py-20 bg-gradient-to-r from-muted/30 via-background to-muted/30 border-y border-border/50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                <?php esn_the_field('page_h2', 'Professional End of Tenancy Cleaning in ' . esn_get_field('page_area', 'Your Area')); ?>
            </h2>
            <div class="text-lg text-muted-foreground leading-relaxed mb-8">
                <?php esn_the_field_html('page_h2_paragraph', 'Our comprehensive end of tenancy cleaning service ensures your property meets the highest standards for deposit return.'); ?>
            </div>
            
            <?php if (esn_get_field('page_h4')): ?>
            <h4 class="text-xl font-bold text-foreground mb-4">
                <?php esn_the_field('page_h4'); ?>
            </h4>
            <?php if (esn_get_field('page_h4_paragraph_1')): ?>
            <div class="text-lg text-muted-foreground leading-relaxed mb-4">
                <?php esn_the_field_html('page_h4_paragraph_1'); ?>
            </div>
            <?php endif; ?>
            <?php if (esn_get_field('page_h4_paragraph_2')): ?>
            <div class="text-lg text-muted-foreground leading-relaxed">
                <?php esn_the_field_html('page_h4_paragraph_2'); ?>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Service Areas Section - Dynamic -->
<section class="py-20 bg-muted/20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl lg:text-5xl font-bold text-foreground mb-6">
                Areas in <span class="text-primary"><?php esn_the_field('page_area', 'Your Area'); ?> <?php esn_the_field('page_borough', ''); ?></span> We Cover
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Professional end of tenancy cleaning services across <?php esn_the_field('page_area', 'your local area'); ?>
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-card border border-border rounded-lg p-8">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <?php 
                    $areas = array(
                        'Central London', 'North London', 'South London', 'East London', 
                        'West London', 'Camden', 'Westminster', 'Kensington', 
                        'Chelsea', 'Hammersmith', 'Fulham', 'Islington',
                        'Hackney', 'Tower Hamlets', 'Southwark', 'Lambeth'
                    );
                    $current_area = esn_get_field('page_area');
                    
                    foreach ($areas as $area): 
                        $is_current = (strtolower($area) === strtolower($current_area));
                        $class = $is_current ? 'bg-primary/10 border-primary/20' : 'bg-background';
                    ?>
                    <div class="flex items-center gap-3 p-3 rounded-lg border <?php echo $class; ?> transition-colors">
                        <div class="w-2 h-2 bg-primary rounded-full"></div>
                        <span class="font-medium text-foreground"><?php echo esc_html($area); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Guarantee Section - Static -->
<section class="py-20 bg-gradient-to-r from-primary to-primary-dark text-primary-foreground">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-8">
                <span class="text-3xl">🛡️</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Our Cast-Iron Guarantee
            </h2>
            <p class="text-xl mb-8 opacity-90">
                We're so confident in our service that we offer a 72-hour satisfaction guarantee
            </p>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                <p class="text-lg leading-relaxed mb-6">
                    If you're not completely satisfied with our end of tenancy cleaning, we'll return within 72 hours 
                    to re-clean any areas you're not happy with - completely free of charge.
                </p>
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">72 Hour</div>
                        <div class="text-sm opacity-90">Re-clean Promise</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">100%</div>
                        <div class="text-sm opacity-90">Money Back</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold mb-2">✓</div>
                        <div class="text-sm opacity-90">Deposit Guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section - Dynamic + Static -->
<section class="py-20 bg-background">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-lg text-muted-foreground max-w-2xl mx-auto">
                Got questions about our end of tenancy cleaning service? Here are the answers to the most common questions.
            </p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-4">
            <?php 
            // Dynamic FAQs
            $all_faqs = array();
            
            $q1 = esn_get_field('page_question_1');
            $a1 = esn_get_field('page_answer_1');
            if (!empty($q1)) {
                $all_faqs[] = array(
                    'question' => $q1,
                    'answer' => !empty($a1) ? $a1 : 'Please contact us for more information about this service.'
                );
            }
            
            $q2 = esn_get_field('page_question_2');
            $a2 = esn_get_field('page_answer_2');
            if (!empty($q2)) {
                $all_faqs[] = array(
                    'question' => $q2,
                    'answer' => !empty($a2) ? $a2 : 'Please contact us for more information about this service.'
                );
            }
            
            // Static FAQs
            $static_faqs = array(
                array(
                    'question' => 'How long does an end of tenancy clean take?',
                    'answer' => 'A typical end of tenancy clean takes 4-8 hours depending on the size and condition of the property. We always allocate enough time to complete the job thoroughly.'
                ),
                array(
                    'question' => 'Do you guarantee deposit return?',
                    'answer' => 'While we cannot guarantee deposit return (as this depends on many factors), we do guarantee that our cleaning will meet professional standards with our 72-hour re-clean promise.'
                ),
                array(
                    'question' => 'What if my landlord is not satisfied?',
                    'answer' => 'If your landlord identifies any cleaning issues within 72 hours, we will return to re-clean those areas at no extra cost. We stand behind the quality of our work.'
                ),
                array(
                    'question' => 'Do I need to provide cleaning supplies?',
                    'answer' => 'No, we bring all professional cleaning supplies and equipment. We use eco-friendly, non-toxic products that are safe and effective.'
                ),
                array(
                    'question' => 'Can you clean a furnished property?',
                    'answer' => 'Yes, we can clean around furniture. However, for the best results and to meet inventory standards, we recommend the property be empty or as close to empty as possible.'
                ),
                array(
                    'question' => 'Do you clean weekends and evenings?',
                    'answer' => 'Yes, we offer flexible scheduling including weekends and evenings to accommodate your moving schedule. Book in advance for the best availability.'
                )
            );
            
            // Combine dynamic and static FAQs
            $all_faqs = array_merge($all_faqs, $static_faqs);
            
            foreach ($all_faqs as $index => $faq): ?>
            <div class="bg-card border border-border rounded-lg">
                <button class="w-full text-left p-6 font-semibold text-foreground hover:bg-muted/50 transition-colors" 
                        onclick="toggleFAQ(<?php echo $index; ?>)">
                    <div class="flex justify-between items-center">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <span class="faq-icon text-primary text-xl" id="icon-<?php echo $index; ?>">+</span>
                    </div>
                </button>
                <div class="faq-content" id="content-<?php echo $index; ?>" style="display: none;">
                    <div class="px-6 pb-6 text-muted-foreground leading-relaxed">
                        <?php echo esc_html($faq['answer']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
function toggleFAQ(index) {
    const content = document.getElementById('content-' + index);
    const icon = document.getElementById('icon-' + index);
    
    if (content.style.display === 'none') {
        content.style.display = 'block';
        icon.textContent = '-';
    } else {
        content.style.display = 'none';
        icon.textContent = '+';
    }
}
</script>

<?php wp_footer(); ?>
</body>
</html>