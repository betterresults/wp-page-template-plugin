import HomepageHeroSection from "@/components/HomepageHeroSection";
import HomepageServiceTypesSection from "@/components/HomepageServiceTypesSection";
import HomepageBookingSection from "@/components/HomepageBookingSection";
import HomepageFeaturesSection from "@/components/HomepageFeaturesSection";
import TestimonialsSection from "@/components/TestimonialsSection";

const Homepage = () => {
  return (
    <div className="min-h-screen bg-background">
      {/* Hero Section */}
      <HomepageHeroSection />
      
      {/* Detailed Service Types Section */}
      <HomepageServiceTypesSection />
      
      {/* Simple Booking Process Section */}
      <HomepageBookingSection />
      
      {/* Features Section */}
      <HomepageFeaturesSection />
      
      {/* Testimonials Section */}
      <TestimonialsSection />
    </div>
  );
};

export default Homepage;