import { Phone, Clock, CheckCircle, ArrowRight } from "lucide-react";
import { Button } from "@/components/ui/button";
import { trackEvent } from "@/utils/analytics";

const CallToActionSection = () => {
  const handleGetQuote = () => {
    trackEvent('cta_get_quote_click', { location: 'cta_section' });
    // Navigate to quote page
    window.location.href = '/quote';
  };

  const handleCallNow = () => {
    trackEvent('cta_call_click', { location: 'cta_section' });
    window.location.href = 'tel:+442012345678';
  };

  const benefits = [
    "Free, no-obligation quotes",
    "Same-day booking available", 
    "100% satisfaction guaranteed",
    "Fully insured & bonded",
    "Professional team",
    "Eco-friendly products"
  ];

  return (
    <section className="section-padding bg-gradient-to-br from-primary to-primary-dark text-white relative overflow-hidden">
      {/* Background Pattern */}
      <div className="absolute inset-0 opacity-10">
        <div className="absolute top-1/4 left-1/4 w-32 h-32 bg-white rounded-full animate-float"></div>
        <div className="absolute bottom-1/4 right-1/4 w-24 h-24 bg-white rounded-full animate-float delay-1000"></div>
        <div className="absolute top-1/2 right-1/3 w-16 h-16 bg-white rounded-full animate-float delay-500"></div>
      </div>

      <div className="section-container relative z-10">
        <div className="max-w-4xl mx-auto text-center">
          {/* Main Heading */}
          <div className="mb-12">
            <h2 className="text-4xl lg:text-6xl font-bold font-heading mb-6">
              Ready for a <span className="text-primary-foreground">Spotless</span> Clean?
            </h2>
            <p className="text-xl lg:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
              Join thousands of satisfied customers across London & Essex. Get your instant quote today and experience the difference professional cleaning makes.
            </p>
          </div>

          {/* Benefits Grid */}
          <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
            {benefits.map((benefit, index) => (
              <div 
                key={index}
                className="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-xl p-4 hover:bg-white/20 transition-all duration-300"
              >
                <CheckCircle className="w-5 h-5 text-primary-foreground flex-shrink-0" />
                <span className="text-white font-medium">{benefit}</span>
              </div>
            ))}
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
            <Button 
              onClick={handleGetQuote}
              size="lg"
              className="bg-white text-primary hover:bg-white/90 hover:text-primary-dark text-lg px-8 py-4 rounded-2xl font-bold shadow-lg hover:shadow-glow transform hover:scale-105 transition-all duration-300 flex items-center gap-3"
            >
              Get Instant Quote
              <ArrowRight className="w-5 h-5" />
            </Button>
            
            <div className="flex items-center gap-4 text-white/80">
              <span className="text-lg">or</span>
              <Button 
                onClick={handleCallNow}
                variant="outline"
                size="lg"
                className="border-white/30 text-white hover:bg-white/10 hover:text-white text-lg px-6 py-4 rounded-xl font-semibold flex items-center gap-3"
              >
                <Phone className="w-5 h-5" />
                Call Now: 020 1234 5678
              </Button>
            </div>
          </div>

          {/* Trust Signals */}
          <div className="flex flex-col sm:flex-row gap-8 justify-center items-center text-white/80">
            <div className="flex items-center gap-2">
              <Clock className="w-5 h-5" />
              <span>Response within 30 minutes</span>
            </div>
            <div className="hidden sm:block w-px h-6 bg-white/30"></div>
            <div className="flex items-center gap-2">
              <CheckCircle className="w-5 h-5" />
              <span>No hidden fees</span>
            </div>
            <div className="hidden sm:block w-px h-6 bg-white/30"></div>
            <div className="flex items-center gap-2">
              <Phone className="w-5 h-5" />
              <span>24/7 customer support</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default CallToActionSection;