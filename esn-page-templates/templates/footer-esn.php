<?php
/**
 * ESN Custom Footer Template
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="bg-card text-foreground">
    <!-- Main Footer Content -->
    <div class="section-container section-padding">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-6">
                    <img src="<?php echo ESN_TEMPLATES_PLUGIN_URL; ?>../src/assets/sn-cleaning-logo.png" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto" />
                    <span class="text-xl font-bold"><?php bloginfo('name'); ?></span>
                </div>
                <p class="text-muted-foreground mb-6 leading-relaxed">
                    Professional cleaning services across London & Essex. Your trusted partner for spotless homes and offices.
                </p>
                
                <!-- Contact Info -->
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span>📞</span>
                        <a href="tel:+442012345678" class="text-primary hover:text-primary-dark transition-colors font-semibold">
                            020 1234 5678
                        </a>
                    </div>
                    <div class="flex items-center gap-3">
                        <span>✉️</span>
                        <a href="mailto:info@example.com" class="text-primary hover:text-primary-dark transition-colors">
                            info@example.com
                        </a>
                    </div>
                    <div class="flex items-start gap-3">
                        <span>📍</span>
                        <span class="text-muted-foreground">
                            London & Essex<br/>
                            United Kingdom
                        </span>
                    </div>
                </div>
            </div>

            <!-- Services -->
            <div>
                <h3 class="text-lg font-bold text-foreground mb-6">Our Services</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">End of Tenancy Cleaning</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Domestic Cleaning</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Office Cleaning</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">After Builders Cleaning</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Carpet Cleaning</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-colors">Airbnb Cleaning</a></li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-bold text-foreground mb-6">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="<?php echo home_url(); ?>" class="text-muted-foreground hover:text-primary transition-colors">Home</a></li>
                    <li><a href="#services" class="text-muted-foreground hover:text-primary transition-colors">Services</a></li>
                    <li><a href="#areas" class="text-muted-foreground hover:text-primary transition-colors">Service Areas</a></li>
                    <li><a href="#about" class="text-muted-foreground hover:text-primary transition-colors">About Us</a></li>
                    <li><a href="#quote" class="text-muted-foreground hover:text-primary transition-colors">Get Quote</a></li>
                    <li><a href="#contact" class="text-muted-foreground hover:text-primary transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Service Areas -->
            <div>
                <h3 class="text-lg font-bold text-foreground mb-6">Service Areas</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-semibold text-primary mb-2">London</h4>
                        <p class="text-sm text-muted-foreground">All areas within M25</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-accent mb-2">Essex</h4>
                        <p class="text-sm text-muted-foreground">Major towns and surrounding areas</p>
                    </div>
                </div>
                
                <!-- CTA Button -->
                <div class="mt-6">
                    <a href="#quote" class="btn-primary w-full text-center">
                        Get Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="border-t border-border">
        <div class="section-container py-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="text-sm text-muted-foreground">
                    © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                </div>
                
                <div class="flex items-center gap-6 text-sm">
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Terms of Service</a>
                    <a href="#" class="text-muted-foreground hover:text-primary transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>