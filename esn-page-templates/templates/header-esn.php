<?php
/**
 * ESN Custom Header Template
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- ESN Tailwind + Theme Tokens (loaded once with header) -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: 'hsl(var(--primary))',
          'primary-light': 'hsl(var(--primary-light))',
          'primary-dark': 'hsl(var(--primary-dark))',
          'primary-foreground': 'hsl(var(--primary-foreground))',
          secondary: 'hsl(var(--secondary))',
          'secondary-foreground': 'hsl(var(--secondary-foreground))',
          accent: 'hsl(var(--accent))',
          'accent-foreground': 'hsl(var(--accent-foreground))',
          background: 'hsl(var(--background))',
          foreground: 'hsl(var(--foreground))',
          muted: 'hsl(var(--muted))',
          'muted-foreground': 'hsl(var(--muted-foreground))',
          card: 'hsl(var(--card))',
          'card-foreground': 'hsl(var(--card-foreground))',
          border: 'hsl(var(--border))',
          input: 'hsl(var(--input))',
        }
      }
    }
  }
</script>
<style>
  :root{
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
  }
  body{font-family: Inter, system-ui, -apple-system, sans-serif;}
  .section-container{max-width: 80rem; margin-left:auto; margin-right:auto; padding-left:1.5rem; padding-right:1.5rem}
  .section-padding{padding-top:5rem; padding-bottom:5rem}
  .card-glass{background: rgba(255,255,255,.95); backdrop-filter: blur(16px); border:1px solid rgba(255,255,255,.2); border-radius:1rem}
  .btn-primary{background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-light))); color: hsl(var(--primary-foreground)); padding:.875rem 1.25rem; border-radius:.875rem; font-weight:600; display:inline-flex; align-items:center; gap:.5rem}
  .btn-hero{background: linear-gradient(135deg, hsl(var(--primary)), hsl(var(--primary-light))); color: hsl(var(--primary-foreground)); padding:1rem 2rem; border-radius:1rem; font-weight:700; display:inline-flex; align-items:center; justify-content:center; gap:.5rem; box-shadow:0 20px 40px rgba(24,165,165,.25)}
  .animate-float{animation: float 6s ease-in-out infinite}
  @keyframes float{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
</style>

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