<?php
/**
 * ESN Custom Header Template
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<header class="bg-background/95 backdrop-blur-md border-b border-border sticky top-0 z-50">
    <div class="section-container">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="<?php echo home_url(); ?>" class="flex items-center gap-3">
                    <img src="<?php echo ESN_TEMPLATES_PLUGIN_URL; ?>../src/assets/sn-cleaning-logo.png" alt="<?php bloginfo('name'); ?>" class="h-12 w-auto" />
                    <span class="text-2xl font-bold text-foreground"><?php bloginfo('name'); ?></span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'flex items-center space-x-8',
                    'fallback_cb' => function() {
                        // Default menu if no menu is set
                        echo '<a href="' . home_url() . '" class="text-foreground hover:text-primary transition-colors">Home</a>';
                        echo '<a href="#services" class="text-foreground hover:text-primary transition-colors">Services</a>';
                        echo '<a href="#areas" class="text-foreground hover:text-primary transition-colors">Areas</a>';
                        echo '<a href="#about" class="text-foreground hover:text-primary transition-colors">About</a>';
                        echo '<a href="#contact" class="text-foreground hover:text-primary transition-colors">Contact</a>';
                    }
                ));
                ?>
            </nav>

            <!-- CTA Button -->
            <div class="hidden lg:flex items-center gap-4">
                <a href="tel:+442012345678" class="text-primary font-semibold">020 1234 5678</a>
                <a href="#quote" class="btn-primary">Get Quote</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden p-2" id="mobile-menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <div class="py-4 space-y-4 border-t border-border">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'space-y-4',
                    'fallback_cb' => function() {
                        echo '<a href="' . home_url() . '" class="block text-foreground hover:text-primary transition-colors">Home</a>';
                        echo '<a href="#services" class="block text-foreground hover:text-primary transition-colors">Services</a>';
                        echo '<a href="#areas" class="block text-foreground hover:text-primary transition-colors">Areas</a>';
                        echo '<a href="#about" class="block text-foreground hover:text-primary transition-colors">About</a>';
                        echo '<a href="#contact" class="block text-foreground hover:text-primary transition-colors">Contact</a>';
                    }
                ));
                ?>
                <div class="pt-4 space-y-4">
                    <a href="tel:+442012345678" class="block text-primary font-semibold">📞 020 1234 5678</a>
                    <a href="#quote" class="btn-primary block text-center">Get Quote</a>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('mobile-menu-toggle');
    const menu = document.getElementById('mobile-menu');
    
    if (toggle && menu) {
        toggle.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    }
});
</script>