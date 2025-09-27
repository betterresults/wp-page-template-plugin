<?php
/**
 * Template Name: Service Cleaning Template
 * Template Post Type: page
 * Description: Template for service pages with dynamic content
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
</head>

<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-padding bg-gradient-to-br from-primary/10 via-background to-primary/5 relative overflow-hidden">
    <div class="section-container relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl lg:text-6xl font-bold text-foreground mb-6 leading-tight">
                    <?php esn_the_field('page_h1', 'Professional Cleaning Services'); ?>
                </h1>
                <p class="text-xl text-muted-foreground mb-8 leading-relaxed">
                    <?php esn_the_field('under_heading', 'Get your deposit back with our professional cleaning service'); ?>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 mb-8">
                    <a href="#contact" class="btn-primary text-lg px-8 py-4">
                        Get Free Quote
                    </a>
                    <a href="tel:+44123456789" class="btn-secondary text-lg px-8 py-4">
                        Call Now: 0123 456 789
                    </a>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 pt-8 border-t border-border/50">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">100%</div>
                        <div class="text-sm text-muted-foreground">Satisfaction Guaranteed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-primary mb-2">72h</div>
                        <div class="text-sm text-muted-foreground">Re-clean Guarantee</div>
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
                $hero_alt = esn_get_field('hero_image_alt', 'Professional cleaning service');
                if ($hero_image): ?>
                <img 
                    src="<?php echo esc_url($hero_image); ?>" 
                    alt="<?php echo esc_attr($hero_alt); ?>" 
                    class="rounded-2xl shadow-2xl w-full"
                />
                <?php else: ?>
                <img 
                    src="<?php echo ESN_TEMPLATES_PLUGIN_URL; ?>assets/images/hero-cleaning.jpg" 
                    alt="Professional cleaning service" 
                    class="rounded-2xl shadow-2xl w-full"
                />
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section-padding bg-muted/30">
    <div class="section-container">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                <?php esn_the_field('page_subheading', 'Your Trusted Local Cleaning Experts'); ?>
            </h2>
            <div class="text-lg text-muted-foreground leading-relaxed space-y-4">
                <?php esn_the_field_html('page_subheading_description', 'We provide professional cleaning services with attention to detail.'); ?>
            </div>
        </div>
    </div>
</section>

<!-- Process Section (Static) -->
<section class="section-padding bg-background">
    <div class="section-container">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                Our Simple <span class="text-primary">3-Step Process</span>
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">1</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">Book Online</h3>
                <p class="text-muted-foreground">Choose your service and preferred time slot through our easy online booking system.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">2</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">We Clean</h3>
                <p class="text-muted-foreground">Our professional team arrives with all equipment and completes your deep clean.</p>
            </div>

            <div class="text-center group">
                <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-primary/20 transition-colors">
                    <span class="text-3xl font-bold text-primary">3</span>
                </div>
                <h3 class="text-xl font-bold text-foreground mb-4">Deposit Back</h3>
                <p class="text-muted-foreground">Get your full deposit back with our satisfaction guarantee and quality checklist.</p>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section-padding bg-muted/20">
    <div class="section-container">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-6">
                <?php esn_the_field('page_h2', 'Professional Cleaning Services'); ?>
            </h2>
            <div class="text-lg text-muted-foreground leading-relaxed mb-8">
                <?php esn_the_field_html('page_h2_paragraph', 'Our comprehensive cleaning services ensure your property meets the highest standards.'); ?>
            </div>
            
            <?php if (esn_get_field('page_h3')): ?>
            <h3 class="text-2xl font-bold text-foreground mb-4">
                <?php esn_the_field('page_h3', 'Why Choose Our Service'); ?>
            </h3>
            <div class="text-lg text-muted-foreground leading-relaxed mb-8">
                <?php esn_the_field_html('page_h3_paragraph', 'We are committed to delivering exceptional results with our professional team and quality guarantee.'); ?>
            </div>
            <?php endif; ?>
            
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
            
            <?php 
            $page_image = esn_get_field('page_image');
            $page_image_alt = esn_get_field('page_image_alt', 'Professional cleaning service');
            if ($page_image): ?>
            <div class="mt-8">
                <img 
                    src="<?php echo esc_url($page_image); ?>" 
                    alt="<?php echo esc_attr($page_image_alt); ?>" 
                    class="rounded-lg shadow-lg w-full max-w-2xl mx-auto"
                />
            </div>
            <?php endif; ?>
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
                Got questions? We've got answers. Here are the most common questions about our cleaning service.
            </p>
        </div>
        
        <div class="max-w-3xl mx-auto space-y-4">
            <?php 
            // Dynamic FAQs
            $dynamic_faqs = array();
            
            $q1 = esn_get_field('page_question_1');
            $a1 = esn_get_field('page_answer_1');
            if (!empty($q1)) {
                $dynamic_faqs[] = array(
                    'question' => $q1,
                    'answer' => !empty($a1) ? $a1 : 'Contact us for more information about this service.'
                );
            }
            
            $q2 = esn_get_field('page_question_2');
            $a2 = esn_get_field('page_answer_2');
            if (!empty($q2)) {
                $dynamic_faqs[] = array(
                    'question' => $q2,
                    'answer' => !empty($a2) ? $a2 : 'Contact us for more information about this service.'
                );
            }
            
            // Combine with static FAQs
            $all_faqs = array_merge($dynamic_faqs, esn_get_static_faqs());
            
            foreach ($all_faqs as $index => $faq): ?>
            <div class="bg-card border border-border rounded-lg">
                <button class="w-full text-left p-6 font-semibold text-foreground hover:bg-muted/50 transition-colors" 
                        onclick="toggleFAQ(<?php echo $index; ?>)">
                    <div class="flex justify-between items-center">
                        <span><?php echo esc_html($faq['question']); ?></span>
                        <span class="faq-icon" id="icon-<?php echo $index; ?>">+</span>
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

<!-- Service Areas Section -->
<section class="section-padding bg-muted/20">
    <div class="section-container">
        <div class="text-center mb-12">
            <h2 class="text-4xl lg:text-5xl font-bold font-heading text-foreground mb-6">
                Areas We <span class="text-primary">Cover</span>
            </h2>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto">
                Professional cleaning services across <?php esn_the_field('page_area', 'your area'); ?>
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="bg-card border border-border rounded-lg p-8">
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <?php 
                    $areas = esn_get_service_areas();
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

<!-- Guarantee Section (Static) -->
<section class="section-padding bg-gradient-to-r from-primary to-primary-dark text-primary-foreground">
    <div class="section-container">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl lg:text-5xl font-bold mb-6">
                Our Cast Iron Guarantee
            </h2>
            <p class="text-xl mb-8 opacity-90">
                We're so confident in our cleaning service that we offer a 72-hour satisfaction guarantee
            </p>
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                <p class="text-lg leading-relaxed">
                    If you're not completely satisfied with our cleaning service, we'll return within 72 hours 
                    to re-clean any areas you're not happy with - completely free of charge. Your satisfaction 
                    is our priority, and your deposit return is our guarantee.
                </p>
            </div>
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