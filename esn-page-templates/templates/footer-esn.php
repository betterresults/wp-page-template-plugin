<?php
/**
 * ESN Custom Footer Template
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="bg-muted text-foreground">
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="space-y-6">
                <div class="flex items-center">
                    <img 
                        src="<?php echo ESN_TEMPLATES_PLUGIN_URL; ?>../src/assets/sn-cleaning-logo.png" 
                        alt="SN Cleaning Services" 
                        class="h-16 w-auto rounded-lg border-2 border-border p-2"
                    />
                </div>
                <p class="text-sm leading-relaxed text-muted-foreground">
                    Professional cleaning services across London and Essex. We guarantee exceptional results with our comprehensive cleaning solutions for residential and commercial properties.
                </p>
                <div class="flex space-x-4">
                    <a 
                        href="tel:+442038355033" 
                        class="p-3 rounded-lg transition-all duration-200 hover:scale-105 bg-white hover:bg-primary/10 text-muted-foreground hover:text-primary shadow-sm"
                        aria-label="Call us"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                        </svg>
                    </a>
                    <a 
                        href="https://wa.me/442038355033" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="p-3 rounded-lg transition-all duration-200 hover:scale-105 bg-white hover:bg-primary/10 text-muted-foreground hover:text-primary shadow-sm"
                        aria-label="WhatsApp us"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                        </svg>
                    </a>
                    <a 
                        href="mailto:info@sncleaningservices.co.uk" 
                        class="p-3 rounded-lg transition-all duration-200 hover:scale-105 bg-white hover:bg-primary/10 text-muted-foreground hover:text-primary shadow-sm"
                        aria-label="Email us"
                    >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-6">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <nav class="flex flex-col space-y-3">
                    <a href="https://sncleaningservices.co.uk" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Home</a>
                    <a href="https://sncleaningservices.co.uk/about-us" class="transition-colors duration-200 hover:text-primary text-muted-foreground">About Us</a>
                    <a href="https://sncleaningservices.co.uk/faqs" class="transition-colors duration-200 hover:text-primary text-muted-foreground">FAQs</a>
                    <a href="https://book.sncleaningservices.co.uk" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Get Quote</a>
                    <a href="https://sncleaningservices.co.uk/contact" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Contact</a>
                </nav>
            </div>

            <!-- Services -->
            <div class="space-y-6">
                <h3 class="text-lg font-semibold">Our Services</h3>
                <nav class="flex flex-col space-y-3">
                    <a href="https://sncleaningservices.co.uk/end-of-tenancy-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">End of Tenancy Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/domestic-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Domestic Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/deep-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Deep Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/carpet-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Carpet Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/oven-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Oven Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/commercial-cleaning" class="transition-colors duration-200 hover:text-primary text-muted-foreground">Commercial Cleaning</a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="space-y-6">
                <h3 class="text-lg font-semibold">Get In Touch</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="mt-1 p-2 rounded-lg bg-white shadow-sm">
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Phone</div>
                            <a href="tel:+442038355033" class="transition-colors duration-200 hover:text-primary text-muted-foreground">020 3835 5033</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="mt-1 p-2 rounded-lg bg-white shadow-sm">
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Email</div>
                            <a href="mailto:info@sncleaningservices.co.uk" class="transition-colors duration-200 hover:text-primary text-muted-foreground">info@sncleaningservices.co.uk</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="mt-1 p-2 rounded-lg bg-white shadow-sm">
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">Service Area</div>
                            <div class="text-muted-foreground">London & Essex</div>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="https://book.sncleaningservices.co.uk" class="inline-block w-full text-center bg-gradient-to-r from-primary to-primary-light text-primary-foreground px-6 py-3 rounded-lg font-semibold hover:shadow-lg hover:-translate-y-0.5 transition-all duration-200">
                            Get Free Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-border">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="text-sm text-muted-foreground">
                    © <?php echo date('Y'); ?> SN Cleaning Services. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="https://sncleaningservices.co.uk/privacy-policy" class="text-sm transition-colors duration-200 hover:text-primary text-muted-foreground">Privacy Policy</a>
                    <a href="https://sncleaningservices.co.uk/terms-of-service" class="text-sm transition-colors duration-200 hover:text-primary text-muted-foreground">Terms of Service</a>
                    <a href="https://sncleaningservices.co.uk/cookie-policy" class="text-sm transition-colors duration-200 hover:text-primary text-muted-foreground">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>