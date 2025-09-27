import Header from "@/components/Header";
import Footer from "@/components/Footer";
import HomepageHeroSection from "@/components/HomepageHeroSection";
import HomepageServicesSection from "@/components/HomepageServicesSection";
import WhyUsSection from "@/components/WhyUsSection";
import ProcessSection from "@/components/ProcessSection";
import HomepageConscienceSection from "@/components/HomepageConscienceSection";
import HomepageAboutSection from "@/components/HomepageAboutSection";
import TestimonialsSection from "@/components/TestimonialsSection";
import GuaranteeSection from "@/components/GuaranteeSection";

const Homepage = () => {
  return (
    <div className="min-h-screen bg-background">
      <Header />
      
      {/* Hero Section */}
      <HomepageHeroSection />
      
      {/* Services Section */}
      <HomepageServicesSection />
      
      {/* Why Choose Us Section */}
      <WhyUsSection />
      
      {/* How It Works Section */}
      <ProcessSection />
      
      {/* Cleaning With A Conscience Section */}
      <HomepageConscienceSection />
      
      {/* About Our Services Section */}
      <HomepageAboutSection />
      
      {/* Testimonials Section */}
      <TestimonialsSection />
      
      {/* Guarantee Section */}
      <GuaranteeSection />
      
      <Footer />
    </div>
  );
};

export default Homepage;