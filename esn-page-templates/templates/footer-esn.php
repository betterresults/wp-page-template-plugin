<?php
/**
 * ESN Custom Footer Template
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<footer class="bg-muted text-foreground">
    <div class="section-container section-padding">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div class="space-y-8">
                <div class="flex items-center">
                    <img 
                        src="https://sncleaningservices.co.uk/wp-content/uploads/2025/02/SN-Cleaning-Logo-small-300x136.png" 
                        alt="SN Cleaning Services" 
                        class="h-20 w-auto"
                    />
                </div>
                <p class="text-base leading-relaxed text-muted-foreground">
                    Professional cleaning services across London and Essex. We guarantee exceptional results with our comprehensive cleaning solutions for residential and commercial properties.
                </p>
                <div class="flex space-x-4">
                    <a 
                        href="tel:+442038355033" 
                        class="p-4 rounded-xl transition-all duration-300 hover:scale-110 bg-card hover:bg-primary text-muted-foreground hover:text-primary-foreground shadow-lg border border-border"
                        aria-label="Call us"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </a>
                    <a 
                        href="https://wa.me/442038355033" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="p-4 rounded-xl transition-all duration-300 hover:scale-110 bg-card hover:bg-primary text-muted-foreground hover:text-primary-foreground shadow-lg border border-border"
                        aria-label="WhatsApp us"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    </a>
                    <a 
                        href="mailto:info@sncleaningservices.co.uk" 
                        class="p-4 rounded-xl transition-all duration-300 hover:scale-110 bg-card hover:bg-primary text-muted-foreground hover:text-primary-foreground shadow-lg border border-border"
                        aria-label="Email us"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l4 4 4-4m0 6l4-4 4 4m-6 2h6a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h6z"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-8">
                <h3 class="text-xl font-bold text-foreground">Quick Links</h3>
                <nav class="flex flex-col space-y-4">
                    <a href="https://sncleaningservices.co.uk" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Home</a>
                    <a href="https://sncleaningservices.co.uk/about-us" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">About Us</a>
                    <a href="https://sncleaningservices.co.uk/faqs" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">FAQs</a>
                    <a href="https://book.sncleaningservices.co.uk" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Get Quote</a>
                    <a href="https://sncleaningservices.co.uk/contact" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Contact</a>
                </nav>
            </div>

            <!-- Services -->
            <div class="space-y-8">
                <h3 class="text-xl font-bold text-foreground">Our Services</h3>
                <nav class="flex flex-col space-y-4">
                    <a href="https://sncleaningservices.co.uk/end-of-tenancy-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">End of Tenancy Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/domestic-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Domestic Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/deep-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Deep Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/carpet-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Carpet Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/oven-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Oven Cleaning</a>
                    <a href="https://sncleaningservices.co.uk/commercial-cleaning" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Commercial Cleaning</a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <h3 class="text-xl font-bold text-foreground">Get In Touch</h3>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="mt-1 p-3 rounded-xl bg-card shadow-lg border border-border">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <div>
                            <div class="font-bold text-base text-foreground">Phone</div>
                            <a href="tel:+442038355033" class="text-base transition-colors duration-300 hover:text-primary text-muted-foreground">020 3835 5033</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="mt-1 p-3 rounded-xl bg-card shadow-lg border border-border">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l4 4 4-4m0 6l4-4 4 4m-6 2h6a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2h6z"></path></svg>
                        </div>
                        <div>
                            <div class="font-bold text-base text-foreground">Email</div>
                            <a href="mailto:info@sncleaningservices.co.uk" class="text-base transition-colors duration-300 hover:text-primary text-muted-foreground">info@sncleaningservices.co.uk</a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="mt-1 p-3 rounded-xl bg-card shadow-lg border border-border">
                            <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <div class="font-bold text-base text-foreground">Service Area</div>
                            <div class="text-base text-muted-foreground">London & Essex</div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <a href="https://book.sncleaningservices.co.uk" class="btn-primary inline-block w-full text-center text-lg font-bold px-8 py-4 rounded-xl hover:shadow-xl hover:-translate-y-1 hover:scale-105 transition-all duration-300">
                            Get Free Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-16 pt-10 border-t-2 border-border">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
                <div class="text-base font-medium text-muted-foreground">
                    Copyright © 2025 SN Core LTD. All Rights Reserved. Company Number 15912581
                </div>
                <div class="flex space-x-8">
                    <a href="https://sncleaningservices.co.uk/privacy-policy" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Privacy Policy</a>
                    <a href="https://sncleaningservices.co.uk/terms-of-service" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Terms of Service</a>
                    <a href="https://sncleaningservices.co.uk/cookie-policy" class="text-base font-medium transition-colors duration-300 hover:text-primary text-muted-foreground">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>