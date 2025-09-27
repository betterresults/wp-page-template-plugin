import HomepageHeroSection from "@/components/HomepageHeroSection";
import HomepageServicesSection from "@/components/HomepageServicesSection";
import HomepageServiceTypesSection from "@/components/HomepageServiceTypesSection";
import HomepageBookingSection from "@/components/HomepageBookingSection";
import HomepageFeaturesSection from "@/components/HomepageFeaturesSection";
import WhyUsSection from "@/components/WhyUsSection";
import HomepageConscienceSection from "@/components/HomepageConscienceSection";
import HomepageAboutSection from "@/components/HomepageAboutSection";
import TestimonialsSection from "@/components/TestimonialsSection";

const Homepage = () => {
  return (
    <div className="min-h-screen bg-background">
      {/* Hero Section */}
      <HomepageHeroSection />
      
      {/* Services Overview Section */}
      <HomepageServicesSection />
      
      {/* Detailed Service Types Section */}
      <HomepageServiceTypesSection />
      
      {/* How Easy to Book Section */}
      <HomepageBookingSection />
      
      {/* Key Features Section */}
      <HomepageFeaturesSection />
      
      {/* Why Choose Us Section */}
      <WhyUsSection />
      
      {/* Cleaning With A Conscience Section */}
      <HomepageConscienceSection />
      
      {/* About Our Services Section */}
      <HomepageAboutSection />
      
      {/* Testimonials Section */}
      <TestimonialsSection />
    </div>
  );
};

export default Homepage;