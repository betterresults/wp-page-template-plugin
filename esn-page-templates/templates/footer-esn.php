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
                        src="https://sncleaningservices.co.uk/wp-content/uploads/2025/02/SN-Cleaning-Logo-small-300x136.png" 
                        alt="SN Cleaning Services" 
                        class="h-16 w-auto"
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
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </a>
                    <a 
                        href="https://wa.me/442038355033" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="p-3 rounded-lg transition-all duration-200 hover:scale-105 bg-white hover:bg-primary/10 text-muted-foreground hover:text-primary shadow-sm"
                        aria-label="WhatsApp us"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </a>
                    <a 
                        href="mailto:info@sncleaningservices.co.uk" 
                        class="p-3 rounded-lg transition-all duration-200 hover:scale-105 bg-white hover:bg-primary/10 text-muted-foreground hover:text-primary shadow-sm"
                        aria-label="Email us"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-2.257 1.13a11.042 11.042 0 005.516 5.516l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
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
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <div class="font-medium">Phone</div>
                            <a href="tel:+442038355033" class="transition-colors duration-200 hover:text-primary text-muted-foreground">020 3835 5033</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="mt-1 p-2 rounded-lg bg-white shadow-sm">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-2.257 1.13a11.042 11.042 0 005.516 5.516l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <div class="font-medium">Email</div>
                            <a href="mailto:info@sncleaningservices.co.uk" class="transition-colors duration-200 hover:text-primary text-muted-foreground">info@sncleaningservices.co.uk</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <div class="mt-1 p-2 rounded-lg bg-white shadow-sm">
                            <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
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
                    Copyright © 2025 SN Core LTD. All Rights Reserved. Company Number 15912581
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