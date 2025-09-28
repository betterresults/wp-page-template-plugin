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

<header class="bg-white border-b border-border">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="<?php echo home_url(); ?>" class="flex items-center hover:opacity-90 transition-all duration-300">
                    <img src="https://sncleaningservices.co.uk/wp-content/uploads/2025/02/SN-Cleaning-Logo-small-300x136.png" alt="SN Cleaning Services" class="h-12 w-auto" />
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-8">
                <a href="<?php echo home_url(); ?>" class="text-foreground hover:bg-foreground hover:text-background font-semibold transition-all duration-300 bg-transparent text-lg px-5 py-3 rounded-md">Home</a>
                
                <div class="relative group">
                    <button class="text-foreground hover:bg-foreground hover:text-background font-semibold transition-all duration-300 bg-transparent text-lg px-5 py-3 rounded-md flex items-center gap-2">
                        Services
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 w-72 bg-background border border-border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="p-4">
                            <div class="grid gap-1">
                                <a href="/services/end-of-tenancy" class="block px-4 py-3 text-lg font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">End Of Tenancy Cleaning</a>
                                <a href="/services/after-builders" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">After Builders Cleaning</a>
                                <a href="/services/domestic" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Domestic Cleaning</a>
                                <a href="/services/airbnb" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Airbnb Cleaning</a>
                                <a href="/services/deep-house" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Deep House Cleaning</a>
                                <a href="/services/carpet" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Carpet Cleaning Services</a>
                                <a href="/services/office" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Office Cleaning</a>
                                <a href="/services/school" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">School Cleaning</a>
                                <a href="/services/nursery" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Nursery Cleaning</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative group">
                    <button class="text-foreground hover:bg-foreground hover:text-background font-semibold transition-all duration-300 bg-transparent text-lg px-5 py-3 rounded-md flex items-center gap-2">
                        About Us
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div class="absolute top-full left-0 w-52 bg-background border border-border rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                        <div class="p-4">
                            <div class="grid gap-1">
                                <a href="/contact" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Contact Us</a>
                                <a href="/accreditation" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Accreditation</a>
                                <a href="/about-us" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">About Us</a>
                                <a href="/testimonials" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Testimonials</a>
                                <a href="/our-work" class="block px-4 py-3 text-base font-medium text-foreground hover:bg-foreground hover:text-background rounded-md transition-colors">Our Work</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <a href="/faqs" class="text-foreground hover:bg-foreground hover:text-background font-semibold transition-all duration-300 bg-transparent text-lg px-5 py-3 rounded-md">FAQs</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="tel:+442038355033" class="flex items-center justify-center w-12 h-12 text-primary hover:text-primary-foreground hover:bg-primary rounded-xl transition-all duration-300 group hover:shadow-md" aria-label="Call us">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                </a>
                <a href="https://wa.me/442038355033" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center w-12 h-12 text-primary hover:text-primary-foreground hover:bg-primary rounded-xl transition-all duration-300 group hover:shadow-md" aria-label="WhatsApp us">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                </a>
                <a href="https://book.sncleaningservices.co.uk" target="_blank" rel="noopener noreferrer" class="bg-gradient-to-r from-primary to-primary-light text-primary-foreground px-8 py-4 rounded-xl font-bold text-lg hover:shadow-lg hover:-translate-y-1 hover:scale-105 transition-all duration-300">Get Free Quote</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="lg:hidden p-2 text-foreground hover:text-primary transition-colors duration-200" id="mobile-menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div class="lg:hidden hidden" id="mobile-menu">
            <nav class="flex flex-col space-y-4 pt-4 border-t border-border pb-6">
                <a href="<?php echo home_url(); ?>" class="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3">Home</a>
                <a href="/services" class="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3">Services</a>
                <a href="/about-us" class="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3">About Us</a>
                <a href="/faqs" class="text-foreground hover:text-primary font-semibold transition-colors duration-300 py-3">FAQs</a>
                
                <!-- Mobile CTA -->
                <div class="pt-4 border-t border-border space-y-3">
                    <div class="flex gap-3">
                        <a href="tel:+442038355033" class="flex-1 flex items-center justify-center gap-2 bg-muted text-foreground py-3 rounded-lg font-semibold hover:bg-primary hover:text-primary-foreground transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            Call
                        </a>
                        <a href="https://wa.me/442038355033" target="_blank" rel="noopener noreferrer" class="flex-1 flex items-center justify-center gap-2 bg-muted text-foreground py-3 rounded-lg font-semibold hover:bg-primary hover:text-primary-foreground transition-all duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            WhatsApp
                        </a>
                    </div>
                    <a href="https://book.sncleaningservices.co.uk" target="_blank" rel="noopener noreferrer" class="block w-full text-center bg-gradient-to-r from-primary to-primary-light text-primary-foreground py-3 rounded-xl font-bold hover:shadow-lg transition-all duration-300">Get Free Quote</a>
                </div>
            </nav>
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