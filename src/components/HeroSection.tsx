import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { ArrowRight, Shield, Star, CheckCircle } from "lucide-react";
import heroImage from "@/assets/hero-kitchen.jpg";

const HeroSection = () => {
  const [postcode, setPostcode] = useState("");

  const handleGetQuote = () => {
    const bookingPageUrl = '/booking';
    if (postcode) {
      window.location.href = bookingPageUrl + '?postcode=' + encodeURIComponent(postcode);
    } else {
      window.location.href = bookingPageUrl;
    }
  };

  return (
    <section className="relative min-h-screen flex items-center overflow-hidden">
      {/* Background Image with Overlay */}
      <div 
        className="absolute inset-0 z-0"
        style={{
          backgroundImage: `linear-gradient(135deg, rgba(0, 128, 128, 0.85), rgba(0, 179, 179, 0.75)), url(${heroImage})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center center',
          backgroundAttachment: 'fixed'
        }}
      />
      
      {/* Animated Background Elements */}
      <div className="absolute inset-0 z-10">
        <div className="absolute top-20 left-10 w-32 h-32 bg-white/10 rounded-full blur-xl animate-float" />
        <div className="absolute bottom-32 right-20 w-24 h-24 bg-accent/20 rounded-full blur-lg animate-float" style={{ animationDelay: '2s' }} />
        <div className="absolute top-1/2 left-1/4 w-16 h-16 bg-primary-light/20 rounded-full blur-md animate-float" style={{ animationDelay: '4s' }} />
      </div>

      <div className="section-container relative z-20 section-padding">
        <div className="grid lg:grid-cols-5 gap-12 lg:gap-16 items-center">
          {/* Hero Content */}
          <div className="lg:col-span-3 text-white space-y-8 animate-slide-up">
            <div className="space-y-6">
              <h1 className="text-5xl lg:text-7xl font-bold font-heading leading-tight">
                <span className="block">End of Tenancy</span>
                <span className="block text-primary">
                  Cleaning
                </span>
                <span className="block text-4xl lg:text-5xl">in South Hornchurch</span>
              </h1>
              
              <p className="text-xl lg:text-2xl text-white/90 leading-relaxed max-w-2xl">
                Secure your deposit with a flawless, agency-approved clean. Our local, professional team delivers a 
                <span className="font-semibold text-accent"> guaranteed, stress-free service</span>, so you can focus on your move.
              </p>
            </div>

            {/* Trust Badges */}
            <div className="flex flex-wrap gap-6 pt-4">
              <div className="flex items-center gap-3 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                <Shield className="w-6 h-6 text-success" />
                <span className="font-semibold">100% Deposit Guarantee</span>
              </div>
              <div className="flex items-center gap-3 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full">
                <Star className="w-6 h-6 text-accent" />
                <span className="font-semibold">5-Star Local Rating</span>
              </div>
            </div>
          </div>

          {/* Quote Form */}
          <div className="lg:col-span-2 animate-fade-in-delayed">
            <div className="card-glass p-6 lg:p-8 max-w-sm mx-auto lg:ml-auto lg:mr-0">
              <div className="text-center mb-8">
                <h3 className="text-3xl font-bold font-heading text-foreground mb-3">
                  Get Your Instant Quote
                </h3>
              </div>

              <div className="space-y-6">
                <div className="space-y-3">
                  <Input
                    id="postcode"
                    type="text"
                    placeholder="Add your postcode"
                    value={postcode}
                    onChange={(e) => setPostcode(e.target.value)}
                    className="h-14 text-lg px-4 rounded-xl border-2 focus:border-primary transition-colors"
                  />
                </div>

                <Button
                  onClick={handleGetQuote}
                  className="btn-hero w-full h-14 text-lg"
                >
                  Check Prices & Availability
                  <ArrowRight className="w-5 h-5" />
                </Button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;